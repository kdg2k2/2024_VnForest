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
                                <h4>Thêm Mới</h4>
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
                    <form class="post-form" method="POST" action="{{ route('tin-tuc.store') }}"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="tieude">Tên tiêu đề</label>
                            <input type="text" class="form-control" name="tieude" value="{{ old('tieude') }}">
                        </div>
                        <span class="text-danger">@error('tieude')
                            {{ $message }}
                            @enderror</span>

                        <div class="form-group">
                            <input type="text" class="form-control" name="tieudekhongdau" hidden>
                        </div>

                        <div class="form-group">
                            <label for="noidung">Nội dung</label>
                            <textarea id="noidung" class="form-control ckeditor" name="noidung">{{ old('noidung') }}</textarea>
                        </div>
                        <span class="text-danger">@error('noidung')
                            {{ $message }}
                            @enderror</span>

                        <div class="form-group">
                            <label for="path">Hình ảnh</label>
                            <input type="file" class="form-control input-image-show" name="path" accept="image/*">
                            <div class="image-container"></div>
                        </div>
                        <span class="text-danger">@error('path')
                            {{ $message }}
                            @enderror</span>

                        <div class="form-group">
                            <label for="id_loaitin">Loại tin</label>
                            <select class="form-select form-control" name="id_loaitin">
                                <option value="" selected>Chọn loại tin</option>
                                @foreach ($loaitin as $item)
                                <option value="{{ $item->id }}" {{ old('id_loaitin')==$item->id ? 'selected' : '' }}>{{ $item->tenloaitin }}</option>
                                @endforeach
                            </select>
                        </div>
                        <span class="text-danger">@error('id_loaitin')
                            {{ $message }}
                            @enderror</span>

                        <div class="form-group mb-5 mt-3">
                            <button type="submit" class="btn btn-primary">Thêm Mới</button>
                            <a style="float: right;" href="/tin-tuc-manager" class="btn btn-primary">Quay Lại</a>
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

        document.querySelector('.post-form').addEventListener('submit', function (e) {
            e.preventDefault();

            var titleInput = document.querySelector('input[name="tieude"]');
            var titleValue = titleInput.value;

            var slugInput = document.querySelector('input[name="tieudekhongdau"]');
            slugInput.value = createSlug(titleValue);

            this.submit();
        })

        function createSlug(str) {
            str = str.replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/g, "a");
            str = str.replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g, "e");
            str = str.replace(/ì|í|ị|ỉ|ĩ/g, "i");
            str = str.replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/g, "o");
            str = str.replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g, "u");
            str = str.replace(/ỳ|ý|ỵ|ỷ|ỹ/g, "y");
            str = str.replace(/đ/g, "d");
            str = str.replace(/À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ/g, "A");
            str = str.replace(/È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ/g, "E");
            str = str.replace(/Ì|Í|Ị|Ỉ|Ĩ/g, "I");
            str = str.replace(/Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ/g, "O");
            str = str.replace(/Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ/g, "U");
            str = str.replace(/Ỳ|Ý|Ỵ|Ỷ|Ỹ/g, "Y");
            str = str.replace(/Đ/g, "D");
            // Một vài bộ encode coi các dấu mũ, dấu chữ như một kí tự riêng biệt nên thêm hai dòng này
            str = str.replace(/\u0300|\u0301|\u0303|\u0309|\u0323/g, ""); // ̀ ́ ̃ ̉ ̣  huyền, sắc, ngã, hỏi, nặng
            str = str.replace(/\u02C6|\u0306|\u031B/g, ""); // ˆ ̆ ̛  Â, Ê, Ă, Ơ, Ư
            // Remove extra spaces
            // Bỏ các khoảng trắng liền nhau
            str = str.replace(/ + /g, " ");
            str = str.trim();
            // Remove punctuations
            // Bỏ dấu câu, kí tự đặc biệt
            str = str.replace(
                /!|@|%|\^|\*|\(|\)|\+|\=|\<|\>|\?|\/|,|\.|\:|\;|\'|\"|\&|\#|\[|\]|~|\$|_|`|-|{|}|\||\\/g,
                " "
            );

            // // Chuyển văn bản thành chữ thường
            str = str.toLowerCase();

            // // Xóa bỏ khoảng trắng
            str = str.replace(/\s/g, '');

            return str;
        }
    </script>
</body>

</html>