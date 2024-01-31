<div class="pre-loader">
  <div class="pre-loader-box">
    <div class="loader-logo">
      <img src="{{ asset('/img/logo-1.png') }}" alt="" />
    </div>
    <div class="loader-progress" id="progress_div">
      <div class="bar" id="bar1" style="background-color: #159a2b"></div>
    </div>
    <div class="percent" id="percent1">0%</div>
    <div class="loading-text">Đang tải...</div>
  </div>
</div>

<div class="header">
  <div class="header-left">
    <div class="menu-icon bi bi-list"></div>
  </div>
  <div class="header-right">
    {{-- <div class="dashboard-setting user-notification">
      <div class="dropdown">
        <a class="dropdown-toggle no-arrow" href="javascript:;" data-toggle="right-sidebar">
          <i class="dw dw-settings2"></i>
        </a>
      </div>
    </div> --}}
    <div class="user-info-dropdown">
      <div class="dropdown">
        <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
          <span class="user-icon">
            @php
                $path = null;
            @endphp
            @if ($path != null)
            <img style="height: 50px; width: 55px;" src="{{ '/'.$path }}" alt="" />
            @else
            <img src="{{ asset('/img/user.png') }}" alt="" />
            @endif
            
          </span>
          <span class="user-name">
            {{ Auth::user()->username }}
        </span>
        </a>
        @php
            $id = Session::get('loginId');
        @endphp
        <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
          <a class="dropdown-item" href="/admin/user/change_pass"><i class="dw dw-user1"></i> Tài khoản</a>
          
          <a class="dropdown-item" href="/logout"><i class="dw dw-logout"></i> Đăng Xuất</a>
        </div>
      </div>
    </div>
  </div>
</div>