@extends('user.layouts.app')
@section('title','User - Videos')
@section('pagename', 'Vidoes')
@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-md-5">
            
            
            <form method="POST" action="{{route('userVideoSave')}}">
                 <p>   Do you have videos you want to share? Please enter your embed video links below. For the video to show correctly on the site, please follow the instructions below.
                    </p>
                <p>  Step 1: Get your video link. <br>
                  Sample: https://www.youtube.com/watch?v=x55YlGtKbJE</p> 
                    
             <p>     Step 2: Change the "watch?v" portion of the link to "embed" <br>
                    Sample: https://www.youtube.com/embed/x55YlGtKbJE </p> 
                    
                 <p>   Step 3: Paste the final link below!</p>
                @csrf
                <input type="hidden" name="user_id" value="{{auth()->user()->id}}" class="form-control">
                    
                <div class="form-group">
                    <label for="speaker_video">Video Link (Youtube)</label>
                    <input type="text" name="speaker_video" value="" class="form-control" required placeholder="https://www.youtube.com/embed/Jz8laEHbDwc">
                </div>

                @if (session('message'))
                        <p id="video_added" class="alert alert-success">{{session('message')}}</p>
                @endif

                <button type="submit" class="btn btn-primary mb-5 mt-3 float-right" style="width:100%;">Add</button>

            </form>

        </div>


        <div class="col-md-5 offset-md-1">

           


            <h4>Videos</h4>
            <div class="row">
                @foreach ($getVideo as $video)
                    <div class="col-md-4 mb-5 text-center">
                        
                        <iframe width="100%" height="100%" src="{!! $video->link !!}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> 
                        
                        <a href="/dashboard/videos/{{$video->id}}" class="" style="color:red !important;">Delete</a>
                    </div>
                @endforeach
               
                
            </div>
            @if (session('deleted'))
            <p id="video_deleted" class="alert alert-danger">{{session('deleted')}}</p>
             @endif
        </div>
    </div>
</div>
@endsection



@section('scripts')
<script>

$(document).ready(function(){
    $("#video_added").delay(1500).slideUp(300);
    $("#video_deleted").delay(1500).slideUp(300);
});

</script>
@endsection