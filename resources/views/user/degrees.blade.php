@extends('user.layouts.app')
@section('title','User - Home')
@section('pagename', 'Home')
@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-md-5">
            
            
            <form action="">
                    
                <div class="form-group">
                    <label for="degree_title">Title</label>
                    <input type="text" name="degree_title" value="" class="form-control">
                </div>

                <div class="form-group">
                    <label for="university">University</label>
                    <input type="text" name="university" value="" class="form-control">
                </div>

                <div class="form-group">
                    <label for="degree_year">Year</label>
                    <input type="text" name="degree_year" value="" class="form-control">
                </div>

                <button type="submit" class="btn btn-primary mb-5 mt-3 float-right" style="width:100%;">Add</button>

            </form>

        </div>

        <div class="col-md-5 offset-md-1">
            <h4>No Degree Found</h4>
        </div>
    </div>
</div>
    
    

@endsection