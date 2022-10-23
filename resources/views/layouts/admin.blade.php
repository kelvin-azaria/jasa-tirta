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
                <a role="button" data-bs-toggle="collapse" href="#collapseCompetition1" data-bs-toggle="collapse" class="nav-link link-light my-2 px-3 text-capitalize">
                  <svg width="20" height="20" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M8.06459 2.03391C6.67527 2.21487 5.50953 2.74737 4.44797 3.68596C4.2314 3.87744 3.75686 4.39324 3.70012 4.49884C3.67688 4.54206 3.73262 4.54705 4.13316 4.53766C4.38601 4.53174 4.59285 4.53984 4.59285 4.55568C4.59285 4.57152 4.46344 4.61136 4.30526 4.64423C3.91646 4.72504 3.42946 4.89664 2.98098 5.11083C2.77641 5.20853 2.609 5.29467 2.609 5.30227C2.609 5.30984 2.73921 5.2864 2.89831 5.25016C3.14316 5.19438 3.31469 5.1838 4.01423 5.18132C4.73242 5.17878 4.89721 5.18817 5.27067 5.2531C6.39975 5.44937 7.5527 5.83417 8.42754 6.30669C8.75746 6.48491 9.13072 6.71709 9.11405 6.73375C9.1076 6.7402 8.91719 6.67004 8.69093 6.57782C7.29023 6.007 5.70176 5.61975 4.49955 5.5561C2.88258 5.47047 1.57013 5.79714 0.920118 6.44705C0.508072 6.859 0.360705 7.34832 0.473255 7.93068C0.530721 8.22812 0.530489 8.23906 0.45745 8.68136C0.388445 9.099 0.373236 9.14555 0.238797 9.35022C-0.0618558 9.80799 -0.0764702 10.1557 0.182852 10.6818C0.320895 10.962 0.380477 11.0389 0.733735 11.3927L1.12984 11.7895L1.01009 12.4342C0.863346 13.2243 0.838647 13.4843 0.886194 13.7388C0.940485 14.0292 0.972293 14.02 0.972458 13.7137C0.97259 13.4762 0.984527 13.4211 1.06934 13.2679C1.19118 13.0476 1.39009 12.8631 1.64369 12.7351C2.19798 12.4553 3.69533 12.361 5.08882 12.5183C5.33432 12.546 6.03363 12.6497 6.64283 12.7488C7.25204 12.8479 7.86952 12.9381 8.015 12.9492C8.6869 13.0008 9.36709 12.6656 9.64371 12.1466C9.75748 11.9331 9.82497 11.6768 10.3948 9.29315C10.6057 8.41116 10.7861 7.66352 10.7958 7.63168C10.8094 7.58694 10.8498 7.57381 10.9737 7.57381C11.0994 7.57381 11.2098 7.61065 11.4841 7.74399C11.705 7.85139 11.8931 7.91986 11.994 7.92955C12.1388 7.94347 12.1657 7.93444 12.2804 7.83376C12.5946 7.55788 12.6519 6.9404 12.3961 6.58721C12.3279 6.49304 12.2125 6.41181 11.9611 6.28087C11.6508 6.11922 11.5944 6.10113 11.3545 6.08602L11.09 6.06939L11.3143 5.94193C11.5882 5.78626 11.6152 5.78927 12.117 6.0318C12.5187 6.22602 12.6954 6.376 12.8019 6.61333C12.8579 6.73838 12.8648 6.80289 12.8474 7.04317C12.8051 7.62543 12.6283 8.90108 12.574 9.01568C12.4875 9.19779 12.323 9.30373 12.1035 9.31858C11.9329 9.33012 11.8863 9.31636 11.5694 9.16066C11.1716 8.96522 11.1246 8.92905 11.0319 8.74759C10.9711 8.62846 10.9616 8.62191 10.9356 8.68146C10.9197 8.71783 10.8195 9.14188 10.7129 9.62379C10.489 10.6355 10.4813 10.5516 10.827 10.8761C11.5935 11.5956 12.5747 11.896 13.5487 11.7093C14.2041 11.5837 15.4593 11.1564 15.6071 11.0087C15.6602 10.9556 15.6694 10.8952 15.6694 10.5992C15.6694 10.1975 15.6938 10.2163 15.3057 10.3183L15.0577 10.3835L14.8593 10.2461C13.977 9.6354 13.9087 9.57952 13.8316 9.40557C13.7009 9.1108 13.6773 8.97997 13.7314 8.85055C13.7879 8.71529 13.8741 8.65356 14.1338 8.56227C14.2727 8.51346 14.3454 8.50341 14.3953 8.52616C14.4443 8.54848 14.549 8.75526 14.7549 9.23612C14.9147 9.60928 15.0635 9.93923 15.0855 9.96938C15.1225 10.02 15.1533 10.0176 15.4875 9.93866C15.8821 9.84542 16 9.78845 16 9.69114C16 9.6563 15.9036 9.34877 15.7858 9.00777C15.5971 8.46195 15.5555 8.37149 15.4377 8.25146C15.3088 8.12003 15.2982 8.09206 15.1433 7.4725C14.7267 5.80584 14.124 4.66813 13.1389 3.68877C12.2574 2.81247 11.2127 2.28338 9.93282 2.06509C9.5174 1.99423 8.49962 1.97727 8.06459 2.03391ZM9.8865 3.43748C10.6959 3.60036 11.3635 3.92518 11.9992 4.46548L12.0819 4.53571L11.9662 4.50903C11.9025 4.49431 11.7091 4.48363 11.5363 4.48525C11.1695 4.48866 11.0311 4.53538 10.551 4.81798C10.2208 5.0123 10.0271 5.18764 9.89652 5.41049L9.81544 5.5488L9.4608 5.33487C8.62688 4.8319 7.69854 4.45609 6.39485 4.09374L6.22953 4.04778L6.53012 3.89539C7.05194 3.63081 7.6049 3.46367 8.24645 3.37658C8.59997 3.3286 9.51406 3.36256 9.8865 3.43748ZM5.23761 6.18472C5.69551 6.23227 5.84129 6.2695 5.85677 6.34283C5.88355 6.4699 5.55261 8.1936 5.48555 8.27643C5.43642 8.3371 5.41387 8.33862 5.07361 8.3044C4.87562 8.28446 4.29587 8.26833 3.78529 8.26852C3.02932 8.26879 2.78028 8.28082 2.44368 8.33336C1.77975 8.43699 1.26369 8.59275 0.894592 8.80092C0.797284 8.85581 0.70973 8.89281 0.700075 8.88312C0.690388 8.87343 0.700671 8.69763 0.722923 8.49244C0.814841 7.64431 0.89899 7.36829 1.13874 7.12854C1.29824 6.96904 1.23181 6.98068 1.0452 7.14494C0.873596 7.29601 0.779892 7.43524 0.669921 7.7025L0.593642 7.88792L0.592881 7.75087C0.591592 7.5269 0.708606 7.21169 0.868174 7.00951C1.24507 6.5318 2.02492 6.24116 3.20416 6.13893C3.478 6.11519 4.8696 6.14653 5.23761 6.18472ZM12.1108 6.62947C12.3206 6.83929 12.3312 7.20581 12.1327 7.38369C11.9406 7.55589 11.6879 7.47254 11.5505 7.19166C11.4427 6.97142 11.4608 6.79783 11.6092 6.62881C11.6938 6.53256 11.73 6.51576 11.8528 6.51576C11.9731 6.51576 12.0159 6.53464 12.1108 6.62947ZM7.46865 6.77025C7.55051 6.87431 7.54919 7.06882 7.4663 7.1207C7.2815 7.23636 7.07472 6.90932 7.22658 6.74155C7.30359 6.65645 7.38691 6.66633 7.46865 6.77025ZM11.8225 6.80768C11.7545 6.88284 11.7534 6.95406 11.8182 7.0795C11.8825 7.20369 12.0082 7.2115 12.0839 7.096C12.1416 7.00785 12.1257 6.90294 12.0398 6.80507C11.9743 6.73048 11.8915 6.73147 11.8225 6.80768ZM7.93981 7.76648C7.97122 7.79267 7.98818 7.82821 7.9775 7.84547C7.93197 7.91914 7.53557 8.0462 7.53557 7.98715C7.53557 7.97806 7.57607 7.89804 7.6256 7.80936C7.70998 7.65823 7.72089 7.65032 7.79919 7.68345C7.84515 7.70293 7.90843 7.74029 7.93981 7.76648ZM9.08621 8.12423L9.27947 8.14443L9.23206 8.33029C9.20597 8.43252 9.17033 8.57119 9.1528 8.63845L9.121 8.76075L8.88654 8.6484C8.75759 8.5866 8.64421 8.52814 8.63456 8.51849C8.6249 8.50887 8.60526 8.42998 8.59088 8.34325C8.57646 8.25649 8.55457 8.13766 8.54217 8.07917L8.51969 7.97283L8.7063 8.03843C8.80897 8.0745 8.97991 8.11312 9.08621 8.12423ZM8.22992 8.33522C8.22992 8.35175 8.2077 8.35674 8.18052 8.34632C8.15334 8.33588 8.13949 8.31379 8.14974 8.29722C8.17116 8.26254 8.22992 8.29038 8.22992 8.33522ZM7.13751 8.3336C7.27287 8.40604 7.28167 8.66649 7.15163 8.75282C7.09145 8.79276 7.0726 8.79011 6.99775 8.73123C6.88533 8.64281 6.85183 8.4892 6.92173 8.38253C6.97867 8.2956 7.04037 8.28162 7.13751 8.3336ZM4.54326 8.83078C5.3363 8.90395 6.19306 9.08706 6.99001 9.35376C7.38989 9.48757 8.42228 9.90444 8.47122 9.95186C8.4857 9.96591 8.28484 9.93552 8.02485 9.88431C7.53051 9.78693 6.87891 9.68787 6.2626 9.61639C5.68936 9.54989 3.6705 9.56008 3.26989 9.63146C2.49364 9.76977 1.91621 10.0098 1.61225 10.3204C1.39985 10.5375 1.38844 10.5652 1.25397 11.1916C1.19977 11.4439 1.14988 11.656 1.14307 11.6628C1.10944 11.6965 0.627004 11.1976 0.489159 10.9867C0.148432 10.4654 0.194954 10.0379 0.636228 9.63454C1.29665 9.03095 2.97354 8.68599 4.54326 8.83078ZM6.34317 10.9931C6.58752 11.0223 6.8851 11.0613 7.00446 11.0797C7.26626 11.12 8.47327 11.3497 8.48917 11.3623C8.531 11.3953 8.43495 11.5229 8.33767 11.5635C8.19761 11.622 8.21309 11.6237 6.87428 11.4079C5.1685 11.133 4.43835 11.0626 3.50567 11.0833C3.21252 11.0898 2.97271 11.093 2.97271 11.0905C2.97271 11.0732 3.46292 10.9725 3.66706 10.9479C4.05229 10.9013 5.82605 10.9313 6.34317 10.9931Z"/>
                    </svg>
                    <span class="ps-2  nav-link-text d-inline">PUBG</span></a>
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
            <div class="row border-bottom bg-light-accent-3 justify-content-between">
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
                <a name="" id="" class="nav-link link-light text-capitalize d-none d-md-block text-end" href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();" role="button">
                  <span class="fw-bold"><i class="fas fa-sign-out-alt pe-2"></i>{{ __('Logout') }}</span>
                </a>

                <a name="" id="" class="nav-link px-4 py-3 link-light rounded-pill text-capitalize d-block d-md-none" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" role="button">
                     <div class="d-flex justify-content-center fs-2"><i class="fas fa-sign-out-alt fa-fw"></i></div>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none"> @csrf </form>

              </div>
            </div>
            @endif
            <main class="row overflow-auto bg-light-accent-4">
              <div class="col">
                @yield('content')
              </div>
            </main>
            @if (Auth::guard('admin')->check())
            <nav  id="mobile-navbar" class="navbar fixed-bottom border border-top navbar-light bg-light d-md-none">
              <div class="container-fluid">
                <div class="container p-0">
                  <div style="max-height: 500px" class="collapse overflow-auto" id="moreNavOptions">
                    <ul class="navbar-nav">
                      <small class="text-muted mt-3 mb-1 fw-bold text-capitalize">general</small>
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
                      <small class="text-muted mt-3 mb-1 fw-bold text-capitalize">competitions</small>
                      <li class="nav-item">
                        <a role="button" data-bs-toggle="collapse" href="#collapseCompetition1" data-bs-toggle="collapse" class="nav-link link-light my-2 px-3 text-capitalize">
                          <svg width="20" height="20" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8.06459 2.03391C6.67527 2.21487 5.50953 2.74737 4.44797 3.68596C4.2314 3.87744 3.75686 4.39324 3.70012 4.49884C3.67688 4.54206 3.73262 4.54705 4.13316 4.53766C4.38601 4.53174 4.59285 4.53984 4.59285 4.55568C4.59285 4.57152 4.46344 4.61136 4.30526 4.64423C3.91646 4.72504 3.42946 4.89664 2.98098 5.11083C2.77641 5.20853 2.609 5.29467 2.609 5.30227C2.609 5.30984 2.73921 5.2864 2.89831 5.25016C3.14316 5.19438 3.31469 5.1838 4.01423 5.18132C4.73242 5.17878 4.89721 5.18817 5.27067 5.2531C6.39975 5.44937 7.5527 5.83417 8.42754 6.30669C8.75746 6.48491 9.13072 6.71709 9.11405 6.73375C9.1076 6.7402 8.91719 6.67004 8.69093 6.57782C7.29023 6.007 5.70176 5.61975 4.49955 5.5561C2.88258 5.47047 1.57013 5.79714 0.920118 6.44705C0.508072 6.859 0.360705 7.34832 0.473255 7.93068C0.530721 8.22812 0.530489 8.23906 0.45745 8.68136C0.388445 9.099 0.373236 9.14555 0.238797 9.35022C-0.0618558 9.80799 -0.0764702 10.1557 0.182852 10.6818C0.320895 10.962 0.380477 11.0389 0.733735 11.3927L1.12984 11.7895L1.01009 12.4342C0.863346 13.2243 0.838647 13.4843 0.886194 13.7388C0.940485 14.0292 0.972293 14.02 0.972458 13.7137C0.97259 13.4762 0.984527 13.4211 1.06934 13.2679C1.19118 13.0476 1.39009 12.8631 1.64369 12.7351C2.19798 12.4553 3.69533 12.361 5.08882 12.5183C5.33432 12.546 6.03363 12.6497 6.64283 12.7488C7.25204 12.8479 7.86952 12.9381 8.015 12.9492C8.6869 13.0008 9.36709 12.6656 9.64371 12.1466C9.75748 11.9331 9.82497 11.6768 10.3948 9.29315C10.6057 8.41116 10.7861 7.66352 10.7958 7.63168C10.8094 7.58694 10.8498 7.57381 10.9737 7.57381C11.0994 7.57381 11.2098 7.61065 11.4841 7.74399C11.705 7.85139 11.8931 7.91986 11.994 7.92955C12.1388 7.94347 12.1657 7.93444 12.2804 7.83376C12.5946 7.55788 12.6519 6.9404 12.3961 6.58721C12.3279 6.49304 12.2125 6.41181 11.9611 6.28087C11.6508 6.11922 11.5944 6.10113 11.3545 6.08602L11.09 6.06939L11.3143 5.94193C11.5882 5.78626 11.6152 5.78927 12.117 6.0318C12.5187 6.22602 12.6954 6.376 12.8019 6.61333C12.8579 6.73838 12.8648 6.80289 12.8474 7.04317C12.8051 7.62543 12.6283 8.90108 12.574 9.01568C12.4875 9.19779 12.323 9.30373 12.1035 9.31858C11.9329 9.33012 11.8863 9.31636 11.5694 9.16066C11.1716 8.96522 11.1246 8.92905 11.0319 8.74759C10.9711 8.62846 10.9616 8.62191 10.9356 8.68146C10.9197 8.71783 10.8195 9.14188 10.7129 9.62379C10.489 10.6355 10.4813 10.5516 10.827 10.8761C11.5935 11.5956 12.5747 11.896 13.5487 11.7093C14.2041 11.5837 15.4593 11.1564 15.6071 11.0087C15.6602 10.9556 15.6694 10.8952 15.6694 10.5992C15.6694 10.1975 15.6938 10.2163 15.3057 10.3183L15.0577 10.3835L14.8593 10.2461C13.977 9.6354 13.9087 9.57952 13.8316 9.40557C13.7009 9.1108 13.6773 8.97997 13.7314 8.85055C13.7879 8.71529 13.8741 8.65356 14.1338 8.56227C14.2727 8.51346 14.3454 8.50341 14.3953 8.52616C14.4443 8.54848 14.549 8.75526 14.7549 9.23612C14.9147 9.60928 15.0635 9.93923 15.0855 9.96938C15.1225 10.02 15.1533 10.0176 15.4875 9.93866C15.8821 9.84542 16 9.78845 16 9.69114C16 9.6563 15.9036 9.34877 15.7858 9.00777C15.5971 8.46195 15.5555 8.37149 15.4377 8.25146C15.3088 8.12003 15.2982 8.09206 15.1433 7.4725C14.7267 5.80584 14.124 4.66813 13.1389 3.68877C12.2574 2.81247 11.2127 2.28338 9.93282 2.06509C9.5174 1.99423 8.49962 1.97727 8.06459 2.03391ZM9.8865 3.43748C10.6959 3.60036 11.3635 3.92518 11.9992 4.46548L12.0819 4.53571L11.9662 4.50903C11.9025 4.49431 11.7091 4.48363 11.5363 4.48525C11.1695 4.48866 11.0311 4.53538 10.551 4.81798C10.2208 5.0123 10.0271 5.18764 9.89652 5.41049L9.81544 5.5488L9.4608 5.33487C8.62688 4.8319 7.69854 4.45609 6.39485 4.09374L6.22953 4.04778L6.53012 3.89539C7.05194 3.63081 7.6049 3.46367 8.24645 3.37658C8.59997 3.3286 9.51406 3.36256 9.8865 3.43748ZM5.23761 6.18472C5.69551 6.23227 5.84129 6.2695 5.85677 6.34283C5.88355 6.4699 5.55261 8.1936 5.48555 8.27643C5.43642 8.3371 5.41387 8.33862 5.07361 8.3044C4.87562 8.28446 4.29587 8.26833 3.78529 8.26852C3.02932 8.26879 2.78028 8.28082 2.44368 8.33336C1.77975 8.43699 1.26369 8.59275 0.894592 8.80092C0.797284 8.85581 0.70973 8.89281 0.700075 8.88312C0.690388 8.87343 0.700671 8.69763 0.722923 8.49244C0.814841 7.64431 0.89899 7.36829 1.13874 7.12854C1.29824 6.96904 1.23181 6.98068 1.0452 7.14494C0.873596 7.29601 0.779892 7.43524 0.669921 7.7025L0.593642 7.88792L0.592881 7.75087C0.591592 7.5269 0.708606 7.21169 0.868174 7.00951C1.24507 6.5318 2.02492 6.24116 3.20416 6.13893C3.478 6.11519 4.8696 6.14653 5.23761 6.18472ZM12.1108 6.62947C12.3206 6.83929 12.3312 7.20581 12.1327 7.38369C11.9406 7.55589 11.6879 7.47254 11.5505 7.19166C11.4427 6.97142 11.4608 6.79783 11.6092 6.62881C11.6938 6.53256 11.73 6.51576 11.8528 6.51576C11.9731 6.51576 12.0159 6.53464 12.1108 6.62947ZM7.46865 6.77025C7.55051 6.87431 7.54919 7.06882 7.4663 7.1207C7.2815 7.23636 7.07472 6.90932 7.22658 6.74155C7.30359 6.65645 7.38691 6.66633 7.46865 6.77025ZM11.8225 6.80768C11.7545 6.88284 11.7534 6.95406 11.8182 7.0795C11.8825 7.20369 12.0082 7.2115 12.0839 7.096C12.1416 7.00785 12.1257 6.90294 12.0398 6.80507C11.9743 6.73048 11.8915 6.73147 11.8225 6.80768ZM7.93981 7.76648C7.97122 7.79267 7.98818 7.82821 7.9775 7.84547C7.93197 7.91914 7.53557 8.0462 7.53557 7.98715C7.53557 7.97806 7.57607 7.89804 7.6256 7.80936C7.70998 7.65823 7.72089 7.65032 7.79919 7.68345C7.84515 7.70293 7.90843 7.74029 7.93981 7.76648ZM9.08621 8.12423L9.27947 8.14443L9.23206 8.33029C9.20597 8.43252 9.17033 8.57119 9.1528 8.63845L9.121 8.76075L8.88654 8.6484C8.75759 8.5866 8.64421 8.52814 8.63456 8.51849C8.6249 8.50887 8.60526 8.42998 8.59088 8.34325C8.57646 8.25649 8.55457 8.13766 8.54217 8.07917L8.51969 7.97283L8.7063 8.03843C8.80897 8.0745 8.97991 8.11312 9.08621 8.12423ZM8.22992 8.33522C8.22992 8.35175 8.2077 8.35674 8.18052 8.34632C8.15334 8.33588 8.13949 8.31379 8.14974 8.29722C8.17116 8.26254 8.22992 8.29038 8.22992 8.33522ZM7.13751 8.3336C7.27287 8.40604 7.28167 8.66649 7.15163 8.75282C7.09145 8.79276 7.0726 8.79011 6.99775 8.73123C6.88533 8.64281 6.85183 8.4892 6.92173 8.38253C6.97867 8.2956 7.04037 8.28162 7.13751 8.3336ZM4.54326 8.83078C5.3363 8.90395 6.19306 9.08706 6.99001 9.35376C7.38989 9.48757 8.42228 9.90444 8.47122 9.95186C8.4857 9.96591 8.28484 9.93552 8.02485 9.88431C7.53051 9.78693 6.87891 9.68787 6.2626 9.61639C5.68936 9.54989 3.6705 9.56008 3.26989 9.63146C2.49364 9.76977 1.91621 10.0098 1.61225 10.3204C1.39985 10.5375 1.38844 10.5652 1.25397 11.1916C1.19977 11.4439 1.14988 11.656 1.14307 11.6628C1.10944 11.6965 0.627004 11.1976 0.489159 10.9867C0.148432 10.4654 0.194954 10.0379 0.636228 9.63454C1.29665 9.03095 2.97354 8.68599 4.54326 8.83078ZM6.34317 10.9931C6.58752 11.0223 6.8851 11.0613 7.00446 11.0797C7.26626 11.12 8.47327 11.3497 8.48917 11.3623C8.531 11.3953 8.43495 11.5229 8.33767 11.5635C8.19761 11.622 8.21309 11.6237 6.87428 11.4079C5.1685 11.133 4.43835 11.0626 3.50567 11.0833C3.21252 11.0898 2.97271 11.093 2.97271 11.0905C2.97271 11.0732 3.46292 10.9725 3.66706 10.9479C4.05229 10.9013 5.82605 10.9313 6.34317 10.9931Z"/>
                            </svg>
                            <span class="ps-2  nav-link-text d-inline">PUBG</span></a>
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
                  </div>
                  <div class="row justify-content-between">
                    <div class="col">
                      <a role="button" href="{{ route('admin.dashboard.index') }}" class="nav-link link-light fw-bold text-capitalize py-2 ">
                        <div class="d-flex justify-content-center"><i class="fas fa-home"></i></div>
                        <p class="mx-0 mb-0 small-text text-center"><small>dashboard</small></p>
                      </a>
                    </div>
                    <div class="col">
                      <a role="button" href="{{ route('admin.users.index') }}" class="nav-link link-light fw-bold text-capitalize py-2 ">
                        <div class="d-flex justify-content-center"><i class="fa fa-address-card"></i></div>
                        <p class="mx-0 mb-0 small-text text-center"><small>Users</small></p>
                      </a>
                    </div>
                    <div class="col">
                      <a class="nav-link py-2 link-light p-0 fw-bold text-capitalize " data-bs-toggle="collapse" href="#moreNavOptions" role="button" aria-expanded="false" aria-controls="collapseExample">
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
