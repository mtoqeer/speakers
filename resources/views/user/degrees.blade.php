@extends('user.layouts.app')
@section('title','User - Education')
@section('pagename', 'Education')
@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-md-5">
            
            
            <form method="POST" action="{{route('userDegreeSave')}}">
                
                @csrf
                <input type="hidden" name="user_id" value="{{auth()->user()->id}}" class="form-control">

                <div class="form-group">
                    <label for="degree_title">Academic Degree</label>
                    <input type="text" name="degree_title" value="" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="university">University</label>
                    <input type="text" name="degree_university" value="" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="degree_year">Year Graduated</label>
                    <input type="text" name="degree_year" value="" class="form-control" required>
                </div>

                @if (session('message'))
                <p id="degree_added" class="alert alert-success">{{session('message')}}</p>
                @endif

                <button type="submit" class="btn btn-primary mb-5 mt-3 float-right" style="width:100%;">Add</button>

            </form>

        </div>

        <div class="col-md-5 offset-md-1">
            <h4>Education</h4>
            @foreach ($getDegree as $degree)
                <div class="row">
                    <div class="col-md-12 bg-light mb-3 shadow" style="padding:10px;">
                    <h5>{{$degree->title}}</h5>
                    <p>{{$degree->university}} <br> {{$degree->year}}</p>
                    <a href="/dashboard/degrees/{{$degree->id}}" class="" style="color:red !important;">Delete</a>
                    </div>
                </div>
            @endforeach
            @if (session('deleted'))
            <p id="degree_deleted" class="alert alert-danger">{{session('deleted')}}</p>
             @endif
        </div>
    </div>
</div>    

@endsection

@section('scripts')
<script>

$(document).ready(function(){
    $("#degree_added").delay(1500).slideUp(300);
    $("#degree_deleted").delay(1500).slideUp(300);
});

</script>
@endsection