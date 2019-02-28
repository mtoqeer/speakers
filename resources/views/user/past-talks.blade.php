@extends('user.layouts.app')
@section('title','User - Home')
@section('pagename', 'Home')
@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-md-5">
            
            
            <form action="">
                    
                <div class="form-group">
                    <label for="talk_title">Title</label>
                    <input type="text" name="talk_title" value="" class="form-control">
                </div>

                <div class="form-group">
                    <label for="talk_location">Location</label>
                    <input type="text" name="talk_location" value="" class="form-control">
                </div>

                <div class="form-group">
                    <label for="talk_date">Date</label>
                    <input type="text" name="talk_date" value="" class="form-control">
                </div>


                <button type="submit" class="btn btn-primary mb-5 mt-3 float-right" style="width:100%;">Add</button>

            </form>

        </div>

        <div class="col-md-5 offset-md-1 border-left">
            <h4>No Past Talks Found</h4>
        </div>
    </div>
</div>
    
    

@endsection