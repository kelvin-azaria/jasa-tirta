<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>User Dashboard</title>

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
    <div class="container-fluid overflow-hidden">
      <div class="row vh-100 overflow-auto">
          <div class="col-12 col-sm-3 col-xl-2 px-sm-2 px-0 bg-lightdarkblue d-flex sticky-top">
              <div class="d-flex flex-sm-column flex-row flex-grow-1 align-items-center align-items-sm-start p-3">
                  <a class="d-flex align-items-center pb-sm-3 mb-md-0 me-md-auto text-decoration-none text-capitalize fw-bold" href="{{ url('/') }}">
                    <img src="{{ asset('img/square-img-placeholder.jpg') }}" alt="" width="40" height="40" class="d-inline-block align-middle">
                    <span class="d-none fs-5 f-montserrat d-sm-inline ms-3">jasa raharja</span>
                  </a>
                  @auth
                  <ul class="nav nav-pills flex-sm-column flex-row flex-nowrap flex-shrink-1 flex-sm-grow-0 flex-grow-1 mb-sm-auto mb-0 justify-content-center align-items-center align-items-sm-start" id="menu">
                      <li>
                          <a href="{{ route('dashboard.index') }}" data-bs-toggle="collapse" class="nav-link px-sm-0 px-2 text-white">
                              <i class="fs-5 bi-house-door-fill"></i><span class="ms-2 d-none d-sm-inline text-capitalize">home</span> 
                          </a>
                      </li>
                      <li>
                          <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-sm-0 px-2 text-white">
                              <i class="fs-5 bi-bicycle"></i><span class="ms-2 d-none d-sm-inline">Bike & Run</span> 
                          </a>
                          <ul class="collapse nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                            <li>
                              <a class="dropdown-item text-white" href="{{ route('run.index') }}">
                                Index
                              </a>
                            </li>
                            <li>
                              <a class="dropdown-item text-white" href="{{ route('run.create') }}">
                                Add Data
                              </a>
                            </li>
                          </ul>
                      </li>
                  </ul>
                  @endauth
                  @if (Auth::check())
                  <div class="dropdown py-sm-4 mt-sm-auto ms-auto ms-sm-0 flex-shrink-1">
                      <a href="#" class="d-flex align-items-center text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-person-fill me-1"></i>
                        <span class="d-none d-sm-inline mx-1">
                          {{ Auth::user()->name }}
                        </span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                          <li>
                            <a
                              class="dropdown-item"
                              href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();"
                            >
                              {{ __('Logout') }}
                            </a>
          
                            <form
                              id="logout-form"
                              action="{{ route('logout') }}"
                              method="POST"
                              class="d-none"
                            >
                              @csrf
                            </form>
                          </li>
                        </ul>
                  </div>
                  @endif
              </div>
          </div>
          <div class="col d-flex flex-column h-sm-100 bg-darkblue ">
              <main class="row overflow-auto">
                  <div class="col px-4">
                    @yield('content')
                  </div>
              </main>
              <footer class="row bg-darkblue text-white mt-auto">
                  <div class="col p-3">
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
                  </div>
                  <div class="w-100 bg-primary text-white pt-1 pb-2">
                    <small>&copy; Copyright <script>document.write(new Date().getFullYear())</script> Example Copyright</small>
                  </div>
              </footer>
          </div>
      </div>
  </div>

  





  
  {{-- <div class="container-fluid bg-primary text-white py-2">
    <small>&copy; Copyright <script>document.write(new Date().getFullYear())</script> Example Copyright</small>
  </div> --}}
    {{-- <div class="container-fluid">
      <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
          <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
            <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <span class="fs-5 d-none d-sm-inline">Dashboard</span>
            </a>
            <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
              <li class="nav-item">
                <a href="{{ route('home') }}" class="nav-link align-middle px-0">
                <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
                </a>
              </li>
              
              <li>
                <a href="#" class="nav-link px-0 align-middle">
                <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Link 1</span> </a>
              </li>
            </ul>
            <hr>
            <div class="dropdown pb-4">
              @if (Auth::check())
              <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
              <span class="d-none d-sm-inline mx-1">
                {{ Auth::user()->name }}
              </span>
              </a>
              <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                <li>
                  <a
                    class="dropdown-item"
                    href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();"
                  >
                    {{ __('Logout') }}
                  </a>

                  <form
                    id="logout-form"
                    action="{{ route('logout') }}"
                    method="POST"
                    class="d-none"
                  >
                    @csrf
                  </form>
                </li>
              </ul>
              @endif
            </div>
          </div>
        </div> --}}

        {{-- CONTENT AREA --}}
        {{-- <div class="col py-3">
          <main class="py-4">@yield('content')</main>
        </div>
      </div>
    </div> --}}
    @yield('script')
  </body>
</html>
