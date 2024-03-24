@extends('layout.main')

@section('content')
    <section class="container p-5 overflow-hidden">
        <div class="row m-0 gx-4">
            @foreach ($post as $article)
                <div class="col-lg-3 col-md-4 col-sm-6 py-4">
                    <div class="container w-100 p-0 bg-light shadow-sm" style="border-radius: 8px;">
                        <div style="background-image: url('{{ 'storage/' . $article->ArticleImage->image }}'); border-radius: 8px 8px 0px 0px; height: 155px;  background-position: {{ $article->ArticleImage->x_offset * 0.65 }}px {{ $article->ArticleImage->y_offset * 0.7 }}px; background-size:{{ $article->ArticleImage->size }}%;" class="image-container">
                        </div>
                        <div class="box p-2">
                            <p class="m-1 font-xs" style="font-family: nunito">{{ $article->date }}</p>
                            <p class="m-1 font-s">{{ $article->title }}</p>
                            <a href="/article/{{ $article->id }}">
                                <button class="btn mt-2 w-100 font-s btn-outline-primary">Selengkapnya</button>
                            </a>
                        </div>
                    </div>
                </div>
                
            @endforeach
        </div>
        {{-- <form action="/article/search" method="get">
            <div class="row m-0 gx-4" style="height: 40px;" >
                <div class="col-10">
                    <input class="w-100 h-100 ps-2" name="search" placeholder="Search Here..." type="text">
                </div>
                <div class="col-2" >
                    <button class="w-100 h-100" type="submit" >Search</button>
                </div>
            </div>
        </form> --}}
    </section>
@endsection
