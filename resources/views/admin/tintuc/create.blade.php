<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.partials.head')
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
                                <h4>Thêm Mới</h4>
                            </div>
                            <nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#">Trang Chủ</a>
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
                    <form class="post-form" method="POST" action="/admin/tintuc/store" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="tentt">Tên tiêu đề</label>
                            <input type="text" class="form-control" name="tentt" value="{{ old('tentt') }}" required>
                        </div>

                        <div class="form-group">
                            <label for="id_loaitt">Loại tin</label>
                            <select class="form-select form-control js-example-basic-single" name="id_loaitt" required>
                                <option value="" selected>Chọn loại tin</option>
                                @foreach ($loaitt as $item)
                                <option value="{{ $item->id }}" {{ old('id_loaitt')==$item->id ? 'selected' : '' }}>{{ $item->tenloaitt }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" name="slug" hidden>
                        </div>

                        <div class="form-group">
                            <label for="noidung">Nội dung</label>
                            <textarea id="noidung" class="form-control ckeditor" name="noidung" required>{{ old('noidung') }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="path">Ảnh đại diện tin</label>
                            <input type="file" class="form-control input-image-show" name="path" accept=".png, .jpg, .jpeg">
                            <div class="image-container"></div>
                        </div>

                        <div class="form-group mb-5 mt-3">
                            <button type="submit" class="btn btn-primary">Thêm Mới</button>
                            <a style="float: right;" href="/admin/tintuc" class="btn btn-primary">Quay Lại</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @include('admin.partials.footer')

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.js-example-basic-single').select2();
        });

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

        document.querySelector('.post-form').addEventListener('submit', function (e) {
            e.preventDefault();

            var titleInput = document.querySelector('input[name="tentt"]');
            var titleValue = titleInput.value;

            var slugInput = document.querySelector('input[name="slug"]');
            slugInput.value = createSlug(titleValue);

            this.submit();
        })
    </script>
</body>

</html>