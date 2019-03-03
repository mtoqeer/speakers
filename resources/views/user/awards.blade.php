@extends('user.layouts.app')
@section('title','User - Home')
@section('pagename', 'Home')
@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-md-5">
            
            
            <form method="POST" action="{{route('userAwardSave')}}">
                @csrf
                <input type="hidden" name="user_id" value="{{auth()->user()->id}}" class="form-control">

                <div class="form-group">
                    <label for="award_name">Award Name</label>
                    <input type="text" name="award_name" value="" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="award_year">Year</label>
                    <input type="text" name="award_year" value="" class="form-control" required>
                </div>

                @if (session('message'))
                <p id="award_added" class="alert alert-success">{{session('message')}}</p>
                @endif

                <button type="submit" class="btn btn-primary mb-5 mt-3 float-right" style="width:100%;">Add</button>

            </form>

        </div>

        <div class="col-md-5 offset-md-1">
            <h4>Awards</h4>
            @foreach ($getAward as $award)
                <div class="row">
                    <div class="col-md-12 bg-light mb-3 shadow" style="padding:10px;">
                    <h5>{{$award->name}}</h5>
                    <p>{{$award->year}}</p>
                    <a href="/dashboard/awards/{{$award->id}}" class="" style="color:red !important;">Delete</a>
                    </div>
                </div>
            @endforeach
            @if (session('deleted'))
            <p id="award_deleted" class="alert alert-danger">{{session('deleted')}}</p>
             @endif
        </div>
    </div>
</div>
@endsection


@section('scripts')
<script>

$(document).ready(function(){
    $("#award_added").delay(1500).slideUp(300);
    $("#award_deleted").delay(1500).slideUp(300);
});

</script>
@endsection