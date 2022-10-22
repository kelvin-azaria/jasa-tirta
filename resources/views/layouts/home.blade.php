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
    <link rel="icon" href="{{ asset('img/logo.png') }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
  </head>
  <body>

    {{-- Tablet to PC Navbar --}}
    <nav id="landing-navbar" class="navbar navbar-expand-md d-none d-md-block sticky-top">
      <div class="container-fluid">
        <a class="navbar-brand text-capitalize fw-bold" href="{{ url('/') }}">
          <div class="row">
            <div class="col">
              <img src="{{ asset('img/logo-2.png') }}" alt="" width="64" height="64" class="d-inline-block align-middle">
            </div>
            <div class="col align-self-center">
              <div id="nav-heading">
              jasa raharja<br>
              <small id="nav-sub-heading" class="text-muted ">virtual olympic</small>
              </div>
            </div>
          </div>
        </a>

        <div class="collapse navbar-collapse justify-content-end">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a role="button" href="{{ url('/') }}" class="nav-link fw-bold px-3 text-capitalize"><small><i class="fas fa-home pe-2"></i><span class="nav-link-text d-xl-inline">home</span></small></a>
            </li>
            <li class="nav-item">
              <a role="button" href="{{ url('/#announcement') }}" class="nav-link fw-bold px-3 text-capitalize"><small><i class="fas fa-bullhorn pe-2"></i><span class="nav-link-text d-xl-inline">pengumuman</span></small></a>
            </li>
            <li class="nav-item">
              <a role="button" href="{{ route('rule.index') }}" class="nav-link fw-bold px-3 text-capitalize"><small><i class="fas fa-dice pe-2"></i><span class="nav-link-text d-xl-inline">peraturan</span></small></a>
            </li>
            <li class="nav-item dropdown">
              <a role="button" href="#" class="nav-link fw-bold px-3 text-capitalize  dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" ><small><i class="fas fa-trophy pe-2"></i><span class="nav-link-text d-xl-inline">leaderboards</span></small></a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><small class="dropdown-header fw-bold">Perlombaan</small></li>
                <li>
                  <div class="">
                    <div class="row justify-content-around mx-0 my-2">
                      <div class="col px-2">
                        <a name="" id="" class="btn w-100 dropdown-link" href="{{ route('leaderboards.pubg') }}" role="button">
                          <div><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 48 48"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M14.014 14.304A16.776 16.776 0 0 1 43.5 25.271"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M43.5 25.27a53.822 53.822 0 0 1-1.136 10.553m-28.35-21.519l-.858 1.253a2.792 2.792 0 0 0-2.33 2.19"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M13.155 15.557a36.262 36.262 0 0 1 12.956 2.363c6.779 2.602 9.247 4.799 10.129 6.083a2.208 2.208 0 0 1-.313 2.919a2.097 2.097 0 0 1-2.729.115"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M29.962 24.742c-4.904-4.675-21.623-8.117-22.478-6.71c-.529.87-.963 2.107-.615 2.57"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M6.869 20.602s-1.89 3.107-1.248 3.56c0 0-.614-.069-.92 1.246s-.307 1.847.52 2.416s1.794 1.4 1.794 1.4l-2.043 5.084s-.246 2.108 4.457 3.292a3.796 3.796 0 0 0 4.543-1.822m7.414 2.8c2.741 1.33 6.19 1.16 7.182.096a13.815 13.815 0 0 0 1.909-3.25s1.195 2.412 5.15 2.373a13.051 13.051 0 0 0 6.737-1.974"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M26.772 32.21s-7.694-4.17-13.208-5.033a46.129 46.129 0 0 0-9.064-.64m1.12-2.375a24.34 24.34 0 0 1 6.869.26a35.3 35.3 0 0 1 9.835 3.155l1.357-3.137a42.687 42.687 0 0 0-11.127-3.515a32.769 32.769 0 0 0-5.685-.324m23.608 14.823l2.72-8.387"/><circle cx="26.149" cy="25.411" r=".75" fill="currentColor"/><circle cx="24.502" cy="28.793" r=".75" fill="currentColor"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M21.386 38.578s-12.163-5.699-16.414-4.27"/></svg></div>
                          <small class="text-capitalize ">PUBG</small>
                        </a>
                      </div>
                    </div>
                    <div class="row justify-content-around mx-0 my-2">
                      <div class="col ps-2 pe-1">
                        <a name="" id="" class="btn w-100 dropdown-link" href="{{ route('leaderboards.bridge') }}" role="button">
                          <div><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="M12 2C9 7 4 9 4 14c0 2 2 4 4 4c1 0 2 0 3-1c0 0 .32 2-2 5h6c-2-3-2-5-2-5c1 1 2 1 3 1c2 0 4-2 4-4c0-5-5-7-8-12Z"/></svg></div>
                          <small class="text-capitalize ">bridge</small>
                        </a>
                      </div>
                      <div class="col ps-1 pe-2">
                        <a name="" id="" class="btn w-100 dropdown-link" href="{{ route('leaderboards.chess') }}" role="button">
                          <div><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 512 512"><path fill="currentColor" d="M74 208H64a16 16 0 0 0-16 16v16a16 16 0 0 0 16 16h15.94A535.78 535.78 0 0 1 64 384h128a535.78 535.78 0 0 1-15.94-128H192a16 16 0 0 0 16-16v-16a16 16 0 0 0-16-16h-10l33.89-90.38a16 16 0 0 0-15-21.62H144V64h24a8 8 0 0 0 8-8V40a8 8 0 0 0-8-8h-24V8a8 8 0 0 0-8-8h-16a8 8 0 0 0-8 8v24H88a8 8 0 0 0-8 8v16a8 8 0 0 0 8 8h24v32H55.09a16 16 0 0 0-15 21.62zm173.16 251.58L224 448v-16a16 16 0 0 0-16-16H48a16 16 0 0 0-16 16v16L8.85 459.58A16 16 0 0 0 0 473.89V496a16 16 0 0 0 16 16h224a16 16 0 0 0 16-16v-22.11a16 16 0 0 0-8.84-14.31zm92.77-157.78l-3.29 82.2h126.72l-3.29-82.21l24.6-20.79A32 32 0 0 0 496 256.54V198a6 6 0 0 0-6-6h-26.38a6 6 0 0 0-6 6v26h-24.71v-26a6 6 0 0 0-6-6H373.1a6 6 0 0 0-6 6v26h-24.71v-26a6 6 0 0 0-6-6H310a6 6 0 0 0-6 6v58.6a32 32 0 0 0 11.36 24.4zM384 304a16 16 0 0 1 32 0v32h-32zm119.16 155.58L480 448v-16a16 16 0 0 0-16-16H336a16 16 0 0 0-16 16v16l-23.15 11.58a16 16 0 0 0-8.85 14.31V496a16 16 0 0 0 16 16h192a16 16 0 0 0 16-16v-22.11a16 16 0 0 0-8.84-14.31z"/></svg></div>
                          <small class="text-capitalize ">chess</small>
                        </a>
                      </div>
                    </div>
                    <div class="row justify-content-around mx-0 my-2">
                      <div class="col ps-2 pe-1">
                        <a name="" id="" class="btn w-100 dropdown-link" href="{{ route('leaderboards.ride') }}" role="button">
                          <div><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="6" cy="15" r="4"/><circle cx="18" cy="15" r="4"/><path d="m6 15l2-7h7.5M6 5h3m9 10L15 5h4m0 0h.5A1.5 1.5 0 0 1 21 6.5v0A1.5 1.5 0 0 1 19.5 8H19"/></g></svg></div>
                          <small class="text-capitalize ">ride</small>
                        </a>
                      </div>
                      <div class="col ps-1 pe-2">
                        <a name="" id="" class="btn w-100 dropdown-link" href="{{ route('leaderboards.run') }}" role="button">
                          <div><svg xmlns="http://www.w3.org/2000/svg" width="0.82em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 416 512"><path fill="currentColor" d="M272 96c26.51 0 48-21.49 48-48S298.51 0 272 0s-48 21.49-48 48s21.49 48 48 48zM113.69 317.47l-14.8 34.52H32c-17.67 0-32 14.33-32 32s14.33 32 32 32h77.45c19.25 0 36.58-11.44 44.11-29.09l8.79-20.52l-10.67-6.3c-17.32-10.23-30.06-25.37-37.99-42.61zM384 223.99h-44.03l-26.06-53.25c-12.5-25.55-35.45-44.23-61.78-50.94l-71.08-21.14c-28.3-6.8-57.77-.55-80.84 17.14l-39.67 30.41c-14.03 10.75-16.69 30.83-5.92 44.86s30.84 16.66 44.86 5.92l39.69-30.41c7.67-5.89 17.44-8 25.27-6.14l14.7 4.37l-37.46 87.39c-12.62 29.48-1.31 64.01 26.3 80.31l84.98 50.17l-27.47 87.73c-5.28 16.86 4.11 34.81 20.97 40.09c3.19 1 6.41 1.48 9.58 1.48c13.61 0 26.23-8.77 30.52-22.45l31.64-101.06c5.91-20.77-2.89-43.08-21.64-54.39l-61.24-36.14l31.31-78.28l20.27 41.43c8 16.34 24.92 26.89 43.11 26.89H384c17.67 0 32-14.33 32-32s-14.33-31.99-32-31.99z"/></svg></div>
                          <small class="text-capitalize ">run</small>
                        </a>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </li>
            <li class="nav-item pe-2">
              <a role="button" href="{{ route('faq.index') }}" class="nav-link fw-bold px-3 text-capitalize"><small><i class="fas fa-question-circle pe-2"></i><span class="nav-link-text d-xl-inline">FAQ</span></small></a>
            </li>
            @auth
              <li class="nav-item dropdown">
                  {{-- <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    {{ auth()->user()->name}}
                  </a> --}}
                  <a role="button" href="#" class="btn-primary btn fw-bold px-3 text-capitalize text-light rounded-pill dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"  ><small><i class="fas fa-user-circle pe-2"></i><span class="nav-link-text d-xl-inline">{{ auth()->user()->name}}</span></small></a>
                  <ul class="dropdown-menu dropdown-menu-end p-2 mt-2" aria-labelledby="navbarDropdown">
                    <a name="" id="" class="btn w-100 dropdown-link text-capitalize text-start" href="{{ route('login') }}" role="button">
                      <small class="fw-bold text-accent"><i class="fas fa-th-large pe-2"></i>dashboard</small>
                    </a>
                    <a name="" id="" class="btn w-100 dropdown-link text-capitalize mt-2 text-start" href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();" role="button">
                      <small class="fw-bold text-accent"><i class="fas fa-sign-out-alt pe-2"></i>logout</small>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none"> @csrf </form>
                  </ul>
              </li>
            @endauth
            @guest 
              <li class="nav-item">
                <a role="button" href="{{ route('login') }}" class="btn btn-primary text-light fw-bold px-4 py-1 text-capitalize rounded-pill"><small><i class="fas fa-sign-in-alt pe-2"></i>login</small></a>
              </li> 
            @endguest
          </ul>
        </div>
      </div>
      <marquee direction="left" class="bg-warning text-light fw-bold py-2">
        Pemilihan lomba akan ditutup dalam 1x24 jam, Harap segera memilih perlombaan yang tersedia
      </marquee>
    </nav>

    {{-- Mobile Navbar --}}
    <nav id="landing-navbar" class="navbar d-md-none sticky-top">
      <div class="container p-0">
        <div class="row justify-content-between">
          <div class="col-auto">
            <img src="{{ asset('img/logo-2.png') }}" alt="" width="48" height="48" class="d-inline-block align-middle">
          </div>
          <div class="col align-self-center">
            <p class="text-primary fw-bold text-capitalize m-0">jasa raharja</p>
            <p class="text-muted fw-bold text-capitalize m-0">virtual olympic</p>
            </div>
          </div>
          
          @auth
              <div class="col-auto ">
                <a class="btn rounded-pill text-capitalize text-white py-2 px-3" data-bs-toggle="collapse" href="#userOptions" role="button" aria-expanded="false" aria-controls="collapseExample">
                  <div class="d-flex justify-content-center fs-2 text-primary"><i class="fas fa-user-circle "></i></div>
                </a>
              </div>
            @endauth
            @guest
            <div class="col-auto ">
              <a class="btn btn-primary text-capitalize text-white py-2 px-3" href="{{ route('login') }}" role="button">
                <div class="d-flex justify-content-center"><i class="fas fa-sign-in-alt"></i></div>
                <p class="mx-0 mb-0 small-text text-center"><small>login</small></p>
              </a>
            </div>
            @endguest
        </div>
        
        <div class="collapse w-100" id="userOptions">
          <div class="row mt-3">
              <div class="col">
                <div class="card card-body p-0">
                  <a name="" id="" class="btn w-100 dropdown-link fw-bold text-accent fs-6" href="{{ route('logout') }}" onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();" role="button">
                    <i class="fas fa-sign-out-alt pe-2"></i>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none"> @csrf </form>
                    <span class="text-capitalize ">logout</span>
                  </a>
                </div>
              </div>
              <div class="col">
                <div class="card card-body p-0">
                  <a name="" id="" class="btn w-100 dropdown-link fw-bold text-accent fs-6" href="{{ route('login') }}" role="button">
                    <i class="fas fa-th-large pe-2"></i>
                    <span class="text-capitalize ">dashboard</span>
                  </a>
                </div>
              </div>
          </div>
        </div>
      </div>
      <marquee direction="left" class="bg-warning text-light fw-bold py-2 mt-3">
        Pemilihan lomba akan ditutup dalam 1x24 jam, Harap segera memilih perlombaan yang tersedia
      </marquee>
    </nav>
    

    <nav  id="mobile-navbar" class="navbar fixed-bottom border border-top navbar-light bg-light d-md-none">
      <div class="container-fluid">
        <div class="container p-0">
          <div class="collapse" id="leaderboardOptions">
            <p class="fw-bold text-capitalize text-muted mb-2">Perlombaan</p>
            <div class="row justify-content-around mb-3">
              <div class="col my-2">
                <div class="card card-body p-0">
                  <a name="" id="" class="btn w-100 dropdown-link" href="{{ route('leaderboards.pubg') }}" role="button">
                    <div><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 48 48"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M14.014 14.304A16.776 16.776 0 0 1 43.5 25.271"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M43.5 25.27a53.822 53.822 0 0 1-1.136 10.553m-28.35-21.519l-.858 1.253a2.792 2.792 0 0 0-2.33 2.19"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M13.155 15.557a36.262 36.262 0 0 1 12.956 2.363c6.779 2.602 9.247 4.799 10.129 6.083a2.208 2.208 0 0 1-.313 2.919a2.097 2.097 0 0 1-2.729.115"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M29.962 24.742c-4.904-4.675-21.623-8.117-22.478-6.71c-.529.87-.963 2.107-.615 2.57"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M6.869 20.602s-1.89 3.107-1.248 3.56c0 0-.614-.069-.92 1.246s-.307 1.847.52 2.416s1.794 1.4 1.794 1.4l-2.043 5.084s-.246 2.108 4.457 3.292a3.796 3.796 0 0 0 4.543-1.822m7.414 2.8c2.741 1.33 6.19 1.16 7.182.096a13.815 13.815 0 0 0 1.909-3.25s1.195 2.412 5.15 2.373a13.051 13.051 0 0 0 6.737-1.974"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M26.772 32.21s-7.694-4.17-13.208-5.033a46.129 46.129 0 0 0-9.064-.64m1.12-2.375a24.34 24.34 0 0 1 6.869.26a35.3 35.3 0 0 1 9.835 3.155l1.357-3.137a42.687 42.687 0 0 0-11.127-3.515a32.769 32.769 0 0 0-5.685-.324m23.608 14.823l2.72-8.387"/><circle cx="26.149" cy="25.411" r=".75" fill="currentColor"/><circle cx="24.502" cy="28.793" r=".75" fill="currentColor"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M21.386 38.578s-12.163-5.699-16.414-4.27"/></svg></div>
                    <small class="text-capitalize ">PUBG</small>
                  </a>
                </div>
              </div>
              <div class="col my-2">
                <div class="card card-body p-0">
                  <a name="" id="" class="btn w-100 dropdown-link" href="{{ route('leaderboards.bridge') }}" role="button">
                    <div><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="M12 2C9 7 4 9 4 14c0 2 2 4 4 4c1 0 2 0 3-1c0 0 .32 2-2 5h6c-2-3-2-5-2-5c1 1 2 1 3 1c2 0 4-2 4-4c0-5-5-7-8-12Z"/></svg></div>
                    <small class="text-capitalize ">bridge</small>
                  </a>
                </div>
              </div>
              <div class="col my-2">
                <div class="card card-body p-0">
                  <a name="" id="" class="btn w-100 dropdown-link" href="{{ route('leaderboards.chess') }}" role="button">
                    <div><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 512 512"><path fill="currentColor" d="M74 208H64a16 16 0 0 0-16 16v16a16 16 0 0 0 16 16h15.94A535.78 535.78 0 0 1 64 384h128a535.78 535.78 0 0 1-15.94-128H192a16 16 0 0 0 16-16v-16a16 16 0 0 0-16-16h-10l33.89-90.38a16 16 0 0 0-15-21.62H144V64h24a8 8 0 0 0 8-8V40a8 8 0 0 0-8-8h-24V8a8 8 0 0 0-8-8h-16a8 8 0 0 0-8 8v24H88a8 8 0 0 0-8 8v16a8 8 0 0 0 8 8h24v32H55.09a16 16 0 0 0-15 21.62zm173.16 251.58L224 448v-16a16 16 0 0 0-16-16H48a16 16 0 0 0-16 16v16L8.85 459.58A16 16 0 0 0 0 473.89V496a16 16 0 0 0 16 16h224a16 16 0 0 0 16-16v-22.11a16 16 0 0 0-8.84-14.31zm92.77-157.78l-3.29 82.2h126.72l-3.29-82.21l24.6-20.79A32 32 0 0 0 496 256.54V198a6 6 0 0 0-6-6h-26.38a6 6 0 0 0-6 6v26h-24.71v-26a6 6 0 0 0-6-6H373.1a6 6 0 0 0-6 6v26h-24.71v-26a6 6 0 0 0-6-6H310a6 6 0 0 0-6 6v58.6a32 32 0 0 0 11.36 24.4zM384 304a16 16 0 0 1 32 0v32h-32zm119.16 155.58L480 448v-16a16 16 0 0 0-16-16H336a16 16 0 0 0-16 16v16l-23.15 11.58a16 16 0 0 0-8.85 14.31V496a16 16 0 0 0 16 16h192a16 16 0 0 0 16-16v-22.11a16 16 0 0 0-8.84-14.31z"/></svg></div>
                    <small class="text-capitalize ">chess</small>
                  </a>
                </div>
              </div>
              <div class="col my-2">
                <div class="card card-body p-0">
                  <a name="" id="" class="btn w-100 dropdown-link" href="{{ route('leaderboards.ride') }}" role="button">
                    <div><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="6" cy="15" r="4"/><circle cx="18" cy="15" r="4"/><path d="m6 15l2-7h7.5M6 5h3m9 10L15 5h4m0 0h.5A1.5 1.5 0 0 1 21 6.5v0A1.5 1.5 0 0 1 19.5 8H19"/></g></svg></div>
                    <small class="text-capitalize ">ride</small>
                  </a>
                </div>
              </div>
              <div class="col my-2">
                <div class="card card-body p-0">
                  <a name="" id="" class="btn w-100 dropdown-link" href="{{ route('leaderboards.run') }}" role="button">
                    <div><svg xmlns="http://www.w3.org/2000/svg" width="0.82em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 416 512"><path fill="currentColor" d="M272 96c26.51 0 48-21.49 48-48S298.51 0 272 0s-48 21.49-48 48s21.49 48 48 48zM113.69 317.47l-14.8 34.52H32c-17.67 0-32 14.33-32 32s14.33 32 32 32h77.45c19.25 0 36.58-11.44 44.11-29.09l8.79-20.52l-10.67-6.3c-17.32-10.23-30.06-25.37-37.99-42.61zM384 223.99h-44.03l-26.06-53.25c-12.5-25.55-35.45-44.23-61.78-50.94l-71.08-21.14c-28.3-6.8-57.77-.55-80.84 17.14l-39.67 30.41c-14.03 10.75-16.69 30.83-5.92 44.86s30.84 16.66 44.86 5.92l39.69-30.41c7.67-5.89 17.44-8 25.27-6.14l14.7 4.37l-37.46 87.39c-12.62 29.48-1.31 64.01 26.3 80.31l84.98 50.17l-27.47 87.73c-5.28 16.86 4.11 34.81 20.97 40.09c3.19 1 6.41 1.48 9.58 1.48c13.61 0 26.23-8.77 30.52-22.45l31.64-101.06c5.91-20.77-2.89-43.08-21.64-54.39l-61.24-36.14l31.31-78.28l20.27 41.43c8 16.34 24.92 26.89 43.11 26.89H384c17.67 0 32-14.33 32-32s-14.33-31.99-32-31.99z"/></svg></div>
                    <small class="text-capitalize ">run</small>
                  </a>
                </div>
              </div>
            </div>
            
          </div>
          <div class="row justify-content-between">
            <div class="col my-2">
              <a role="button" href="{{ url('/') }}" class="nav-link p-0 fw-bold text-capitalize">
                <div class="d-flex justify-content-center"><i class="fas fa-home"></i></div>
                <p class="mx-0 mb-0 small-text text-center"><small>home</small></p>
              </a>
            </div>
            <div class="col my-2">
              <a role="button" href="{{ url('/#announcement') }}" class="nav-link p-0 fw-bold text-capitalize">
                <div class="d-flex justify-content-center"><i class="fas fa-bullhorn"></i></div>
                <p class="mx-0 mb-0 small-text text-center"><small>pengumuman</small></p>
              </a>
            </div>
            <div class="col my-2">
              <a role="button" href="{{ route('rule.index') }}" class="nav-link p-0 fw-bold text-capitalize">
                <div class="d-flex justify-content-center"><i class="fas fa-dice"></i></div>
                <p class="mx-0 mb-0 small-text text-center"><small>peraturan</small></p>
              </a>
            </div>
            <div class="col my-2">
              <a class="nav-link p-0 fw-bold text-capitalize " data-bs-toggle="collapse" href="#leaderboardOptions" role="button" aria-expanded="false" aria-controls="collapseExample">
                <div class="d-flex justify-content-center"><i class="fas fa-trophy"></i></div>
                <p class="mx-0 mb-0 small-text text-center"><small>leaderboards</small></p>
              </a>
            </div>
          </div>
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
            <img src="{{ asset('img/logo-2.png') }}" width="80" height="80" class="d-inline-block align-middle" alt="...">
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
            <a class="px-3 py-2" href="{{ url('https://www.jasaraharja.co.id/') }}"><i class="bi bi-globe"></i></a>
            <a class="px-3 py-2" href="{{ url('https://web.facebook.com/ptjasaraharja') }}"><i class="fab fa-facebook"></i></a>
            <a class="px-3 py-2" href="{{ url('https://twitter.com/pt_jasaraharja') }}"><i class="fab fa-twitter"></i></a>
            <a class="px-3 py-2" href="{{ url('https://www.instagram.com/pt_jasaraharja/') }}"><i class="fab fa-instagram"></i></a>
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
