<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
    <!-- Brand Logo -->
    <div class="sidebar-brand">
    <a href="index3.html" class="brand-link">
      <img src="{{ asset("admin/dist/img/AdminLTELogo.png") }}" alt="AdminLTE Logo" class="brand-image rounded-circle shadow" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin Panel</span>
    </a>
    </div>

    <!-- Sidebar -->
    <div class="sidebar-wrapper">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset("admin/dist/img/user2-160x160.jpg") }}" class="rounded-circle shadow-sm" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ auth()->user()->name }}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="d-flex">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">

          <li class="nav-item">
            <a href="{{ route('admin.dashboard') }}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Home
              </p>
            </a>
          </li>

          {{-- @php
              dd($permissions);
          @endphp --}}
          @if (in_array("simple-link",$permissions))
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Simple Link
                <span class="badge text-bg-danger float-end">New</span>
              </p>
            </a>
          </li>
          @endif


          <li class="nav-item">
            <a href="{{ url('log-viewer') }}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Log View
                <span class="badge text-bg-danger float-end">New</span>
              </p>
            </a>
          </li>
          @if (in_array("role-create",$permissions))
          <li class="nav-item menu-open">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-solid fa-user-lock"></i>
              <p>
                Security
                <i class="nav-arrow fas fa-angle-right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin.roles.index') }}" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Role</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.permissions.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Permission</p>
                </a>
              </li>
            </ul>
          </li>
          @endif
          @if (in_array("admin-create",$permissions))
          <li class="nav-item menu-open">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Users
                <i class="nav-arrow fas fa-angle-right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin.admins.index') }}" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Admin</p>
                </a>
              </li>

            </ul>
          </li>
          @endif
          <li class="nav-item">
            <form action="{{ route("admin.logout") }}" method="POST">
                @csrf
                <button class="nav-link btn btn-sm btn-success text-light">Logout</button>
            </form>

          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
