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
                                <h4>Cập Nhật</h4>
                            </div>
                            <nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#">Trang Chủ</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        Lĩnh Vực
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
                    <form class="post-form" method="POST" action="/admin/linhvuc/update/{{ $data->id }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('patch')
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="tenlinhvuc">Tên lĩnh vực</label>
                                    <input type="text" class="form-control" name="tenlinhvuc" value="{{ $data->tenlinhvuc }}" required>
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
                            <button type="submit" class="btn btn-primary">Cập Nhật</button>
                            <a style="float: right;" href="/admin/linhvuc" class="btn btn-primary">Quay
                                Lại</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @include('admin.partials.footer')

    <script>
        document.querySelector(".post-form").addEventListener("submit", function (e) {
            e.preventDefault();

            var titleInput = document.querySelector('input[name="tenlinhvuc"]');
            var titleValue = titleInput.value;

            var slugInput = document.querySelector('input[name="slug"]');
            slugInput.value = createSlug(titleValue);

            this.submit();
        });
    </script>
</body>

</html>