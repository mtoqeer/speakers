@extends('user.layouts.app')
@section('title','User - Images')
@section('pagename', 'Images')
@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-md-5">

                     
            @if ($getImage->count() < 3)
                <form method="POST" action="{{route('userImageSave')}}" enctype="multipart/form-data">
                    
                    @csrf
                    <input type="hidden" name="user_id" value="{{auth()->user()->id}}" class="form-control">
                    
                    <div class="form-group">
                        <label for="images">Images</label>
                        <input type="file" name="images" value="" class="form-control">
                    </div>
                    @if ($errors->has('images'))
                        <span role="alert">
                        <strong class="text-danger">{{ $errors->first('images') }}</strong>
                        </span>
                    @endif
                    <h5>Please add a maximum of three photos under 5MB</h5>
                    @if (session('message'))
                    <p id="image_added" class="alert alert-success">{{session('message')}}</p>
                    @endif
                    <button type="submit" class="btn btn-primary mb-5 mt-3 float-right" style="width:100%;">Add</button>
                    
                </form>
            @else
                <h4 class="alert alert-danger">You Have Reached Your Limit Of 3 Images</h4>
            @endif
           
        </div>

        <div class="col-md-5 offset-md-1">
            <h4>Photos</h4>
            <div class="row">
            @foreach ($getImage as $image)
                    <div class="col-md-4 bg-light mb-3 shadow" style="padding:10px;">
                    <img src="{{asset('adminassets/img/speakerimages/')}}/{{$image->path}}" alt="{{$image->path}}" class="img-thumbnail">
                    <a href="/dashboard/images/{{$image->id}}" class="" style="color:red !important;">Delete</a>
                    </div>
            @endforeach
        </div>
             @if (session('deleted'))
            <p id="image_deleted" class="alert alert-danger">{{session('deleted')}}</p>
                @endif
        </div>
    </div>
</div>
@endsection


@section('scripts')
<script>

$(document).ready(function(){
    $("#image_added").delay(1500).slideUp(300);
    $("#image_deleted").delay(1500).slideUp(300);
});

</script>
@endsection