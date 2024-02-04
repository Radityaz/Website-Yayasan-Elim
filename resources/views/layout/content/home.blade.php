@extends('layout.main')
@section('content')
    <div class="container-fluid mt-5">
        <div class="row vh-100">
            <div class=" offset-1 col-5 d-flex flex-column align-items-start justify-content-center">
                <h1 class="display-1" style="font-family: nunito-extrabold; color: #2252AB" >Great School</h1>
                <h1 class="display-5" style="font-family: nunito-extrabold; color: #FCAF45" >For The Best Student</h1>
                <p class="font-s w-100 " >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                <button class="btn font-s text-start hover-grow d-flex justify-content-between align-items-center rounded-button rounded-pill bgs-primary " style="width: 30%" > 
                    Baca Lebih Lanjut 
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8"/>
                    </svg>
                </button>
            </div>
            <div class="col-6 d-flex align-items-center justify-content-end p-0 m-0">
                <img height="620" width="620" src="/image/HeroBackground.png"alt="" srcset="">
            </div>
        </div>
    </div>
    <div class="container-fluid background-photo d-flex flex-column text-light" style="height: 70vh">
        <h3>
            Lorem Ipsum
        </h3>
        <p class="w-25 text-center font-s" style="font-family: nunito"  >
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolost laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolost laborum.
        </p>
    </div>
    <div class="container ">
        <div class="row" style="height: 70vh" >
            <div class="col-6" style="padding: 5% 5%; box-sizing:border-box; " >
                <div class="w-100 h-100 bg-light" style="padding: 10%; border-radius: 6px;" >
                    <h6 class="p-0 m-0" >Jenjang Pendidikan</h6>
                    <hr class="my-2" style="width: 20%" >
                    <h5 style="font-family: nunito-extrabold" >YAYASAN <br> <span style="color: #2472AF; font-family: nunito-extrabold" >ELIM KUDUS</span></h5>
                    <p style="font-family: nunito" class="font-m" >Jenjang Pendidikan Yayasan Elim. SD,KB & TPA</p>
                </div>
            </div>
            <div class="col-6" style="padding: 5%; box-sizing: border-box;">
                <div class="d-flex flex-column justify-content-between w-100 h-100">
                    <div class="row shadow-sm bg-light h-25 p-3 m-0" style="border-radius: 6px;"  >
                        <div class="col-2 d-flex justify-content-center align-items-center ">
                            <img height="60px" src="/image/sdwidya.png" alt="" srcset="">
                        </div>
                        <div class="col-10 p-0 ps-3 d-flex flex-column justify-content-center ">
                            <h5 class="p-0 m-0" >SD</h5>
                            <p class="py-1 font-xs p-0 m-0" >Sekolah SD Widya Kirana Kudus</p>
                            <a class="font-xxs text-decoration-none hover-grow-small " href="/sd">Selengkapnya
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="row shadow-sm bg-light h-25 p-3 m-0" style="border-radius: 6px;"  >
                        <div class="col-2 d-flex justify-content-center align-items-center ">
                            <img height="60px" src="/image/kbfirdaus.png" alt="#" srcset="">
                        </div>
                        <div class="col-10 p-0 ps-3 d-flex flex-column justify-content-center ">
                            <h5 class="p-0 m-0" >KB</h5>
                            <p class="py-1 font-xs p-0 m-0" >Sekolah KB Firdaus Kudus</p>
                            <a class="font-xxs text-decoration-none hover-grow-small " href="/kb">Selengkapnya
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="row shadow-sm bg-light h-25 p-3 m-0" style="border-radius: 6px;"  >
                        <div class="col-2 d-flex justify-content-center align-items-center ">
                            <img height="60px" src="/image/tpa.png" alt="" srcset="">
                        </div>
                        <div class="col-10 p-0 ps-3 d-flex flex-column justify-content-center ">
                            <h5 class="p-0 m-0" >TPA</h5>
                            <p class="py-1 font-xs p-0 m-0" >Sekolah TPA Moms Care Kudus</p>
                            <a class="font-xxs text-decoration-none hover-grow-small " href="/tpa">Selengkapnya
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="container mb-5">
        <div class="row h-75 gx-4">
            <h3 class="text-uppercase m-0 mt-5" style="font-family: nunito-extrabold" >Artikel</h3>
            @foreach ($post as $article)
                <div class="col-3 py-4" style="height: 350px" >
                    <div class="container w-100 h-100 p-0 bg-light shadow-sm" style="border-radius: 8px;">
                        <div style="height: 50%; background-image: url('{{ 'storage/' . $article->image }}'); border-radius: 8px 8px 0px 0px" class="image-container">
                        </div>
                        <div style="height: 50%" class="box p-2 d-flex flex-column justity-content-between">
                            <p class="m-1 font-xs" style="font-family: nunito">{{ $article->date }}</p>
                            <p class="m-1 font-s h-100">{{ $article->title }}</p>
                            <a href="/article/{{ $article->id }}">
                                <button class="btn mt-2 w-100 font-s btn-outline-primary">Lihat Selengkapnya</button>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-center m-0" style="height: 6vh" >
            <a href="/article">
                <button class="btn px-5 bgs-primary font-s rounded-pill hover-grow" style="height: 40px" >Selengkapnya</button> 
            </a>
        </div>
    </section>

    {{-- <section class="container p-5 vh-100 overflow-hidden">
        <h2 class="ps-4 m-0" >Artikel</h2>
        <div class="row h-75 m-0 gx-5">
            <div class="col-4 py-4" sty >
                <div class="container w-100 h-100 p-0 bg-light" style="border-radius: 8px;">
                    <div style="height: 60%; background-image: url('image/samplefoto.png')" class="image-container">
                    </div>
                    <div style="height: 40%" class="box p-2 d-flex flex-column justity-content-around">
                        <p class="m-1 font-s" style="font-family: nunito">30 January 2024</p>
                        <p class="m-1 font-s">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta maiores voluptate ducimus voluptates beatae rerum delectus earum alias molestias dolore.</p>
                        <button class="btn m-1 mt-2 w-50 font-s btn-outline-primary">Lihat Selengkapnya</button>
                    </div>
                </div>
            </div>
            <div class="col-4 py-4" sty >
                <div class="container w-100 h-100 p-0 bg-light" style="border-radius: 8px;">
                    <div style="height: 60%; background-image: url('image/samplefoto.png')" class="image-container">
                    </div>
                    <div style="height: 40%" class="box p-2 d-flex flex-column justity-content-around">
                        <p class="m-1 font-s" style="font-family: nunito">30 January 2024</p>
                        <p class="m-1 font-s">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta maiores voluptate ducimus voluptates beatae rerum delectus earum alias molestias dolore.</p>
                        <button class="btn m-1 mt-2 w-50 font-s btn-outline-primary">Lihat Selengkapnya</button>
                    </div>
                </div>
            </div>
            <div class="col-4 py-4" sty >
                <div class="container w-100 h-100 p-0 bg-light" style="border-radius: 8px;">
                    <div style="height: 60%; background-image: url('image/samplefoto.png')" class="image-container">
                    </div>
                    <div style="height: 40%" class="box p-2 d-flex flex-column justity-content-around">
                        <p class="m-1 font-s" style="font-family: nunito">30 January 2024</p>
                        <p class="m-1 font-s">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta maiores voluptate ducimus voluptates beatae rerum delectus earum alias molestias dolore.</p>
                        <button class="btn m-1 mt-2 w-50 font-s btn-outline-primary ">Lihat Selengkapnya</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container d-flex justify-content-center" style="height: 6vh" >
            <button class="btn px-5 bgs-primary font-s rounded-pill" >Selengkapnya</button> 
        </div>
    </section> --}}
    <section class="container-fluid overflow-hidden">
        <div class="row" style="height: 70vh" >
            <div class="col-6 front-background ">

            </div>
            <div class="col-6 back-background p-5 text-white">
                <h3 class="m-3" >
                    Yayasan Elim
                </h3>
                <p class=" m-3 text-white font-s" style="font-family: nunito" >
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
            </div>
        </div>
    </section>
    <div class="container d-flex flex-column justify-content-center align-items-center" style="height: 70vh">
        <h3>Kemitraan dan Kerjasama</h3>
        <p style="font-family: nunito" >Sekolah kami menjalin kerjasama dengan beberapa instansi dalam berbagai bidang</p>
        <div class="box w-50  d-flex justify-content-between">
            <img height="80px" src="/image/sdwidya.png" alt="" srcset="">
            <img height="80px" src="/image/kbfirdaus.png" alt="" srcset="">
            <img height="80px" src="/image/tpa.png" alt="" srcset="">
            <img height="80px" src="/image/oakbridge.png" alt="" srcset="">
            <img height="80px" src="/image/bright.png" alt="" srcset="">
            <img height="80px" src="/image/smk.png" alt="" srcset="">

        </div>
    </div>
@endsection