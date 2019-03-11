<?php
use Carbon\Carbon;
date_default_timezone_set("Asia/Karachi");
$current = new Carbon();
$current = Carbon::now();
use Illuminate\Support\Facades\DB;
?>

<!DOCTYPE html>
<html lang="en">
    @include('user.layouts.partials.head')
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  @include('user.layouts.partials.topnav')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('user.layouts.partials.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('user.layouts.partials.contentheader')
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
  @include('user.layouts.partials.footer')
</div>
<!-- ./wrapper -->

@include('user.layouts.partials.script')
@yield('scripts')
</body>
</html>
