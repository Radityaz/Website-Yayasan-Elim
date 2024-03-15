@extends('layout.main')
@section('content')
<div class="container-fluid background-kb-photo d-flex flex-column text-light vh-100 mb-5">
    <img src="/image/kbfirdaus.png" class="img-fluid" alt="KB Firdaus Image">
    <h1 class="display-1 text-center mt-3 mb-0">KB Firdaus</h1>
    <p class="text-center font-s mt-2 mb-3">Berikut adalah galeri kegiatan kami</p>
    <hr class="mx-auto mb-4" style="width: 50px; border: 3px solid orange;">
</div>
<section class="container-fluid overflow-hidden">
    <div class="row">
        <div class="col-md-6 front-tpa-background"></div>
        <div class="col-md-6 p-5 d-flex flex-column align-items-start justify-content-center">
            <div class="box mb-5">
                <h4 class="texts-primary">Partner School</h4>
                <p style="font-family: nunito;" class="font-s">
                Oakbridge International School, Malaysia. Oakbridge International School Phnom Penh, Cambodia. Oakbridge Sekolah National Plus Tarjun, Indonesia. Iseed Integrated Scool, Kelapa Gading, Jakarta Utara. Mawar Sharon Christian School, Kelapa Gading, Jakarta Utara. Kingdom School Pekalongan, Indonesia. Chosen Generation Academy, Banjarmasin
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


<section class="container overflow-hidden mt-5">
    <div class="row">
        <div class="col-md-6 p-5 d-flex flex-column align-items-start justify-content-center">
            <div class="box mb-5">
                <h4 class="texts-primary">Visi</h4>
                <p style="font-family: nunito;" class="font-s">
                    “BERKARAKTER DAN MENJADI TERANG”
                </p>
            </div>
            <div class="box">
                <h4 class="texts-primary">Misi</h4>
                <p style="font-family: nunito;" class="font-s">
                    1. Anak Didik memiliki karakter Beriman, Kasih, Ceria, Mandiri, Jujur, Kritis dan Disiplin
                    <br>
                    2. Anak Didik dapat menjadi Berkat dan Teladan bagi orang tua serta lingkungan sekitar
                    <br>
                    3. Anak didik mampu berinteraksi maupun bersosialisasi dengan lingkungan dan menjadikannya sebagai kekuatan anak dalam mencapai prestasi bagi masa depannya
                    <br>
                    4. Anak menjadi pribadi yang bernilai bagi lingkungannya
                    <br>
                </p>
            </div>
        </div>
        <div class="col-lg-6 d-flex align-items-center justify-content-center">
            <img class="img-fluid" src="/image/image-kb-3.png" alt="" style="max-height: 650px; margin-bottom: 110px;">
        </div>
    </div>
</section>
@endsection