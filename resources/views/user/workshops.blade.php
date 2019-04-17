@extends('user.layouts.app')
@section('title','User - Workshops')
@section('pagename', 'Workshops')
@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-md-5">
            
            
            <form method="POST" action="{{route('userWorkshopSave')}}">
                    @csrf
                    <input type="hidden" name="user_id" value="{{auth()->user()->id}}" class="form-control">
                    <label for="">Are you holding your own workshop soon? Please share the info about it below.</label>
                <div class="form-group">
                    <label for="workshop_title">Title</label>
                    <input type="text" name="workshop_title" value="" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="workshop_hours">Hours</label>
                    <input type="text" name="workshop_hours" value="" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="workshop_desc">Description</label>
                    <textarea name="workshop_desc" value="" class="form-control" rows="8"></textarea>
                </div>

                @if (session('message'))
                        <p id="workshop_added" class="alert alert-success">{{session('message')}}</p>
                @endif

                <button type="submit" class="btn btn-primary mb-5 mt-3 float-right" style="width:100%;">Add</button>

            </form>

        </div>

        <div class="col-md-5 offset-md-1">
                <h4>Workshops</h4>
                @foreach ($getWorkshop as $workshop)
                    <div class="row">
                        <div class="col-md-12 bg-light mb-3 shadow" style="padding:10px;">
                        <h5>{{$workshop->title}}</h5>
                        <p>{{$workshop->hours}} <br> {{$workshop->description}} </p>
                        <a href="/dashboard/workshops/{{$workshop->id}}" class="" style="color:red !important;">Delete</a>
                        </div>
                    </div>
                @endforeach
                @if (session('deleted'))
                <p id="workshop_deleted" class="alert alert-danger">{{session('deleted')}}</p>
                 @endif
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    $(document).ready(function(){
        $("#workshop_added").delay(1500).slideUp(300);
        $("#workshop_deleted").delay(1500).slideUp(300);
    });
</script>
@endsection