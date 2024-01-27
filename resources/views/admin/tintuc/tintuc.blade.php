<!DOCTYPE html>
<html lang="en">

<head>
    @include('pages.admin.partials.head')
</head>

<body>
    @include('pages.admin.partials.header')
    @include('pages.admin.partials.right_sidebar')
    @include('pages.admin.partials.left_sidebar')
    @php
    $role = App\User::find(Session::get('loginId'))->role;
    @endphp
    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                <!-- Simple Datatable start -->
                <div class="card-box mb-30">
                    <div class="pd-20">
                        <h4 class="text-blue h4">Tin Tức</h4>
                        @if ($role == 'admin' || $role == 'dichvu')
                        <div class="btn-create">
                            <a class="btn btn-sm btn-success" href="{{ route('tin-tuc.create') }}"><i
                                    class="icon-copy bi bi-file-earmark-plus"></i> Thêm Mới</a>
                        </div>

                        @endif
                    </div>
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                    @endif
                    <div class="pb-20">
                        <table class="data-table table hover">
                            <thead>
                                <tr>
                                    <th class="datatable-nosort sorting_disabled">Hình Ảnh</th>
                                    <th>Loại Tin</th>
                                    <th>Tiêu Đề</th>
                                    {{-- <th>Nội Dung</th> --}}
                                    {{-- <th>Lượt Xem</th> --}}
                                    <th>Tác Giả</th>
                                    <th class="datatable-nosort sorting_disabled"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tintuc as $item)
                                <tr>
                                    <td><img style="width: 150px; max-height: 100px" src="{{ asset($item->path) }}"
                                            alt="" style="width: 150px; max-height: 120px"></td>
                                    <td>{{ $item->loaitin->tenloaitin }}</td>
                                    <td>
                                        @if (mb_strlen($item->tieude, 'UTF-8') > 150)
                                        {{ mb_substr($item->tieude, 0, 150, 'UTF-8') }}...
                                        @else
                                        {{ $item->tieude }}
                                        @endif
                                    </td>
                                    {{-- <td>
                                        @if (mb_strlen($item->noidung, 'UTF-8') > 200)
                                        {!! mb_substr($item->noidung, 0, 200, 'UTF-8') !!}...
                                        @else
                                        {!! $item->noidung !!}
                                        @endif
                                    </td> --}}
                                    {{-- <td>{{ $item->luotxem }}</td> --}}
                                    <td>{{ $item->user->username }}</td>
                                    <td>
                                        <div class="dropdown">
                                            @if ($role == 'admin' || $role == 'dichvu')
                                            <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
                                                href="#" role="button" data-toggle="dropdown">
                                                <i class="dw dw-more"></i>
                                            </a>
                                            @endif
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">

                                                <a class="dropdown-item"
                                                    href="{{ route('tin-tuc.edit', $item->id) }}"><i
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
                    <div style="padding-bottom: 50px;" class="pagination justify-content-center">
                        {{$tintuc->appends(request()->query())->links()}}
                    </div>
                </div>
                <!-- Simple Datatable End -->
            </div>
        </div>
    </div>

    <div id="delete-item-model" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
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

    @include('pages.admin.partials.footer')

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
                deleteForm.action = "/tin-tuc/" + id;
                deleteForm.submit();
            }
        });
    </script>
</body>

</html>