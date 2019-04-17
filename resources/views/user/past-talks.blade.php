@extends('user.layouts.app')
@section('title','User - Past Talks')
@section('pagename', 'Past Talks')
@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-md-5">
            
            
            <form method="POST" action="{{route('userPastTaskSave')}}">

                @csrf
                <input type="hidden" name="user_id" value="{{auth()->user()->id}}" class="form-control">
                    <label for="">Have you done a seminar or a conference lately? Please share the information below.</label>
                <div class="form-group">
                    <label for="talk_title">Title</label>
                    <input type="text" name="talk_title" value="" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="talk_location">Location</label>
                    <input type="text" name="talk_location" value="" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="talk_date">Date</label>
                    <input type="text" name="talk_date" value="" class="form-control" required>
                </div>

                @if (session('message'))
                <p id="past_talks_added" class="alert alert-success">{{session('message')}}</p>
                @endif

                <button type="submit" class="btn btn-primary mb-5 mt-3 float-right" style="width:100%;">Add</button>

            </form>

        </div>

        <div class="col-md-5 offset-md-1">
                <h4>Past Talks</h4>
                @foreach ($getPastTask as $pastTask)
                    <div class="row">
                        <div class="col-md-12 bg-light mb-3 shadow" style="padding:10px;">
                        <h5>{{$pastTask->title}}</h5> 
                        <p>{{$pastTask->location}} <br> {{$pastTask->date}} </p>
                        <a href="/dashboard/past-talks/{{$pastTask->id}}" class="" style="color:red !important;">Delete</a>
                        </div>
                    </div>
                @endforeach
                @if (session('deleted'))
                <p id="past_talks_deleted" class="alert alert-danger">{{session('deleted')}}</p>
                 @endif
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>

$(document).ready(function(){
    $("#past_talks_added").delay(1500).slideUp(300);
    $("#past_talks_deleted").delay(1500).slideUp(300);
});

</script>
@endsection