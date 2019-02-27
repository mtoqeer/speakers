@extends('user.layouts.app')
@section('title','User - Home')
@section('pagename', 'Home')
@section('main-content')
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-6">
                <h4>Hi, {{auth()->user()->name}}</h4>
                <p>Please Do Complete Your Profile. We will Review and Approve your profile</p>
            </div>
        </div>
    </div>
    

@endsection