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
            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-63 current_page_item menu-item-316  menu-item-design-default">
              <a href="/gioi-thieu" aria-current="page" class="nav-top-link">Giới Thiệu</a>
            </li>
            <li id="menu-item-344" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-344 menu-item-design-default has-dropdown">
              <a class="nav-top-link">Tin tức tổng hợp <i class="icon-angle-down"></i>
              </a>
              <ul class="sub-menu nav-dropdown nav-dropdown-bold">
                @php
                  $header_loaitt = App\LoaiTinTuc::all();
                  $itemCount = count($header_loaitt);
                @endphp

                @for ($i = 0; $i < $itemCount; $i++)
                  @if ($i % 10 === 0)
                      <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-363 nav-dropdown-col">
                          <ul class="sub-menu nav-column nav-dropdown-bold">
                  @endif
                      <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-655">
                          <a href="/van-ban/{{ $header_loaitt[$i]->slug }}">{{ $header_loaitt[$i]->tenloaitt }}</a>
                      </li>
                  @if (($i + 1) % 10 === 0 || ($i + 1) === $itemCount)
                          </ul>
                      </li>
                  @endif
                @endfor
              </ul>
            </li>
            <li id="menu-item-417" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-417 menu-item-design-default has-dropdown">
              <a class="nav-top-link">Hệ thống văn bản <i class="icon-angle-down"></i>
              </a>
              <ul class="sub-menu nav-dropdown nav-dropdown-bold">
                @php
                  $header_loaivb = App\LoaiVanBan::all();
                  $itemCountVB = count($header_loaivb);
                @endphp

                @for ($i = 0; $i < $itemCountVB; $i++)
                  @if ($i % 10 === 0)
                      <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-363 nav-dropdown-col">
                          <ul class="sub-menu nav-column nav-dropdown-bold">
                  @endif
                      <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-655">
                          <a href="/van-ban/{{ $header_loaivb[$i]->slug }}">{{ $header_loaivb[$i]->tenloaivb }}</a>
                      </li>
                  @if (($i + 1) % 10 === 0 || ($i + 1) === $itemCountVB)
                          </ul>
                      </li>
                  @endif
                @endfor
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
      <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-63 current_page_item menu-item-316">
        <a href="/gioi-thieu" aria-current="page">Giới Thiệu</a>
      </li>
      <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-344">
        <a>Tin tức tổng hợp</a>
        <ul class="sub-menu nav-sidebar-ul children">
          @for ($i = 0; $i < $itemCount; $i++)
            @if ($i % 10 === 0)
                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-363 nav-dropdown-col">
                    <ul class="sub-menu nav-column nav-dropdown-bold">
            @endif
                <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-655">
                    <a href="/van-ban/{{ $header_loaitt[$i]->slug }}">{{ $header_loaitt[$i]->tenloaitt }}</a>
                </li>
            @if (($i + 1) % 10 === 0 || ($i + 1) === $itemCount)
                    </ul>
                </li>
            @endif
          @endfor
        </ul>
      </li>
      <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-417">
        <a>Hệ thống văn bản</a>
        <ul class="sub-menu nav-sidebar-ul children">
          @for ($i = 0; $i < $itemCountVB; $i++)
            @if ($i % 10 === 0)
                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-363 nav-dropdown-col">
                    <ul class="sub-menu nav-column nav-dropdown-bold">
            @endif
                <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-655">
                    <a href="/van-ban/{{ $header_loaivb[$i]->slug }}">{{ $header_loaivb[$i]->tenloaivb }}</a>
                </li>
            @if (($i + 1) % 10 === 0 || ($i + 1) === $itemCountVB)
                    </ul>
                </li>
            @endif
          @endfor
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