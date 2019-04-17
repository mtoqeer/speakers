@extends('user.layouts.app')
@section('title','User - Home')
@section('pagename', 'Home')
@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-md-5">
            
            @if ($getAvailabelFor->count() == 0 )
                <form method="POST" action="{{route('userAvailableForSave')}}">
                @csrf
                <input type="hidden" name="user_id" value="{{auth()->user()->id}}" class="form-control">
                <h5 style="text-align:center;"> Please let us know what kind of speaking engagements you're available for.</h5>
                <div class="form-group">
                    <label for="confernce">Conference</label>
                    <select class="form-control" id="confernce" name="conference">
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="workshop">Workshop</label>
                    <select class="form-control" id="workshop" name="workshop">
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="moderator">Moderator</label>
                    <select class="form-control" id="moderator" name="moderator">
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="online">Online</label>
                    <select class="form-control" id="online" name="online">
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="school">School</label>
                    <select class="form-control" id="school" name="school">
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="meetup">Meetup</label>
                    <select class="form-control" id="meetup" name="meetup">
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </div>
                @if (session('message'))
                <p id="availableforsave_added" class="alert alert-success">{{session('message')}}</p>
                @endif
                <button type="submit" class="btn btn-primary mb-5 mt-3 float-right" style="width:100%;">Save</button>
            </form>
            @endif

            @foreach ($getAvailabelFor as $availablefor)
                @if ($getAvailabelFor->count() == 1 )

            <form method="POST" action="{{route('userAvailableForUpdate')}}">
                @csrf
                <input type="hidden" name="id" value="{{$availablefor->id}}" class="form-control">

                <div class="form-group">
                    <label for="confernce">Conference</label>
                    <select class="form-control" id="confernce" name="conference">
                        <option value="Yes" {{ ($availablefor->conference == 'Yes') ? "Selected" : " " }}>Yes</option>
                        <option value="No" {{ ($availablefor->conference == 'No') ? "Selected" : " " }}>No</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="workshop">Workshop</label>
                    <select class="form-control" id="workshop" name="workshop">
                        <option value="Yes" {{ ($availablefor->workshop == 'Yes') ? "Selected" : " " }}>Yes</option>
                        <option value="No" {{ ($availablefor->workshop == 'No') ? "Selected" : " " }}>No</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="moderator">Moderator</label>
                    <select class="form-control" id="moderator" name="moderator">
                        <option value="Yes" {{ ($availablefor->moderator == 'Yes') ? "Selected" : " " }}>Yes</option>
                        <option value="No" {{ ($availablefor->moderator == 'No') ? "Selected" : " " }}>No</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="online">Online</label>
                    <select class="form-control" id="online" name="online">
                        <option value="Yes" {{ ($availablefor->online == 'Yes') ? "Selected" : " " }}>Yes</option>
                        <option value="No" {{ ($availablefor->online == 'No') ? "Selected" : " " }}>No</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="school">School</label>
                    <select class="form-control" id="school" name="school">
                        <option value="Yes" {{ ($availablefor->school == 'Yes') ? "Selected" : " " }}>Yes</option>
                        <option value="No" {{ ($availablefor->school == 'No') ? "Selected" : " " }}>No</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="meetup">Meetup</label>
                    <select class="form-control" id="meetup" name="meetup">
                        <option value="Yes" {{ ($availablefor->meetup == 'Yes') ? "Selected" : " " }}>Yes</option>
                        <option value="No" {{ ($availablefor->meetup == 'No') ? "Selected" : " " }}>No</option>
                    </select>
                </div>

                @if (session('message'))
                        <p id="availableforupdate_added" class="alert alert-success">{{session('message')}}</p>
                @endif

                <button type="submit" class="btn btn-primary mb-5 mt-3 float-right" style="width:100%;">Update</button>
            </form>
            @endif
            @endforeach
        </div>

        <div class="col-md-5 offset-md-1">
        @foreach ($getAvailabelFor as $availablefor)
           @if ($availablefor->conference == 'Yes')
                <img style="cursor: pointer;" data-toggle="tooltip" data-placement="top" title="Conference" src="{{asset('websiteassests/img/avl_for/conference.png')}}">
            @endif
            @if ($availablefor->school == 'Yes')
                <img style="cursor: pointer;" data-toggle="tooltip" data-placement="top" title="School" src="{{asset('websiteassests/img/avl_for/school.png')}}">
            @endif
            @if ($availablefor->moderator == 'Yes')
                <img style="cursor: pointer;" data-toggle="tooltip" data-placement="top" title="Moderator" src="{{asset('websiteassests/img/avl_for/moderator.png')}}">
            @endif
            @if ($availablefor->online == 'Yes')
                <img style="cursor: pointer;" data-toggle="tooltip" data-placement="top" title="Online" src="{{asset('websiteassests/img/avl_for/online.png')}}">
            @endif
            @if ($availablefor->workshop == 'Yes')
                <img style="cursor: pointer;" data-toggle="tooltip" data-placement="top" title="Workshop (Incl. Charity)" src="{{asset('websiteassests/img/avl_for/workshop.png')}}">
            @endif
            @if ($availablefor->meetup == 'Yes')
                <img style="cursor: pointer;" data-toggle="tooltip" data-placement="top" title="Meetup" src="{{asset('websiteassests/img/avl_for/meetup.png')}}">
            @endif
        @endforeach


        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    $(document).ready(function(){
        $("#availableforsave_added").delay(1500).slideUp(300);
        $("#availableforupdate_added").delay(1500).slideUp(300);
    });
</script>
@endsection