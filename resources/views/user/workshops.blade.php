@extends('user.layouts.app')
@section('title','User - Home')
@section('pagename', 'Home')
@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-md-5">
            
            
            <form action="">
                    
                <div class="form-group">
                    <label for="workshop_title">Title</label>
                    <input type="text" name="workshop_title" value="" class="form-control">
                </div>

                <div class="form-group">
                    <label for="workshop_hours">Hours</label>
                    <input type="text" name="workshop_hours" value="" class="form-control">
                </div>

                <div class="form-group">
                    <label for="workshop_desc">Description</label>
                    <input type="text" name="workshop_desc" value="" class="form-control">
                </div>


                <button type="submit" class="btn btn-primary mb-5 mt-3 float-right" style="width:100%;">Add</button>

            </form>

        </div>

        <div class="col-md-5 offset-md-1">
            <h4>No Workshops Found</h4>
        </div>
    </div>
</div>
    
    

@endsection