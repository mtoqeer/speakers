@extends('user.layouts.app')
@section('title','User - Home')
@section('pagename', 'Home')
@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-md-5">
            
            
            <form method="POST" action="{{route('userArticleSave')}}">
                @csrf
                <input type="hidden" name="user_id" value="{{auth()->user()->id}}" class="form-control">
                
                <div class="form-group">
                    <label for="article_title">Title</label>
                    <input type="text" name="article_title" value="" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="article_link">Link</label>
                    <input type="text" name="article_link" value="" class="form-control" required>
                </div>

                @if (session('message'))
                        <p id="article_added" class="alert alert-success">{{session('message')}}</p>
                @endif

                <button type="submit" class="btn btn-primary mb-5 mt-3 float-right" style="width:100%;">Add</button>

            </form>

        </div>

        <div class="col-md-5 offset-md-1 border-left">
            <h4>Articles</h4>
                @foreach ($getArticle as $article)
                    <div class="row">
                        <div class="col-md-12 bg-light mb-3 shadow" style="padding:10px;">
                        <h6><a href="{{$article->link}}" target="_blank" style="color:blue !important;">{{$article->title}}</a></h6> 
                        <a href="/dashboard/articles/{{$article->id}}" class="" style="color:red !important;">Delete</a>
                        </div>
                    </div>
                @endforeach
                @if (session('deleted'))
                <p id="article_deleted" class="alert alert-danger">{{session('deleted')}}</p>
                 @endif
        </div>
    </div>
</div>   

@endsection

@section('scripts')
<script>

$(document).ready(function(){
    $("#article_added").delay(1500).slideUp(300);
    $("#article_deleted").delay(1500).slideUp(300);
});

</script>
@endsection