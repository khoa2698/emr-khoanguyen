<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('emr.dashboard') }}" class="brand-link">
      <img src="/assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">EMR - KN</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ auth()->user()->name }}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
               {{-- Quản lý hành chính --}}
          <li class="nav-item">
            <a href="#" class="nav-link">
              {{-- <i class="nav-icon fas fa-tachometer-alt"></i> --}}
              {{-- <i class="nav-icon fas fa-bars"></i> --}}
              <i class="nav-icon fas fa-user-circle"></i>
              <p>
                Quản lý hành chính
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('patient.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh sách bệnh nhân</p>
                </a>
              </li>
            </ul>
          </li>

          {{-- Quản lý Account --}}
          <li class="nav-item">
            <a href="#" class="nav-link">
              {{-- <i class="nav-icon fas fa-tachometer-alt"></i> --}}
              {{-- <i class="nav-icon fas fa-bars"></i> --}}
              <i class="nav-icon fas fa-user-circle"></i>
              <p>
                @lang('Account Management')
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('account.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>@lang('Account List')</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('permission.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>@lang('List of permission group')</p>
                </a>
              </li>

            </ul>
          </li>

          {{-- Quản lý Lịch Hẹn --}}
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user-circle"></i>
              <p>
                @lang('Appointment Management')
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('appointment.showPatientAccepted') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>@lang('New Appointment')</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('appointment.showPatientPending') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>@lang('Pending Appointment')</p>
                </a>
              </li>

            </ul>
          </li>

          {{-- Đăng xuất --}}
          <li class="nav-item menu-open">
            <form action="{{ route('auth.logout.post') }}" method="post">
              @csrf
              <button type="submit" class="nav-link">
                <i class="nav-icon fas fa-sign-out-alt"></i>
                <p>
                  @lang('Log out')
                </p>
              </button>
            </form>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>