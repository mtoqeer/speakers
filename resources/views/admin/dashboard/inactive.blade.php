@extends('admin.dashboard.layouts.app')
@section('title','Admin - Active')
@section('pagename', 'Inactive')
@section('main-content')
<div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Inactive Speakers</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
              <table class="table table-hover">
                <tbody><tr>
                  <th>ID</th>
                  <th>Country</th>
                  <th>Language</th>
                  <th>Available To</th>
                  <th>Fee</th>
                  <th>Actions</th>
                </tr>
                
                <tr>
                  <td>1</td>
                  <td>Michele Wucker</td>
                  <td>United State</td>
                  <td>Global</td>
                  <td>More Then $1000</td>
                  <td>
                    <button class="btn btn-success">View</button>
                    <button class="btn btn-info">Approve</button>
                    <button  class="btn btn-danger">Delete</button>
                  </td>
                </tr>
    
                <tr>
                    <td>1</td>
                    <td>Michele Wucker</td>
                    <td>United State</td>
                    <td>Global</td>
                    <td>More Then $1000</td>
                    <td>
                        <button class="btn btn-success">View</button>
                        <button class="btn btn-info">Approve</button>
                        <button  class="btn btn-danger">Delete</button>
                    </td>
                </tr>
    
                <tr>
                    <td>1</td>
                    <td>Michele Wucker</td>
                    <td>United State</td>
                    <td>Global</td>
                    <td>More Then $1000</td>
                    <td>
                        <button class="btn btn-success">View</button>
                        <button class="btn btn-info">Approve</button>
                        <button  class="btn btn-danger">Delete</button>
                    </td>
                </tr>
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