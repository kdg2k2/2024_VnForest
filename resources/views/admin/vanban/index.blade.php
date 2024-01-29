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
                        <h4 class="text-blue h4">Văn Bản</h4>
                        <div class="btn-create">
                            <a class="btn btn-sm btn-success" href="/admin/vanban/create"><i
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
                                    <th>Tên Văn Bản</th>
                                    <th>Loại Văn Bản</th>
                                    <th>Lĩnh Vực</th>
                                    <th>Số Hiệu</th>
                                    <th>Năm Phát Hành</th>
                                    <th>Đơn Vị Phát Hành</th>
                                    <th>Người Đăng Tải</th>
                                    <th class="datatable-nosort sorting_disabled"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                <tr>
                                    <td>{{ $item->tenvb }}</td>
                                    <td>{{ $item->loaivb->tenloaivb }}</td>
                                    <td>{{ $item->linhvuc->tenlinhvuc }}</td>
                                    <td>{{ $item->sohieu }}</td>
                                    <td>{{ $item->namphathanh }}</td>
                                    <td>{{ $item->donviphathanh }}</td>
                                    <td>{{ $item->user->username }}</td>
                                    <td>
                                        <div class="dropdown">
                                            <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
                                                href="#" role="button" data-toggle="dropdown">
                                                <i class="dw dw-more"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                                <a class="dropdown-item" href="/admin/vanban/download/{{ $item->id }}"><i
                                                    class="dw dw-edit2"></i> Tải</a>
                                                <a class="dropdown-item" href="/admin/vanban/edit/{{ $item->id }}"><i
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
                <!-- Simple Datatable End -->
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
                deleteForm.action = "/admin/vanban/delete/"+id;
                deleteForm.submit();
            }
        });
    </script>
</body>

</html>