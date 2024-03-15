@extends('layout.main')
@section('content')
<section class="container p-5 overflow-hidden">
    <div class="row h-75 m-0 gx-4">
        @foreach ($post as $article)
        <div class="col-lg-3 col-md-4 col-sm-6 py-4">
            <div class="container w-100 p-0 bg-light shadow-sm" style="border-radius: 8px;">
                <div style="background-image: url('{{ 'storage/' . $article->image }}'); border-radius: 8px 8px 0px 0px; height: 200px;" class="image-container">
                </div>
                <div class="box p-3">
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
</section>
@endsection