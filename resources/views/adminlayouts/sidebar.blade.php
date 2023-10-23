<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/') }}" class="brand-link">
      {{-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> --}}
      <span class="brand-text font-weight-light">Besterio</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-shopping-cart"></i>
              <p>
                Products
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">

              <li class="nav-item">
                <a href="{{ url('/admin/add/product') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Product</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('product.update') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Edit Product</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ url('/admin/products') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Products Table</p>
                </a>
              </li>
            </ul>

        </li>
        <br><br>
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-user"></i>
              <p>
                User
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">

              <li class="nav-item">
                <a href="{{ route('users.update') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Edit User</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ url('/admin/users') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Users Table</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
        </div>
</aside>
<div class="content-wrapper">
