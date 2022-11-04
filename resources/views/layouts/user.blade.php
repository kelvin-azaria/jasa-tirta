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
    <div class="container-fluid overflow-hidden bg-dark-accent-2">
      <div class="row vh-100 overflow-auto">

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
                <a role="button" href="{{ route('dashboard.index') }}" class="{{ isset($page) && $page == 'dashboard' ? 'active' : '' }} nav-link link-light-theme my-1 px-3 text-capitalize"><i class="fas fa-home fa-fw"></i><span class="ps-2 nav-link-text d-inline">Dashboard</span></a>
              </li>
              <li class="nav-item" >
                <a role="button" href="{{ route('announcements.index') }}" class="{{ isset($page) && $page == 'announcements' ? 'active' : '' }} nav-link link-light-theme my-1 px-3 text-capitalize"><i class="fas fa-bullhorn fa-fw"></i><span class="ps-2 nav-link-text d-inline">announcements</span></a>
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


          <div class="col align-self-stretch bg-dark-accent-3 pb-5 h-100 overflow-auto">
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
