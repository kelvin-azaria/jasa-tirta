<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>User Dashboard</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- Styles -->
    <link rel="icon" href="{{ asset('img/logo.png') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
  </head>
  <body class="bg-lightdarkblue">
    {{-- <div class="container-fluid overflow-hidden">
      <div class="row vh-100 overflow-auto">
          <div class="col-12 col-sm-3 col-xl-2 px-sm-2 px-0 bg-lightdarkblue d-flex sticky-top">
              <div class="d-flex flex-sm-column flex-row flex-grow-1 align-items-center align-items-sm-start p-3">
                  <a class="d-flex align-items-center pb-sm-3 mb-md-0 me-md-auto text-decoration-none text-capitalize fw-bold" href="{{ url('/') }}">
                    <img src="{{ asset('img/logo.png') }}" alt="" width="48" height="48" class="d-inline-block align-middle rounded">
                    <span class="d-none fs-5 f-montserrat d-sm-inline ms-3">jasa raharja <br> <span class="text-muted fs-6"> virtual olympic</span></span>
                    
                  </a>
                  @auth
                  <ul class="nav nav-pills flex-sm-column flex-row flex-nowrap flex-shrink-1 flex-sm-grow-0 flex-grow-1 mb-sm-auto mb-0 justify-content-center align-items-center align-items-sm-start" id="menu">
                    <li>
                      <a href="{{ route('dashboard.index') }}" class="nav-link px-sm-0 px-2 text-white">
                        <i class="fs-5 bi-house-door-fill"></i><span class="ms-2 d-none d-sm-inline text-capitalize">
                          home
                        </span> 
                      </a>
                    </li>
                    <li>
                      <a href="{{ route('activity.index') }}" class="nav-link px-sm-0 px-2 text-white">
                        <i class="fs-5 bi-bicycle"></i><span class="ms-2 d-none d-sm-inline text-capitalize">
                          ride & run
                        </span> 
                      </a>
                    </li>
                    <li>
                      <a href="{{ route('bridge.index') }}" class="nav-link px-sm-0 px-2 text-white">
                        <i class="fs-5 bi-suit-club-fill"></i><span class="ms-2 d-none d-sm-inline text-capitalize">
                          bridge
                        </span> 
                      </a>
                    </li>
                    <li>
                      <a href="{{ route('chess.index') }}" class="nav-link px-sm-0 px-2 text-white">
                        <i class="fas fa-chess"></i><span class="ms-2 d-none d-sm-inline text-capitalize">
                          chess
                        </span> 
                      </a>
                    </li>
                    <li>
                      <a href="{{ route('pubg.index') }}" class="nav-link px-sm-0 px-2 text-white">
                        <i class="fas fa-crosshairs"></i><span class="ms-2 d-none d-sm-inline">
                          PUBG
                        </span> 
                      </a>
                    </li>
                  </ul>
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
                  @endauth
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
                        <a class="px-3 py-2" href="{{ url('https://www.jasaraharja.co.id/') }}"><i class="bi bi-globe"></i></a>
                        <a class="px-3 py-2" href="{{ url('https://web.facebook.com/ptjasaraharja') }}"><i class="fab fa-facebook"></i></a>
                        <a class="px-3 py-2" href="{{ url('https://twitter.com/pt_jasaraharja') }}"><i class="fab fa-twitter"></i></a>
                        <a class="px-3 py-2" href="{{ url('https://www.instagram.com/pt_jasaraharja/') }}"><i class="fab fa-instagram"></i></a>
                      </div>
                    </div>
                  </div>
                  <div class="w-100 bg-primary text-white pt-1 pb-2">
                    <small>&copy; Copyright <script>document.write(new Date().getFullYear())</script> Jasa Raharja Virtual Olympic</small>
                  </div>
              </footer>
          </div>
      </div>
    </div> --}}
    
    <div class="container-fluid overflow-hidden bg-dark-accent-2">
      <div class="row vh-100 overflow-auto mb-5">

          @auth
          {{-- Tablet to PC Navbar --}}
          <nav style="width: 280px;" class="col-auto bg-dark-accent-1 d-none d-md-block border-primary pb-3 vh-100 overflow-auto">
            <div class="pt-3 bg-dark-accent-1 sticky-top">
              <div class="card bg-dark-accent-3">
                <div class="card-body p-2">
                  <a class="d-flex align-items-center text-decoration-none text-capitalize fw-bold" href="{{ url('/') }}">
                    <img src="{{ asset('img/logo.png') }}" alt="" width="48" height="48" class="d-inline-block align-middle rounded">

                    <span class="d-none fs-6 f-montserrat d-sm-inline ms-3">jasa raharja <br> <small class="text-muted"> virtual olympic</small></span>
                  </a>
                </div>
              </div>
            </div>
            <ul class="navbar-nav">
              <small class="text-muted mt-3 mb-1 fw-bold text-capitalize">general</small>
              <li class="nav-item">
                <a role="button" href="{{ route('dashboard.index') }}" class="nav-link link-light-theme my-1 px-3 text-capitalize"><i class="fas fa-home fa-fw"></i><span class="ps-2 nav-link-text d-inline">Dashboard</span></a>
              </li>
              <li class="nav-item">
                <a role="button" href="{{ route('announcements.index') }}" class="nav-link link-light-theme my-1 px-3 text-capitalize"><i class="fas fa-bullhorn fa-fw"></i><span class="ps-2 nav-link-text d-inline">announcements</span></a>
              </li>
              
              <small class="text-muted mt-3 mb-1 fw-bold text-capitalize">competition</small>
              <li class="nav-item">
                  <a role="button" href="{{ url('/') }}" class="nav-link link-light-theme my-1 px-3 text-capitalize"><i class="fas fa-address-card fa-fw"></i><span class="ps-2 nav-link-text d-inline">registration</span></a>
                </li>
                <li class="nav-item">
                  <a role="button" href="{{ url('/') }}" class="nav-link link-light-theme my-1 px-3 text-capitalize"><i class="fas fa-trophy fa-fw"></i><span class="ps-2 nav-link-text d-inline">my competition</span></a>
                </li>
                <li class="nav-item">
                  <a role="button" href="{{ url('/') }}" class="nav-link link-light-theme my-1 px-3 text-capitalize"><i class="fas fa-chart-line fa-fw"></i><span class="ps-2 nav-link-text d-inline">activity</span></a>
                </li>
                <li class="nav-item">
                  <a role="button" href="{{ url('/') }}" class="nav-link link-light-theme my-1 px-3 text-capitalize"><i class="fas fa-medal fa-fw"></i><span class="ps-2 nav-link-text d-inline">leaderboard</span></a>
                </li>
            </ul>
          </nav>


          <div class="col align-self-stretch bg-dark-accent-3 h-100 overflow-auto">
            <!-- As a heading -->
            <div class="row border-dark border-bottom bg-dark-accent-2 justify-content-between">
              <div class="col-auto py-3 align-self-center">
                <div class="card d-md-none bg-dark-accent-1">
                  <div class="card-body py-2 px-3">
                    <a class="d-flex align-items-center text-decoration-none text-capitalize fw-bold" href="{{ url('/') }}">
                      <img src="{{ asset('img/logo.png') }}" alt="" width="48" height="48" class="d-inline-block align-middle rounded">
  
                      <span class=" fs-6 f-montserrat d-inline ms-3">jasa raharja <br> <small class="text-muted"> virtual olympic</small></span>
                    </a>
                  </div>
                  
                </div>
              </div>
              <div class="col-auto py-3 align-self-center">
                <a name="" id="" class="nav-link link-light-theme text-capitalize d-none d-md-block text-end" href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();" role="button">
                  <span class="fw-bold"><i class="fas fa-sign-out-alt pe-2"></i>{{ __('Logout') }}</span>
                </a>

                <a name="" id="" class="nav-link link-light-theme px-4 py-3 rounded-pill text-capitalize d-block d-md-none" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" role="button">
                     <div class="d-flex justify-content-center fs-2"><i class="fas fa-sign-out-alt fa-fw"></i></div>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none"> @csrf </form>

              </div>
            </div>
            @endauth
            
            <main class="row overflow-auto">
              <div class="col">
                @yield('content')
              </div>
            </main>
            @auth
            <nav  id="mobile-navbar" class="navbar fixed-bottom bg-dark-accent-1 d-md-none">
              <div class="container-fluid">
                <div class="container p-0">
                  <div style="max-height: 500px" class="collapse overflow-auto" id="leaderboardOptions">
                    <ul class="navbar-nav">
                      <small class="text-muted mt-3 mb-1 fw-bold text-capitalize">general</small>
                      <li class="nav-item">
                        <a role="button" href="{{ route('announcements.index') }}" class="nav-link link-light-theme my-1 px-3 text-capitalize"><i class="fas fa-bullhorn fa-fw"></i><span class="ps-2 nav-link-text d-inline">announcements</span></a>
                      </li>
                      
                      <small class="text-muted mt-3 mb-1 fw-bold text-capitalize">competition</small>
                      <li class="nav-item">
                          <a role="button" href="{{ url('/') }}" class="nav-link link-light-theme my-1 px-3 text-capitalize"><i class="fas fa-address-card fa-fw"></i><span class="ps-2 nav-link-text d-inline">registration</span></a>
                        </li>
                        <li class="nav-item">
                          <a role="button" href="{{ url('/') }}" class="nav-link link-light-theme my-1 px-3 text-capitalize"><i class="fas fa-chart-line fa-fw"></i><span class="ps-2 nav-link-text d-inline">activity</span></a>
                        </li>
                        <li class="nav-item">
                          <a role="button" href="{{ url('/') }}" class="nav-link link-light-theme my-1 px-3 text-capitalize"><i class="fas fa-medal fa-fw"></i><span class="ps-2 nav-link-text d-inline">leaderboard</span></a>
                        </li>
                    </ul>
                  </div>
                  <div class="row justify-content-between">
                    <div class="col">
                      <a role="button" href="{{ route('dashboard.index') }}" class="nav-link link-light-theme py-2 fw-bold text-capitalize">
                        <div class="d-flex justify-content-center"><i class="fas fa-home"></i></div>
                        <p class="mx-0 mb-0 small-text text-center"><small>dashboard</small></p>
                      </a>
                    </div>
                    <div class="col">
                      <a role="button" href="{{ url('/') }}" class="nav-link link-light-theme py-2 fw-bold text-capitalize">
                        <div class="d-flex justify-content-center"><i class="fa fa-trophy"></i></div>
                        <p class="mx-0 mb-0 small-text text-center"><small>Competition</small></p>
                      </a>
                    </div>
                    <div class="col">
                      <a class="nav-link link-light-theme py-2 fw-bold text-capitalize " data-bs-toggle="collapse" href="#leaderboardOptions" role="button" aria-expanded="false" aria-controls="collapseExample">
                        <div class="d-flex justify-content-center"><i class="fas fa-bars"></i></div>
                        <p class="mx-0 mb-0 small-text text-center"><small>More</small></p>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              
            </nav>
            @endauth
            
          </div>
      </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    
    <script 
    src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js" ></script>
    <script 
    src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <script 
    src="https://cdn.datatables.net/fixedheader/3.2.4/js/dataTables.fixedHeader.min.js"></script>
    <script 
    src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
    @yield('script')
  </body>
</html>
