  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <span class="brand-text font-weight-light">Kiders</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
   

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
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('dashoboard.class') }}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    school classes management</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('dashoboard.testemonial.index') }}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
<<<<<<< HEAD
                    testemonial</p>
=======
                    school classes management</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('dashoboard.popularteacher.index') }}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                     add popular teacher</p>
>>>>>>> origin/master
                </a>
              </li>
             
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>