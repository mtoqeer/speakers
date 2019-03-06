@extends('user.layouts.app')
@section('title','User - Home')
@section('pagename', 'Home')
@section('customcss')
    <style>
        .social-links {
            font-size: 40px;
            margin-right: 15px;
        }
    </style>
@endsection
@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-md-5">
            @if ($getSocialAccount->count() == 0 )
            <form method="POST" action="{{route('userSocialMediaAccountSave')}}">
                
                @csrf
                <input type="hidden" name="user_id" value="{{auth()->user()->id}}" class="form-control">

                <div class="form-group">
                    <label for="facebook_link">Facebook</label>
                    <input type="text" name="facebook_link" value="" class="form-control">
                </div>

                <div class="form-group">
                    <label for="twitter_link">Twitter</label>
                    <input type="text" name="twitter_link" value="" class="form-control">
                </div>

                <div class="form-group">
                    <label for="instagram_link">Instagram</label>
                    <input type="text" name="instagram_link" value="" class="form-control">
                </div>

                <div class="form-group">
                    <label for="youtube_link">Youtube</label>
                    <input type="text" name="youtube_link" value="" class="form-control">
                </div>

                <div class="form-group">
                    <label for="linkedin_link">LinkedIn</label>
                    <input type="text" name="linkedin_link" value="" class="form-control">
                </div>

                <div class="form-group">
                    <label for="website_link">Website</label>
                    <input type="text" name="website_link" value="" class="form-control">
                </div>

                <div class="form-group">
                    <label for="skype_link">Skype</label>
                    <input type="text" name="skype_link" value="" class="form-control">
                </div>

                @if (session('message'))
                <p id="social_added" class="alert alert-success">{{session('message')}}</p>
                @endif
                
                <button type="submit" class="btn btn-primary mb-5 mt-3 float-right" style="width:100%;">Save</button>

            </form>
                @endif

                @foreach ($getSocialAccount as $sociallinks)
                     @if ($getSocialAccount->count() == 1 )
                     <form method="POST" action="{{route('userSocialMediaAccountUpdate')}}">
                
                        @csrf
                        <input type="hidden" name="id" value="{{$sociallinks->id}}" class="form-control">

                        <div class="form-group">
                            <label for="facebook_link">Facebook</label>
                            <input type="text" name="facebook_link" value="{{$sociallinks->facebook}}" class="form-control">
                        </div>
        
                        <div class="form-group">
                            <label for="twitter_link">Twitter</label>
                            <input type="text" name="twitter_link" value="{{$sociallinks->twitter}}" class="form-control">
                        </div>
        
                        <div class="form-group">
                            <label for="instagram_link">Instagram</label>
                            <input type="text" name="instagram_link" value="{{$sociallinks->instagram}}" class="form-control">
                        </div>
        
                        <div class="form-group">
                            <label for="youtube_link">Youtube</label>
                            <input type="text" name="youtube_link" value="{{$sociallinks->youtube}}" class="form-control">
                        </div>
        
                        <div class="form-group">
                            <label for="linkedin_link">LinkedIn</label>
                            <input type="text" name="linkedin_link" value="{{$sociallinks->linkdin}}" class="form-control">
                        </div>
        
                        <div class="form-group">
                            <label for="website_link">Website</label>
                            <input type="text" name="website_link" value="{{$sociallinks->website}}" class="form-control">
                        </div>
        
                        <div class="form-group">
                            <label for="skype_link">Skype</label>
                            <input type="text" name="skype_link" value="{{$sociallinks->skype}}" class="form-control">
                        </div>
        
                        @if (session('message'))
                        <p id="social_added" class="alert alert-success">{{session('message')}}</p>
                        @endif
                        
                        <button type="submit" class="btn btn-primary mb-5 mt-3 float-right" style="width:100%;">Update</button>
        
                        </form>
                     @endif
                @endforeach

        </div>

        <div class="col-md-5 offset-md-1">
            @foreach ($getSocialAccount as $sociallinks)

            @if ($sociallinks->facebook !== Null)
                <a href="{{$sociallinks->facebook}}" target="_blank"><i class="fa fa-facebook-official social-links" aria-hidden="true"></i></a>
            @endif

            @if ($sociallinks->twitter !== Null)
                <a href="{{$sociallinks->twitter}}" target="_blank"><i class="fa fa-twitter-square social-links" aria-hidden="true"></i></a>
            @endif

            @if ($sociallinks->instagram !== Null)
                <a href="{{$sociallinks->instagram}}" target="_blank"><i class="fa fa-instagram social-links" aria-hidden="true"></i></a>
            @endif

            @if ($sociallinks->youtube !== Null)
                <a href="{{$sociallinks->youtube}}" target="_blank"><i class="fa fa-youtube-square social-links" aria-hidden="true"></i></a>
            @endif

            @if ($sociallinks->linkdin !== Null)
                <a href="{{$sociallinks->linkdin}}" target="_blank"><i class="fa fa-linkedin-square social-links" aria-hidden="true"></i></a>
            @endif

            @if ($sociallinks->website !== Null)
                <a href="{{$sociallinks->website}}" target="_blank"><i class="fa fa-globe social-links" aria-hidden="true"></i></a>
            @endif

            @if ($sociallinks->skype !== Null)
                <a href="{{$sociallinks->skype}}" target="_blank"><i class="fa fa-skype social-links" aria-hidden="true"></i></a>
            @endif
            
            @endforeach

        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    $(document).ready(function(){
        $("#social_added").delay(1500).slideUp(300);
        $("#social_deleted").delay(1500).slideUp(300);
    });
</script>
@endsection