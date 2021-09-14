<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- Web & Page Title -->
    <title>{{ config('app.name', 'Laravel') }} @yield('title')</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    {{-- <link rel="dns-prefetch" href="//fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" /> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- Styles -->
    <link rel="icon" href="{{ asset('img/yc-icon.png') }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light top-navbar sticky-top">
      <div class="container-fluid">
        <a class="navbar-brand text-capitalize fw-bold" href="#">
          <img src="{{ asset('img/square-img-placeholder.jpg') }}" alt="" width="40" height="40" class="d-inline-block align-middle">
          jasa raharja
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link text-capitalize" href="{{ url('/') }}">home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-capitalize" href="{{ url('/#announcement') }}">pengumuman pemenang</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link text-capitalize dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                leaderboard
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item text-capitalize" href="#">catur</a></li>
                <li><a class="dropdown-item text-uppercase" href="#">pubg</a></li>
                <li><a class="dropdown-item text-capitalize" href="#">running</a></li>
                <li><a class="dropdown-item text-capitalize" href="#">cycling</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link text-uppercase" href="#">faq</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-capitalize" href="#">login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div id="app">
      <section id="banner">
        <div class="container pt-3">
          @yield('banner')
        </div>
      </section>
      <main>@yield('content')</main>
    </div>
    <footer>
      <div class="container py-4">
        <div class="row">
          <div class="col-auto align-self-center">
            <img src="{{ asset('img/square-img-placeholder.jpg') }}" width="80" height="80" class="d-inline-block align-middle" alt="...">
          </div>
          <div class="col align-self-center">
            <h2 class="fw-bold text-capitalize">jasa raharja</h2>
          </div>
        </div>
        <hr>
        <div class="row justify-content-between">
          <div class="col-auto fw-bold text-muted">
            Kontak Kami
          </div>
          <div class="col-auto">
            <a class="px-3 py-2" href=""><i class="fab fa-facebook"></i></a>
            <a class="px-3 py-2" href=""><i class="fab fa-twitter"></i></a>
            <a class="px-3 py-2" href=""><i class="fab fa-instagram"></i></a>
          </div>
        </div>
        <hr>
        <p>Untuk pertanyaan lebih lanjut dapat menghubungi :</p>
        <ul>
          <li>Nama 1 : +62 - XXXXXXXXXXX</li>
          <li>Nama 2 : +62 - XXXXXXXXXXX</li>
          <li>Nama 3 : +62 - XXXXXXXXXXX</li>
        </ul>
      </div>
      <div class="container-fluid bg-primary text-white py-2">
        <small>&copy; Copyright <script>document.write(new Date().getFullYear())</script> Example Copyright</small>
      </div>
    </footer>

    @yield('script')
  </body>
</html>
