@extends('admin.dashboard.layouts.app')
@section('title','Admin - Home')
@section('pagename', 'Home')
@section('main-content')
{{-- Top Info --}}
<div class="row">
    <div class="col-md-3 col-sm-6 col-12">
      <div class="info-box">
        <span class="info-box-icon bg-info"><i class="fa fa-envelope-o"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Messages</span>
          <span class="info-box-number">1,410</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-md-3 col-sm-6 col-12">
      <div class="info-box">
        <span class="info-box-icon bg-success"><i class="fa fa-user"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Active Speakers</span>
          <span class="info-box-number">410</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-md-3 col-sm-6 col-12">
      <div class="info-box">
        <span class="info-box-icon bg-warning"><i class="fa fa-user-times"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Inactive Speakers</span>
          <span class="info-box-number">13,648</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-md-3 col-sm-6 col-12">
      <div class="info-box">
        <span class="info-box-icon bg-danger"><i class="fa fa-registered"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Registered Speakers</span>
          <span class="info-box-number">93,139</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
</div>
  <!-- /.row -->

{{-- Table --}}

<div class="row">
    {{-- Active Spekaers --}}
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Active Speakers</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
          <table class="table">
            <tbody><tr>
              <th>ID</th>
              <th>Name</th>
              <th>Country</th>
              <th>Language</th>
            </tr>
            <tr>
              <td>183</td>
              <td>John Doe</td>
              <td>USA</td>
              <td><span class="tag tag-success">English</span></td>
            </tr>

            <tr>
                <td colspan="4">
                <div class="card-footer text-center">
                    <a href="{{route('active-speaker-page')}}">View All Users</a>
                </div>
            </td>
            </tr>
          </tbody>
        </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>

    {{-- InActive Speakers --}}
    <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Inactive Speakers</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table">
                  <tbody><tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Country</th>
                    <th>Language</th>
                  </tr>
                  <tr>
                    <td>183</td>
                    <td>John Doe</td>
                    <td>USA</td>
                    <td><span class="tag tag-success">English</span></td>
                  </tr>
      
                  <tr>
                      <td colspan="4">
                      <div class="card-footer text-center">
                      <a href="{{route('inactive-speaker-page')}}">View All Users</a>
                      </div>
                  </td>
                  </tr>
                </tbody>
              </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
  </div>
@endsection