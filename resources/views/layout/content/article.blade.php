@extends('layout.main')
@section('content')
<section class="container p-5 overflow-hidden">
        <form action="/article/search" method="get">
            <div class="row m-0 gx-4" style="height: 40px;" >
                <div class="col-10">
                    <input class="w-100 h-100 ps-2" name="search" placeholder="Search Here..." type="text">
                </div>
                <div class="col-2" >
                    <button class="w-100 h-100" type="submit" >Search</button>
                </div>
            </div>
        </form>
        <div class="row h-75 m-0 gx-4">
            @foreach ($post as $article)
                <div class="col-3 py-4" style="height: 350px" >
                    <div class="container w-100 h-100 p-0 bg-light shadow-sm" style="border-radius: 8px;">
                        <div style="height: 50%; background-image: url('{{ asset('storage/' . $article->ArticleImage->image) }}'); border-radius: 8px 8px 0px 0px; background-position: {{ $article->ArticleImage->x_offset * 0.65 }}px {{ $article->ArticleImage->y_offset * 0.7 }}px; background-size:{{ $article->ArticleImage->size }}%;" class="image-container">
                        </div>
                        <div style="height: 50%" class="box p-2 d-flex flex-column justity-content-between">
                            <p class="m-1 font-xs" style="font-family: nunito">{{ $article->date }}</p>
                            <p class="m-1 font-s h-100">{{ $article->title }}</p>
                            <a href="/article/{{ $article->id }}">
                                <button class="btn mt-2 w-100 font-s btn-outline-primary">Selengkapnya</button>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
            {{-- <div class="col-4 py-4" style="height: 450px" >
                <div class="container w-100 h-100 p-0 bg-light" style="border-radius: 8px; border: 1.5px solid #4f4f4f ">
                    <div style="height: 60%; background-image: url('image/samplefoto.png'); border-radius: 8px 8px 0px 0px  " class="image-container">
                    </div>
                    <div style="height: 40%" class="box p-2 d-flex flex-column justity-content-around">
                        <p class="m-1 font-s" style="font-family: nunito">30 January 2024</p>
                        <p class="m-1 font-s">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta maiores voluptate ducimus voluptates beatae rerum delectus earum alias molestias dolore.</p>
                        <button class="btn m-1 mt-2 w-50 font-s btn-outline-primary">Lihat Selengkapnya</button>
                    </div>
                </div>
            </div>
            <div class="col-4 py-4" style="height: 450px" >
                <div class="container w-100 h-100 p-0 bg-light" style="border-radius: 8px; border: 1.5px solid #4f4f4f ">
                    <div style="height: 60%; background-image: url('image/samplefoto.png'); border-radius: 8px 8px 0px 0px  " class="image-container">
                    </div>
                    <div style="height: 40%" class="box p-2 d-flex flex-column justity-content-around">
                        <p class="m-1 font-s" style="font-family: nunito">30 January 2024</p>
                        <p class="m-1 font-s">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta maiores voluptate ducimus voluptates beatae rerum delectus earum alias molestias dolore.</p>
                        <button class="btn m-1 mt-2 w-50 font-s btn-outline-primary ">Lihat Selengkapnya</button>
                    </div>
                </div>
            </div> --}}
        </div>
    </section>
@endsection