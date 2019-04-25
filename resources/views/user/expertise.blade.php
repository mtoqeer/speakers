@extends('user.layouts.app')
@section('title','User - Expertise')
@section('pagename', 'Expertise')
@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <form method="POST" action="{{route('userexpertisesave')}}">
                    @csrf
                    <input type="hidden" name="id" value="{{auth()->user()->id}}" class="form-control">
                    <label for="">Please share with us all the topics that you're an expert of.</label>
                    <div class="form-group">
                        <label for="expertise">Expertise</label>
                        <input name="expertise" type="text" id="" class="form-control" required>
                    </div>
                    
                    @if (session('message'))
                        <p id="expertise_added" class="alert alert-success">{{session('message')}}</p>
                    @endif

                    <button type="submit" class="btn btn-primary mb-5 mt-3 float-right" style="width:100%;">Add</button>

                </form>
                <label>Here are some suggestions:</label>
                <ul>
                    <li>Motivation/Inspiration</li>
                    <li>Innovation </li>
                    <li>Sales </li>
                    <li>Technology </li>
                    <li>Leadership </li>
                    <li>Finance & Economics</li>
                    <li>Diversity </li>
                    <li>Health/Wellness</li>
                    <li>Culture </li>
                    <li>Business Change</li>
                    <li>Strategic Planning</li>
                </ul>

            </div>

            <div class="col-md-5 offset-md-1">
                
                <h4>Expertise</h4>
                @foreach ($getexpertise as $expertise)
                    <div class="row">
                        <div class="col-md-12 bg-light mb-3 shadow" style="padding:10px;">
                        {{$expertise->expertise_topic}} - <a href="/dashboard/expertise/{{$expertise->id}}" class="" style="color:red !important;">Delete</a>
                        </div>
                    </div>
                @endforeach
                @if (session('deleted'))
                <p id="expertise_deleted" class="alert alert-danger">{{session('deleted')}}</p>
                 @endif

            </div>
        </div>
    </div>
    

@endsection


@section('scripts')
<script>

$(document).ready(function(){
    $("#expertise_added").delay(1500).slideUp(300);
    $("#expertise_deleted").delay(1500).slideUp(300);
});

</script>
@endsection