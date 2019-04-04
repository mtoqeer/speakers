@extends('user.layouts.app')
@section('title','User - Home')
@section('pagename', 'Home')
@section('main-content')
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-5">
                <form method="POST" action="{{url('dashboard/update')}}">
                        @csrf

                        <input type="hidden" name="id" value="{{auth()->user()->id}}" class="form-control">

                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" value="{{auth()->user()->name}}" class="form-control">
                        </div>

                        <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" value="{{auth()->user()->email}}" class="form-control">
                        </div>

                        @if (session('message'))
                              <p id="update-message" class="alert alert-success">{{session('message')}}</p>
                        @endif
    
                        <button type="submit" class="btn btn-primary mb-5 mt-3 float-right" style="width:100%;">Update</button>
    
                </form>
            </div>

            <div class="col-md-5 offset-md-1 border-left">
                    <h4>Your Profile s <span style="color:green;">{{ (auth()->user()->status == 'unapproved') ? "Pending" : "Approved" }}</span> </h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                        when an unknown printer took a galley of type and scrambled it to make a type 
                        specimen book. It has survived not only five centuries, but also the leap into 
                        electronic typesetting, remaining essentially unchanged. It was popularised in 
                        the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
                        and more recently with desktop publishing software like Aldus PageMaker including 
                        versions of Lorem Ipsum.
                    </p>
            </div>
        </div>
    </div>
    

@endsection


@section('scripts')
<script>

$(document).ready(function(){
    $("#update-message").delay(1500).slideUp(300);
});

</script>
@endsection