@extends('layout.main')
@section('content')

<style>
    .container-fluid {
        padding-top: 80px;
        /* Adjust this value based on your navbar height */
    }
</style>
<div class="container-fluid mt-5">
    <div class="row align-items-center">
        <div class="col-lg-5 col-md-6 col-sm-12 offset-lg-1">
            <div class="d-flex flex-column justify-content-center align-items-start">
                <h1 class="display-1" style="font-family: nunito-extrabold; color: #2252AB">Great School</h1>
                <h1 class="display-5 px-lg-1 px-md-2 px-sm-0" style="font-family: nunito-extrabold; color: #FCAF45">For The Best Student</h1>
                <p class="font-s px-lg-1 px-md-2 px-sm-0">Belajar, bermain dan mengasah ide anak - anak, Mari bersama masa depan yang cerah dengan menerapkan pendidikan karakter. Be BRIGHT Generation (Brilliant, Religious, Independent, Great, Hope, Talented). </p>
                <button class="btn font-s text-start hover-grow d-flex align-items-center justify-content-between rounded-button rounded-pill bgs-primary" style="width: 100%; max-width: 200px;">
                    Baca Lebih Lanjut
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-arrow-right-short ms-2" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8" />
                    </svg>
                </button>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 d-flex justify-content-end p-0 m-0">
            <img class="img-fluid" src="/image/HeroBackground.png" alt="">
        </div>
    </div>
</div>


<style>
    @media (max-width: 450px) {
        #elongated-btn {
            width: 100%;
        }
    }
</style>






<div class="container-fluid background-photo d-flex flex-column text-light vh-100">
    <h3>
        Be BRIGHT Generation
    </h3>
    <p class="w-100 text-center font-s" style="font-family: nunito">
        (Brilliant, Religious, Independent, Great, Hope, Talented).
    </p>
</div>

<div class="container mb-5">
    <div class="row" style="height: 70vh">
        <div class="col-lg-6 col-md-12 " style="padding: 5% 5%; box-sizing:border-box;">
            <div class="w-100 h-100 bg-light shadow-sm" style="padding: 10%; border-radius: 6px;">
                <h6 class="p-0 m-0">Jenjang Pendidikan</h6>
                <hr class="my-2" style="width: 20%">
                <h5 style="font-family: nunito-extrabold">YAYASAN <br> <span style="color: #2472AF; font-family: nunito-extrabold">ELIM KUDUS</span></h5>
                <p style="font-family: nunito" class="font-m">Jenjang Pendidikan Yayasan Elim. SD,KB & TPA</p>
            </div>
        </div>
        <div class="col-lg-6 col-md-12" style="padding: 5%; box-sizing:border-box;">
            <div class="d-flex flex-column justify-content-between h-100">
                <div class="row shadow-sm bg-light h-25 p-3 m-0" style="border-radius: 6px;">
                    <div class="col-2 d-flex justify-content-center align-items-center ">
                        <img height="60px" src="/image/sdwidya.png" alt="" srcset="">
                    </div>
                    <div class="col-10 p-0 ps-3 d-flex flex-column justify-content-center ">
                        <h5 class="p-0 m-0">SD</h5>
                        <p class="py-1 font-xs p-0 m-0">Sekolah SD Widya Kirana Kudus</p>
                        <a class="font-xxs text-decoration-none hover-grow-small " href="/sd">Selengkapnya
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="row shadow-sm bg-light h-25 p-3 m-0" style="border-radius: 6px;">
                    <div class="col-2 d-flex justify-content-center align-items-center ">
                        <img height="60px" src="/image/kbfirdaus.png" alt="#" srcset="">
                    </div>
                    <div class="col-10 p-0 ps-3 d-flex flex-column justify-content-center ">
                        <h5 class="p-0 m-0">KB</h5>
                        <p class="py-1 font-xs p-0 m-0">Sekolah KB Firdaus Kudus</p>
                        <a class="font-xxs text-decoration-none hover-grow-small " href="/kb">Selengkapnya
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="row shadow-sm bg-light h-25 p-3 m-0" style="border-radius: 6px;">
                    <div class="col-2 d-flex justify-content-center align-items-center ">
                        <img height="60px" src="/image/tpa.png" alt="" srcset="">
                    </div>
                    <div class="col-10 p-0 ps-3 d-flex flex-column justify-content-center ">
                        <h5 class="p-0 m-0">TPA</h5>
                        <p class="py-1 font-xs p-0 m-0">Sekolah TPA Moms Care Kudus</p>
                        <a class="font-xxs text-decoration-none hover-grow-small " href="/tpa">Selengkapnya
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<section class="container mb-5" style="margin-top: 0px;">
    <div class="row gx-md-4 gx-2">
        <h3 class="text-uppercase m-0 mt-5" style="font-family: nunito-extrabold">Artikel</h3>
        @foreach ($post as $article)
        <div class="col-lg-3 col-md-4 col-sm-6 py-4">
            <div class="container w-100 p-0 bg-light shadow-sm" style="border-radius: 8px; height: 250px;">
                <div style="height: 50%; background-image: url('{{ 'storage/' . $article->image }}'); border-radius: 8px 8px 0px 0px" class="image-container">
                </div>
                <div style="height: 50%;" class="box p-2 d-flex flex-column justify-content-between">
                    <p class="m-1 font-xs" style="font-family: nunito">{{ $article->date }}</p>
                    <p class="m-1 font-s flex-grow-1">{{ $article->title }}</p>
                    <a href="/article/{{ $article->id }}">
                        <button class="btn mt-2 w-100 font-s btn-outline-primary">Lihat Selengkapnya</button>
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="d-flex justify-content-center m-0 mt-3">
        <a href="/article">
            <button class="btn px-5 bgs-primary font-s rounded-pill hover-grow" style="height: 40px">Selengkapnya</button>
        </a>
    </div>
</section>




<section class="container-fluid overflow-hidden">
    <div class="row h-100" style="margin-top: 50px;">
        <div class="col-lg-6 col-md-12 front-background">
        </div>
        <div class="col-lg-6 col-md-12 back-background p-5 text-white">
            <h3 class="m-3">
                Yayasan Elim
            </h3>
            <p class="m-3 text-white font-s" style="font-family: nunito">
                Bedirinya pendidikan di Yayasan Elim pertama kali dimulai pada bulan Juli tahun 2013 yaitu pendirian pendidikan anak - anak usia dini (kelompok bermain). Lalu pada tahun 2014 beridirilah taman penitipan anak atau taman pengasuhan anak. Setelah berkembang lagi di tahun 2019 baru lah berdiri sebuah sekolah dasar yang bernama SD Widya Kirana. Awal mula perintisan yayasan elim ini adalah yayasan ini dulu bergerak di 3 bidang yaitu bidang pendidikan , bidang kesehatan dan bidang sosial. Di bidang sosial memiliki sebuah gereja, di bidang pendidikan memiliki 2 kategori yaitu ada yang formal dan non formal, yang terakhir di bidang kesehatan yaitu memiliki BP elim. Pada tahun 2023 BP elim akhirnya tutup karena dengan adanya kondisi peraturan peraturan yang ada. Dan sampai sekarang yayasan Elim memiliki tiga sarana pendidikan yaitu SD Widya Kirana,KB Firdaus dan TPA Mom's Care.
            </p>
        </div>
    </div>
</section>
<div class="container-fluid d-flex flex-column justify-content-center align-items-center py-5" style="padding-top: 100px; margin-top: 50px; margin-bottom: 50px; padding-bottom: 100px;">
    <h3 class="mb-3 text-center">Kemitraan dan Kerjasama</h3>
    <p style="font-family: nunito" class="mb-3 text-center">Sekolah kami menjalin kerjasama dengan beberapa instansi dalam berbagai bidang</p>
    <div class="box d-flex flex-wrap justify-content-center">
        <img height="80px" src="/image/sdwidya.png" alt="" srcset="">
        <img height="80px" src="/image/kbfirdaus.png" alt="" srcset="">
        <img height="80px" src="/image/tpa.png" alt="" srcset="">
        <img height="80px" src="/image/oakbridge.png" alt="" srcset="">
        <img height="80px" src="/image/bright.png" alt="" srcset="">
        <img height="80px" src="/image/smk.png" alt="" srcset="">
    </div>
</div>

</div>



@endsection