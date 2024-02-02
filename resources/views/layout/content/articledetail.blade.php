@extends('layout.main')
@section('content')
    <div class="container" style="margin-top: 50px; min-height: 100vh; padding: 0px 10%;" >
        <img height="600px" style="object-fit: cover; border-radius: 12px" class="w-100 mb-3 shadow-sm" src="{{ asset('storage/' . $article->image) }}" alt="">
        <p class="mb-2" >Ditulis oleh {{ $article->author }}</p>
        <div class="box mb-5" style="font-family: nunito">
            {{ $article->content }}
        </div>
    </div>
@endsection