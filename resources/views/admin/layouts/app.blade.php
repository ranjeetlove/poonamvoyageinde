<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
	
  <title>Admin Panel -  Poonam Voyage Inde</title>
  <!-- Favicon Icon -->
 
  <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/logo.png')}}">

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('admin/css/all.min.css')}}" type="text/css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('admin/css/style.min.css')}}" type="text/css">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="{{asset('admin/css/style.css')}}" type="text/css">
  <script src="//cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>

  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js"></script>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  @if(request()->is('admin/coupons/create') || request()->is('admin/orders'))

  @else
    <script src="{{asset('admin/js/jquery.min.js')}}"></script>
  @endif
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{url('admin/home')}}" class="nav-link">Home</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">

      </div>
    </form>

    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item">
        <div class="row">
          <div class="col-md-4">
            <a href="{{route('admin-logout')}}"
                 class="nav-link">
                Logout
            </a>
           
          </div>
        </div>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('admin/home') }}" class="brand-link">
      <img src="{{asset('admin/images/logo.jpg')}}" alt="AdminLTE Logo" class="brand-image";>
      <span class="brand-text font-weight-light">Admin Panel</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('admin/images/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{@Auth::user()->name}}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{url('admin/home')}}" class="nav-link {{ request()->is('admin/home') ? 'active' : '' }}">
              <i class="nav-icon fas fa-warehouse"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

          <li class="nav-item">
                <a href="{{url('admin/leads')}}" class="nav-link {{ request()->is('admin/leads') ? 'active' : '' }}">
                  <i class="nav-icon far fa-chart-bar" aria-hidden="true"></i>
                  <p>
                    Leads
                  </p>
                </a>
          </li>

          <li class="nav-item">
              <a href="{{url('admin/banners')}}" class="nav-link {{ request()->is('admin/banners') ? 'active' : '' }}">
                <i class="nav-icon fas fa-image"></i>
                <p>
                  Banners
                </p>
              </a>
            </li>
            <li class="nav-item">
                <a href="{{url('admin/blog')}}" class="nav-link {{ request()->is('admin/blog') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-th"></i>
                  <p>
                    Blog
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('admin/region')}}" class="nav-link {{ request()->is('admin/region') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-globe"></i>
                  <p>
                   Region
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('admin/tour')}}" class="nav-link {{ request()->is('admin/tour') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-plane"></i>
                  <p>
                  Tour
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('admin/testimonial')}}" class="nav-link {{ request()->is('admin/testimonial') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-users"></i>
                  <p>
                    Testimonial
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('admin/video')}}" class="nav-link {{ request()->is('admin/video') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-video"></i>
                  <p>
                    Video
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{url('admin/contact')}}" class="nav-link {{ request()->is('admin/contact') ? 'active' : '' }}">
                  <i class="nav-icon far fa-envelope"></i>
                  <p>
                    Contact Us
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{url('admin/about')}}" class="nav-link {{ request()->is('admin/about') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-user"></i>
                  <p>
                   About Us
                  </p>
                </a>
              </li>

            <!-- <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                Contact Us
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="display: none;">
              <li class="nav-item">
                <a href="pages/charts/chartjs.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ChartJS</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/charts/flot.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Flot</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/charts/inline.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inline</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/charts/uplot.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>uPlot</p>
                </a>
              </li>
            </ul>
          </li> -->
          </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">

      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
   @yield('content')
  </div>
  <!-- /.content-wrapper -->
  <!-- Main Footer -->
  <footer class="main-footer">

    <!-- Default to the left -->
    <strong>Copyright &copy; 2020 <a target="_blank" href="https://webdigitalmantra.in/">Web Digital Mantra</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<script src="{{asset('admin/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('admin/js/adminlte.min.js')}}"></script>
@yield('script')
</body>
</html>
