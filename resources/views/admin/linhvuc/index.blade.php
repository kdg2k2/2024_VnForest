<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.partials.head')
</head>

<body>
    @include('admin.partials.header')
    @include('admin.partials.right_sidebar')
    @include('admin.partials.left_sidebar')


    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                <!-- Simple Datatable start -->
                <div class="card-box mb-30">
                    <div class="pd-20">
                        <h4 class="text-blue h4">Lĩnh Vực</h4>
                        <div class="btn-create">
                            <a class="btn btn-sm btn-success" href="/admin/linhvuc/create"><i
                                    class="icon-copy bi bi-file-earmark-plus"></i> Thêm Mới</a>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <p>{{ $message }}</p>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                    <div class="pb-20">
                        <table class="data-table table hover">
                            <thead>
                                <tr>
                                    <th>Tên Lĩnh Vực</th>
                                    <th>Slug</th>
                                    <th class="datatable-nosort sorting_disabled"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                <tr>
                                    <td>{{ $item->tenlinhvuc }}</td>
                                    <td>{{ $item->slug }}</td>
                                    <td>
                                        <div class="dropdown">
                                            <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
                                                href="#" role="button" data-toggle="dropdown">
                                                <i class="dw dw-more"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                                <a class="dropdown-item" href="/admin/linhvuc/edit/{{ $item->id }}"><i
                                                        class="dw dw-edit2"></i> Sửa</a>
                                                <a class="dropdown-item" href="#" data-toggle="modal"
                                                    data-id="{{ $item->id }}" data-target="#delete-item-model"><i
                                                        class="dw dw-delete-3"></i> Xoá</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Simple Datatable End -->
            </div>
        </div>
    </div>

    <div id="delete-item-model" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Thông báo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Xác nhận xóa hay không?</p>
                </div>
                <div class="modal-footer">
                    <button id="btn-delete-item" type="button" class="btn btn-danger">Xoá bỏ</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                </div>
            </div>
        </div>
    </div>

    <form name="delete-item-form" method="POST">
        @csrf
        @method('DELETE')
    </form>

    @include('admin.partials.footer')

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var id;
            var deleteForm = document.forms['delete-item-form'];

            //lấy id để xóa
            $('#delete-item-model').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget);
                id = button.data('id');
            })

            //xóa id
            var btn_delete_item = document.getElementById('btn-delete-item')
            btn_delete_item.onclick = function () {
                deleteForm.action = "/admin/linhvuc/delete/"+id;
                deleteForm.submit();
            }

            var string_arr = [
    'Luật Bảo vệ Bí mật Nhà nước',
'Luật Lâm nghiệp số 16/2017/QH14',
'Nghị định số 156/2018/NĐ-CP ngày 16/11/2018 của Chính phủ quy định chi tiết thi hành một số điều của Luật Lâm nghiệp',
'Nghị định số 01/2019/NĐ-CP ngày 01/012019 của Thủ tướng Chính phủ về Kiểm lâm và Lực lượng chuyên trách bảo vệ rừng',
'Quyết định số 38/2016/QĐ-TTg ngày 14/9/2016 của Thủ tướng Chính phủ về việc ban hành một số chính sách bảo vệ, phát triển rừng và đầu tư hỗ trợ kết cấu hạ tầng, giao nhiệm vụ công ích đối với các công ty nông, lâm nghiệp',
'Quyết định 1439/QĐ-BNN-TCLN ngày 25/4/2016 của Bộ Nông nghiệp và Phát triển nông thôn về việc ban hành Quy chế quản lý và sử dụng Hệ thống Thông tin quản lý ngành Lâm nghiệp',
'Thông tư số 21/2017/TT-BNNPTNT ngày 15/11/2017 của Bộ Nông nghiệp và Phát triển nông thôn Hướng dẫn thực hiện Quyết định số 886/QĐ-TTg ngày 16/6/2017 của Thủ tướng Chính phủ phê duyệt Chương trình mục tiêu phát triển Lâm nghiệp bền vững giai đoạn 2016 – 2020',
'Thông tư số 04/2018/TT-BTC ngày 17/01/2018 của Bộ Tài chính Hướng dẫn quản lý và sử dụng tiền dịch vụ môi trường rừng',
'Quyết định số 5249/QĐ-BNN-TCCB ngày 28/12/2018 về việc phát động Phong trào thi đua đặc biệt',
'Quyết định số 2962/QĐ-BNN-TCLN ngày 30/7/2019 của Bộ Nông nghiệp và Phát triển nông thôn Ban hành Hướng dẫn kỹ thuật trồng rừng thâm canh gỗ lớn và chuyển hóa rừng trồng gỗ nhỏ sang rừng trồng gỗ lớn đối với loài cây Keo lai và Keo tai tượng',
'Nghị quyết số 26-NQ/TW của Bộ Chính trị ngày 03/11/2022 về phát triển kinh tế – xã hội và bảo đảm quốc phòng, an ninh vùng Bắc Trung Bộ và duyên hải Trung Bộ và duyên hải Trung Bộ đến năm 2030, tầm nhìn đến năm 2045',
'Nghị quyết số 168/NQ-CP ngày 29/12/2022 của Chính phủ Ban hành Chương trình hành động của Chính phủ thực hiện Nghị quyết số 26-NQ/TW ngày 03/11/2022 của Bộ Chính trị về phát triển kinh tế – xã hội và bảo đảm quốc phòng, an ninh vùng Bắc Trung bộ và duyên hải Trung Bộ đến năm 2030, tầm nhìn đến năm 2045',
'Cục Lâm nghiệp Thông báo Giới thiệu chức danh và chữ ký của ông Đoàn Hoài Nam – Phó Cục trưởng Cục Lâm nghiệp',
'Cục Lâm nghiệp Thông báo Giới thiệu chức danh và chữ ký của ông Phạm Hồng Lượng – Phó Cục trưởng Cục Lâm nghiệp',
]

string_arr.forEach(element => {
    console.log(createSlug(element));
});
        });
    </script>
</body>

</html>