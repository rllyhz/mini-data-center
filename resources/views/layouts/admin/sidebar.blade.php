<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/admin') }}" class="brand-link">
        <i class="fas fa-university mr-2"></i>
        <span class="brand-text font-weight-light">{{ config('app.name', 'DataCenter') }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        
          <li class="nav-header">DASHBOARD</li>
          <li class="nav-item">
            <a href="{{ url('/admin') }}" class="nav-link">
              <i class="nav-icon fas fa-columns"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('profile.index') }}" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>Profile</p>
            </a>
          </li>

          <li class="nav-header">USERS</li>
          <li class="nav-item">
            <a href="{{ route('admin.manage.users.index') }}" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>Manage Users</p>
            </a>
          </li>
          
          <li class="nav-header">KELOLA DATA</li>
          <li class="nav-item">
              <a href="{{ route('admin.pendidikan') }}" class="nav-link">
                <i class="nav-icon fas fa-school"></i>
                  <p>Pendidikan</p>
              </a>
          </li>
          <li class="nav-item">
              <a href="{{ route('admin.kesehatan') }}" class="nav-link">
                <i class="nav-icon fas fa-chart-bar"></i>
                  <p>Kesehatan</p>
              </a>
          </li>
          <li class="nav-item">
              <a href="{{ url('/admin/category/sosial') }}" class="nav-link">
                <i class="nav-icon fas fa-city"></i>
                  <p>Sosial</p>
              </a>
          </li>
          <!-- /.nav-item -->
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>