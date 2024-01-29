<!DOCTYPE html>
<!--[if IE 9 ]>
<html lang="vi" class="ie9 loading-site no-js">
	<![endif]-->
<!--[if IE 8 ]>
	<html lang="vi" class="ie8 loading-site no-js">
		<![endif]-->
<!--[if (gte IE 9)|!(IE)]>
		<!-->
<html lang="vi" class="loading-site no-js">
  <!--
			<![endif]-->
  <head> @include('pages.partials.head') </head>
  <body class="page-template-default page page-id-986 _masterslider _ms_version_3.9.5 header-shadow lightbox nav-dropdown-has-arrow nav-dropdown-has-shadow nav-dropdown-has-border mobile-submenu-slide mobile-submenu-slide-levels-1 mobile-submenu-toggle page-template-right-sidebar page-template-right-sidebar-php">
    <a class="skip-link screen-reader-text" href="#main">Skip to content</a>
    <div id="wrapper"> @include('pages.partials.header') <main id="main" class="">
        <div class="page-wrapper page-right-sidebar">
          <div class="row">
            <div id="content" class="large-9 left col col-divided" role="main">
              <div class="page-inner">
                
                <div class="document-search">
                  <div class="document-search-title">TÌM KIẾM VĂN BẢN</div>
                  <div class="document-search-input">
                    <table class="table search-condition">
                      <tbody>
                        <tr>
                          <td>
                            <div class="label">
                              <span>Lĩnh vực:</span>
                            </div>
                            <div class="input">
                              <select name="ctrl_191017_163$drdDocCategory" id="ctrl_191017_163_drdDocCategory">
                                <option selected="selected" value="0">-- Tất cả --</option>
                              </select>
                            </div>
                          </td>
                          <td>
                            <div class="label">
                              <span>Loại văn bản:</span>
                            </div>
                            <div class="input">
                              <select name="ctrl_191017_163$drdDocOrg" id="ctrl_191017_163_drdDocOrg">
                                <option selected="selected" value="0">-- Tất cả --</option>
                              </select>
                            </div>
                          </td>
                          <td>
                            <div class="label">
                              <span>Năm ban hành:</span>
                            </div>
                            <div class="input">
                              <select name="ctrl_191017_163$drdDocYear" id="ctrl_191017_163_drdDocYear">
                                <option selected="selected" value="0">-- Tất cả --</option>
                              </select>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>

                <div class="row large-columns-1 medium-columns-1 small-columns-1 has-shadow row-box-shadow-1 row-box-shadow-1-hover">
                  @foreach ($data as $item)
                  <div class="col post-item">
                    <div class="col-inner">
                      <a href="/van-ban/{{ $item->slug }}" class="plain">
                        <div class="box box-vertical box-text-bottom box-blog-post has-hover">
                          <div class="box-text text-left is-small">
                            <div class="box-text-inner blog-post-inner">
                              <h5 class="post-title is-large ">{{ $item->tenvb }}</h5>
                              <div class="post-meta is-small op-8">Số Hiệu: {{ $item->sohieu }}</div>
                              <div class="post-meta is-small op-8">Năm Phát Hành: {{ $item->namphathanh }}</div>
                              <div class="is-divider"></div>
                            </div>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                  @endforeach
                </div>
                <ul class="page-numbers nav-pagination links text-center">
                  {{-- <li>
                    <span aria-current="page" class="page-number current">1</span>
                  </li>
                  <li>
                    <a class="page-number" href="https://vnforest1.xuanmaijsc.vn/category/menu-tin-tuc-su-kien/tin-tong-cuc-lam-nghiep/page/2/">2</a>
                  </li>
                  <li>
                    <a class="next page-number" href="https://vnforest1.xuanmaijsc.vn/category/menu-tin-tuc-su-kien/tin-tong-cuc-lam-nghiep/page/2/">
                      <i class="icon-angle-right"></i>
                    </a>
                  </li> --}}
                  {{$data->appends(request()->query())->links()}}
                </ul>
              </div>
            </div>
            <div class="large-3 col">
              <div id="secondary" class="widget-area " role="complementary">
                <aside id="block-13" class="widget widget_block">
                  <p>
                  <div class="container section-title-container">
                    <h3 class="section-title section-title-center">
                      <b></b>
                      <span class="section-title-main">Tin mới</span>
                      <b></b>
                    </h3>
                  </div>
                  <div class="row sidebar-post large-columns-1 medium-columns-1 small-columns-1 has-shadow row-box-shadow-1">
                    <div class="col post-item">
                      <div class="col-inner">
                        <a href="https://vnforest1.xuanmaijsc.vn/2024/01/26/gioi-thieu-chung-ve-cuc-lam-nghiep/" class="plain">
                          <div class="box box-vertical box-text-bottom box-blog-post has-hover">
                            <div class="box-text text-center is-small" style="padding:0px 5px 0px 5px;">
                              <div class="box-text-inner blog-post-inner">
                                <h5 class="post-title is-large ">Giới Thiệu Chung Về Cục Lâm Nghiệp</h5>
                                <div class="post-meta is-small op-8">26/01/2024</div>
                                <div class="is-divider"></div>
                              </div>
                            </div>
                          </div>
                        </a>
                      </div>
                    </div>
                    <div class="col post-item">
                      <div class="col-inner">
                        <a href="https://vnforest1.xuanmaijsc.vn/2024/01/25/tai-lieu-hoi-thao-quoc-gia-ve-nghi-dinh-sua-doi-bo-sung-nghi-dinh-156-2015-nd-cp-nay-24-10-2022/" class="plain">
                          <div class="box box-vertical box-text-bottom box-blog-post has-hover">
                            <div class="box-text text-center is-small" style="padding:0px 5px 0px 5px;">
                              <div class="box-text-inner blog-post-inner">
                                <h5 class="post-title is-large ">Tài liệu Hội thảo quốc gia về Nghị định sửa đổi, bổ sung Nghị định 156/2015/NĐ-CP này 24/10/2022</h5>
                                <div class="post-meta is-small op-8">25/01/2024</div>
                                <div class="is-divider"></div>
                              </div>
                            </div>
                          </div>
                        </a>
                      </div>
                    </div>
                    <div class="col post-item">
                      <div class="col-inner">
                        <a href="https://vnforest1.xuanmaijsc.vn/2024/01/25/huong-dan-quan-ly-khu-bao-ton-thien-nhien/" class="plain">
                          <div class="box box-vertical box-text-bottom box-blog-post has-hover">
                            <div class="box-text text-center is-small" style="padding:0px 5px 0px 5px;">
                              <div class="box-text-inner blog-post-inner">
                                <h5 class="post-title is-large ">Hướng dẫn quản lý Khu bảo tồn thiên nhiên</h5>
                                <div class="post-meta is-small op-8">25/01/2024</div>
                                <div class="is-divider"></div>
                              </div>
                            </div>
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="is-divider divider clearfix" style="margin-top:1.5em;margin-bottom:1.5em;max-width:0px;height:0px;"></div>
                  <div class="container section-title-container">
                    <h3 class="section-title section-title-center">
                      <b></b>
                      <span class="section-title-main">Tiện ích</span>
                      <b></b>
                    </h3>
                  </div>
                  <div class="ux-menu stack stack-col justify-start ux-menu--divider-solid">
                    <div class="ux-menu-link flex menu-item label-popular">
                      <a class="ux-menu-link__link flex" href="https://vpdt.cuclamnghiep.gov.vn/" target="_blank" rel="noopener noreferrer">
                        <i class="ux-menu-link__icon text-center icon-angle-right"></i>
                        <span class="ux-menu-link__text"> Văn phòng điện tử </span>
                      </a>
                    </div>
                    <div class="ux-menu-link flex menu-item label-hot">
                      <a class="ux-menu-link__link flex" href="https://vnforest1.xuanmaijsc.vn/thu-vien/">
                        <i class="ux-menu-link__icon text-center icon-angle-right"></i>
                        <span class="ux-menu-link__text"> Thư viện </span>
                      </a>
                    </div>
                    <div class="ux-menu-link flex menu-item label-new">
                      <a class="ux-menu-link__link flex" href="#">
                        <i class="ux-menu-link__icon text-center icon-angle-right"></i>
                        <span class="ux-menu-link__text"> Tài liệu hội nghị </span>
                      </a>
                    </div>
                    <div class="ux-menu-link flex menu-item label-hot">
                      <a class="ux-menu-link__link flex" href="#">
                        <i class="ux-menu-link__icon text-center icon-angle-right"></i>
                        <span class="ux-menu-link__text"> Hệ thống thông tin quản lý ngành lâm nghiệp </span>
                      </a>
                    </div>
                    <div class="ux-menu-link flex menu-item">
                      <a class="ux-menu-link__link flex" href="#">
                        <i class="ux-menu-link__icon text-center icon-angle-right"></i>
                        <span class="ux-menu-link__text"> Chiến lược phát triển lâm nghiệp </span>
                      </a>
                    </div>
                    <div class="ux-menu-link flex menu-item label-new">
                      <a class="ux-menu-link__link flex" href="#">
                        <i class="ux-menu-link__icon text-center icon-angle-right"></i>
                        <span class="ux-menu-link__text"> Triển khai luật lâm nghiệp </span>
                      </a>
                    </div>
                    <div class="ux-menu-link flex menu-item label-popular">
                      <a class="ux-menu-link__link flex" href="https://dichvucong.gov.vn/p/home/dvc-tthc-trang-chu.html" target="_blank" rel="noopener noreferrer">
                        <i class="ux-menu-link__icon text-center icon-angle-right"></i>
                        <span class="ux-menu-link__text"> Cơ sở dữ liệu thủ tục hành chính quốc gia </span>
                      </a>
                    </div>
                  </div>
                  </p>
                </aside>
              </div>
            </div>
          </div>
        </div>
      </main>
    </div> @include('pages.partials.footer')
  </body>
</html>