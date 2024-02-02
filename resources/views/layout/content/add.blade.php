@extends('layout.main')
@section('content')
    <div class="container">
        <form action="/create" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="title">Title</label>
            <input id="title" name="title" type="text">
            <br>
            <label for="author">author</label>
            <input id="author" name="author" type="text">
            <br>
            <label for="image">image</label>
            <input id="image" name="image" type="file">
            <br>
            <label for="content">content</label>
            <input id="content" name="content" type="text">
            <br>
            <button class="btn btn-primary" type="submit">Submit</button>
            
            </form>
    </div>
@endsection