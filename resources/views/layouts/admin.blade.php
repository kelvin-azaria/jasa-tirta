<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>Admin Dashboard</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- Styles -->
    <link rel="icon" href="{{ asset('img/logo.png') }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
  </head>
  <body >

    <div class="container-fluid overflow-hidden">
      <div class="row vh-100 overflow-auto">


          {{-- <div class="col-12 col-sm-3 col-xl-2 px-sm-2 px-0 bg-dark d-flex sticky-top">
              <div class="d-flex flex-sm-column flex-row flex-grow-1 align-items-center align-items-sm-start p-3">
                  <a class="d-flex align-items-center pb-sm-3 mb-md-0 me-md-auto text-decoration-none text-capitalize fw-bold" href="{{ url('/') }}">
                    <img src="{{ asset('img/logo.png') }}" alt="" width="48" height="48" class="d-inline-block align-middle rounded">
                    <span class="d-none fs-5 f-montserrat d-sm-inline ms-3">jasa raharja <br> <span class="text-muted fs-6"> virtual olympic</span></span>
                  </a>
                  @if (Auth::guard('admin')->check())
                  <ul class="nav nav-pills flex-sm-column flex-row flex-nowrap flex-shrink-1 flex-sm-grow-0 flex-grow-1 mb-sm-auto mb-0 justify-content-center align-items-center align-items-sm-start" id="menu">
                    <li>
                      <a href="{{ route('admin.dashboard.index') }}" class="nav-link px-sm-0 px-2 text-white">
                        <i class="fs-5 bi-house-door-fill"></i><span class="ms-2 d-none d-sm-inline text-capitalize">home</span> 
                      </a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="nav-link dropdown-toggle px-sm-0 px-2 text-white" id="dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-person-circle"></i><span class="ms-2 d-none d-sm-inline text-capitalize">peserta</span>
                        </a>
                        <ul class="dropdown-menu text-small shadow dropdown-menu-dark" aria-labelledby="dropdown">
                            <li><a class="dropdown-item text-capitalize" href="{{ route('admin.users.index') }}">List Peserta</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="nav-link dropdown-toggle px-sm-0 px-2 text-white" id="dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-running"></i><span class="ms-2 d-none d-sm-inline text-capitalize">Ride & Run</span>
                        </a>
                        <ul class="dropdown-menu text-small shadow dropdown-menu-dark" aria-labelledby="dropdown">
                          <li><a class="dropdown-item text-capitalize" href="{{ route('admin.activity.index.run') }}">Data Run</a></li>
                          <li><a class="dropdown-item text-capitalize" href="{{ route('admin.activity.index.ride.user') }}">Data Peserta Ride</a></li>
                          <li><a class="dropdown-item text-capitalize" href="{{ route('admin.activity.index.run.user') }}">Data Peserta Run</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="nav-link dropdown-toggle px-sm-0 px-2 text-white" id="dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-running"></i><span class="ms-2 d-none d-sm-inline text-capitalize">Leaderboard Run</span>
                        </a>
                        <ul class="dropdown-menu text-small shadow dropdown-menu-dark" aria-labelledby="dropdown">
                          <li><a class="dropdown-item text-capitalize" href="{{ route('admin.leaderboard.run.index',['gender' => 'L']) }}">Kategori Putra</a></li>
                          <li><a class="dropdown-item text-capitalize" href="{{ route('admin.leaderboard.run.index',['gender' => 'P']) }}">Kategori Putri</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="nav-link dropdown-toggle px-sm-0 px-2 text-white" id="dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-biking"></i><span class="ms-2 d-none d-sm-inline text-capitalize">Leaderboard Ride</span>
                        </a>
                        <ul class="dropdown-menu text-small shadow dropdown-menu-dark" aria-labelledby="dropdown">
                          <li><a class="dropdown-item text-capitalize" href="{{ route('admin.leaderboard.ride.index',['gender' => 'L']) }}">Kategori Putra</a></li>
                          <li><a class="dropdown-item text-capitalize" href="{{ route('admin.leaderboard.ride.index',['gender' => 'P']) }}">Kategori Putri</a></li>
                        </ul>
                    </li>
                  </ul>
                  <div class="dropdown py-sm-4 mt-sm-auto ms-auto ms-sm-0 flex-shrink-1">
                      <a href="#" class="d-flex align-items-center text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-person-fill me-1"></i>
                        <span class="d-none d-sm-inline mx-1">
                          {{ Auth::guard('admin')->user()->name }} (Admin)
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
          </div> --}}

          @if (Auth::guard('admin')->check())
          {{-- Tablet to PC Navbar --}}
          <nav style="width: 280px;" class="col-auto d-none d-md-block border border-right pb-3 vh-100 overflow-auto">
            <div class="pt-3 bg-white sticky-top">
              <div class="card ">
                <div class="card-body p-2">
                  <a class="d-flex align-items-center text-decoration-none text-capitalize fw-bold" href="{{ url('/') }}">
                    <img src="{{ asset('img/logo.png') }}" alt="" width="48" height="48" class="d-inline-block align-middle rounded">

                    <span class="d-none fs-6 f-montserrat d-sm-inline ms-3">jasa raharja <br> <small class="text-muted"> virtual olympic</small></span>
                  </a>
                  <span class="position-absolute top-0 start-90 translate-middle badge rounded-pill bg-danger">
                    <small><i class="fa fas fa-key pe-1"></i>ADMIN</small>
                  </span>
                </div>
              </div>
            </div>
            <ul class="navbar-nav">
              <small class="text-muted mt-3 mb-1 fw-bold text-capitalize">general</small>
              <li class="nav-item">
                <a role="button" href="{{ route('admin.dashboard.index') }}" class="nav-link link-light my-1 px-3 text-capitalize"><i class="fas fa-home fa-fw"></i><span class="ps-2 nav-link-text d-inline">Dashboard</span></a>
              </li>
              <li class="nav-item">
                <a role="button" data-bs-toggle="collapse" href="#collapseEventManagement" data-bs-toggle="collapse" class="nav-link link-light my-2 px-3 text-capitalize"><i class="fas fa-calendar-day fa-fw"></i></i><span class="ps-2 nav-link-text d-inline">event management</span></a>
              </li>
              <ul  id="collapseEventManagement" class="collapse show sidebar-dropdown-link">
                <li class="nav-item">
                  <a role="button" href="{{ url('/') }}" class="nav-link link-light my-1 px-3 text-capitalize"><i class="fas fa-image fa-fw"></i><span class="ps-2 nav-link-text d-inline">banners</span></a>
                </li>
                <li class="nav-item">
                  <a role="button" href="{{ url('/') }}" class="nav-link link-light my-1 px-3 text-capitalize"><i class="fas fa-bullhorn fa-fw"></i><span class="ps-2 nav-link-text d-inline">announcements</span></a>
                </li>
                <li class="nav-item">
                  <a role="button" href="{{ url('/') }}" class="nav-link link-light my-1 px-3 text-capitalize"><i class="fas fa-calendar-alt fa-fw"></i><span class="ps-2 nav-link-text d-inline">calendar</span></a>
                </li>
              </ul>
              <li class="nav-item">
                <a role="button" href="{{ url('/') }}" class="nav-link link-light my-1 px-3 text-capitalize"><i class="fas fa-phone fa-fw"></i><span class="ps-2 nav-link-text d-inline">person in charge</span></a>
              </li>
              <small class="text-muted mt-3 mb-1 fw-bold text-capitalize">data processing</small>
              <li class="nav-item">
                <a role="button" href="{{ route('admin.users.index') }}" class="nav-link link-light my-1 px-3 text-capitalize"><i class="fa fa-address-card fa-fw"></i><span class="ps-2 nav-link-text d-inline">Users</span></a>
              </li>
              <small class="text-muted mt-3 mb-1 fw-bold text-capitalize">competitions</small>
              <li class="nav-item">
                <a role="button" data-bs-toggle="collapse" href="#collapseCompetition1" data-bs-toggle="collapse" class="nav-link link-light my-2 px-3 text-capitalize"><svg  width="20" height="20" version="1.1" viewBox="0 0 752 752" xmlns="http://www.w3.org/2000/svg">
                  <path fill="#909090" d="m308.95 310.23-5.9883 51.965c-12.297-1.7734-44.859-4.668-90.613 4.8984-24.535 4.793-45.672 16.277-57.688 23.875l2.6328-37.328c46.691-51.336 130.95-45.688 151.66-43.41zm-155.16 93.148c8.7305-6.0547 32.598-21.164 60.52-26.617 55.539-11.609 91.555-4.0898 91.914-4.0078l5.3242 1.1523 8.3047-72.078-4.6602-0.75c-3.9102-0.625-84.434-12.941-142.46 26.25 8.1445-8.8828 19.574-18.957 34.805-27.344 3.3359-1.8359 7.1445-3.4102 11.301-4.7617 2.0156-0.65625 4.125-1.2461 6.293-1.8008 39.695-10.125 102.83-3.6172 110.26-2.793l67.285 29.586c-0.69922 11.301-2.8633 47.98-3.2188 74.785-0.12891 9.8633-2.3242 16.676-6.3438 19.707-1.793 1.3516-3.75 1.7812-5.3516 1.8633-89.559-55.117-178.89-39.074-228.48-8.2734-2.2812 1.418-4.3086 2.9453-6.1602 4.543zm-2.0859 29.57c1.3008-6.3828 5.4727-11.727 12.785-16.266 9.6758-6.0117 91.016-53.008 192.18-5.707-27.039-4.1211-71.367-8.332-122.17-3.1055-33.359 3.4258-56.586 13.684-69.035 30.484-4.6445 6.2656-7.0547 12.523-8.2734 17.93-2.9492-5.0859-5.5703-11.312-5.8945-17.629zm109.45 97.449c-0.03125 0.15625-3.0078 15.805-6.3359 27.883-1.7695 6.4023-6.4258 7.0039-25.543 6.7383-2.832-0.035156-5.8711-0.078125-9.1172-0.078125-21.156 0-35.48-16.602-48.336-33.602-2.9258-3.8672-3.6719-7.6016-2.2969-11.426 2.0781-5.7617 12.496-20.477 64.188-32.637 9.9883-2.3516 22.133-3.7969 35.391-4.5781zm157.79-50.328c-10.953-1.3633-130.52-15.805-187.49-2.4023-30.758 7.2383-52.305 16.648-63.523 27.605l-1.6797-34.469-0.085938-0.70703c-0.023438-0.12891-2.3789-12.891 7.2383-25.871 10.734-14.48 31.633-23.414 62.117-26.543 81.465-8.3672 145.86 7.9844 146.34 8.1094 0.125 0.035156 1.2656 0.33594 2.9453 0.51562 0.039062 0.023437 0.074219 0.042968 0.11328 0.066406l0.03125-0.050781c3.3398 0.33203 8.8516 0.13281 13.934-3.6094 6.7539-4.9727 10.27-14.25 10.445-27.582 0.42188-31.633 3.3867-77.266 3.418-77.723l0.22266-3.4453-74.285-32.668-1.3984-0.38281c-3.1055-0.36719-62.34-7.2227-105.91 1.0703 2.1523-3.7031 4.2734-7.1953 5.8984-9.8242 13.398-5.8242 91.719-36.012 189.64 4.9258 54.66 22.848 70.145 30.582 74.496 33.055l-0.38281 39.504c-0.019531 0.14062-0.13672 0.5625-0.34375 0.69531-0.36719 0.23047-1.6289 0.43359-4.0781-0.28125-10.113-2.9492-43.684-13.57-44.02-13.68l-5.9648-1.8867-5.8555 82.422c-1.1484 2.0234-1.4688 5.5078-2.0234 11.855-1.293 14.688-4.293 48.859-19.793 51.301zm89.977-26.898c-28.203-13.504-52.148-30.5-58.312-35.688l0.86719-12.191c13.57 12.633 40.562 34.699 63.727 34.699 0.11719 0 0.23047-0.003907 0.34766-0.003907 23.969-0.23047 52.531-9.5586 64.551-13.895l1.4336 9.0234c-10.223 6.5547-48.836 29.438-72.613 18.055zm69.602-37.008c-10.203 3.7383-39.629 13.738-63.07 13.961-0.089843 0-0.17969 0.003906-0.26953 0.003906-23.48 0-54.18-29.043-62.797-37.684l3.1836-44.773c10.211 3.2188 30.582 9.6172 38.27 11.859 5.1289 1.5 9.3594 1.1094 12.551-1.1484 3.0898-2.1875 4.3359-5.6914 4.4727-8.2539l0.39844-39.66 0.027344-3.1797c-0.25-3.6094-0.40234-5.7891-80.578-39.312-84.586-35.359-153.8-20.23-183.86-10.094 19.234-25.297 80.086-89.738 186.72-65.656 26.297 5.9375 89.898 26.754 112.39 91.633 13.773 39.73 19.188 57.254 21.305 64.742l-26.395 0.95703 24.613 55.461 11.168-0.54688zm-3.418-21.496-3.3359 0.16406-15.949-35.945 13.52-0.48828 9.9258-0.35938 5.0586-0.18359 12.59 35.75-11.895 0.58203z"/>
                 </svg><span class="ps-2  nav-link-text d-inline">PUBG</span></a>
              </li>
              <ul  id="collapseCompetition1" class="collapse show sidebar-dropdown-link">
                <li class="nav-item">
                  <a role="button" href="{{ url('/') }}" class="nav-link link-light my-1 px-3 text-capitalize"><i class="fas fa-user-friends fa-fw"></i><span class="ps-2 nav-link-text d-inline">participants</span></a>
                </li>
                <li class="nav-item">
                  <a role="button" href="{{ url('/') }}" class="nav-link link-light my-1 px-3 text-capitalize"><i class="fas fa-users fa-fw"></i><span class="ps-2 nav-link-text d-inline">team management</span></a>
                </li>
                <li class="nav-item">
                  <a role="button" href="{{ url('/') }}" class="nav-link link-light my-1 px-3 text-capitalize"><i class="fas fa-medal fa-fw"></i><span class="ps-2 nav-link-text d-inline">leaderboard</span></a>
                </li>
              </ul>
              <li class="nav-item">
                <a role="button" data-bs-toggle="collapse" href="#collapseCompetition2" data-bs-toggle="collapse" class="nav-link link-light my-2 px-3 text-capitalize"><i class="fas fa-running fa-fw"></i><span class="ps-2  nav-link-text d-inline">run</span></a>
              </li>
              <ul  id="collapseCompetition2" class="collapse show sidebar-dropdown-link">
                <li class="nav-item">
                  <a role="button" href="{{ route('admin.activity.index.run.user') }}" class="nav-link link-light my-1 px-3 text-capitalize"><i class="fas fa-user-friends fa-fw"></i><span class="ps-2 nav-link-text d-inline">participants</span></a>
                </li>
                <li class="nav-item">
                  <a role="button" data-bs-toggle="collapse" href="#collapseRunLeaderboard" data-bs-toggle="collapse" class="nav-link link-light my-1 px-3 text-capitalize"><i class="fas fa-medal fa-fw"></i><span class="ps-2 nav-link-text d-inline">leaderboard</span></a>
                </li>
                <ul  id="collapseRunLeaderboard" class="collapse show sidebar-dropdown-link">
                  <li class="nav-item">
                    <a role="button" href="{{ route('admin.leaderboard.run.index',['gender' => 'P']) }}" class="nav-link link-light my-1 px-3 text-capitalize"><i class="fa fa-venus fa-fw"></i><span class="ps-2 nav-link-text d-inline">female</span></a>
                  </li>
                  <li class="nav-item">
                    <a role="button" href="{{ route('admin.leaderboard.run.index',['gender' => 'L']) }}" class="nav-link link-light my-1 px-3 text-capitalize"><i class="fa fa-mars fa-fw"></i><span class="ps-2 nav-link-text d-inline">male</span></a>
                  </li>
                </ul>
              </ul>
              <li class="nav-item">
                <a role="button" data-bs-toggle="collapse" href="#collapseCompetition3" data-bs-toggle="collapse" class="nav-link link-light my-2 px-3 text-capitalize"><i class="fas fa-biking fa-fw"></i><span class="ps-2  nav-link-text d-inline">ride</span></a>
              </li>
              <ul  id="collapseCompetition3" class="collapse show sidebar-dropdown-link">
                <li class="nav-item">
                  <a role="button" href="{{ route('admin.activity.index.ride.user') }}" class="nav-link link-light my-1 px-3 text-capitalize"><i class="fas fa-user-friends fa-fw"></i><span class="ps-2 nav-link-text d-inline">participants</span></a>
                </li>
                <li class="nav-item">
                  <a role="button" data-bs-toggle="collapse" href="#collapseRideLeaderboard" data-bs-toggle="collapse" class="nav-link link-light my-1 px-3 text-capitalize"><i class="fas fas fa-medal fa-fw"></i><span class="ps-2 nav-link-text d-inline">leaderboard</span></a>
                </li>
                <ul  id="collapseRideLeaderboard" class="collapse show sidebar-dropdown-link">
                  <li class="nav-item">
                    <a role="button" href="{{ route('admin.leaderboard.ride.index',['gender' => 'P']) }}" class="nav-link link-light my-1 px-3 text-capitalize"><i class="fa fa-venus fa-fw"></i><span class="ps-2 nav-link-text d-inline">female</span></a>
                  </li>
                  <li class="nav-item">
                    <a role="button" href="{{ route('admin.leaderboard.ride.index',['gender' => 'L']) }}" class="nav-link link-light my-1 px-3 text-capitalize"><i class="fa fa-mars fa-fw"></i><span class="ps-2 nav-link-text d-inline">male</span></a>
                  </li>
                </ul>
                
              </ul>
            </ul>
          </nav>


          <div class="col align-self-stretch bg-light">
            <!-- As a heading -->
            <div class="row border-bottom bg-white justify-content-between">
              <div class="col-auto py-3 align-self-center">
                <div class="card d-md-none">
                  <div class="card-body p-2">
                    <a class="d-flex align-items-center text-decoration-none text-capitalize fw-bold" href="{{ url('/') }}">
                      <img src="{{ asset('img/logo.png') }}" alt="" width="48" height="48" class="d-inline-block align-middle rounded">
  
                      <span class=" fs-6 f-montserrat d-inline ms-3">jasa raharja <br> <small class="text-muted"> virtual olympic</small></span>
                    </a>
                    <span class="position-absolute top-0 start-90 translate-middle badge rounded-pill bg-danger">
                      <small><i class="fa fas fa-key pe-1"></i>ADMIN</small>
                    </span>
                  </div>
                  
                </div>
              </div>
              <div class="col-auto py-3 align-self-center">
                <a name="" id="" class="btn btn-light-outline text-capitalize d-none d-md-block text-end" href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();" role="button">
                  <span class="fw-bold"><i class="fas fa-sign-out-alt pe-2"></i>{{ __('Logout') }}</span>
                </a>

                <a name="" id="" class="btn btn-light rounded-pill text-capitalize d-block d-md-none" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" role="button">
                     <div class="d-flex justify-content-center fs-2"><i class="fas fa-sign-out-alt fa-fw"></i></div>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none"> @csrf </form>

              </div>
            </div>
            @endif
            <main class="row overflow-auto">
              <div class="col">
                @yield('content')
              </div>
            </main>
            @if (Auth::guard('admin')->check())
            <nav  id="mobile-navbar" class="navbar fixed-bottom border border-top navbar-light bg-light d-md-none">
              <div class="container-fluid">
                <div class="container p-0">
                  <div style="max-height: 500px" class="collapse overflow-auto" id="leaderboardOptions">
                    <ul class="navbar-nav">
              <small class="text-muted mt-3 mb-1 fw-bold text-capitalize">general</small>
              <li class="nav-item">
                <a role="button" href="{{ route('dashboard.index') }}" class="nav-link link-light my-1 px-3 text-capitalize"><i class="fas fa-home fa-fw"></i><span class="ps-2 nav-link-text d-inline">Dashboard</span></a>
              </li>
              <li class="nav-item">
                <a role="button" href="{{ url('/') }}" class="nav-link link-light my-1 px-3 text-capitalize"><i class="fas fa-bullhorn fa-fw"></i><span class="ps-2 nav-link-text d-inline">announcements</span></a>
              </li>
              
              <small class="text-muted mt-3 mb-1 fw-bold text-capitalize">competition</small>
              <li class="nav-item">
                  <a role="button" href="{{ url('/') }}" class="nav-link link-light my-1 px-3 text-capitalize"><i class="fas fa-user-friends fa-fw"></i><span class="ps-2 nav-link-text d-inline">registration</span></a>
                </li>
                <li class="nav-item">
                  <a role="button" href="{{ url('/') }}" class="nav-link link-light my-1 px-3 text-capitalize"><i class="fas fa-users fa-fw"></i><span class="ps-2 nav-link-text d-inline">my competition</span></a>
                </li>
                <li class="nav-item">
                  <a role="button" href="{{ url('/') }}" class="nav-link link-light my-1 px-3 text-capitalize"><i class="fas fa-medal fa-fw"></i><span class="ps-2 nav-link-text d-inline">activity</span></a>
                </li>
                <li class="nav-item">
                  <a role="button" href="{{ url('/') }}" class="nav-link link-light my-1 px-3 text-capitalize"><i class="fas fa-medal fa-fw"></i><span class="ps-2 nav-link-text d-inline">leaderboard</span></a>
                </li>
            </ul>
                  </div>
                  <div class="row justify-content-between">
                    <div class="col my-2">
                      <a role="button" href="{{ route('admin.dashboard.index') }}" class="nav-link link-light p-0 fw-bold text-capitalize">
                        <div class="d-flex justify-content-center"><i class="fas fa-home"></i></div>
                        <p class="mx-0 mb-0 small-text text-center"><small>dashboard</small></p>
                      </a>
                    </div>
                    <div class="col my-2">
                      <a role="button" href="{{ route('admin.users.index') }}" class="nav-link link-light p-0 fw-bold text-capitalize">
                        <div class="d-flex justify-content-center"><i class="fa fa-address-card"></i></div>
                        <p class="mx-0 mb-0 small-text text-center"><small>Users</small></p>
                      </a>
                    </div>
                    <div class="col my-2">
                      <a class="nav-link link-light p-0 fw-bold text-capitalize " data-bs-toggle="collapse" href="#leaderboardOptions" role="button" aria-expanded="false" aria-controls="collapseExample">
                        <div class="d-flex justify-content-center"><i class="fas fa-bars"></i></div>
                        <p class="mx-0 mb-0 small-text text-center"><small>More</small></p>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              
            </nav>
            @endif
            
          </div>
      </div>
    </div>
    
    
    @yield('script')
  </body>
</html>
