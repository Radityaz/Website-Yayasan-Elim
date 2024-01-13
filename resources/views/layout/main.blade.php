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
      <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
          <a class="navbar-brand p-0 " href="/">
            <img class="p-0 m-0" src="/image/logo.png"  width=60" height="55">
          </a>
          <div class="collapse navbar-collapse " id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto ">
              <li class="nav-item navbar-active">
                <a class="nav-link font-s hover-grow" href="/">Beranda</a>
              </li>
              <li class="nav-item">
                <a class="nav-link font-s " href="/about">Tentang Kami</a>
              </li>
              <li class="nav-item">
                <a class="nav-link font-s " href="/article">Artikel</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link font-s  dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Tempat
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">SD Widya Kirana</a></li>
                  <li><a class="dropdown-item" href="#">KB Firdaus</a></li>
                  <li><a class="dropdown-item" href="#">TPA</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>


      @yield('content')
      
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>