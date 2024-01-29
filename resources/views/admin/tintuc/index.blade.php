<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.partials.head')
</head>

<body>
    @include('admin.partials.header')
    @include('admin.partials.right_sidebar')
    @include('admin.partials.left_sidebar')
    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                <!-- Simple Datatable start -->
                <div class="card-box mb-30">
                    <div class="pd-20">
                        <h4 class="text-blue h4">Tin Tức</h4>
                        <div class="btn-create">
                            <a class="btn btn-sm btn-success" href="/admin/tintuc/create"><i
                                    class="icon-copy bi bi-file-earmark-plus"></i> Thêm Mới</a>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <p>{{ $message }}</p>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                    <div class="pb-20">
                        <table class="data-table table hover">
                            <thead>
                                <tr>
                                    <th class="datatable-nosort sorting_disabled">Hình Ảnh</th>
                                    <th>Tiêu Đề</th>
                                    <th>Loại Tin</th>
                                    <th>Tác Giả</th>
                                    <th>Slug</th>
                                    <th class="datatable-nosort sorting_disabled"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                <tr>
                                    <td><img style="width: 150px; max-height: 100px" src="{{ asset($item->path) }}"
                                            alt="" style="width: 150px; max-height: 120px"></td>
                                    <td>
                                        @if (mb_strlen($item->tieude, 'UTF-8') > 150)
                                        {{ mb_substr($item->tieude, 0, 150, 'UTF-8') }}...
                                        @else
                                        {{ $item->tentt }}
                                        @endif
                                    </td>
                                    <td>{{ $item->loaitt->tenloaitt }}</td>
                                    <td>{{ $item->user->username }}</td>
                                    <td>{{ $item->slug }}</td>
                                    <td>
                                        <div class="dropdown">
                                            <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
                                                href="#" role="button" data-toggle="dropdown">
                                                <i class="dw dw-more"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                                <a class="dropdown-item"
                                                    href="/admin/tintuc/edit/{{ $item->id }}"><i
                                                        class="dw dw-edit2"></i> Sửa</a>
                                                <a class="dropdown-item" href="#" data-toggle="modal"
                                                    data-id="{{ $item->id }}" data-target="#delete-item-model"><i
                                                        class="dw dw-delete-3"></i> Xoá</a>


                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="delete-item-model" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Thông báo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Xác nhận xóa hay không?</p>
                </div>
                <div class="modal-footer">
                    <button id="btn-delete-item" type="button" class="btn btn-danger">Xoá bỏ</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                </div>
            </div>
        </div>
    </div>

    <form name="delete-item-form" method="POST">
        @csrf
        @method('DELETE')
    </form>

    @include('admin.partials.footer')

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var id;
            var deleteForm = document.forms['delete-item-form'];

            //lấy id để xóa
            $('#delete-item-model').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget);
                id = button.data('id');
            })

            //xóa id
            var btn_delete_item = document.getElementById('btn-delete-item')
            btn_delete_item.onclick = function () {
                deleteForm.action = "/tintuc/" + id;
                deleteForm.submit();
            }
        });
    </script>
</body>

</html>