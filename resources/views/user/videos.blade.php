@extends('user.layouts.app')
@section('title','User - Home')
@section('pagename', 'Home')
@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-md-5">
            
            
            <form action="">
                    
                <div class="form-group">
                    <label for="speaker_video">Video Link (Youtube)</label>
                    <input type="text" name="speaker_video" value="" class="form-control">
                </div>


                <button type="submit" class="btn btn-primary mb-5 mt-3 float-right" style="width:100%;">Add</button>

            </form>

        </div>

        <div class="col-md-5 offset-md-1 border-left">
            <h4>No Video Found</h4>
        </div>
    </div>
</div>
    
    

@endsection