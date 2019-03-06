@extends('user.layouts.app')
@section('title','User - Home')
@section('pagename', 'Home')
@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                
                @if ($getUserMeta->count() == 0 )
                <form method="POST" action="{{route('userMetaSave')}}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="user_id" value="{{auth()->user()->id}}" class="form-control">  
                    <div class="form-group">
                        <label for="country">Country</label>
                        <input type="text" name="country" value="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="available_to">Available To</label>
                        <input type="text" name="available_to" value="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="fee">Fee</label>
                        <input type="text" name="fee" value="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="volunteer">Volunteer</label>
                        <input type="text" name="volunteer" value="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="languages">Languages</label>
                        <input type="text" name="languages" value="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="why_choose">Why Choose</label>
                        <textarea class="form-control" id="why_choose" name="why_choose" rows="4"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="bio">Bio</label>
                        <textarea class="form-control" id="bio" name="bio" rows="7"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="profile_image">Profile Image</label>
                        <input type="file" class="form-control-file" id="profile_image" name="profile_image">
                    </div>
                    @if ($errors->has('profile_image'))
                    <span role="alert">
                    <strong class="text-danger">{{ $errors->first('profile_image') }}</strong>
                    </span>
                    @endif
                    @if (session('message'))
                    <p id="generalinfo_added" class="alert alert-success">{{session('message')}}</p>
                    @endif
                    <button type="submit" class="btn btn-primary mb-5 mt-3 float-right" style="width:100%;">Save</button>
                </form>
                
                @endif
                
                
                @foreach ($getUserMeta as $generalinfo)
                    @if ($getUserMeta->count() == 1 )
                {{-- Update Form --}}
                <form method="POST" action="{{url('dashboard/generalinfo/update')}}" enctype="multipart/form-data">
                    @csrf
                    
                    <input type="hidden" name="id" value="{{$generalinfo->id}}" class="form-control">

                    <div class="form-group">
                        <label for="country">Country</label>
                        <input type="text" name="country" value="{{$generalinfo->country}}" class="form-control" placeholder="Update Form">
                    </div>
                    <div class="form-group">
                        <label for="available_to">Available To</label>
                        <input type="text" name="available_to" value="{{$generalinfo->available_to}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="fee">Fee</label>
                        <input type="text" name="fee" value="{{$generalinfo->fee}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="volunteer">Volunteer</label>
                        <input type="text" name="volunteer" value="{{$generalinfo->volunteer}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="languages">Languages</label>
                        <input type="text" name="languages" value="{{$generalinfo->languages}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="why_choose">Why Choose</label>
                        <textarea class="form-control" id="why_choose" name="why_choose" rows="4">{{$generalinfo->why_choose}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="bio">Bio</label>
                        <textarea class="form-control" id="bio" name="bio" rows="7">{{$generalinfo->bio}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="profile_image">Profile Image</label>
                        <input type="file" class="form-control-file" id="profile_image" name="profile_image" value="{{$generalinfo->profile_img}}">
                    </div>
                    @if ($errors->has('profile_image'))
                    <span role="alert">
                    <strong class="text-danger">{{ $errors->first('profile_image') }}</strong>
                    </span>
                    @endif
                    @if (session('message'))
                    <p id="generalinfo_added" class="alert alert-success">{{session('message')}}</p>
                    @endif
                    <button type="submit" class="btn btn-primary mb-5 mt-3 float-right" style="width:100%;">Update</button>
                </form>
                @endif                
                @endforeach
            </div>

            <div class="col-md-5 offset-md-1">
                <div class="row">
                        @foreach ($getUserMeta as $generalinfo)
                    <div class="col-md-4">
                        <img src="{{asset('adminassets/img/speakerprofileimages/')}}/{{$generalinfo->profile_img}}" alt="{{$generalinfo->profile_img}}" class="img-thumbnail">
                    </div>
                    <div class="col-md-8">
                       
                    </div>    
                </div>

                <div class="row">
                    <div class="col-md-12 mt-4">
                            <strong>COUNTRY:</strong> {{$generalinfo->country}} <br><br>
                            <strong>FEE:</strong> {{$generalinfo->fee}}<br><br>
                            <strong>Available To:</strong> {{$generalinfo->available_to}} <br><br>
                            <strong>Languages:</strong> {{$generalinfo->languages}} <br> <br>
                       <h5><strong>Why Choose:</strong> </h5> 
                       <p>{{$generalinfo->why_choose}}</p>
                       <h5><strong>Bio:</strong></h5>
                       <p>{{$generalinfo->bio}}</p>
                    </div>
                </div>


                @endforeach
                
            </div>
        </div>
    </div>
    

@endsection



@section('scripts')
<script>

$(document).ready(function(){
    $("#generalinfo_added").delay(1500).slideUp(300);
    $("#generalinfo_deleted").delay(1500).slideUp(300);
});

</script>
@endsection