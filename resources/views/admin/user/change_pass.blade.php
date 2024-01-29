<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.partials.head')

    <style>
        .image-show {
            width: 200px;
            height: 120px;
        }
    </style>
</head>

<body>
    @include('admin.partials.header')
    @include('admin.partials.right_sidebar')
    @include('admin.partials.left_sidebar')

    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                <div class="page-header">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="title">
                                <h4>Thông tin tài khoản</h4>
                            </div>
                            <nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#">Trang Chủ</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        Tài Khoản
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <p>{{ $message }}</p>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                    <div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
                        <form class="post-form" method="POST" action="/admin/user/change_pass/"
                            enctype="multipart/form-data">
                            @csrf
                            @method('patch')
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="username">Tài Khoản</label>
                                        <input type="text" class="form-control" name="username" value="{{ $data->username }}" required>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" name="email" value="{{ $data->email }}" required>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="password">Mật Khẩu</label>
                                        <input type="password" class="form-control" name="password" value="" placeholder="Nhập mật khẩu nếu cần đổi">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group mb-5 mt-3">
                                <button type="submit" class="btn btn-primary">Cập Nhật</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('admin.partials.footer')
</body>

</html>