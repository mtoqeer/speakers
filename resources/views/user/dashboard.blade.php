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
                    <h4>Your Profile is <span style="color:green;">{{ (auth()->user()->status == 'unapproved') ? "Pending" : "Approved" }}</span> </h4>
                    <p>Welcome to The Wisdom Speakers Bureau!</p>
                         <p>
                            We are looking forward to working with you.  Please make sure to include as much 
                            information as you can in this profile to help us understand you and your speaking needs.  
                            We pride ourselves on matching the best speakers to the right events and creating long 
                            lasting relationships.
                        </p>
                        <p>
                            The more information and tools you can give us the better we will be able to promote you 
                            to meeting and event planners around the world.  No detail is too small.
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