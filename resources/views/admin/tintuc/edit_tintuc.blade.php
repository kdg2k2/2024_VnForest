<!DOCTYPE html>
<html lang="en">

<head>
    @include('pages.admin.partials.head')
    <style>
        .image-container img {
            width: 300px;
            max-height: 200px;
        }

        .ck-editor__editable_inline {
            height: 600px;
        }

        .form-group{
            margin-bottom: 0;
            margin-top: 10px;
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
                                <h4>Cập Nhật</h4>
                            </div>
                            <nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="/logged">Trang Chủ</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        Tin Tức
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                    @endif
                    <form class="post-form" method="POST" action="{{ route('tin-tuc.update', $tintuc->id) }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('patch')
                        <div class="form-group">
                            <label for="tieude">Tên tiêu đề</label>
                            <input type="text" class="form-control" name="tieude" value="{{ $tintuc->tieude }}">
                        </div>
                        <span class="text-danger">@error('tieude')
                            {{ $message }}
                            @enderror</span>

                        <div class="form-group">
                            <input type="text" class="form-control" name="tieudekhongdau" value="{{ $tintuc->tieudekhongdau }}" hidden>
                        </div>

                        <div class="form-group">
                            <label for="noidung">Nội dung</label>
                            <textarea id="noidung" class="form-control ckeditor" name="noidung" rows="3">{{ $tintuc->noidung }}</textarea>
                        </div>
                        <span class="text-danger">@error('noidung')
                            {{ $message }}
                            @enderror</span>

                        <div class="form-group">
                            <label for="path">Hình ảnh</label>
                            <input type="file" class="form-control input-image-show" name="path">
                            <input type="hidden" name="hidden_image" value="{{ $tintuc->path }}">
                            <div class="image-container">
                                <img class="image-show" src="{{ asset($tintuc->path) }}" alt="">
                            </div>
                        </div>
                        <span class="text-danger">@error('path')
                            {{ $message }}
                            @enderror</span>

                        <div class="form-group">
                            <label for="id_loaitin">Loại tin</label>
                            <select class="form-select form-control" name="id_loaitin">
                                <option value="" selected>Chọn loại tin</option>
                                @foreach ($loaitin as $item)
                                <option value="{{ $item->id }}" {{ $tintuc->id_loaitin==$item->id ? 'selected' : '' }}>{{ $item->tenloaitin }}</option>
                                @endforeach
                            </select>
                        </div>
                        <span class="text-danger">@error('id_loaitin')
                            {{ $message }}
                            @enderror</span>

                        <div class="form-group mb-5 mt-3">
                            <button type="submit" class="btn btn-primary">Cập Nhật</button>
                            <a style="float: right;" href="/tin-tuc-manager" class="btn btn-primary">Quay
                                Lại</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @include('pages.admin.partials.footer')

    <script>
        CKEDITOR.replace("noidung");

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