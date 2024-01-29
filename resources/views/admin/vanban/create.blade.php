<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.partials.head')
    <style>
        .form-group {
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
                                        Văn Bản
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
                    <form class="post-form" method="POST" action="/admin/vanban/store"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="id_loaivb">Loại văn bản</label>
                                    <select name="id_loaivb" id="id_loaivb" class="form-control js-example-basic-single" required>
                                        <option value="">[Chọn]</option>
                                        @foreach ($loaivb as $item)
                                            <option value="{{ $item->id }}">{{ $item->tenloaivb }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="id_linhvuc">Lĩnh vực</label>
                                    <select name="id_linhvuc" id="id_linhvuc" class="form-control js-example-basic-single" required>
                                        <option value="">[Chọn]</option>
                                        @foreach ($linhvuc as $item)
                                            <option value="{{ $item->id }}">{{ $item->tenlinhvuc }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="tenvb">Tên văn bản</label>
                                    <input type="text" class="form-control" name="tenvb" value="" required>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="sohieu">Số Hiệu</label>
                                    <input type="text" class="form-control" name="sohieu" value="">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="namphathanh">Năm Phát Hành</label>
                                    <select class="form-control js-example-basic-single" name="namphathanh">
                                        <option value="">[Chọn]</option>
                                        @for ($i = date('Y'); $i >= 1800; $i--)
                                            <option value="{{ $i }}">{{ $i }}</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="donviphathanh">Đơn Vị Phát Hành</label>
                                    <input type="text" class="form-control" name="donviphathanh" value="">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="path">Chọn file văn bản (.doc, .docx, .pdf, .zip, .rar)</label>
                                    <input type="file" class="form-control" name="path" value="" accept=".doc, .docx, .pdf, .zip, .rar" required>
                                </div>
                            </div>
                            <div class="col-6" hidden>
                                <div class="form-group">
                                    <label for="slug">Slug</label>
                                    <input type="text" class="form-control" name="slug" value="">
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group mb-5 mt-3">
                            <button type="submit" class="btn btn-primary">Thêm Mới</button>
                            <a style="float: right;" href="/admin/vanban" class="btn btn-primary">Quay Lại</a>
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

        document.querySelector(".post-form").addEventListener("submit", function (e) {
            e.preventDefault();

            var titleInput = document.querySelector('input[name="tenvb"]');
            var titleValue = titleInput.value;

            var slugInput = document.querySelector('input[name="slug"]');
            slugInput.value = createSlug(titleValue);

            this.submit();
        });

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
            str = str.replace(/\s/g, "-");

            return str;
        }
    </script>
</body>

</html>