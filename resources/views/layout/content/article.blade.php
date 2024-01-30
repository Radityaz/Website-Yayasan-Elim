@extends('layout.main')
@section('content')
<section class="container p-5  overflow-hidden">
        <div class="row h-75 m-0 gx-5">
            @foreach ($post as $article)
                <div class="col-4 py-4" style="height: 450px" >
                    <div class="container w-100 h-100 p-0 bg-light" style="border-radius: 8px; border: 1.5px solid #4f4f4f ">
                        <div style="height: 60%; background-image: url('{{ 'storage/' . $article->image }}'); border-radius: 8px 8px 0px 0px  " class="image-container">
                        </div>
                        <div style="height: 40%" class="box p-2 d-flex flex-column justity-content-between">
                            <p class="m-1 font-s" style="font-family: nunito">{{ $article->date }}</p>
                            <p class="m-1 font-m h-100">{{ $article->title }}</p>
                            <button class="btn m-1 mt-2 w-50 font-s btn-outline-primary">Selengkapnya</button>
                        </div>
                    </div>
                </div>
            @endforeach
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