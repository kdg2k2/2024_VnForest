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
  <body class="post-template-default single single-post postid-889 single-format-standard _masterslider _ms_version_3.9.5 header-shadow lightbox nav-dropdown-has-arrow nav-dropdown-has-shadow nav-dropdown-has-border mobile-submenu-slide mobile-submenu-slide-levels-1 mobile-submenu-toggle">
    <a class="skip-link screen-reader-text" href="#main">Skip to content</a>
    <div id="wrapper">
        @include('pages.partials.header')
        <main id="main" class="">
        <div id="content" class="blog-wrapper blog-single page-wrapper">
          <div class="row row-large row-divided ">
            <div class="large-9 col">
              <article id="post-889" class="post-889 post type-post status-publish format-standard has-post-thumbnail hentry category-tin-tong-cuc-lam-nghiep">
                <div class="article-inner ">
                  <header class="entry-header">
                    <div class="entry-header-text entry-header-text-top text-left">
                      <h6 class="entry-category is-xsmall">
                        <a href="/van-ban/search?loaivb={{ $data->loaivb->id }}" rel="category tag">{{ $data->loaivb->tenloaivb }}</a> | 
                        <a href="/van-ban/search?linhvuc={{ $data->linhvuc->id }}" rel="category tag">{{ $data->linhvuc->tenlinhvuc }}</a>
                      </h6>
                      <h1 class="entry-title">{{ $data->tenvb }}</h1>
                      <div class="entry-divider is-divider small"></div>
                      <div class="entry-meta uppercase is-xsmall">
                        <span class="posted-on">Thời gian đăng tải <time class="entry-date published updated" datetime="{{ $data->created_at }}">{{ $data->created_at ? $data->created_at : '...' }}</time>
                        </span>
                        <span class="byline"> bởi <span class="meta-author vcard">
                            {{-- <a class="url fn n" href="https://vnforest1.xuanmaijsc.vn/author/admin/">admin</a> --}}
                            <span>{{ $data->user->username }}</span>
                          </span>
                        </span>
                      </div>
                    </div>
                  </header>
                  <div class="entry-content single-page">
                    <table>
                      <thead>
                        <th>Số Hiệu</th>
                        <th>Năm Phát Hành</th>
                        <th>Đơn Vị Phát Hành</th>
                        <th style="text-align: center">Hành Động</th>
                      </thead>
                      <tbody>
                        <tr>
                          <td>{{ $data->sohieu }}</td>
                          <td>{{ $data->namphathanh }}</td>
                          <td>{{ $data->donviphathanh }}</td>
                          <td>
                            <div style="display: flex; justify-content: center;">
                              <a target="_blank" href="/van-ban/view/{{ $data->slug }}" class="btn-sm btn-info" style="margin-right: 5px"><i class="fa-solid fa-eye"></i></a>
                              <a href="/van-ban/download/{{ $data->slug }}" class="btn-sm btn-success"><i class="fa-solid fa-download"></i></a>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                    <div class="blog-share text-center">
                      <div class="is-divider medium"></div>
                      <div class="social-icons share-icons share-row relative">
                        <a href="whatsapp://send?text=H%E1%BB%8Dp%20h%E1%BB%99i%20%C4%91%E1%BB%93ng%20qu%E1%BA%A3n%20l%C3%BD%20Qu%E1%BB%B9%20B%E1%BA%A3o%20v%E1%BB%87%20v%C3%A0%20ph%C3%A1t%20tri%E1%BB%83n%20r%E1%BB%ABng%20Vi%E1%BB%87t%20Nam%20l%E1%BA%A7n%201%20n%C4%83m%202024 - https://vnforest1.xuanmaijsc.vn/2024/01/23/hop-hoi-dong-quan-ly-quy-bao-ve-va-phat-trien-rung-viet-nam-lan-1-nam-2024/" data-action="share/whatsapp/share" class="icon button circle is-outline tooltip whatsapp show-for-medium" title="Share on WhatsApp">
                          <i class="icon-whatsapp"></i>
                        </a>
                        <a href="//www.facebook.com/sharer.php?u=https://vnforest1.xuanmaijsc.vn/2024/01/23/hop-hoi-dong-quan-ly-quy-bao-ve-va-phat-trien-rung-viet-nam-lan-1-nam-2024/" data-label="Facebook" onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;" rel="noopener noreferrer nofollow" target="_blank" class="icon button circle is-outline tooltip facebook" title="Share on Facebook">
                          <i class="icon-facebook"></i>
                        </a>
                        <a href="//twitter.com/share?url=https://vnforest1.xuanmaijsc.vn/2024/01/23/hop-hoi-dong-quan-ly-quy-bao-ve-va-phat-trien-rung-viet-nam-lan-1-nam-2024/" onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;" rel="noopener noreferrer nofollow" target="_blank" class="icon button circle is-outline tooltip twitter" title="Share on Twitter">
                          <i class="icon-twitter"></i>
                        </a>
                        <a href="mailto:enteryour@addresshere.com?subject=H%E1%BB%8Dp%20h%E1%BB%99i%20%C4%91%E1%BB%93ng%20qu%E1%BA%A3n%20l%C3%BD%20Qu%E1%BB%B9%20B%E1%BA%A3o%20v%E1%BB%87%20v%C3%A0%20ph%C3%A1t%20tri%E1%BB%83n%20r%E1%BB%ABng%20Vi%E1%BB%87t%20Nam%20l%E1%BA%A7n%201%20n%C4%83m%202024&amp;body=Check%20this%20out:%20https://vnforest1.xuanmaijsc.vn/2024/01/23/hop-hoi-dong-quan-ly-quy-bao-ve-va-phat-trien-rung-viet-nam-lan-1-nam-2024/" rel="nofollow" class="icon button circle is-outline tooltip email" title="Email to a Friend">
                          <i class="icon-envelop"></i>
                        </a>
                        <a href="//pinterest.com/pin/create/button/?url=https://vnforest1.xuanmaijsc.vn/2024/01/23/hop-hoi-dong-quan-ly-quy-bao-ve-va-phat-trien-rung-viet-nam-lan-1-nam-2024/&amp;media=https://vnforest1.xuanmaijsc.vn/wp-content/uploads/2024/01/downloa.jpg&amp;description=H%E1%BB%8Dp%20h%E1%BB%99i%20%C4%91%E1%BB%93ng%20qu%E1%BA%A3n%20l%C3%BD%20Qu%E1%BB%B9%20B%E1%BA%A3o%20v%E1%BB%87%20v%C3%A0%20ph%C3%A1t%20tri%E1%BB%83n%20r%E1%BB%ABng%20Vi%E1%BB%87t%20Nam%20l%E1%BA%A7n%201%20n%C4%83m%202024" onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;" rel="noopener noreferrer nofollow" target="_blank" class="icon button circle is-outline tooltip pinterest" title="Pin on Pinterest">
                          <i class="icon-pinterest"></i>
                        </a>
                        <a href="//www.linkedin.com/shareArticle?mini=true&url=https://vnforest1.xuanmaijsc.vn/2024/01/23/hop-hoi-dong-quan-ly-quy-bao-ve-va-phat-trien-rung-viet-nam-lan-1-nam-2024/&title=H%E1%BB%8Dp%20h%E1%BB%99i%20%C4%91%E1%BB%93ng%20qu%E1%BA%A3n%20l%C3%BD%20Qu%E1%BB%B9%20B%E1%BA%A3o%20v%E1%BB%87%20v%C3%A0%20ph%C3%A1t%20tri%E1%BB%83n%20r%E1%BB%ABng%20Vi%E1%BB%87t%20Nam%20l%E1%BA%A7n%201%20n%C4%83m%202024" onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;" rel="noopener noreferrer nofollow" target="_blank" class="icon button circle is-outline tooltip linkedin" title="Share on LinkedIn">
                          <i class="icon-linkedin"></i>
                        </a>
                        <a href="#" onclick="printPage();return false;" class="icon button circle is-outline tooltip facebook tooltipstered">
                          <i class="fas fa-print"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                  <nav role="navigation" id="nav-below" class="navigation-post">
                    <div class="flex-row next-prev-nav bt bb">
                      <div class="flex-col flex-grow nav-prev text-left">
                        <div class="nav-previous">
                          <a href="https://vnforest1.xuanmaijsc.vn/2024/01/23/vuon-quoc-gia-cuc-phuong-lan-thu-5-lien-tiep-duoc-vinh-danh-la-vuon-quoc-gia-hang-dau-chau-a/" rel="prev">
                            <span class="hide-for-small">
                              <i class="icon-angle-left"></i>
                            </span> Vườn quốc gia Cúc Phương lần thứ 5 liên tiếp được vinh danh là Vườn quốc gia hàng đầu Châu Á </a>
                        </div>
                      </div>
                      <div class="flex-col flex-grow nav-next text-right">
                        <div class="nav-next">
                          <a href="https://vnforest1.xuanmaijsc.vn/2024/01/23/tuyen-quang-tiep-tuc-phat-trien-rung-gan-voi-phat-trien-kinh-te-lam-nghiep-ben-vung/" rel="next">Tuyên Quang tiếp tục phát triển rừng gắn với phát triển kinh tế lâm nghiệp bền vững <span class="hide-for-small">
                              <i class="icon-angle-right"></i>
                            </span>
                          </a>
                        </div>
                      </div>
                    </div>
                  </nav>
                </div>
              </article>
              <div id="comments" class="comments-area"></div>
            </div>
            <div class="post-sidebar large-3 col">
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
    </div>
    @include('pages.partials.footer')
  </body>
</html>