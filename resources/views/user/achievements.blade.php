@extends('user.layouts.app')
@section('title','User - Achievements')
@section('pagename', 'Achievements')
@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-md-5">
            
            
                <form method="POST" action="{{route('userachievementsave')}}">
                @csrf
                <input type="hidden" name="id" value="{{auth()->user()->id}}" class="form-control">
               <h5 style="text-align:center;"> Have you received any awards lately? Please share your achievements below.</h5>
                <div class="form-group">
                    <label for="acheivement_title">Title</label>
                    <input type="text" name="acheivement_title" value="" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="achievement_desc">Description</label>
                    <textarea class="form-control" id="achievement_desc" name="achievement_desc" rows="7" required></textarea>
                </div>

                @if (session('message'))
                        <p id="achievement_added" class="alert alert-success">{{session('message')}}</p>
                @endif

                <button type="submit" class="btn btn-primary mb-5 mt-3 float-right" style="width:100%;">Add</button>

            </form>

        </div>

        <div class="col-md-5 offset-md-1">
            
                <h4>Achievements</h4>
                @foreach ($getachievement as $achievement)
                    <div class="row">
                        <div class="col-md-12 bg-light mb-3 shadow" style="padding:10px;">
                        <h5>{{$achievement->title}}</h5> 
                        <p>{{$achievement->description}}</p>
                        <a href="/dashboard/achievements/{{$achievement->id}}" class="" style="color:red !important;">Delete</a>
                        </div>
                    </div>
                @endforeach
                @if (session('deleted'))
                <p id="achievement_deleted" class="alert alert-danger">{{session('deleted')}}</p>
                 @endif

        </div>
    </div>
</div>
    

@endsection

@section('scripts')
<script>

$(document).ready(function(){
    $("#achievement_added").delay(1500).slideUp(300);
    $("#achievement_deleted").delay(1500).slideUp(300);
});

</script>
@endsection