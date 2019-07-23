<!DOCTYPE html>
<html>
<head>
  <style>
    .row{
      padding-top: 8px;
    }
  </style>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>{{config('app.name')}}</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{asset('template/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  <!-- Sweet Alert -->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('template/bower_components/font-awesome/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('template/bower_components/Ionicons/css/ionicons.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('template/dist/css/AdminLTE.min.css')}}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
   folder instead of downloading all of them to reduce the load. -->
   <link rel="stylesheet" href="{{asset('template/dist/css/skins/_all-skins.min.css')}}">
   <!-- DataTables -->
   <link rel="stylesheet" href="{{asset('template/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
   <!-- Morris chart -->
   <link rel="stylesheet" href="{{asset('template/bower_components/morris.js/morris.css')}}">
   <!-- jvectormap -->
   <link rel="stylesheet" href="{{asset('template/bower_components/jvectormap/jquery-jvectormap.css')}}">
   <!-- Date Picker -->
   <link rel="stylesheet" href="{{asset('template/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
   <!-- Daterange picker -->
   <link rel="stylesheet" href="{{asset('template/bower_components/bootstrap-daterangepicker/daterangepicker.css')}}">
   <!-- bootstrap wysihtml5 - text editor -->
   <link rel="stylesheet" href="{{asset('template/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
   <style>
    .btn-circle {
      width: 30px;
      height: 30px;
      text-align: center;
      padding: 6px 0;
      font-size: 12px;
      line-height: 1.428571429;
      border-radius: 15px;
    }
  </style>
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- Google Font -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <header class="main-header">
      <!-- Logo -->
      <a href="index2.html" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>R</b>KP</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Relasi</b>Kopi</span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="{{asset('template/dist/img/user2-160x160.jpg')}}" class="user-image" alt="User Image">
                {{ ucfirst(Auth::user()->name) }}
                <span class="hidden-xs"></span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <img src="{{asset('template/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
                  <p>
                    {{ ucfirst(Auth::user()->name) }}
                    <small>Admin</small>
                  </p>
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="">
                    <a href="{{ url('/admin/logout') }}" class="btn btn-block btn-default btn-flat">Sign out</a>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="{{asset('template/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p>{{ucfirst(Auth::user()->name)}}</p>
            <a href="#"><i class="fa fa-user text-success"></i> Administrator</a>
          </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
          <div class="input-group">
            <input type="text" name="q" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
          </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
          <li class="header">MAIN NAVIGATION</li>
          <li>
            <a href="{{URL('/admin')}}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
          </li>
          <li>
            <!-- <a href="{{URL('admin/users')}}"><i class="fa fa-users"></i> <span>Users</span></a> -->
          </li>
          <li>
            <a href="{{URL('admin/quotes')}}"><i class="fa fa-quote-right"></i> <span>Quotes</span></a>
          </li>
          <li>
            <a href="{{URL('admin/menu')}}"><i class="fa fa-book"></i> <span>Menu</span></a>
          </li>
          <li>
            <a href="#"><i class="fa fa-align-center "></i> <span>Artikel</span></a>
          </li>
          <li>
            <a href="{{URL('admin/pesan')}}"><i class="fa fa-file-text"></i> <span>Kritik dan Saran</span></a>
          </li>
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>
    @yield('content')
    <footer class="main-footer">
      <div class="pull-right hidden-xs">
        <b>Version</b> BETA
      </div>
      <strong>Copyright &copy; <?=date('Y')?> <a href="http://www.instagram.com/relasikopi" target="_blank">Relasi Kopi</a>.</strong> All rights
      reserved.
    </footer>
    <div class="control-sidebar-bg"></div>
  </div>
  <!-- ./wrapper -->
  <!-- Sweetalert -->
  <script src="{{asset('template//sweetalert.min.js')}}"></script>
  <!-- jQuery 3 -->
  <script src="{{asset('template/bower_components/jquery/dist/jquery.min.js')}}"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="{{asset('template/bower_components/jquery-ui/jquery-ui.min.js')}}"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button);
  </script>
  <!-- Bootstrap 3.3.7 -->
  <script src="{{asset('template/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
  <!-- SlimScroll -->
  <script src="{{asset('template/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
  <!-- Morris.js charts -->
  <script src="{{asset('template/bower_components/raphael/raphael.min.js')}}"></script>
  <script src="{{asset('template/bower_components/morris.js/morris.min.js')}}"></script>
  <!-- Sparkline -->
  <script src="{{asset('template/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js')}}"></script>
  <!-- jvectormap -->
  <script src="{{asset('template/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
  <script src="{{asset('template/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
  <!-- jQuery Knob Chart -->
  <script src="{{asset('template/bower_components/jquery-knob/dist/jquery.knob.min.js')}}"></script>
  <!-- daterangepicker -->
  <script src="{{asset('template/bower_components/moment/min/moment.min.js')}}"></script>
  <script src="{{asset('template/bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
  <!-- datepicker -->
  <script src="{{asset('template/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
  <!-- Bootstrap WYSIHTML5 -->
  <script src="{{asset('template/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
  <!-- Slimscroll -->
  <script src="{{asset('template/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
  <!-- FastClick -->
  <script src="{{asset('template/bower_components/fastclick/lib/fastclick.js')}}"></script>
  <!-- {{-- Link Active --}} -->
  <script src="{{asset('template/plugins/link-active.js')}}"></script>
  <!-- AdminLTE App -->
  <script src="{{asset('template/dist/js/adminlte.min.js')}}"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="{{asset('template/dist/js/pages/dashboard.js')}}"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="{{asset('template/dist/js/demo.js')}}"></script>
  <!-- DataTables -->
  <script src="{{asset('template/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('template/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
  @yield('foot-content')
  <script type="text/javascript">
    $(function () {
      $('#example1').DataTable()
    })
  </script>
</body>
</html>
