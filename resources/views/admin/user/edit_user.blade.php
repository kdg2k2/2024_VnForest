<!DOCTYPE html>
<html lang="en">

<head>
    @include('pages.admin.partials.head')
</head>

<body>
    @include('pages.admin.partials.header')
    @include('pages.admin.partials.right_sidebar')
    @include('pages.admin.partials.left_sidebar')

    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                <div class="page-header">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="title">
                                <h4>Cập Nhật</h4>
                            </div>
                            <nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="/logged">Trang Chủ</a>
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
                    @if ($message = Session::get('fail'))
                    <div class="alert alert-danger">
                        <p>{{ $message }}</p>
                    </div>
                    @endif

                    @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                    @endif

                    <form class="post-form" method="POST" action="{{ route('user.update', $user->id) }}">
                        @csrf
                        @method('PATCH')
                        <div class="mt-3">
                            <label for="username">Tài Khoản</label>
                            <input type="text" class="form-control" name="username" value="{{ $user->username }}"
                                required>
                        </div>
                        <span class="text-danger">@error('username')
                            {{ $message }}
                            @enderror</span>

                        <div class="mt-3">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" value="{{ $user->email }}" required>
                        </div>
                        <span class="text-danger">@error('email')
                            {{ $message }}
                            @enderror</span>

                        <div class="mt-3">
                            <label for="password">Mật Khẩu</label>
                            <input type="password" class="form-control" name="password" value="{{ $user->password }}" required>
                            <input type="hidden" class="form-control" name="hidden_password" value="{{ $user->password }}">
                        </div>
                        <span class="text-danger">@error('password')
                            {{ $message }}
                            @enderror</span>

                        <div class="mt-3">
                            <label for="role">Quyền</label>
                            <select class="form-select form-control" name="role" required>
                                <option value="{{ $user->role }}" selected>{{ $user->role }}</option>
                                <option value="user">user [Xem và tải]</option>
                                <option value="admin">admin [Toàn quyền truy cập]</option>
                                <option value="kythuat">kythuat [Bản đồ, đa dạng sinh học...]</option>
                                <option value="dichvu">dichvu [Du lịch, tour, tuyến...]</option>
                            </select>
                        </div>

                        <div class="mt-3 mb-5">
                            <button type="submit" class="btn btn-primary">Cập Nhật</button>
                            <a style="float: right;" href="/user" class="btn btn-primary">Quay Lại</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @include('pages.admin.partials.footer')
</body>

</html>