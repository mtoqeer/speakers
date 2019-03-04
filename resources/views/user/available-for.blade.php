@extends('user.layouts.app')
@section('title','User - Home')
@section('pagename', 'Home')
@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-md-5">
            
            
            <form action="">
                    
                <div class="form-group">
                    <label for="confernce">Conference</label>
                    <select class="form-control" id="confernce">
                        <option>Yes</option>
                        <option>No</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="workshop">Workshop</label>
                    <select class="form-control" id="workshop">
                        <option>Yes</option>
                        <option>No</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="moderator">Moderator</label>
                    <select class="form-control" id="moderator">
                        <option>Yes</option>
                        <option>No</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="online">Online</label>
                    <select class="form-control" id="online">
                        <option>Yes</option>
                        <option>No</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="school">School</label>
                    <select class="form-control" id="school">
                        <option>Yes</option>
                        <option>No</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="meetup">Meetup</label>
                    <select class="form-control" id="meetup">
                        <option>Yes</option>
                        <option>No</option>
                    </select>
                </div>

                

                <button type="submit" class="btn btn-primary mb-5 mt-3 float-right" style="width:100%;">Save</button>

            </form>

        </div>

        <div class="col-md-5 offset-md-1">
            <h4>No Awards Found</h4>
        </div>
    </div>
</div>
    
    

@endsection