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
                 <a href=""><button class="btn btn-success">View</button></a>
                 <a href="/admin/active-speakers/{{$approvedSpeakers->id}}"> <button class="btn btn-info">Disapprove</button></a>
                 <a href=""><button  class="btn btn-danger">Delete</button></a>
                </td>
              </tr>
            @endforeach
            
          </tbody>
        </table>

            <nav aria-label="Page navigation example" class="border-top">
                <ul class="pagination justify-content-center  mt-2">
                    <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>
@endsection