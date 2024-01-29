<!DOCTYPE html>
<html>

<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8" />
    <title>Đăng Nhập</title>

    <!-- Site favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/img/cropped-images-2-32x32.png') }}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/img/cropped-images-2-32x32.png') }}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/img/cropped-images-2-32x32.png') }}" />

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet" />
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/admin_template/vendors/styles/core.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/admin_template/vendors/styles/icon-font.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/admin_template/src/plugins/jquery-steps/jquery.steps.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/admin_template/vendors/styles/style.css') }}" />

</head>

<body class="login-page">
    <div class="login-header box-shadow">
        <div class="container-fluid d-flex justify-content-between align-items-center">
            <div class="brand-logo">
                <a href="/">
                    <img src="{{ asset('/img/logo-1.png') }}" alt="" />
                </a>
            </div>
        </div>
    </div>
    <div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
        <div class="container">
            <div class="row align-items-center">
                {{-- <div class="col-md-6 col-lg-7">
                    <img style="border-radius: 15px" src="/img/Vuon-quoc-gia-Cuc-Phuong-login.jpg" alt="" />
                </div> --}}
                <div class="col-12">
                    <div class="login-box bg-white box-shadow border-radius-10">
                        <div class="login-title">
                            <h2 class="text-center text-primary">Đăng Nhập</h2>
                        </div>

                        @if (Session::get('fail'))
                        <div class="alert alert-danger">
                            <p>
                                {{ Session::get('fail') }}
                            </p>
                        </div>
                        @endif

                        @if (Session::get('success'))
                        <div class="alert alert-success">
                            <p>
                                {{ Session::get('success') }}
                            </p>
                        </div>
                        @endif

                        <form action="/login" method="POST">
                            @csrf
                            <div class="custom mb-3">
                                <input id="email" type="text" class="form-control form-control-lg" name="email"
                                    placeholder="Email" required/>
                                <div class="input-group-append custom">
                                    <span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
                                </div>
                                <span class="text-danger">@error('email') {{ $message }} @enderror</span>
                            </div>
                            <div class="custom mb-3">
                                <input id="password" type="password" class="form-control form-control-lg" name="password"
                                    placeholder="Mật Khẩu" required/>
                                <div class="input-group-append custom">
                                    <span class="input-group-text"><i class="dw dw-padlock1"></i></span>
                                </div>
                                <span class="text-danger">@error('password') {{ $message }} @enderror</span>
                            </div>
                            {{-- <div class="row pb-10">
                                <div class="col-6">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1" onclick="getCheckboxState()"/>
                                        <label class="custom-control-label" for="customCheck1">Ghi Nhớ</label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="forgot-password">
                                        <a href="/forget-password">Quên Mật Khẩu</a>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="input-group mb-0">
                                        <button class="btn btn-primary btn-lg btn-block" type="submit">Đăng
                                            Nhập</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- js -->
    <script src="{{ asset('/admin_template/vendors/scripts/core.js') }}"></script>
    <script src="{{ asset('/admin_template/vendors/scripts/script.min.js') }}"></script>
    <script src="{{ asset('/admin_template/vendors/scripts/process.js') }}"></script>
    <script src="{{ asset('/admin_template/vendors/scripts/layout-settings.js') }}"></script>
</body>

</html>