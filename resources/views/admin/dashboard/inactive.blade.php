@extends('admin.dashboard.layouts.app')
@section('title','Admin - Active')
@section('pagename', 'Inactive')
@section('main-content')
<div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Inactive Speakers 

                @if (session('deleted'))
                <span id="deleted" style="color:red;">{{session('deleted')}}</span>
                @endif


              </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
              <table class="table table-hover">
                <tbody><tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Country</th>
                  <th>Language</th>
                  <th>Available To</th>
                  <th>Fee</th>
                  <th>Actions</th>
                </tr>
                @foreach ($getUnapprovedSpeakers as $UnapprovedSpeakers)
                  <tr>
                    <td>{{$UnapprovedSpeakers->id}}</td>
                    <td>{{$UnapprovedSpeakers->name}}</td>
                    <td>{{$UnapprovedSpeakers->email}}</td>
                    <td>{{$UnapprovedSpeakers->country}}</td>
                    <td>{{$UnapprovedSpeakers->languages}}</td>
                    <td>{{$UnapprovedSpeakers->available_to}}</td>
                    <td>{{$UnapprovedSpeakers->fee}}</td>
                    <td>
                      <a href="/admin/profile/{{$UnapprovedSpeakers->id}}"><button class="btn btn-success">View</button></a>
                      <a href="/admin/inactive-speakers/{{$UnapprovedSpeakers->id}}"><button class="btn btn-info">Approve</button></a>
                      <a href="/admin/inactive-speakers/delete/{{$UnapprovedSpeakers->id}}"><button  class="btn btn-danger">Delete</button></a>
                    </td>
                  </tr>

                  
                @endforeach
              
                    

              </tbody>
            </table>
    
                
           
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
          {{ $getUnapprovedSpeakers->links() }}

        </div>
      </div>
@endsection


@section('customscripts')
    <script>
    $(document).ready(function(){
    $("#deleted").delay(1500).slideUp(300);
    });

    </script>
@endsection