@extends('admin.dashboard.layouts.app')
@section('title','Admin - Active')
@section('pagename', 'Active')
@section('main-content')
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Active Speakers</h3>
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
            @foreach ($getApprovedSpeakers as $approvedSpeakers)
              <tr>
                <td>{{$approvedSpeakers->id}}</td>
                <td>{{$approvedSpeakers->name}}</td>
                <td>{{$approvedSpeakers->email}}</td>
                <td>{{$approvedSpeakers->country}}</td>
                <td>{{$approvedSpeakers->languages}}</td>
                <td>{{$approvedSpeakers->available_to}}</td>
                <td>{{$approvedSpeakers->fee}}</td>
                <td>
                 <a href="/admin/profile/{{$approvedSpeakers->id}}"><button class="btn btn-success">View</button></a>
                 <a href="/admin/active-speakers/{{$approvedSpeakers->id}}"> <button class="btn btn-info">Disapprove</button></a>
                 <a href="/admin/active-speakers/featured/{{$approvedSpeakers->id}}"> <button class="btn btn-primary">Featured</button></a>
                </td>
              </tr>
            @endforeach
            
               

          </tbody>
        </table>

           
        
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
      {{ $getApprovedSpeakers->links() }}
    </div>
  </div>
@endsection