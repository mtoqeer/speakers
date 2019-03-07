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
              <th>Email</th>
              <th>Country</th>
              <th>Language</th>
            </tr>
            @foreach ($getApprovedSpeakers as $approvedSpeakers)
              <tr>
                <td>{{$approvedSpeakers->id}}</td>
               
                <td>{{$approvedSpeakers->name}}</td>
                <td>{{$approvedSpeakers->email}}</td>
                <td>{{$approvedSpeakers->country}}</td>
                <td>{{$approvedSpeakers->languages}}</td>
              </tr>
            @endforeach
            

            <tr>
                <td colspan="5">
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
                    <th>Email</th>
                    <th>Country</th>
                    <th>Language</th>
                  </tr>

                  @if ($getUnapprovedSpeakers->count() == 0) 
                        <tr>
                          <td colspan="5" class="text-center">No Record Found</td>
                        </tr>
                  @else
                    @foreach ($getUnapprovedSpeakers as $unapprovedSpeakers)
                    <tr>
                      <td>{{$unapprovedSpeakers->id}}</td>
                      <td>{{$unapprovedSpeakers->name}}</td>
                      <td>{{$unapprovedSpeakers->email}}</td>
                      <td>{{$unapprovedSpeakers->country}}</td>
                      <td>{{$unapprovedSpeakers->languages}}</td>
                    </tr>
                    @endforeach 
                  @endif 
                  <tr>
                      <td colspan="5">
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

