<div class="left-side-bar">
  <div class="brand-logo">
    <a href="/">
      <img src="{{ asset('/img/logo-1.png') }}" alt="" class="dark-logo" />
      <img src="{{ asset('/img/logo-1.png') }}" alt="" class="light-logo" />
      {{-- <h3>Cúc Phương</h3> --}}
    </a>
    <div class="close-sidebar" data-toggle="left-sidebar-close">
      <i class="ion-close-round"></i>
    </div>
  </div>
  <div class="menu-block customscroll">
    <div class="sidebar-menu">
      <ul id="accordion-menu">
        {{-- <li>
          <div class="sidebar-small-cap">Thống Kê</div>
        </li> --}}
        <li class="{{ Str::contains(Request::url(), '/admin/home') ? 'active' : '' }}">
          <a href="/admin/home" class="dropdown-toggle no-arrow {{ Str::contains(Request::url(), '/admin/home') ? 'active' : '' }}">
            <span class="micon icon-copy fa fa-home"></span><span class="mtext">Trang Chủ</span>
          </a>
        </li>
        <li>
          <div class="dropdown-divider"></div>
        </li>
        <li>
          <div class="sidebar-small-cap">Quản Lý Bài Giới Thiệu</div>
        </li>
        <li class="{{ Str::contains(Request::url(), '/admin/gioithieu/gtc/edit') ? 'active' : '' }}">
          <a href="/admin/gioithieu/gtc/edit" class="dropdown-toggle no-arrow {{ Str::contains(Request::url(), '/admin/gioithieu/gtc/edit') ? 'active' : '' }}">
            <span class="micon icon-copy fa fa-bullhorn"></span><span class="mtext">Giới Thiệu Chung</span>
          </a>
        </li>
        <li>
          <div class="dropdown-divider"></div>
        </li>
        <li>
          <div class="sidebar-small-cap">Quản Lý Văn Bản</div>
        </li>
        {{-- <li class="dropdown">
          <a href="javascript:;" class="dropdown-toggle">
            <span class="micon icon-copy dw dw-branch"></span><span class="mtext">Thực Vật</span>
          </a>
          <ul class="submenu">
            <li class="{{ Str::contains(Request::url(), '/thuc-vat-manager') ? 'active' : '' }}"><a class="{{ Str::contains(Request::url(), '/thuc-vat-manager') ? 'active' : '' }}" href="/thuc-vat-manager">Danh Sách</a></li>
            <li class="{{ Str::contains(Request::url(), '/mv_thucvat') ? 'active' : '' }}"><a class="{{ Str::contains(Request::url(), '/mv_thucvat') ? 'active' : '' }}" href="/mv_thucvat">Mẫu Vật</a></li>
          </ul>
        </li> --}}

        <li class="{{ Str::contains(Request::url(), '/admin/linhvuc') ? 'active' : '' }}">
          <a href="/admin/linhvuc" class="dropdown-toggle no-arrow {{ Str::contains(Request::url(), '/admin/linhvuc') ? 'active' : '' }}">
            <span class="micon icon-copy bi bi-file-check"></span><span class="mtext">Lĩnh Vực</span>
          </a>
        </li>
        <li class="{{ Str::contains(Request::url(), '/admin/loaivb') ? 'active' : '' }}">
          <a href="/admin/loaivb" class="dropdown-toggle no-arrow {{ Str::contains(Request::url(), '/admin/loaivb') ? 'active' : '' }}">
            <span class="micon icon-copy bi bi-file-earmark-break"></span><span class="mtext">Loại Văn Bản</span>
          </a>
        </li>
        <li class="{{ Str::contains(Request::url(), '/admin/vanban') ? 'active' : '' }}">
          <a href="/admin/vanban" class="dropdown-toggle no-arrow {{ Str::contains(Request::url(), '/admin/vanban') ? 'active' : '' }}">
            <span class="micon icon-copy bi bi-file-earmark-pdf"></span><span class="mtext">Văn Bản</span>
          </a>
        </li>

        <li>
          <div class="dropdown-divider"></div>
        </li>
        <li>
          <div class="sidebar-small-cap">Quản Lý Tin Tức</div>
        </li>
        <li class="{{ Str::contains(Request::url(), '/admin/loaitt') ? 'active' : '' }}">
          <a href="/admin/loaitt" class="dropdown-toggle no-arrow {{ Str::contains(Request::url(), '/admin/loaitt') ? 'active' : '' }}">
            <span class="micon icon-copy bi bi-journal-richtext"></span><span class="mtext">Loại Tin Tức</span>
          </a>
        </li>
        <li class="{{ Str::contains(Request::url(), '/admin/tintuc') ? 'active' : '' }}">
          <a href="/admin/tintuc" class="dropdown-toggle no-arrow {{ Str::contains(Request::url(), '/admin/tintuc') ? 'active' : '' }}">
            <span class="micon icon-copy bi bi-layout-text-window-reverse"></span><span class="mtext">Tin Tức</span>
          </a>
        </li>

        {{-- <li>
          <div class="dropdown-divider"></div>
        </li>
        <li>
          <div class="sidebar-small-cap">Quản Lý Tài Khoản</div>
        </li>
        <li class="{{ Str::contains(Request::url(), '/admin/user') ? 'active' : '' }}">
          <a href="/admin/user" class="dropdown-toggle no-arrow {{ Str::contains(Request::url(), '/admin/user') ? 'active' : '' }}">
            <span class="micon icon-copy bi bi-person-lines-fill"></span><span class="mtext">Quản Lý Người Dùng</span>
          </a>
        </li> --}}
      </ul>
    </div>
  </div>
</div>
<div class="mobile-menu-overlay"></div>