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
                                <h4>Cập Nhật</h4>
                            </div>
                            <nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#">Trang Chủ</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        Giới Thiệu Chung
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
                    <form class="post-form" method="POST" action="/admin/gioithieu/gtc/update"
                        enctype="multipart/form-data">
                        @csrf
                        @method('patch')
                        <div class="form-group">
                            <label for="tieude">Tên tiêu đề</label>
                            <input type="text" class="form-control" name="tieude" value="{{ $data->tieude }}" required>
                        </div>

                        <div class="form-group">
                            <label for="noidung">Nội dung</label>
                            <textarea id="noidung" class="form-control ckeditor" name="noidung" rows="3" required>{{ $data->noidung }}</textarea>
                        </div>

                        <div class="form-group mb-5 mt-3">
                            <button type="submit" class="btn btn-primary">Cập Nhật</button>
                            <a style="float: right;" href="/admin/gioithieu/gtc" class="btn btn-primary">Quay
                                Lại</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @include('admin.partials.footer')

    <script>
        CKEDITOR.replace("noidung");
    </script>
</body>

</html>