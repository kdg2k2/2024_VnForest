<!DOCTYPE html>
<html lang="en">

<head>
    @include('pages.admin.partials.head')

    <style>
        .image-show {
            width: 200px;
            height: 120px;
        }
    </style>
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
                                <h4>Thông tin tài khoản</h4>
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
                    @if (Session::get('success'))
                    <div class="alert alert-success">
                        <p>
                            {{ Session::get('success') }}
                        </p>
                    </div>
                    @endif

                    @if (Session::get('fail'))
                    <div class="alert alert-danger">
                        <p>
                            {{ Session::get('fail') }}
                        </p>
                    </div>
                    @endif
                    <form id="post_form" class="tab-wizard2 wizard-circle wizard pt-3 pb-3 pr-3 pl-3" method="POST"
                        enctype="multipart/form-data" action="/user/change_pass">
                        @csrf
                        <section>
                            <div class="form-wrap max-width-600 mx-auto">
                                <div class="mt-3">
                                    <label for="username">Tài Khoản</label>
                                    <input type="text" class="form-control" name="username"
                                        value="{{ $user->username }}" required>
                                    <input type="hidden" class="form-control" name="hidden_username"
                                        value="{{ $user->username }}">
                                </div>
                                <span class="text-danger">@error('username')
                                    {{ $message }}
                                    @enderror</span>

                                <div class="mt-3">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" name="email" value="{{ $user->email }}"
                                        required>
                                    <input type="hidden" class="form-control" name="hidden_email"
                                        value="{{ $user->email }}">
                                </div>
                                <span class="text-danger">@error('email')
                                    {{ $message }}
                                    @enderror</span>

                                <div class="mt-3">
                                    <label for="password">Mật Khẩu</label>
                                    <input type="password" class="form-control" name="password"
                                        placeholder="Nhập mật khẩu mới nếu cần đổi mật khẩu" value="">
                                </div>
                                <span class="text-danger">@error('password')
                                    {{ $message }}
                                    @enderror</span>

                                <div class="mt-3">
                                    <label for="path">Hình ảnh</label>
                                    <input type="file" class="form-control input-image-show" name="path"
                                        accept="image/*">
                                    <input type="hidden" name="hidden_image" value="{{ $user->path }}">
                                    <div class="image-container">
                                        @if ($user->path)
                                        <img class="image-show" src="{{ asset($user->path) }}" alt="">
                                        @endif
                                    </div>
                                </div>
                                <span class="text-danger">@error('path')
                                    {{ $message }}
                                    @enderror</span>


                                <div class="mt-3 pt-1 submit-btn">
                                    <button class="btn btn-primary btn-block btn-submit" type="submit"> Cập nhật
                                    </button>
                                </div>
                        </section>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @include('pages.admin.partials.footer')
    <script>
        document.querySelector('.input-image-show').addEventListener('change', function () {
            var imageContainer = document.querySelector('.image-container');
            imageContainer.innerHTML = '';
            if (this.files && this.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    var image = document.createElement('img');
                    image.classList.add('image-show');
                    image.src = e.target.result;
                    imageContainer.appendChild(image);
                }
                reader.readAsDataURL(this.files[0]);
            }
        });

        
    </script>
</body>

</html>