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
                    <h5 style="text-align:center;"> Have you received any certification? Please share your expertise below.</h5>
                    <div class="form-group">
                        <label for="expertise">Expertise</label>
                        <select name="expertise" id="" class="form-control">
                                <option title='Motivation/Inspiration' value='Motivation/Inspiration'>Motivation/Inspiration</option>
                                <option title='Innovation' value='Innovation'>Innovation</option>
                                <option title='Sales' value='Sales'>Sales</option>
                                <option title='Technology' value='Technology'>Technology</option>
                                <option title='Leadership' value='Leadership'>Leadership</option>
                                <option title='Finance &amp; Economics' value='Finance &amp; Economics'>Finance &amp; Economics</option>
                                <option title='Diversity' value='Diversity'>Diversity</option>
                                <option title='Health/Wellness' value='Health/Wellness'>Health/Wellness</option>
                                <option title='Culture' value='Culture'>Culture</option>
                                <option title='CSR' value='CSR'>CSR</option>
                                <option title='Risk' value='Risk'>Risk</option>
                                <option title='Business Change' value='Business Change'>Business Change</option>
                                <option title='Strategic Planning' value='Strategic Planning'>Strategic Planning</option>
                        </select>

                    </div>
                    @if (session('message'))
                        <p id="expertise_added" class="alert alert-success">{{session('message')}}</p>
                    @endif

                    <button type="submit" class="btn btn-primary mb-5 mt-3 float-right" style="width:100%;">Add</button>

                </form>

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