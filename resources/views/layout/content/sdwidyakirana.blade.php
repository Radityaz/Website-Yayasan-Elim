@extends('layout.main')
@section('content')
<div class="container-fluid background-sd-photo d-flex flex-column text-light vh-100 mb-5">
    <img height="200px" src="/image/sdwidya.png" alt="" srcset="">
    <h1 class="display-1 text-center mt-3">SD Widya Kirana</h1>
    <p class="w-100 text-center font-s" style="font-family: nunito">Berikut adalah detail tentang SD Widya Kirana</p>
    <hr class="w-50 mx-auto mt-3" style="border: 3px solid orange; opacity: 100%">
</div>

<section class="container-fluid overflow-hidden">
    <div class="row">
        <div class="col-md-6 front-background"></div>
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
                "Membangun Generasi yang unggul berdampak dalam iman, ilmu, teknologi dan berintegritas"
                </p>
            </div>
            <div class="box">
                <h4 class="texts-primary">Misi</h4>
                <p style="font-family: nunito;" class="font-s">
                    1. Menyelenggarakan pendidikan dan pembelajaran yang bermutu, holistik, dan menyenangkan sesuai keunikan peserta didik
                    <br>
                    2. Membangun kualitas peserta didik melalui motivasi, pendidikan berkarakter
                    <br>
                    3. Meningkatkan mutu lulusan yang unggul dan mampu bersaing melalui pendidikan yang berkualitas
                    <br>
                    4. Mengembangkan minat, bakat, dan potensi peserta didik melalui Kurikulum yang berorientasi pada keterampilan hidup dan teknologi
                    <br>
                </p>
            </div>
        </div>
        <div class="col-lg-6 d-flex align-items-center justify-content-center">
            <img class="img-fluid" src="/image/image-sd-1.png" alt="" style="max-height: 650px; margin-bottom: 80px;">
        </div>
    </div>
</section>

<section class="container overflow-hidden my-5">
    <div class="row">
        <div class="col-lg-6 px-5 d-flex align-items-center justify-content-center justify-content-lg-start">
            <img class="img-fluid" height="550px" src="/image/background-kurikulum.jpg" alt="">
        </div>
        <div class="col-lg-6 d-flex flex-column align-items-center justify-content-center justify-content-lg-end">
            <div class="box mt-5 p-5 h-100 w-100" style="background-color: #c4e2ff">
                <h4 class="texts-primary text-center text-lg-start">
                    Kurikulum <br> OakBridge Nasional Plus
                </h4>
                <br>
                <p style="font-family: nunito;" class="w-100 text-center text-lg-start">
                    Oakbridge adalah sistem pembelajaran yang memberikan solusi dengan menggunakan kurikulum Nasional Plus yang berstandar Nasional dan Internasional. Oakbridge mentransformasi cara belajar yang konvensional menjadi pembelajaran yang berbasis teknologi.
                </p>
            </div>
        </div>
    </div>
</section>

@endsection