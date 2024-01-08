<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cursos laguna</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
  
    <!-- Favicons -->
    <link href="{{ asset('img/favicon.png') }}" rel="icon">
    <link href="{{ asset('img/apple-touch-icon.png')}}" rel="apple-touch-icon">
  
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    
    <!-- Vendor CSS Files -->
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/aos/aos.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}"> --}}

    <!-- Template Main CSS File -->
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <!-- Normaliza file -->
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
    
</head>
<body class="index-page" data-bs-spy="scroll" data-bs-target="#navmenu">
  
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>CURSOS LAGUNA</h1>
        <span>.</span>
      </a>

      <!-- Nav Menu -->
      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="index.html#hero" class="active">Inicio</a></li>
          <li><a href="index.html#about">Acerca de nosotros</a></li>
          {{-- <li><a href="index.html#services">Servicios</a></li> --}}
          <li><a href="{{ route('registromhome') }}">Enseña con nosotros</a></li>
          <li><a href="index.html#portfolio">Lista de cursos</a></li>
          {{-- <li class="dropdown has-dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down"></i></a>
            <ul class="dd-box-shadow">
              <li><a href="#">Dropdown 1</a></li>
              <li class="dropdown has-dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down"></i></a>
                <ul class="dd-box-shadow">
                  <li><a href="#">Deep Dropdown 1</a></li>
                  <li><a href="#">Deep Dropdown 2</a></li>
                  <li><a href="#">Deep Dropdown 3</a></li>
                  <li><a href="#">Deep Dropdown 4</a></li>
                  <li><a href="#">Deep Dropdown 5</a></li>
                </ul>
              </li>
              <li><a href="#">Dropdown 2</a></li>
              <li><a href="#">Dropdown 3</a></li>
              <li><a href="#">Dropdown 4</a></li>
            </ul> --}}
          </li>
          <li><a href="index.html#contact">Contacto</a></li>
        </ul>

        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav><!-- End Nav Menu -->

      <a class="btn-getstarted" href="{{route('login')}}">Iniciar Sesión</a>

    </div>
  </header><!-- End Header -->    
      <!-- Scroll Top Button -->
      <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

      <main>
          @yield('contenido')
          <footer>PIE</footer>
      </main>
  


      <!-- Vendor JS Files -->
      <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="/vendor/glightbox/js/glightbox.min.js"></script>
      <script src="/vendor/purecounter/purecounter_vanilla.js"></script>
      <script src="/vendor/isotope-layout/isotope.pkgd.min.js"></script>
      <script src="/vendor/swiper/swiper-bundle.min.js"></script>
      <script src="/vendor/aos/aos.js"></script>
      <script src="/vendor/php-email-form/validate.js"></script>
    
      <!-- Template Main JS File -->
      <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>