@extends('user.layouts.app')
@section('title','User - Home')
@section('pagename', 'Home')
@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-md-5">
            
            
            <form action="">
                    
                <div class="form-group">
                    <label for="acheivement_title">Title</label>
                    <input type="text" name="acheivement_title" value="" class="form-control">
                </div>

                <div class="form-group">
                    <label for="achievement_desc">Description</label>
                    <textarea class="form-control" id="achievement_desc" name="achievement_desc" rows="7"></textarea>
                </div>

                <button type="submit" class="btn btn-primary mb-5 mt-3 float-right" style="width:100%;">Add</button>

            </form>

        </div>

        <div class="col-md-5 offset-md-1 border-left">
            <h4>No Achievement Found</h4>
        </div>
    </div>
</div>
    

@endsection