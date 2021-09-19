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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- Styles -->
    <link rel="icon" href="{{ asset('img/logo-jasa-raharja.png') }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light top-navbar sticky-top">
      <div class="container-fluid">
        <a class="navbar-brand text-capitalize fw-bold" href="{{ url('/') }}">
          <div class="row">
            <div class="col">
              <img src="{{ asset('img/logo-jasa-raharja.png') }}" alt="" width="64" height="64" class="d-inline-block align-middle">
            </div>
            <div class="col align-self-center">
              jasa raharja<br>
              <span class=" text-muted fs-6">virtual olympic</span>
            </div>
          </div>
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
              <a class="nav-link text-capitalize" href="{{ url('/#announcement') }}">pengumuman</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-capitalize" href="{{ route('rule.index') }}">peraturan</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link text-capitalize dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                leaderboard
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item text-uppercase" href="{{ route('leaderboard.index') }}">pubg</a></li>
                <li><a class="dropdown-item text-capitalize" href="{{ route('leaderboard.index') }}">chess</a></li>
                <li><a class="dropdown-item text-capitalize" href="{{ route('leaderboard.index') }}">bridge</a></li>
                <li><a class="dropdown-item text-capitalize" href="{{ route('leaderboard.index') }}">bike & run</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link text-uppercase" href="{{ route('faq.index') }}">faq</a>
            </li>
            @auth
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    {{ auth()->user()->name}}
                  </a>
                  <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="nav-link text-capitalize" href="{{ route('login') }}">dashboard</a>
                  </ul>
              </li>
            @endauth
            @guest
              <li class="nav-item">
                <a class="nav-link text-capitalize" href="{{ route('login') }}">login</a>
              </li> 
            @endguest
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
            <img src="{{ asset('img/logo-jasa-raharja.png') }}" width="80" height="80" class="d-inline-block align-middle" alt="...">
          </div>
          <div class="col align-self-center fw-bold text-capitalize">
            <span class=" f-montserrat fs-3 ">jasa raharja</span><br>
            <span class=" text-muted fs-6">virtual olympic</span>
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
          <li>Donny : +62 - 812-3155-327</li>
          <li>Dodo : +62 - 857-30004-3192</li>
          <li>Yulia : +62 - 852-5577-8899</li>
        </ul>
      </div>
      <div class="container-fluid bg-primary text-white py-2">
        <small>&copy; Copyright <script>document.write(new Date().getFullYear())</script> Jasa Raharja Virtual Olympic</small>
      </div>
    </footer>

    @yield('script')
  </body>
</html>
