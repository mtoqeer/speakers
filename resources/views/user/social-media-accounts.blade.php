@extends('user.layouts.app')
@section('title','User - Home')
@section('pagename', 'Home')
@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-md-5">
            
            
            <form action="">
                    
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

                
                <button type="submit" class="btn btn-primary mb-5 mt-3 float-right" style="width:100%;">Save</button>

            </form>

        </div>

        <div class="col-md-5 offset-md-1">
            <h4>No Workshops Found</h4>
        </div>
    </div>
</div>
    
    

@endsection