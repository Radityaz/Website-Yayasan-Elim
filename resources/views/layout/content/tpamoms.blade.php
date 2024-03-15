@extends('layout.main')
@section('content')
<div class="container-fluid background-tpa-photo d-flex flex-column text-light vh-100 mb-5">
    <img src="/image/tpa.png" class="img-fluid" alt="TPA Mom's Care Image">
    <h1 class="display-1 text-center mt-3 mb-0">TPA Mom's Care</h1>
    <p class="text-center font-s mt-2 mb-3">Berikut adalah galeri kegiatan kami</p>
    <hr class="mx-auto mb-4" style="width: 50px; border: 3px solid orange;">
</div>
<section class="container-fluid overflow-hidden">
    <div class="row">
        <div class="col-md-6 front-kb-background"></div>
        <div class="col-md-6 p-5 d-flex flex-column align-items-start justify-content-center">
            <div class="box mb-5">
                <h4 class="texts-primary">TPA Moms Care</h4>
                <p style="font-family: nunito;" class="font-s">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
            </div>
            <div class="box">
                <h4 class="texts-primary">Learning Benefits</h4>
                <p style="font-family: nunito;" class="font-s">
                    1. Bahasa pengantar Bahasa Inggris
                    <br>
                    2. Pembelajaran dilaksanakan secara fullday
                    <br>
                    3. Siswa dibelaki keterampilan abad 21 (STEM)
                    <br>
                    4. Siswa lulus memperoleh 2 (dua) Ijazah, yaitu : Ijazah Nasional dan Internasional (Oakbridge International School, Malaysia)
                    <br>
                </p>
            </div>
        </div>
    </div>
</section>

<section class="container overflow-hidden" style="margin-top: 5%">
    <div class="row">
        <div class="col-lg-6 p-4 p-lg-5 d-flex flex-column align-items-start justify-content-center">
            <div class="box mb-4 mb-lg-5">
                <h4 class="texts-primary">Visi</h4>
                <p style="font-family: nunito;" class="font-s">
                    Menjadi Partner orang tua yang terpercaya dalam mengasuh dan mendidik anak dengan penuh kasih. Sesuai tingkat pertumbuhan dan perkembangan anak yang seutuhnya pada usia emas.
                </p>
            </div>
            <div class="box">
                <h4 class="texts-primary">Misi</h4>
                <p style="font-family: nunito;" class="font-s">
                    Menjadi rumah kedua yang nyaman dan bersahabat bagi anak, dengan memberikan perhatian, perawatan dalam mengasuh anak yang menjadi kebutuhan mereka sehari - hari.
                </p>
            </div>
        </div>
        <div class="col-md-6 d-flex align-items-center justify-content-center">
            <img class="img-fluid" height="auto" src="/image/tpabawah.png" alt="" srcset="">
        </div>
    </div>
</section>

@endsection