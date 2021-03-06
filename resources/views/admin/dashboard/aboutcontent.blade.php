@extends('admin.dashboard.layouts.app')
@section('title','Admin - Terms and Conditions')
@section('pagename', 'Terms and Conditions')
@section('main-content')
<script src="https://cdn.ckeditor.com/ckeditor5/12.0.0/classic/ckeditor.js"></script>
    <div class="row">
        <div class="col-12">
            <form action="/admin/termsedit/{{$termscontent->id}}" method="POST">
                @if (session('message'))
                <p id="availableforsave_added" class="alert alert-success">{{session('message')}}</p>
                @endif
                @csrf
            <textarea name="termscond" id="editor">
                    {{$termscontent->about_us}}
            </textarea>
            <input type="submit" class="btn btn-lg btn-primary mt-4 float-right" value="Update">
            </form>  
        </div>
    </div>
@endsection


@section('customscripts')
<script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );


            $(document).ready(function(){
            $("#availableforsave_added").delay(1500).slideUp(300);
            $("#availableforupdate_added").delay(1500).slideUp(300);
        });
    </script>
@endsection