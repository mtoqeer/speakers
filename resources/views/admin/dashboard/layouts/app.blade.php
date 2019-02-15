
<!DOCTYPE html>
<html lang="en">
    @include('admin.dashboard.layouts.partials.head')
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  @include('admin.dashboard.layouts.partials.topnav')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('admin.dashboard.layouts.partials.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('admin.dashboard.layouts.partials.contentheader')
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
            @yield('main-content')
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  @include('admin.dashboard.layouts.partials.footer')
</div>
<!-- ./wrapper -->

@include('admin.dashboard.layouts.partials.script')
</body>
</html>
