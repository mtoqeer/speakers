@extends('admin.dashboard.layouts.app')
@section('title','Admin - Confirm Payment')
@section('pagename', 'Confirm Payment')
@section('main-content')
<div class="row">
          @if (Session::has('EmailSend'))
          <div class="alert alert-info" id="EmailSend">{{ Session::get('EmailSend') }}</div>
        @endif
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Confirm Payments 
                 


               

                {{-- @if (session('EmailSend'))
                <span id="EmailSend" style="color:red;">{{session('EmailSend')}}</span>
                @endif --}}

              </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
              <table class="table table-hover">
                <tbody>
                    <tr>
                        <th>ID</th>
                        <th>Paypal Email</th>
                        <th>Payment Date</th>
                        <th colspan="2">Actions</th>
                    </tr>
                    @foreach ($getPaymentStatus as $paymentstatus)
                    
                    
                    <tr>
                        <td>{{$paymentstatus->user_id}}</td>
                        <td>{{$paymentstatus->paypal_email}}</td>
                        <td>{{$paymentstatus->payment_date}}</td>
                        <td><a href="/admin/paymentconfirmation/{{$paymentstatus->id}}"><button  class="btn btn-info">Confirm</button></a></td>
                        <td><a href="/admin/paymentconfirmation/delete/{{$paymentstatus->id}}"><button  class="btn btn-danger">Delete</button></a></td>
                    </tr>
                    @endforeach 
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


@section('customscripts')
    <script>
    $(document).ready(function(){
    $("#deleted").delay(1500).slideUp(300);
     $("#EmailSend").delay(2500).slideUp(300);
    });

    </script>
@endsection