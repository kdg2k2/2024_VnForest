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
		<div class="xs-pd-20-10 pd-ltr-20">
			<div class="page-header">
				<div class="row">
					<div class="col-md-6 col-sm-12">
						<div class="title">
							<h4>Trang chủ</h4>
						</div>
						<nav aria-label="breadcrumb" role="navigation">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
								<li class="breadcrumb-item active" aria-current="page">
									Thống kê
								</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12 mb-4">
					<div class="card-box pd-30 height-100-p">
                        <div class="row">
                            <div class="col-md-12 col-xl-6">
                                <div class="card comp-card mb-4">
                                    <a href="/admin/tintuc">
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <h6 class="m-b-25">Tổng số văn bản</h6>
                                                    <h3 class="f-w-700 text-c-yellow">{{
                                                        App\VanBan::count() }}</h3>
                                                        Xem danh sách
                                                </div>
                                                <div class="col-auto">
                                                    <i class="micon icon-copy bi bi-file-earmark-pdf"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="card comp-card mb-4">
                                    <a href="/admin/tintuc">
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <h6 class="m-b-25">Tổng số tin tức</h6>
                                                    <h3 class="f-w-700 text-c-yellow">{{
                                                        App\TinTuc::count() }}</h3>
                                                        Xem danh sách
                                                </div>
                                                <div class="col-auto">
                                                    <i class="micon icon-copy bi bi-layout-text-window-reverse"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="card comp-card mb-4">
                                    <a target="_blank" href="#" class="m-b-0">
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <h6 class="m-b-25">Tin tức nhiều lượt xem nhiều nhất</h6>
                                                    <h3 class="f-w-700 text-c-blue">{{ $max_view=App\TinTuc::max('view') }}
                                                    </h3>
                                                    {{ isset($max_view) ? App\TinTuc::where('view', $max_view)->first()->tentt : 'Chưa có tin tức nào' }}
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fas fa fa-eye bg-c-blue"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-12 col-xl-6">
                                <div id="namphathanh_bar"></div>
                            </div>
                        </div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 col-md-12 mb-4">
					<div class="card-box pd-30 height-100-p">
						<div id="loaivb_bar"></div>
					</div>
				</div>
				<div class="col-lg-6 col-md-12 mb-4">
					<div class="card-box pd-30 height-100-p">
						<div id="loaitt_bar"></div>
					</div>
				</div>
			</div>
			<footer class="footer-wrap pd-20 mb-2 card-box">
				2024 Cục Lâm Nghiêp - Make By
				<a href="https://ifee.edu.vn/" target="_blank">IFEE</a>
			</footer>
		</div>
	</div>

	@include('admin.partials.footer')

	<script src="https://code.highcharts.com/highcharts.js"></script>
	<script>
		document.addEventListener('DOMContentLoaded', function () {
            const name_loaitt = @json($name_loaitt);
            const count_loaitt = @json($count_loaitt);
            const name_loaivb = @json($name_loaivb);
            const count_loaivb = @json($count_loaivb);
            const name_namphathanh = @json($name_namphathanh);
            const count_namphathanh = @json($count_namphathanh);

            const loaivb_bar = Highcharts.chart('loaivb_bar', {
                chart: {
                    type: 'bar'
                },
                title: {
                    text: 'Biểu đổ phân phối văn bản theo loại văn bản'
                },
                xAxis: {
                    categories: name_loaivb
                },
                series: [{
                    name: 'Văn Bản',
                    data: count_loaivb
                }],
                yAxis: {
                    title: {
                        text: 'Số lượng',
                    },
                    type: 'linear',
                    tickInterval: 1,
                },
                credits: {
                    enabled: false
                },
            });

            const loaitt_bar = Highcharts.chart('loaitt_bar', {
                chart: {
                    type: 'bar'
                },
                title: {
                    text: 'Biểu đổ phân phối tin tức theo loại tin tức'
                },
                xAxis: {
                    categories: name_loaitt
                },
                series: [{
                    name: 'Văn Bản',
                    data: count_loaitt
                }],
                yAxis: {
                    title: {
                        text: 'Số lượng',
                    },
                    type: 'linear',
                    tickInterval: 1,
                },
                credits: {
                    enabled: false
                },
            });

            const namphathanh_bar = Highcharts.chart('namphathanh_bar', {
                chart: {
                    type: 'bar'
                },
                title: {
                    text: 'Biểu đổ phân phối văn bản theo năm'
                },
                xAxis: {
                    categories: name_namphathanh
                },
                series: [{
                    name: 'Văn Bản',
                    data: count_namphathanh
                }],
                yAxis: {
                    title: {
                        text: 'Số lượng',
                    },
                    type: 'linear',
                    tickInterval: 1,
                },
                credits: {
                    enabled: false
                },
            });
		});
	</script>

</body>

</html>