@extends('user.layouts.app')
@section('title','User - Presentations')
@section('pagename', 'Presentations')
@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-md-5">
            
            
            <form method="POST" action="{{route('userPresentationSave')}}">

                @csrf
                <input type="hidden" name="user_id" value="{{auth()->user()->id}}" class="form-control">
                    <label for="">What presentation topic/s are you known for? Please share below.</label>
                <div class="form-group">
                    <label for="presentation_title">Title</label>
                    <input type="text" name="presentation_title" value="" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="presentation_desc">Description</label>
                    <textarea name="presentation_desc" value="" class="form-control" rows="8"></textarea>
                </div>

                @if (session('message'))
                <p id="presentation_added" class="alert alert-success">{{session('message')}}</p>
                @endif


                <button type="submit" class="btn btn-primary mb-5 mt-3 float-right" style="width:100%;">Add</button>

            </form>

        </div>

        <div class="col-md-5 offset-md-1">
                <h4>Presentations</h4>
                @foreach ($getPresentation as $presentation)
                    <div class="row">
                        <div class="col-md-12 bg-light mb-3 shadow" style="padding:10px;">
                        <h5>{{$presentation->title}}</h5> 
                        <p>{{$presentation->description}}</p>
                        <a href="/dashboard/presentations/{{$presentation->id}}" class="" style="color:red !important;">Delete</a>
                        </div>
                    </div>
                @endforeach
                @if (session('deleted'))
                <p id="presentation_deleted" class="alert alert-danger">{{session('deleted')}}</p>
                 @endif
        </div>
    </div>
</div>
    
    

@endsection


@section('scripts')
<script>

$(document).ready(function(){
    $("#presentation_added").delay(1500).slideUp(300);
    $("#presentation_deleted").delay(1500).slideUp(300);
});

</script>
@endsection