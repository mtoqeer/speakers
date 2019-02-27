@extends('user.layouts.app')
@section('title','User - Expertise')
@section('pagename', 'Expertise')
@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                
                
                <form action="">
                        
                    <div class="form-group">
                        <label for="expertise">Expertise</label>
                        <input type="text" name="expertise" value="" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-primary mb-5 mt-3 float-right" style="width:100%;">Add</button>

                </form>

            </div>

            <div class="col-md-5 offset-md-1 border-left">
                <h4>No Expertise Found</h4>
            </div>
        </div>
    </div>
    

@endsection