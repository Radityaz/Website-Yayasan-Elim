<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Website Yayasan Elim</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="shortcut icon" href="/image/logo.png" type="image/x-icon">
</head>
<body>

@if ($page != 'articledetail')
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="/image/logo.png" width="60" height="55" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item {{ $page == "home" ? 'active' : '' }}">
                    <a class="nav-link" href="/">Beranda</a>
                </li>
                <li class="nav-item {{ $page == "about" ? 'active' : '' }}">
                    <a class="nav-link" href="/about">Tentang Kami</a>
                </li>
                <li class="nav-item {{ $page == "galery" ? 'active' : '' }}">
                    <a class="nav-link" href="/">Galeri</a>
                </li>
                <li class="nav-item {{ $page == "article" ? 'active' : '' }}">
                    <a class="nav-link" href="/article">Artikel</a>
                </li>
                <li class="nav-item dropdown {{ $page == "place" ? 'active' : '' }}">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Tempat
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="/sd">SD Widya Kirana</a></li>
                        <li><a class="dropdown-item" href="/kb">KB Firdaus</a></li>
                        <li><a class="dropdown-item" href="/tpa">TPA</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
@else
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
        <a class="navbar-brand" href="/article">
            <img src="/image/back.png" width="30" alt="">
        </a>
        <div class="collapse navbar-collapse justify-content-center text-black" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item {{ $page == "home" ? 'active' : '' }}">
                    <a class="nav-link">{{ $article->title }}</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
@endif

<div class="container-fluid bg-light {{ strlen($navcontent) > 0 ? "d-flex" : "d-none" }} justify-content-center align-items-center" style="margin: 100px 0px 10px 0px; height: 60px">
    <h6 class="p-0 m-0">
        <h5 class="texts-primary">{{ $navcontent }}</h5>
    </h6>
</div>

@yield('content')

  <footer class="container-fluid bgs-primary text-white py-4 container-fluid d-flex flex-column align-items-center justify-content-center" style="padding-top: 20px;">
      <div class="row justify-content-center" style="margin-top: 20px; margin-left:10px;" >
          <div class="col-lg-3 col-md-6 mb-4" >
              <div class="d-flex align-items-center">
                  <img height="40px" src="/image/logo.png" alt="Yayasan Elim Logo">
                  <h6 class="ms-2 text-uppercase">yayasan elim</h6>
              </div>
              <div class="mt-2">
                  <div class="d-flex align-items-start">
                      <img height="30px" src="/image/location.png" alt="Location Icon">
                      <p class="ms-2 mb-0 text-capitalize font-s" style="font-family: nunito">Jl. Pemuda No.60, Magersari, Panjunan, Kec. Kota Kudus, Kabupaten Kudus, Jawa Tengah 59317</p>
                  </div>
                  <div class="d-flex align-items-start">
                      <img height="30px" src="/image/building.png" alt="Building Icon">
                      <p class="ms-2 mb-0 font-s" style="font-family: nunito">+62 852-2500-3485</p>
                  </div>
                  <div class="d-flex align-items-start">
                      <img height="30px" src="/image/mail.png" alt="Mail Icon">
                      <p class="ms-2 mb-0 font-s" style="font-family: nunito">sdwidyakirana@gmail.com</p>
                  </div>
              </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-4">
              <h6 class="text-uppercase">Tentang Kami</h6>
              <div class="mb-2">
                  <a href="/sd" class="text-white text-decoration-none font-s" style="font-family: nunito">Tentang SD Widya Kirana</a><br>
                  <a href="/kb" class="text-white text-decoration-none font-s" style="font-family: nunito">Tentang KB Firdaus</a><br>
                  <a href="/tpa" class="text-white text-decoration-none font-s" style="font-family: nunito">Tentang TPA Moms Care</a>
              </div>
          </div>
          <div class="col-lg-3 mb-4">
              <h6 class="text-uppercase">Social Media</h6>
              <div class="mb-2">
                  <a href="https://www.instagram.com/sdwidyakiranakudus/" class="text-white text-decoration-none font-s" style="font-family: nunito">Instagram SD Widya Kirana</a><br>
                  <a href="https://www.instagram.com/kbfirdaus_kds/" class="text-white text-decoration-none font-s" style="font-family: nunito">Instagram KB Firdaus</a><br>
                  <a href="https://www.youtube.com/@sdwidyakiranakudus2486" class="text-white text-decoration-none font-s" style="font-family: nunito">Youtube SD Widya Kirana</a><br>
                  <a href="https://www.youtube.com/@kbfirdauskudus7237" class="text-white text-decoration-none font-s" style="font-family: nunito">Youtube KB Firdaus</a>
              </div>
          </div>
      </div>
      <hr class="border w-75 mx-auto">
      <p class="text-center font-xs" style="font-family: nunito">Yayasan Elim © 2023 | Hak cipta dilindungi undang-undang</p>
  </footer>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>
