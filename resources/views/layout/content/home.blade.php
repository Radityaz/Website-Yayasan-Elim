@extends('layout.main')
@section('content')
    <div class="container-fluid mt-5">
        <div class="row vh-100">
            <div class=" offset-1 col-5 d-flex flex-column align-items-start justify-content-center">
                <h1 class="font-hero" >Great School</h1>
                <h1>For The Best Student</h1>
                <p class="font-xs w-75 " >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                <button class="btn font-s text-start rounded-button rounded-pill bg-primary " style="width: 30%" > Baca Lebih Lanjut </button>
            </div>
            <div class="col-6 d-flex align-items-center justify-content-end p-0 m-0">
                <img height="620" width="620" src="/image/HeroBackground.png"alt="" srcset="">
            </div>
        </div>
    </div>
    <div class="cotainer-fluid background-photo d-flex flex-column text-light" style="height: 80vh">
        <h3>
            Lorem Ipsum
        </h3>
        <p class="w-25 text-center font-s" style="font-family: nunito"  >
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolost laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolost laborum.
        </p>
    </div>
    <div class="container ">
        <div class="row" style="height: 80vh" >
            <div class="col-6" style="padding: 5% 5%; box-sizing:border-box; " >
                <div class="w-100 h-100 bg-light" style="padding: 10%; border-radius: 6px;" >
                    <h6 class="p-0 m-0" >Jenjang Pendidikan</h6>
                    <hr class="my-2" style="width: 20%" >
                    <h5>YAYASAN <br>ELIM KUDUS</h5>
                    <p style="font-family: nunito" class="font-s" >Jenjang Pendidikan Yayasan Elim. SD,KB & TPA</p>
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
                            <a class="font-xxs text-decoration-none" href="">Selengkapnya</a>
                        </div>
                    </div>
                    <div class="row shadow-sm bg-light h-25 p-3 m-0" style="border-radius: 6px;"  >
                        <div class="col-2 d-flex justify-content-center align-items-center ">
                            <img height="60px" src="/image/kbfirdaus.png" alt="#" srcset="">
                        </div>
                        <div class="col-10 p-0 ps-3 d-flex flex-column justify-content-center ">
                            <h5 class="p-0 m-0" >KB</h5>
                            <p class="py-1 font-xs p-0 m-0" >Sekolah KB Firdaus Kudus</p>
                            <a class="font-xxs text-decoration-none" href="#">Selengkapnya</a>
                        </div>
                    </div>
                    <div class="row shadow-sm bg-light h-25 p-3 m-0" style="border-radius: 6px;"  >
                        <div class="col-2 d-flex justify-content-center align-items-center ">
                            <img height="60px" src="/image/tpa.png" alt="" srcset="">
                        </div>
                        <div class="col-10 p-0 ps-3 d-flex flex-column justify-content-center ">
                            <h5 class="p-0 m-0" >TPA</h5>
                            <p class="py-1 font-xs p-0 m-0" >Sekolah TPA Moms Care Kudus</p>
                            <a class="font-xxs text-decoration-none" href="#">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection