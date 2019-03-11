@extends('admin.dashboard.layouts.app')
@section('title','Admin - Featured')
@section('pagename', 'Featured')
@section('main-content')
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Featured Speakers</h3>
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
           @foreach ($getFeaturedSpeakers as $featuredSpeakers)
           <tr>
                <td>{{$featuredSpeakers->id}}</td>
                <td>{{$featuredSpeakers->name}}</td>
                <td>{{$featuredSpeakers->email}}</td>
                <td>{{$featuredSpeakers->country}}</td>
                <td>{{$featuredSpeakers->languages}}</td>
                <td>{{$featuredSpeakers->available_to}}</td>
                <td>{{$featuredSpeakers->fee}}</td>
                <td>
                    <a href="/admin/profile/{{$featuredSpeakers->id}}"><button class="btn btn-success">View</button></a>
                    <a href="/admin/featured/{{$featuredSpeakers->id}}"> <button class="btn btn-danger">Unfeatured</button></a>
                </td>
            </tr>
           @endforeach
             
                    
          
            
               

          </tbody>
        </table>

           
        
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>
@endsection