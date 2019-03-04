@extends('user.layouts.app')
@section('title','User - Home')
@section('pagename', 'Home')
@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                
                
                <form action="">
                        
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

                    <button type="submit" class="btn btn-primary mb-5 mt-3 float-right" style="width:100%;">Save</button>

                </form>

            </div>

            <div class="col-md-5 offset-md-1">
                <h4>No Details Found</h4>
            </div>
        </div>
    </div>
    

@endsection