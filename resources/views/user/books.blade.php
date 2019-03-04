@extends('user.layouts.app')
@section('title','User - Books')
@section('pagename', 'Books')
@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-md-5">
            
            
            <form method="POST" action="{{route('userBookSave')}}">
            
                @csrf
                <input type="hidden" name="user_id" value="{{auth()->user()->id}}" class="form-control">

                <div class="form-group">
                    <label for="book_title">Title</label>
                    <input type="text" name="book_title" value="" class="form-control">
                </div>

                <div class="form-group">
                    <label for="book_link">Link</label>
                    <input type="text" name="book_link" value="" class="form-control">
                </div>
                @if (session('message'))
                <p id="book_added" class="alert alert-success">{{session('message')}}</p>
                @endif

                <button type="submit" class="btn btn-primary mb-5 mt-3 float-right" style="width:100%;">Add</button>

            </form>

        </div>

        <div class="col-md-5 offset-md-1">
            <h4>Books</h4>
            @foreach ($getBook as $book)
                <div class="row">
                    <div class="col-md-12 bg-light mb-3 shadow" style="padding:10px;">
                    <h5><a href="{{$book->link}}" target="_blank" style="color:blue !important;">{{$book->title}}</a></h5>
                    <a href="/dashboard/books/{{$book->id}}" class="" style="color:red !important;">Delete</a>
                    </div>
                </div>
            @endforeach
            @if (session('deleted'))
            <p id="book_deleted" class="alert alert-danger">{{session('deleted')}}</p>
             @endif
        </div>
    </div>
</div>   

@endsection


@section('scripts')
<script>

$(document).ready(function(){
    $("#book_added").delay(1500).slideUp(300);
    $("#book_deleted").delay(1500).slideUp(300);
});

</script>
@endsection