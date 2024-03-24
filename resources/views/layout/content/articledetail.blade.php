@extends('layout.main')
@section('content')
    <div class="container" style="margin-top: 50px; min-height: 100vh; padding: 0px 10%;" >
        {{-- <img height="600px" style="object-fit: cover; border-radius: 12px" class="w-100 mb-3 shadow-sm" src="{{ asset('storage/' . $article->image) }}" alt=""> --}}
        {{-- <div class="w-100" style=" height: 328px; background: url('{{ asset('storage/' . $article->ArticleImage->image) }}'); background-position: {{ $article->ArticleImage->x_offset * 2 }}px {{ $article->ArticleImage->y_offset * 2 }}px; background-size:{{ $article->ArticleImage->size }}%;"> --}}
        <div class="w-100" style="height: 360px; background: url('{{ asset('storage/' . $article->ArticleImage->image) }}'); background-position: {{ $article->ArticleImage->x_offset * 2 }}px {{ $article->ArticleImage->y_offset * 2 }}px; background-size:{{ $article->ArticleImage->size }}%;" ></div>
        <div class="box mb-5" style="font-family: nunito">
            {!! $article->content !!}
        </div>
    </div>
@endsection