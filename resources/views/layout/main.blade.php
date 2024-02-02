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
    <nav class="navbar navbar-expand-lg fixed-top">
      <div class="container">
        <a class="navbar-brand p-0 " href="/">
          <img class="p-0 m-0" src="/image/logo.png"  width=60" height="55">
        </a>
        <div class="collapse navbar-collapse " id="navbarNavDropdown">
          <ul class="navbar-nav ms-auto ">
            <li class="nav-item {{ $page == "home" ? 'navbar-active' : 'navbar-jnonactive'; }} ">
              <a class="nav-link font-s hover-grow" href="/">Beranda</a>
            </li>
            <li class="nav-item {{ $page == "about" ? 'navbar-active' : 'navbar-nonactive'; }} ">
              <a class="nav-link font-s " href="/about">Tentang Kami</a>
            </li>
            <li class="nav-item {{ $page == "article" ? 'navbar-active' : 'navbar-nonactive'; }} " >
              <a class="nav-link font-s " href="/article">Artikel</a>
            </li>
            <li class="nav-item dropdown {{ $page == "place" ? 'navbar-active' : 'navbar-nonactive'; }} ">
              <a class="nav-link font-s  dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Tempat
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item {{ $navcontent == "SD Widya Kirana" ? 'bgs-primary' : ''; }}  " href="/sd">SD Widya Kirana</a></li>
                <li><a class="dropdown-item {{ $navcontent == "KB Firdaus" ? 'bgs-primary' : ''; }} " href="/kb">KB Firdaus</a></li>
                <li><a class="dropdown-item {{ $navcontent == "TPA Mom's Care" ? 'bgs-primary' : ''; }} " href="/tpa">TPA</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  @else
    <nav class="navbar navbar-expand-lg fixed-top">
      <div class="container">
        <a class="navbar-brand p-0 " href="/article">
          <img class="p-0 m-0" src="/image/back.png"  width="30">
        </a>
        <div class="collapse navbar-collapse justify-content-center text-black" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item {{ $page == "home" ? 'navbar-active' : 'navbar-jnonactive'; }} ">
              <a class="nav-link" style="color: black" >{{ $article->title }}</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  @endif
      
      <div class="container-fluid bg-light {{ strlen($navcontent) > 0 ? "d-flex" : "d-none" }} justify-content-center align-items-center" style="margin: 100px 0px 10px 0px; height: 60px " >
        <h6 class="p-0 m-0" >
            <h5 class="texts-primary" >{{ $navcontent }}</h5>
        </h6>
    </div>


      @yield('content')

      <footer class="container-fluid bgs-primary d-flex flex-column align-items-center justify-content-center" style="height: 65vh" >
        <div class="row " style="width: 50%" >
          <div class="col-4 m-0 p-0">
            <div class="d-flex align-items-center justify-content-start w-100" >
              <img height="40px"src="/image/logo.png" alt="">
              <h6 class="p-0 m-0 ms-2 text-uppercase " >
                yayasan elim
              </h6>
            </div>
            <div class="d-flex ps-2 align-items-start justify-content-start w-100 my-2" >
              <img height="30px"src="/image/location.png" alt="">
              <p class="p-0 m-0 ms-2 text-capitalize font-s" style="font-family: nunito"  >
                Jl. Pemuda No.60, Magersari, Panjunan, Kec. Kota Kudus, Kabupaten Kudus, Jawa Tengah 59317
              </p>
            </div>
            <div class="d-flex ps-2 align-items-center justify-content-start w-100 my-2" >
              <img height="30px"src="/image/building.png" alt="">
              <p class="p-0 m-0 ms-2 text-capitalize font-s" style="font-family: nunito"  >
                +62 852-2500-3485
              </p>
            </div>
            <div class="d-flex ps-2 align-items-center justify-content-start w-100 my-2" >
              <img height="30px"src="/image/mail.png" alt="">
              <p class="p-0 m-0 ms-2 text-capitalize font-s" style="font-family: nunito"  >
                sdwidyakirana@gmail.com
              </p>
            </div>
          </div>
          <div class="col-4 text-uppercase d-flex flex-column align-items-start justify-content-start p-0 m-0 ps-2 ">
            <div class="d-flex align-items-center justify-content-start w-100" style="height: 40px" >
              <h6 class="p-0 m-0 ms-2 text-uppercase " >
                yayasan elim
              </h6>
            </div>
            <div class="d-flex align-items-start justify-content-start w-100 my-2" >
              <a class="p-0 m-0 ms-2 text-uppercase font-s text-decoration-none text-white" href="/sd" style="font-family: nunito"  >
                Tentang Sd
              </a>
            </div>
            <div class="d-flex align-items-start justify-content-start w-100 my-2" >
              <a class="p-0 m-0 ms-2 text-uppercase font-s text-decoration-none text-white" href="/kb" style="font-family: nunito"  >
                Tentang KB
              </a>
            </div>
            <div class="d-flex align-items-start justify-content-start w-100 my-2" >
              <a class="p-0 m-0 ms-2 text-uppercase font-s text-decoration-none text-white" href="/tpa" style="font-family: nunito"  >
                Tentang tpa
              </a>
            </div>
          </div>
          <div class="col-4 text-uppercase d-flex flex-column align-items-start justify-content-start p-0 m-0 ps-2 ">
            <div class="d-flex align-items-center justify-content-start w-100" style="height: 40px" >
              <h6 class="p-0 m-0 ms-2 text-capitalize " >
                SITE Link
              </h6>
            </div>
            <div class="d-flex align-items-start justify-content-start w-100 my-2" >
              <a class="p-0 m-0 ms-2 text-capitalize font-s text-decoration-none text-white" href="#" style="font-family: nunito"  >
                Instagram SD
              </a>
            </div>
            <div class="d-flex align-items-start justify-content-start w-100 my-2" >
              <a class="p-0 m-0 ms-2 text-capitalize font-s text-decoration-none text-white" href="#" style="font-family: nunito"  >
                Instagram KB
              </a>
            </div>
            <div class="d-flex align-items-start justify-content-start w-100 my-2" >
              <a class="p-0 m-0 ms-2 text-capitalize font-s text-decoration-none text-white" href="#" style="font-family: nunito"  >
                Youtube SD
              </a>
            </div>
            <div class="d-flex align-items-start justify-content-start w-100 my-2" >
              <a class="p-0 m-0 ms-2 text-capitalize font-s text-decoration-none text-white" href="#" style="font-family: nunito"  >
                Youtube KB
              </a>
            </div>
          </div>
        </div>
      </div>
      <hr class="border w-75" >
      <p class="font-xs" style="font-family:nunito" >Yayasan Elim © 2023 | Hak cipta dilindungi undang-undang</p>
      </footer>
      
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>