<div class="page-loader fixed fill z-top-3 ">
  <div class="page-loader-inner x50 y50 md-y50 md-x50 lg-y50 lg-x50 absolute">
    <div class="page-loader-logo" style="padding-bottom: 30px;">
      <!-- Header logo -->
      <a href="/" title="VNFOREST - Trang thông tin điện tử Cục Lâm nghiệp" rel="home">
        <img width="330" height="90" src="/main_template/wp-content/uploads/2024/01/logo-1.png" class="header_logo header-logo" alt="VNFOREST" />
        <img width="330" height="90" src="/main_template/wp-content/uploads/2024/01/logo-1.png" class="header-logo-dark" alt="VNFOREST" />
      </a>
    </div>
    <div class="page-loader-spin">
      <div class="loading-spin"></div>
    </div>
  </div>
  <style>
    .page-loader {
      opacity: 0;
      transition: opacity .3s;
      transition-delay: .3s;
      background-color: #fff;
    }

    .loading-site .page-loader {
      opacity: .98;
    }

    .page-loader-logo {
      max-width: px;
      animation: pageLoadZoom 1.3s ease-out;
      -webkit-animation: pageLoadZoom 1.3s ease-out;
    }

    .page-loader-spin {
      animation: pageLoadZoomSpin 1.3s ease-out;
    }

    .page-loader-spin .loading-spin {
      width: 40px;
      height: 40px;
    }

    @keyframes pageLoadZoom {
      0% {
        opacity: 0;
        transform: translateY(30px);
      }

      100% {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @keyframes pageLoadZoomSpin {
      0% {
        opacity: 0;
        transform: translateY(60px);
      }

      100% {
        opacity: 1;
        transform: translateY(0);
      }
    }
  </style>
</div>
<header id="header" class="header has-sticky sticky-jump">
  <div class="header-wrapper">
    <div id="top-bar" class="header-top hide-for-sticky nav-dark hide-for-medium">
      <div class="flex-row container">
        <div class="flex-col hide-for-medium flex-left">
          <ul class="nav nav-left medium-nav-center nav-small  nav-divided">
            <li id="menu-item-260" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-260 menu-item-design-default">
              <a target="_blank" href="https://cuclamnghiep.gov.vn/" class="nav-top-link">VNFOREST</a>
            </li>
            <li id="menu-item-257" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-257 menu-item-design-default">
              <a target="_blank" href="http://mard.gov.vn/" class="nav-top-link">MARD</a>
            </li>
          </ul>
        </div>
        <div class="flex-col hide-for-medium flex-center">
          <ul class="nav nav-center nav-small  nav-divided"></ul>
        </div>
        <div class="flex-col hide-for-medium flex-right">
          <ul class="nav top-bar-nav nav-right nav-small  nav-divided">
            <li class="html header-social-icons ml-0">
              <div class="social-icons follow-icons">
                @if (Auth::user())
                <a href="/admin/tintuc" target="_blank" rel="noopener noreferrer nofollow" class="icon plain tooltip" title="Quản Trị">
                  <i class="fa-solid fa-gears"></i>
                </a> | 
                @else
                <a href="/login" target="_blank" rel="noopener noreferrer nofollow" class="icon plain tooltip" title="Đăng Nhập">
                  <i class="icon-user"></i>
                </a> | 
                @endif
                <a href="https://www.facebook.com/lamnghiep4.0" target="_blank" data-label="Facebook" rel="noopener noreferrer nofollow" class="icon plain facebook tooltip" title="Follow on Facebook">
                  <i class="icon-facebook"></i>
                </a>
                <a href="mailto:tonghop@vnforest.gov.vn" data-label="E-mail" rel="nofollow" class="icon plain  email tooltip" title="Send us an email">
                  <i class="icon-envelop"></i>
                </a>
                <a href="tel:02438438792" target="_blank" data-label="Phone" rel="noopener noreferrer nofollow" class="icon plain  phone tooltip" title="Call us">
                  <i class="icon-phone"></i>
                </a>
                <a href="https://www.youtube.com/channel/UCMMHXxI1RsJbNj1KjhnMZKQ" target="_blank" rel="noopener noreferrer nofollow" data-label="YouTube" class="icon plain  youtube tooltip" title="Follow on YouTube">
                  <i class="icon-youtube"></i>
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div id="masthead" class="header-main ">
      <div class="header-inner flex-row container logo-left medium-logo-center" role="navigation">
        <!-- Logo -->
        <div id="logo" class="flex-col logo">
          <!-- Header logo -->
          <a href="/" title="VNFOREST - Trang thông tin điện tử Cục Lâm nghiệp" rel="home">
            <img width="330" height="90" src="/main_template/wp-content/uploads/2024/01/logo-1.png" class="header_logo header-logo" alt="VNFOREST" />
            <img width="330" height="90" src="/main_template/wp-content/uploads/2024/01/logo-1.png" class="header-logo-dark" alt="VNFOREST" />
          </a>
        </div>
        <!-- Mobile Left Elements -->
        <div class="flex-col show-for-medium flex-left">
          <ul class="mobile-nav nav nav-left ">
            <li class="nav-icon has-icon">
              <div class="header-button">
                <a href="#" data-open="#main-menu" data-pos="left" data-bg="main-menu-overlay" data-color="" class="icon primary button circle is-small" aria-label="Menu" aria-controls="main-menu" aria-expanded="false">
                  <i class="icon-menu"></i>
                </a>
              </div>
            </li>
          </ul>
        </div>
        <!-- Left Elements -->
        <div class="flex-col hide-for-medium flex-left
      flex-grow">
          <ul class="header-nav header-nav-main nav nav-left  nav-uppercase">
            <li class="header-search-form search-form html relative has-icon">
              <div class="header-search-form-wrapper">
                <div class="searchform-wrapper ux-search-box relative is-normal">
                  <form method="get" class="searchform" action="/" role="search">
                    <div class="flex-row relative">
                      <div class="flex-col flex-grow">
                        <input type="search" class="search-field mb-0" name="s" value="" id="s" placeholder="Nhập từ khóa..." />
                      </div>
                      <div class="flex-col">
                        <button type="submit" class="ux-search-submit submit-button secondary button icon mb-0" aria-label="Submit">
                          <i class="icon-search"></i>
                        </button>
                      </div>
                    </div>
                    <div class="live-search-results text-left z-top"></div>
                  </form>
                </div>
              </div>
            </li>
          </ul>
        </div>
        <!-- Right Elements -->
        <div class="flex-col hide-for-medium flex-right">
          <ul class="header-nav header-nav-main nav nav-right  nav-uppercase">
            <li class="has-dropdown header-language-dropdown">
              <a href="#"> Languages <i class="icon-angle-down"></i>
              </a>
              <ul class="nav-dropdown nav-dropdown-bold">
                <li>
                  <a>You need Polylang or WPML plugin for this to work. You can remove it from Theme Options.</a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
        <!-- Mobile Right Elements -->
        <div class="flex-col show-for-medium flex-right">
          <ul class="mobile-nav nav nav-right ">
            <li class="has-dropdown header-language-dropdown">
              <a href="#"> Languages <i class="icon-angle-down"></i>
              </a>
              <ul class="nav-dropdown nav-dropdown-bold">
                <li>
                  <a>You need Polylang or WPML plugin for this to work. You can remove it from Theme Options.</a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
      <div class="container">
        <div class="top-divider full-width"></div>
      </div>
    </div>
    <div id="wide-nav" class="header-bottom wide-nav flex-has-center hide-for-medium">
      <div class="flex-row container">
        <div class="flex-col hide-for-medium flex-center">
          <ul class="nav header-nav header-bottom-nav nav-center  nav-line-grow nav-size-medium">
            <li id="menu-item-316" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-63 current_page_item menu-item-316  menu-item-design-default">
              <a href="/" aria-current="page" class="nav-top-link">Trang chủ</a>
            </li>
            <li id="menu-item-317" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-317 menu-item-design-default has-dropdown">
              <a class="nav-top-link">Giới thiệu <i class="icon-angle-down"></i>
              </a>
              <ul class="sub-menu nav-dropdown nav-dropdown-bold">
                <li id="menu-item-989" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-989">
                  <a href="/van-ban">Chức năng nhiệm vụ</a>
                </li>
                <li id="menu-item-325" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-325">
                  <a href="/gioi-thieu-quy-che/">Quy chế</a>
                </li>
                <li id="menu-item-328" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-328">
                  <a href="/gioi-thieu-lich-su-phat-trien/">Lịch sử phát triển</a>
                </li>
              </ul>
            </li>
            <li id="menu-item-330" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-330 menu-item-design-default has-dropdown">
              <a class="nav-top-link">Tin tức sự kiện <i class="icon-angle-down"></i>
              </a>
              <ul class="sub-menu nav-dropdown nav-dropdown-bold">
                <li id="menu-item-527" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-527">
                  <a href="/tin-tuc">Tin tức sự kiện</a>
                </li>
                <li id="menu-item-531" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-531">
                  <a href="/category/menu-tin-tuc-su-kien/tin-tong-cuc-lam-nghiep/">Tin Tổng Cục Lâm nghiệp</a>
                </li>
                <li id="menu-item-642" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-642">
                  <a href="/category/menu-tin-tuc-su-kien/tin-dia-phuong/">Tin địa phương</a>
                </li>
                <li id="menu-item-641" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-641">
                  <a href="/category/tin-dau-thau/">Tin đấu thầu</a>
                </li>
                <li id="menu-item-643" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-643">
                  <a href="/category/tin-tuyen-dung/">Tin tuyển dụng</a>
                </li>
              </ul>
            </li>
            <li id="menu-item-344" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-344 menu-item-design-default has-dropdown">
              <a class="nav-top-link">Tài nguyên rừng <i class="icon-angle-down"></i>
              </a>
              <ul class="sub-menu nav-dropdown nav-dropdown-bold">
                <li id="menu-item-363" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-363 nav-dropdown-col">
                  <a>Tài nguyên rừng</a>
                  <ul class="sub-menu nav-column nav-dropdown-bold">
                    <li id="menu-item-655" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-655">
                      <a href="/category/menu-tai-nguyen-rung/tai-nguyen-rung/">Tài nguyên rừng</a>
                    </li>
                    <li id="menu-item-656" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-656">
                      <a href="/category/menu-tai-nguyen-rung/thuc-vat-rung/">Thực vật rừng</a>
                    </li>
                    <li id="menu-item-654" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-654">
                      <a href="/category/menu-tai-nguyen-rung/dong-vat-rung/">Động vật rừng</a>
                    </li>
                    <li id="menu-item-671" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-671">
                      <a>Sử dụng rừng</a>
                      <ul class="sub-menu nav-column nav-dropdown-bold">
                        <li id="menu-item-677" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-677">
                          <a href="/category/menu-tai-nguyen-rung/su-dung-rung/">Sử dụng rừng</a>
                        </li>
                        <li id="menu-item-675" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-675">
                          <a href="/category/menu-tai-nguyen-rung/khai-thac/">Khai thác</a>
                        </li>
                        <li id="menu-item-674" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-674">
                          <a href="/category/menu-tai-nguyen-rung/che-bien-xnk-lam-san/">Chế biến XNK lâm sản</a>
                        </li>
                        <li id="menu-item-676" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-676">
                          <a href="/category/menu-tai-nguyen-rung/quan-ly-rung-ben-vung/">Quản lý rừng bền vững</a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li id="menu-item-364" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-364 nav-dropdown-col">
                  <a>Phát triển rừng</a>
                  <ul class="sub-menu nav-column nav-dropdown-bold">
                    <li id="menu-item-685" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-685">
                      <a href="/category/menu-tai-nguyen-rung/giong-lam-nghiep/">Giống lâm nghiệp</a>
                    </li>
                    <li id="menu-item-686" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-686">
                      <a href="/category/menu-tai-nguyen-rung/khuyen-lam/">Khuyến lâm</a>
                    </li>
                    <li id="menu-item-687" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-687">
                      <a href="/category/menu-tai-nguyen-rung/trong-rung/">Trồng rừng</a>
                    </li>
                    <li id="menu-item-398" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-398">
                      <a>Bảo tồn thiên nhiên</a>
                      <ul class="sub-menu nav-column nav-dropdown-bold">
                        <li id="menu-item-692" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-692">
                          <a href="/category/menu-tai-nguyen-rung/bao-ton-thien-nhien/">Bảo tồn thiên nhiên</a>
                        </li>
                        <li id="menu-item-691" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-691">
                          <a href="/category/menu-tai-nguyen-rung/bao-ton-da-dang-sinh-hoc/">Bảo tồn đa dạng sinh học</a>
                        </li>
                        <li id="menu-item-693" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-693">
                          <a href="/category/menu-tai-nguyen-rung/he-thong-rung-dac-dung/">Hệ thống rừng đặc dụng</a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li id="menu-item-372" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-372 nav-dropdown-col">
                  <a>Quy hoạch, kế hoạch</a>
                  <ul class="sub-menu nav-column nav-dropdown-bold">
                    <li id="menu-item-699" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-699">
                      <a href="/category/menu-tai-nguyen-rung/quy-hoach/">Quy hoạch</a>
                    </li>
                    <li id="menu-item-700" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-700">
                      <a href="/category/menu-tai-nguyen-rung/quy-hoach-ke-hoach/">Quy hoạch, kế hoạch</a>
                    </li>
                    <li id="menu-item-698" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-698">
                      <a href="/category/menu-tai-nguyen-rung/chien-luoc-cong-trinh/">Chiến lược, công trình</a>
                    </li>
                    <li id="menu-item-405" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-405">
                      <a>KHCN &#038; HTQT</a>
                      <ul class="sub-menu nav-column nav-dropdown-bold">
                        <li id="menu-item-712" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-712">
                          <a href="/category/menu-tai-nguyen-rung/hoat-dong-khcn-mt/">Hoạt động KHCN &amp; MT</a>
                        </li>
                        <li id="menu-item-711" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-711">
                          <a href="/category/menu-tai-nguyen-rung/hoat-dong-htqt/">Hoạt động HTQT</a>
                        </li>
                        <li id="menu-item-710" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-710">
                          <a href="/category/menu-tai-nguyen-rung/chuong-trinh-du-an-htqt/">Chương trình, dự án HTQT</a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li id="menu-item-381" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-381 nav-dropdown-col">
                  <a>Bảo vệ rừng</a>
                  <ul class="sub-menu nav-column nav-dropdown-bold">
                    <li id="menu-item-717" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-717">
                      <a href="/category/menu-tai-nguyen-rung/hoat-dong-bao-ve-rung/">Hoạt động bảo vệ rừng</a>
                    </li>
                    <li id="menu-item-718" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-718">
                      <a href="/category/menu-tai-nguyen-rung/phong-chay-chua-chay-rung/">Phòng cháy, chữa cháy rừng</a>
                    </li>
                    <li id="menu-item-716" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-716">
                      <a href="/category/menu-tai-nguyen-rung/giao-rung-quan-ly-nuong-ray/">Giao rừng, quản lý nương rẫy</a>
                    </li>
                    <li id="menu-item-824" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-824">
                      <a>CITES</a>
                      <ul class="sub-menu nav-column nav-dropdown-bold">
                        <li id="menu-item-830" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-830">
                          <a href="/category/menu-tai-nguyen-rung/chuc-nang-nhiem-vu/">Chức năng nhiệm vụ</a>
                        </li>
                        <li id="menu-item-831" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-831">
                          <a href="/category/menu-tai-nguyen-rung/hoat-dong-cites/">Hoạt động CITES</a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
            <li id="menu-item-412" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-412 menu-item-design-default has-dropdown">
              <a class="nav-top-link">Chỉ đạo điều hành <i class="icon-angle-down"></i>
              </a>
              <ul class="sub-menu nav-dropdown nav-dropdown-bold">
                <li id="menu-item-772" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-772">
                  <a href="/cddh-van-ban-khac/">Văn bản khác</a>
                </li>
                <li id="menu-item-771" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-771">
                  <a href="/cddh-gop-y-van-ban/">Góp ý văn bản</a>
                </li>
              </ul>
            </li>
            <li id="menu-item-417" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-417 menu-item-design-default has-dropdown">
              <a class="nav-top-link">Hệ thống văn bản <i class="icon-angle-down"></i>
              </a>
              <ul class="sub-menu nav-dropdown nav-dropdown-bold">
                <li id="menu-item-419" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-419 nav-dropdown-col">
                  <a>Văn bản quy phạm pháp luật</a>
                  <ul class="sub-menu nav-column nav-dropdown-bold">
                    <li id="menu-item-1338" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1338">
                      <a href="/category/he-thong-van-ban/van-ban-quy-pham-phap-lat/luat/">Luật</a>
                    </li>
                    <li id="menu-item-1339" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1339">
                      <a href="/category/he-thong-van-ban/van-ban-quy-pham-phap-lat/nghi-dinh/">Nghị định</a>
                    </li>
                    <li id="menu-item-1340" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1340">
                      <a href="/category/he-thong-van-ban/van-ban-quy-pham-phap-lat/quyet-dinh/">Quyết định</a>
                    </li>
                    <li id="menu-item-1341" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1341">
                      <a href="/category/he-thong-van-ban/van-ban-quy-pham-phap-lat/thong-tu/">Thông tư</a>
                    </li>
                  </ul>
                </li>
                <li id="menu-item-418" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-418 nav-dropdown-col">
                  <a>Văn bản hành chính</a>
                  <ul class="sub-menu nav-column nav-dropdown-bold">
                    <li id="menu-item-1336" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1336">
                      <a href="/category/he-thong-van-ban/van-ban-hanh-chinh/cong-van-quyet-dinh/">Công văn, quyết định</a>
                    </li>
                    <li id="menu-item-1337" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1337">
                      <a href="/category/he-thong-van-ban/van-ban-hanh-chinh/van-ban-khac-van-ban-hanh-chinh/">Văn bản khác</a>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
            <li id="menu-item-808" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-808 menu-item-design-default">
              <a href="/category/chuyen-doi-so/" class="nav-top-link">Chuyển đổi số</a>
            </li>
            <li id="menu-item-454" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-454 menu-item-design-default has-dropdown">
              <a class="nav-top-link">Cải cách hành chính <i class="icon-angle-down"></i>
              </a>
              <ul class="sub-menu nav-dropdown nav-dropdown-bold">
                <li id="menu-item-450" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-450">
                  <a href="/he-thong-iso/">Hệ thống ISO</a>
                </li>
                <li id="menu-item-447" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-447">
                  <a href="/buu-chinh-cong-ich/">Bưu chính công ích</a>
                </li>
                <li id="menu-item-760" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-760">
                  <a target="_blank" rel="noopener noreferrer" href="https://dichvucong.gov.vn/p/home/dvc-tthc-trang-chu.html">Thủ tục hành chính</a>
                </li>
                <li id="menu-item-1471" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1471">
                  <a href="/category/cai-cach-hanh-chinh/cai-cach-hanh-chinh-cai-cach-hanh-chinh/">Cải cách hành chính</a>
                </li>
                <li id="menu-item-816" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-816">
                  <a href="/category/cai-cach-hanh-chinh/tin-tuc-cai-cach-hanh-chinh/">Tin tức cải cách hành chính</a>
                </li>
                <li id="menu-item-1472" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1472">
                  <a href="/category/cai-cach-hanh-chinh/van-ban-cai-cach-hanh-chinh/">Văn bản cải cách hành chính</a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="header-bg-container fill">
      <div class="header-bg-image fill"></div>
      <div class="header-bg-color fill"></div>
    </div>
  </div>
</header>
<div id="main-menu" class="mobile-sidebar no-scrollbar mfp-hide mobile-sidebar-slide mobile-sidebar-levels-1" data-levels="1">
  <div class="sidebar-menu no-scrollbar ">
    <ul class="nav nav-sidebar nav-vertical nav-uppercase nav-slide">
      <li class="header-search-form search-form html relative has-icon">
        <div class="header-search-form-wrapper">
          <div class="searchform-wrapper ux-search-box relative is-normal">
            <form method="get" class="searchform" action="/" role="search">
              <div class="flex-row relative">
                <div class="flex-col flex-grow">
                  <input type="search" class="search-field mb-0" name="s" value="" id="s" placeholder="Nhập từ khóa..." />
                </div>
                <div class="flex-col">
                  <button type="submit" class="ux-search-submit submit-button secondary button icon mb-0" aria-label="Submit">
                    <i class="icon-search"></i>
                  </button>
                </div>
              </div>
              <div class="live-search-results text-left z-top"></div>
            </form>
          </div>
        </div>
      </li>
      <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-63 current_page_item menu-item-316">
        <a href="/" aria-current="page">Trang chủ</a>
      </li>
      <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-317">
        <a>Giới thiệu</a>
        <ul class="sub-menu nav-sidebar-ul children">
          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-989">
            <a href="/chuc-nang-nhiem-vu/">Chức năng nhiệm vụ</a>
          </li>
          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-325">
            <a href="/gioi-thieu-quy-che/">Quy chế</a>
          </li>
          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-328">
            <a href="/gioi-thieu-lich-su-phat-trien/">Lịch sử phát triển</a>
          </li>
        </ul>
      </li>
      <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-330">
        <a>Tin tức sự kiện</a>
        <ul class="sub-menu nav-sidebar-ul children">
          <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-527">
            <a href="/category/menu-tin-tuc-su-kien/tin-tuc-su-kien/">Tin tức sự kiện</a>
          </li>
          <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-531">
            <a href="/category/menu-tin-tuc-su-kien/tin-tong-cuc-lam-nghiep/">Tin Tổng Cục Lâm nghiệp</a>
          </li>
          <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-642">
            <a href="/category/menu-tin-tuc-su-kien/tin-dia-phuong/">Tin địa phương</a>
          </li>
          <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-641">
            <a href="/category/tin-dau-thau/">Tin đấu thầu</a>
          </li>
          <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-643">
            <a href="/category/tin-tuyen-dung/">Tin tuyển dụng</a>
          </li>
        </ul>
      </li>
      <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-344">
        <a>Tài nguyên rừng</a>
        <ul class="sub-menu nav-sidebar-ul children">
          <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-363">
            <a>Tài nguyên rừng</a>
            <ul class="sub-menu nav-sidebar-ul">
              <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-655">
                <a href="/category/menu-tai-nguyen-rung/tai-nguyen-rung/">Tài nguyên rừng</a>
              </li>
              <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-656">
                <a href="/category/menu-tai-nguyen-rung/thuc-vat-rung/">Thực vật rừng</a>
              </li>
              <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-654">
                <a href="/category/menu-tai-nguyen-rung/dong-vat-rung/">Động vật rừng</a>
              </li>
              <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-671">
                <a>Sử dụng rừng</a>
                <ul class="sub-menu nav-sidebar-ul">
                  <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-677">
                    <a href="/category/menu-tai-nguyen-rung/su-dung-rung/">Sử dụng rừng</a>
                  </li>
                  <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-675">
                    <a href="/category/menu-tai-nguyen-rung/khai-thac/">Khai thác</a>
                  </li>
                  <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-674">
                    <a href="/category/menu-tai-nguyen-rung/che-bien-xnk-lam-san/">Chế biến XNK lâm sản</a>
                  </li>
                  <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-676">
                    <a href="/category/menu-tai-nguyen-rung/quan-ly-rung-ben-vung/">Quản lý rừng bền vững</a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-364">
            <a>Phát triển rừng</a>
            <ul class="sub-menu nav-sidebar-ul">
              <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-685">
                <a href="/category/menu-tai-nguyen-rung/giong-lam-nghiep/">Giống lâm nghiệp</a>
              </li>
              <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-686">
                <a href="/category/menu-tai-nguyen-rung/khuyen-lam/">Khuyến lâm</a>
              </li>
              <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-687">
                <a href="/category/menu-tai-nguyen-rung/trong-rung/">Trồng rừng</a>
              </li>
              <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-398">
                <a>Bảo tồn thiên nhiên</a>
                <ul class="sub-menu nav-sidebar-ul">
                  <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-692">
                    <a href="/category/menu-tai-nguyen-rung/bao-ton-thien-nhien/">Bảo tồn thiên nhiên</a>
                  </li>
                  <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-691">
                    <a href="/category/menu-tai-nguyen-rung/bao-ton-da-dang-sinh-hoc/">Bảo tồn đa dạng sinh học</a>
                  </li>
                  <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-693">
                    <a href="/category/menu-tai-nguyen-rung/he-thong-rung-dac-dung/">Hệ thống rừng đặc dụng</a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-372">
            <a>Quy hoạch, kế hoạch</a>
            <ul class="sub-menu nav-sidebar-ul">
              <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-699">
                <a href="/category/menu-tai-nguyen-rung/quy-hoach/">Quy hoạch</a>
              </li>
              <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-700">
                <a href="/category/menu-tai-nguyen-rung/quy-hoach-ke-hoach/">Quy hoạch, kế hoạch</a>
              </li>
              <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-698">
                <a href="/category/menu-tai-nguyen-rung/chien-luoc-cong-trinh/">Chiến lược, công trình</a>
              </li>
              <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-405">
                <a>KHCN &#038; HTQT</a>
                <ul class="sub-menu nav-sidebar-ul">
                  <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-712">
                    <a href="/category/menu-tai-nguyen-rung/hoat-dong-khcn-mt/">Hoạt động KHCN &amp; MT</a>
                  </li>
                  <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-711">
                    <a href="/category/menu-tai-nguyen-rung/hoat-dong-htqt/">Hoạt động HTQT</a>
                  </li>
                  <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-710">
                    <a href="/category/menu-tai-nguyen-rung/chuong-trinh-du-an-htqt/">Chương trình, dự án HTQT</a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-381">
            <a>Bảo vệ rừng</a>
            <ul class="sub-menu nav-sidebar-ul">
              <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-717">
                <a href="/category/menu-tai-nguyen-rung/hoat-dong-bao-ve-rung/">Hoạt động bảo vệ rừng</a>
              </li>
              <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-718">
                <a href="/category/menu-tai-nguyen-rung/phong-chay-chua-chay-rung/">Phòng cháy, chữa cháy rừng</a>
              </li>
              <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-716">
                <a href="/category/menu-tai-nguyen-rung/giao-rung-quan-ly-nuong-ray/">Giao rừng, quản lý nương rẫy</a>
              </li>
              <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-824">
                <a>CITES</a>
                <ul class="sub-menu nav-sidebar-ul">
                  <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-830">
                    <a href="/category/menu-tai-nguyen-rung/chuc-nang-nhiem-vu/">Chức năng nhiệm vụ</a>
                  </li>
                  <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-831">
                    <a href="/category/menu-tai-nguyen-rung/hoat-dong-cites/">Hoạt động CITES</a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
        </ul>
      </li>
      <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-412">
        <a>Chỉ đạo điều hành</a>
        <ul class="sub-menu nav-sidebar-ul children">
          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-772">
            <a href="/cddh-van-ban-khac/">Văn bản khác</a>
          </li>
          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-771">
            <a href="/cddh-gop-y-van-ban/">Góp ý văn bản</a>
          </li>
        </ul>
      </li>
      <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-417">
        <a>Hệ thống văn bản</a>
        <ul class="sub-menu nav-sidebar-ul children">
          <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-419">
            <a>Văn bản quy phạm pháp luật</a>
            <ul class="sub-menu nav-sidebar-ul">
              <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1338">
                <a href="/category/he-thong-van-ban/van-ban-quy-pham-phap-lat/luat/">Luật</a>
              </li>
              <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1339">
                <a href="/category/he-thong-van-ban/van-ban-quy-pham-phap-lat/nghi-dinh/">Nghị định</a>
              </li>
              <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1340">
                <a href="/category/he-thong-van-ban/van-ban-quy-pham-phap-lat/quyet-dinh/">Quyết định</a>
              </li>
              <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1341">
                <a href="/category/he-thong-van-ban/van-ban-quy-pham-phap-lat/thong-tu/">Thông tư</a>
              </li>
            </ul>
          </li>
          <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-418">
            <a>Văn bản hành chính</a>
            <ul class="sub-menu nav-sidebar-ul">
              <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1336">
                <a href="/category/he-thong-van-ban/van-ban-hanh-chinh/cong-van-quyet-dinh/">Công văn, quyết định</a>
              </li>
              <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1337">
                <a href="/category/he-thong-van-ban/van-ban-hanh-chinh/van-ban-khac-van-ban-hanh-chinh/">Văn bản khác</a>
              </li>
            </ul>
          </li>
        </ul>
      </li>
      <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-808">
        <a href="/category/chuyen-doi-so/">Chuyển đổi số</a>
      </li>
      <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-454">
        <a>Cải cách hành chính</a>
        <ul class="sub-menu nav-sidebar-ul children">
          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-450">
            <a href="/he-thong-iso/">Hệ thống ISO</a>
          </li>
          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-447">
            <a href="/buu-chinh-cong-ich/">Bưu chính công ích</a>
          </li>
          <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-760">
            <a target="_blank" rel="noopener noreferrer" href="https://dichvucong.gov.vn/p/home/dvc-tthc-trang-chu.html">Thủ tục hành chính</a>
          </li>
          <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1471">
            <a href="/category/cai-cach-hanh-chinh/cai-cach-hanh-chinh-cai-cach-hanh-chinh/">Cải cách hành chính</a>
          </li>
          <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-816">
            <a href="/category/cai-cach-hanh-chinh/tin-tuc-cai-cach-hanh-chinh/">Tin tức cải cách hành chính</a>
          </li>
          <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1472">
            <a href="/category/cai-cach-hanh-chinh/van-ban-cai-cach-hanh-chinh/">Văn bản cải cách hành chính</a>
          </li>
        </ul>
      </li>
      <li class="html header-social-icons ml-0">
        <div class="social-icons follow-icons">
          @if (Auth::user())
          <a href="/admin/tintuc" target="_blank" rel="noopener noreferrer nofollow" class="icon plain tooltip" title="Quản Trị">
            <i class="fa-solid fa-gears"></i>
          </a> | 
          @else
          <a href="/login" target="_blank" rel="noopener noreferrer nofollow" class="icon plain tooltip" title="Đăng Nhập">
            <i class="icon-user"></i>
          </a> | 
          @endif
          <a href="https://www.facebook.com/lamnghiep4.0" target="_blank" data-label="Facebook" rel="noopener noreferrer nofollow" class="icon plain facebook tooltip" title="Follow on Facebook">
            <i class="icon-facebook"></i>
          </a>
          <a href="mailto:info@ifee.edu.vn" data-label="E-mail" rel="nofollow" class="icon plain  email tooltip" title="Send us an email">
            <i class="icon-envelop"></i>
          </a>
          <a href="tel:+842466830212" target="_blank" data-label="Phone" rel="noopener noreferrer nofollow" class="icon plain  phone tooltip" title="Call us">
            <i class="icon-phone"></i>
          </a>
          <a href="https://www.youtube.com/channel/UCMMHXxI1RsJbNj1KjhnMZKQ" target="_blank" rel="noopener noreferrer nofollow" data-label="YouTube" class="icon plain  youtube tooltip" title="Follow on YouTube">
            <i class="icon-youtube"></i>
          </a>
        </div>
      </li>
    </ul>
  </div>
</div>