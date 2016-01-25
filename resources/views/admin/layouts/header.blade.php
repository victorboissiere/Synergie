<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>{{ get_global_settings('admin_title') }}</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link href="{{ asset('admin-theme/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- font Awesome -->
    <link href="{{ asset('admin-theme/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="{{ asset('admin-theme/css/ionicons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="{{ asset('admin-theme/css/AdminLTE.css') }}" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    @yield('header')
</head>
<body class="skin-blue">
  <header class="header">
    <a href="index.html" class="logo">
      Synergie
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" role="navigation">
    <!-- Sidebar toggle button-->
      <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <div class="navbar-right">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="glyphicon glyphicon-user"></i>
              <span>{{ Auth::user()->name }} <i class="caret"></i></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header bg-light-blue">
                <img src="{{ asset('admin-theme/img/avatar3.png') }}" class="img-circle" alt="User Image" />
                <p>
                  {{ Auth::user()->name }} - EPITA
                  <small>Member since {{ Auth::user()->created_at }}</small>
                </p>
              </li>
              <!-- Menu Body
              <li class="user-body">
                <div class="col-xs-4 text-center">
                  <a href="#">Followers</a>
                </div>
                <div class="col-xs-4 text-center">
                  <a href="#">Sales</a>
                </div>
                <div class="col-xs-4 text-center">
                  <a href="#">Friends</a>
                </div>
              </li>
              -->
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="{{ route('admin-users.edit', Auth::id()) }}" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="{{ url('auth/logout') }}" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
    <div class="wrapper row-offcanvas row-offcanvas-left">
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="left-side sidebar-offcanvas">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="{{ asset('admin-theme/img/avatar3.png') }}" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p>Hello, {{ Auth::user()->name }}</p>

            </div>
          </div>
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="active">
              <a href="{{ route('dashboard') }}">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
              </a>
            </li>
            <li>
              <a href="{{ route('admin-posts.index') }}">
                <i class="fa fa-th-list"></i> <span>Posts</span>
              </a>
            </li>
            <li>
              <a href="{{ route('admin-pages.index') }}">
                <i class="fa fa-bars"></i> <span>Pages</span>
              </a>
            </li>
            <li>
              <a href="{{ route('admin-testimonials.index') }}">
                <i class="fa fa-comments"></i> <span>Testimonials</span>
              </a>
            </li>
            <li>
              <a href="{{ asset('filemanager/filemanager/dialog.php?type=0') }}" target="_blank">
                <i class="fa fa-upload"></i> <span>File manager</span>
              </a>
            </li>
            <li>
              <a href="{{ route('admin-users.index') }}">
                <i class="fa fa-users"></i> <span>Users</span>
              </a>
            </li>
            <li>
              <a href="{{ route('admin-security') }}">
                <i class="fa fa-lock"></i> <span>Security</span>
              </a>
            </li>
            <li>
              <a href="{{ route('admin-settings') }}">
                <i class="fa fa-gear"></i> <span>Website settings</span>
              </a>
            </li>
            <li>
              <a href="https://github.com/victorboissiere/synergie" target="_blank">
                <i class="fa fa-github"></i> <span>Github</span>
              </a>
            </li>
            <li>
              <a href="{{ route('home') }}" target="_blank">
                <i class="fa fa-external-link"></i> <span>Go to website</span>
              </a>
            </li>
          </ul>
        </section>
      <!-- /.sidebar -->
      </aside>

      <!-- Right side column. Contains the navbar and content of the page -->
      <aside class="right-side">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          @yield('title')

          <!--
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
              <li class="active">Blank page</li>
          </ol>
          -->
        </section>

        <!-- Main content -->
        <section class="content">
          @yield('page')
        </section><!-- /.content -->
      </aside><!-- /.right-side -->
    </div><!-- ./wrapper -->


    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
    <script src="{{ asset('admin-theme/js/bootstrap.min.js') }}" type="text/javascript"></script>

    <script src="{{ asset('admin-theme/js/AdminLTE/app.js') }}" type="text/javascript"></script>
    @yield('scripts')
  </body>
</html>
