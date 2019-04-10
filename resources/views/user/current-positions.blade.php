@extends('user.layouts.app')
@section('title','User - Current Positions')
@section('pagename', 'Current Position/s')
@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-md-5">
            
            
            <form method="POST" action="{{route('userCurrentPositionSave')}}">
                @csrf
                <input type="hidden" name="user_id" value="{{auth()->user()->id}}" class="form-control">

                <div class="form-group">
                    <label for="position_title">Title</label>
                    <input type="text" name="position_title" value="" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="position_department">Department</label>
                    <input type="text" name="position_department" value="" class="form-control" required>
                </div>
                @if (session('message'))
                <p id="currentPostion_added" class="alert alert-success">{{session('message')}}</p>
                 @endif
                <button type="submit" class="btn btn-primary mb-5 mt-3 float-right" style="width:100%;">Add</button>

            </form>

        </div>

        <div class="col-md-5 offset-md-1">
            <h4>Current Postion/s</h4>
            @foreach ($getCurrentPoisition as $currentPosition)
                <div class="row">
                    <div class="col-md-12 bg-light mb-3 shadow" style="padding:10px;">
                    <h4>{{$currentPosition->title}}</h4>
                    <p>{{$currentPosition->department}}</p>
                    <a href="/dashboard/current-positions/{{$currentPosition->id}}" class="" style="color:red !important;">Delete</a>
                    </div>
                </div>
            @endforeach
            @if (session('deleted'))
            <p id="currentPostion_deleted" class="alert alert-danger">{{session('deleted')}}</p>
             @endif
        </div>
    </div>
</div>
@endsection


@section('scripts')
<script>

$(document).ready(function(){
    $("#currentPostion_added").delay(1500).slideUp(300);
    $("#currentPostion_deleted").delay(1500).slideUp(300);
});

</script>
@endsection