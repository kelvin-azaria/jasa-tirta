<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- Styles -->
    <link rel="icon" href="{{ asset('img/yc-icon.png') }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
  </head>
  <body>
    <div id="app">
      <nav class="navbar navbar-expand-lg navbar-light top-navbar sticky-top">
        <p class="navbar-brand">
          <a href="https://bpdlh.id/"><img src="{{ asset('img/logo.png') }}" height="80"  alt=""></a>
        </p>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
          <span class="fas fa-bars text-green"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item align-self-center">
              <a class="nav-link font-weight-bold" href="{{ url('/') }}">Link 1</a>
            </li>
            <li class="nav-item align-self-center">
              <a class="nav-link font-weight-bold" href="{{ url('/') }}">Link 2</a>
            </li>
            <li class="nav-item align-self-center">
              <a class="nav-link font-weight-bold" href="{{ url('/') }}">Link 3</a>
            </li>
            <li class="nav-item align-self-center">
              <a class="nav-link font-weight-bold" href="{{ url('/') }}">Link 4</a>
            </li>
            <li class="nav-item align-self-center">
              <a class="nav-link font-weight-bold" href="{{ url('/') }}">Link 5</a>
            </li>
          </ul>
        </div>
      </nav>
      <main>@yield('content')</main>
    </div>
    <footer>
      <div class="container-fluid text-white bg-dark py-3">
        <div class="row my-2">
          <div class="col">
            <small>&copy; Copyright <script>document.write(new Date().getFullYear())</script> Example Copyright</small>
          </div>
        </div>
        
      </div>
    </footer>

    @yield('script')
  </body>
</html>
