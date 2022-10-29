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
    <nav id="landing-navbar" class="navbar navbar-expand-md bg-white border-bottom d-none d-md-block sticky-top">
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
              <a role="button" href="{{ url('/') }}" class="nav-link link-light-theme fw-bold px-3 text-capitalize"><small><i class="fas fa-home pe-2"></i><span class="nav-link-text d-xl-inline">home</span></small></a>
            </li>
            <li class="nav-item">
              <a role="button" href="{{ url('/#announcement') }}" class="nav-link link-light-theme fw-bold px-3 text-capitalize"><small><i class="fas fa-bullhorn pe-2"></i><span class="nav-link-text d-xl-inline">pengumuman</span></small></a>
            </li>
            <li class="nav-item">
              <a role="button" href="{{ route('rule.index') }}" class="nav-link link-light-theme fw-bold px-3 text-capitalize"><small><i class="fas fa-dice pe-2"></i><span class="nav-link-text d-xl-inline">peraturan</span></small></a>
            </li>
            <li class="nav-item dropdown">
              <a role="button" href="#" class="nav-link link-light-theme fw-bold px-3 text-capitalize dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" ><small><i class="fas fa-trophy pe-2"></i><span class="nav-link-text d-xl-inline">leaderboards</span></small></a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><small class="ps-3 text-capitalize text-accent-2 fw-bold">perlombaan</small></li>
                <li>
                  <div class="">
                    <div class="row justify-content-around mx-0 my-2">
                      <div class="col px-2">
                        <a name="" id="" class="dropdown-grid-link dropdown-light bg-light-accent-1 py-1 w-100" href="{{ route('leaderboards.pubg') }}" role="button">
                          <div>
                            <svg width="20" height="20" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M8.06459 2.03391C6.67527 2.21487 5.50953 2.74737 4.44797 3.68596C4.2314 3.87744 3.75686 4.39324 3.70012 4.49884C3.67688 4.54206 3.73262 4.54705 4.13316 4.53766C4.38601 4.53174 4.59285 4.53984 4.59285 4.55568C4.59285 4.57152 4.46344 4.61136 4.30526 4.64423C3.91646 4.72504 3.42946 4.89664 2.98098 5.11083C2.77641 5.20853 2.609 5.29467 2.609 5.30227C2.609 5.30984 2.73921 5.2864 2.89831 5.25016C3.14316 5.19438 3.31469 5.1838 4.01423 5.18132C4.73242 5.17878 4.89721 5.18817 5.27067 5.2531C6.39975 5.44937 7.5527 5.83417 8.42754 6.30669C8.75746 6.48491 9.13072 6.71709 9.11405 6.73375C9.1076 6.7402 8.91719 6.67004 8.69093 6.57782C7.29023 6.007 5.70176 5.61975 4.49955 5.5561C2.88258 5.47047 1.57013 5.79714 0.920118 6.44705C0.508072 6.859 0.360705 7.34832 0.473255 7.93068C0.530721 8.22812 0.530489 8.23906 0.45745 8.68136C0.388445 9.099 0.373236 9.14555 0.238797 9.35022C-0.0618558 9.80799 -0.0764702 10.1557 0.182852 10.6818C0.320895 10.962 0.380477 11.0389 0.733735 11.3927L1.12984 11.7895L1.01009 12.4342C0.863346 13.2243 0.838647 13.4843 0.886194 13.7388C0.940485 14.0292 0.972293 14.02 0.972458 13.7137C0.97259 13.4762 0.984527 13.4211 1.06934 13.2679C1.19118 13.0476 1.39009 12.8631 1.64369 12.7351C2.19798 12.4553 3.69533 12.361 5.08882 12.5183C5.33432 12.546 6.03363 12.6497 6.64283 12.7488C7.25204 12.8479 7.86952 12.9381 8.015 12.9492C8.6869 13.0008 9.36709 12.6656 9.64371 12.1466C9.75748 11.9331 9.82497 11.6768 10.3948 9.29315C10.6057 8.41116 10.7861 7.66352 10.7958 7.63168C10.8094 7.58694 10.8498 7.57381 10.9737 7.57381C11.0994 7.57381 11.2098 7.61065 11.4841 7.74399C11.705 7.85139 11.8931 7.91986 11.994 7.92955C12.1388 7.94347 12.1657 7.93444 12.2804 7.83376C12.5946 7.55788 12.6519 6.9404 12.3961 6.58721C12.3279 6.49304 12.2125 6.41181 11.9611 6.28087C11.6508 6.11922 11.5944 6.10113 11.3545 6.08602L11.09 6.06939L11.3143 5.94193C11.5882 5.78626 11.6152 5.78927 12.117 6.0318C12.5187 6.22602 12.6954 6.376 12.8019 6.61333C12.8579 6.73838 12.8648 6.80289 12.8474 7.04317C12.8051 7.62543 12.6283 8.90108 12.574 9.01568C12.4875 9.19779 12.323 9.30373 12.1035 9.31858C11.9329 9.33012 11.8863 9.31636 11.5694 9.16066C11.1716 8.96522 11.1246 8.92905 11.0319 8.74759C10.9711 8.62846 10.9616 8.62191 10.9356 8.68146C10.9197 8.71783 10.8195 9.14188 10.7129 9.62379C10.489 10.6355 10.4813 10.5516 10.827 10.8761C11.5935 11.5956 12.5747 11.896 13.5487 11.7093C14.2041 11.5837 15.4593 11.1564 15.6071 11.0087C15.6602 10.9556 15.6694 10.8952 15.6694 10.5992C15.6694 10.1975 15.6938 10.2163 15.3057 10.3183L15.0577 10.3835L14.8593 10.2461C13.977 9.6354 13.9087 9.57952 13.8316 9.40557C13.7009 9.1108 13.6773 8.97997 13.7314 8.85055C13.7879 8.71529 13.8741 8.65356 14.1338 8.56227C14.2727 8.51346 14.3454 8.50341 14.3953 8.52616C14.4443 8.54848 14.549 8.75526 14.7549 9.23612C14.9147 9.60928 15.0635 9.93923 15.0855 9.96938C15.1225 10.02 15.1533 10.0176 15.4875 9.93866C15.8821 9.84542 16 9.78845 16 9.69114C16 9.6563 15.9036 9.34877 15.7858 9.00777C15.5971 8.46195 15.5555 8.37149 15.4377 8.25146C15.3088 8.12003 15.2982 8.09206 15.1433 7.4725C14.7267 5.80584 14.124 4.66813 13.1389 3.68877C12.2574 2.81247 11.2127 2.28338 9.93282 2.06509C9.5174 1.99423 8.49962 1.97727 8.06459 2.03391ZM9.8865 3.43748C10.6959 3.60036 11.3635 3.92518 11.9992 4.46548L12.0819 4.53571L11.9662 4.50903C11.9025 4.49431 11.7091 4.48363 11.5363 4.48525C11.1695 4.48866 11.0311 4.53538 10.551 4.81798C10.2208 5.0123 10.0271 5.18764 9.89652 5.41049L9.81544 5.5488L9.4608 5.33487C8.62688 4.8319 7.69854 4.45609 6.39485 4.09374L6.22953 4.04778L6.53012 3.89539C7.05194 3.63081 7.6049 3.46367 8.24645 3.37658C8.59997 3.3286 9.51406 3.36256 9.8865 3.43748ZM5.23761 6.18472C5.69551 6.23227 5.84129 6.2695 5.85677 6.34283C5.88355 6.4699 5.55261 8.1936 5.48555 8.27643C5.43642 8.3371 5.41387 8.33862 5.07361 8.3044C4.87562 8.28446 4.29587 8.26833 3.78529 8.26852C3.02932 8.26879 2.78028 8.28082 2.44368 8.33336C1.77975 8.43699 1.26369 8.59275 0.894592 8.80092C0.797284 8.85581 0.70973 8.89281 0.700075 8.88312C0.690388 8.87343 0.700671 8.69763 0.722923 8.49244C0.814841 7.64431 0.89899 7.36829 1.13874 7.12854C1.29824 6.96904 1.23181 6.98068 1.0452 7.14494C0.873596 7.29601 0.779892 7.43524 0.669921 7.7025L0.593642 7.88792L0.592881 7.75087C0.591592 7.5269 0.708606 7.21169 0.868174 7.00951C1.24507 6.5318 2.02492 6.24116 3.20416 6.13893C3.478 6.11519 4.8696 6.14653 5.23761 6.18472ZM12.1108 6.62947C12.3206 6.83929 12.3312 7.20581 12.1327 7.38369C11.9406 7.55589 11.6879 7.47254 11.5505 7.19166C11.4427 6.97142 11.4608 6.79783 11.6092 6.62881C11.6938 6.53256 11.73 6.51576 11.8528 6.51576C11.9731 6.51576 12.0159 6.53464 12.1108 6.62947ZM7.46865 6.77025C7.55051 6.87431 7.54919 7.06882 7.4663 7.1207C7.2815 7.23636 7.07472 6.90932 7.22658 6.74155C7.30359 6.65645 7.38691 6.66633 7.46865 6.77025ZM11.8225 6.80768C11.7545 6.88284 11.7534 6.95406 11.8182 7.0795C11.8825 7.20369 12.0082 7.2115 12.0839 7.096C12.1416 7.00785 12.1257 6.90294 12.0398 6.80507C11.9743 6.73048 11.8915 6.73147 11.8225 6.80768ZM7.93981 7.76648C7.97122 7.79267 7.98818 7.82821 7.9775 7.84547C7.93197 7.91914 7.53557 8.0462 7.53557 7.98715C7.53557 7.97806 7.57607 7.89804 7.6256 7.80936C7.70998 7.65823 7.72089 7.65032 7.79919 7.68345C7.84515 7.70293 7.90843 7.74029 7.93981 7.76648ZM9.08621 8.12423L9.27947 8.14443L9.23206 8.33029C9.20597 8.43252 9.17033 8.57119 9.1528 8.63845L9.121 8.76075L8.88654 8.6484C8.75759 8.5866 8.64421 8.52814 8.63456 8.51849C8.6249 8.50887 8.60526 8.42998 8.59088 8.34325C8.57646 8.25649 8.55457 8.13766 8.54217 8.07917L8.51969 7.97283L8.7063 8.03843C8.80897 8.0745 8.97991 8.11312 9.08621 8.12423ZM8.22992 8.33522C8.22992 8.35175 8.2077 8.35674 8.18052 8.34632C8.15334 8.33588 8.13949 8.31379 8.14974 8.29722C8.17116 8.26254 8.22992 8.29038 8.22992 8.33522ZM7.13751 8.3336C7.27287 8.40604 7.28167 8.66649 7.15163 8.75282C7.09145 8.79276 7.0726 8.79011 6.99775 8.73123C6.88533 8.64281 6.85183 8.4892 6.92173 8.38253C6.97867 8.2956 7.04037 8.28162 7.13751 8.3336ZM4.54326 8.83078C5.3363 8.90395 6.19306 9.08706 6.99001 9.35376C7.38989 9.48757 8.42228 9.90444 8.47122 9.95186C8.4857 9.96591 8.28484 9.93552 8.02485 9.88431C7.53051 9.78693 6.87891 9.68787 6.2626 9.61639C5.68936 9.54989 3.6705 9.56008 3.26989 9.63146C2.49364 9.76977 1.91621 10.0098 1.61225 10.3204C1.39985 10.5375 1.38844 10.5652 1.25397 11.1916C1.19977 11.4439 1.14988 11.656 1.14307 11.6628C1.10944 11.6965 0.627004 11.1976 0.489159 10.9867C0.148432 10.4654 0.194954 10.0379 0.636228 9.63454C1.29665 9.03095 2.97354 8.68599 4.54326 8.83078ZM6.34317 10.9931C6.58752 11.0223 6.8851 11.0613 7.00446 11.0797C7.26626 11.12 8.47327 11.3497 8.48917 11.3623C8.531 11.3953 8.43495 11.5229 8.33767 11.5635C8.19761 11.622 8.21309 11.6237 6.87428 11.4079C5.1685 11.133 4.43835 11.0626 3.50567 11.0833C3.21252 11.0898 2.97271 11.093 2.97271 11.0905C2.97271 11.0732 3.46292 10.9725 3.66706 10.9479C4.05229 10.9013 5.82605 10.9313 6.34317 10.9931Z"/>
                              </svg>
                            </div>
                          <small class="text-capitalize ">PUBG</small>
                        </a>
                      </div>
                    </div>
                    {{-- <div class="row justify-content-around mx-0 my-2">
                      <div class="col ps-2 pe-1">
                        <a name="" id="" class="btn w-100 dropdown-light" href="{{ route('leaderboards.bridge') }}" role="button">
                          <div><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="M12 2C9 7 4 9 4 14c0 2 2 4 4 4c1 0 2 0 3-1c0 0 .32 2-2 5h6c-2-3-2-5-2-5c1 1 2 1 3 1c2 0 4-2 4-4c0-5-5-7-8-12Z"/></svg></div>
                          <small class="text-capitalize ">bridge</small>
                        </a>
                      </div>
                      <div class="col ps-1 pe-2">
                        <a name="" id="" class="btn w-100 dropdown-light" href="{{ route('leaderboards.chess') }}" role="button">
                          <div><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 512 512"><path fill="currentColor" d="M74 208H64a16 16 0 0 0-16 16v16a16 16 0 0 0 16 16h15.94A535.78 535.78 0 0 1 64 384h128a535.78 535.78 0 0 1-15.94-128H192a16 16 0 0 0 16-16v-16a16 16 0 0 0-16-16h-10l33.89-90.38a16 16 0 0 0-15-21.62H144V64h24a8 8 0 0 0 8-8V40a8 8 0 0 0-8-8h-24V8a8 8 0 0 0-8-8h-16a8 8 0 0 0-8 8v24H88a8 8 0 0 0-8 8v16a8 8 0 0 0 8 8h24v32H55.09a16 16 0 0 0-15 21.62zm173.16 251.58L224 448v-16a16 16 0 0 0-16-16H48a16 16 0 0 0-16 16v16L8.85 459.58A16 16 0 0 0 0 473.89V496a16 16 0 0 0 16 16h224a16 16 0 0 0 16-16v-22.11a16 16 0 0 0-8.84-14.31zm92.77-157.78l-3.29 82.2h126.72l-3.29-82.21l24.6-20.79A32 32 0 0 0 496 256.54V198a6 6 0 0 0-6-6h-26.38a6 6 0 0 0-6 6v26h-24.71v-26a6 6 0 0 0-6-6H373.1a6 6 0 0 0-6 6v26h-24.71v-26a6 6 0 0 0-6-6H310a6 6 0 0 0-6 6v58.6a32 32 0 0 0 11.36 24.4zM384 304a16 16 0 0 1 32 0v32h-32zm119.16 155.58L480 448v-16a16 16 0 0 0-16-16H336a16 16 0 0 0-16 16v16l-23.15 11.58a16 16 0 0 0-8.85 14.31V496a16 16 0 0 0 16 16h192a16 16 0 0 0 16-16v-22.11a16 16 0 0 0-8.84-14.31z"/></svg></div>
                          <small class="text-capitalize ">chess</small>
                        </a>
                      </div>
                    </div> --}}
                    <div class="row justify-content-around mx-0 my-2">
                      <div class="col ps-2 pe-1">
                        <a name="" id="" class="dropdown-grid-link dropdown-light bg-light-accent-1 py-1 w-100" href="{{ route('leaderboards.ride') }}" role="button">
                          <div><i class="fas fa-biking fa-fw"></i></div>
                          <small class="text-capitalize ">ride</small>
                        </a>
                      </div>
                      <div class="col ps-1 pe-2">
                        <a name="" id="" class="dropdown-grid-link dropdown-light bg-light-accent-1 py-1 w-100" href="{{ route('leaderboards.run') }}" role="button">
                          <div><i class="fas fa-running fa-fw"></i></div>
                          <small class="text-capitalize ">run</small>
                        </a>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </li>
            <li class="nav-item pe-2">
              <a role="button" href="{{ route('faq.index') }}" class="nav-link link-light-theme fw-bold px-3 text-capitalize"><small><i class="fas fa-question-circle pe-2"></i><span class="nav-link-text d-xl-inline">FAQ</span></small></a>
            </li>
            @auth
              <li class="nav-item dropdown">
                  {{-- <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    {{ auth()->user()->name}}
                  </a> --}}
                  <a role="button" href="#" class="btn-primary btn fw-bold px-3 text-capitalize text-light rounded-pill dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"  ><small><i class="fas fa-user-circle pe-2"></i><span class="nav-link-text d-xl-inline">{{ auth()->user()->name}}</span></small></a>
                  <ul class="dropdown-menu dropdown-menu-end p-2 mt-2" aria-labelledby="navbarDropdown">
                    <a name="" id="" class="btn w-100  link-light-theme text-capitalize text-start" href="{{ route('login') }}" role="button">
                      <small class="fw-bold"><i class="fas fa-th-large pe-2"></i>dashboard</small>
                    </a>
                    <a name="" id="" class="btn w-100  link-light-theme text-capitalize mt-2 text-start" href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();" role="button">
                      <small class="fw-bold"><i class="fas fa-sign-out-alt pe-2"></i>logout</small>
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
    <nav id="landing-navbar" class="navbar bg-white d-md-none sticky-top">
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
                  <a name="" id="" class="btn w-100  link-light-theme fw-bold fs-6" href="{{ route('logout') }}" onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();" role="button">
                    <i class="fas fa-sign-out-alt pe-2"></i>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none"> @csrf </form>
                    <span class="text-capitalize">logout</span>
                  </a>
                </div>
              </div>
              <div class="col">
                <div class="card card-body p-0">
                  <a name="" id="" class="btn w-100  link-light-theme fw-bold fs-6" href="{{ route('login') }}" role="button">
                    <i class="fas fa-th-large pe-2"></i>
                    <span class="text-capitalize">dashboard</span>
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
            <p class="fw-bold text-capitalize text-accent-2 mb-2">perlombaan</p>
            <div class="row justify-content-around mb-3">
              <div class="col my-2">
                <div class="card card-body p-0">
                  <a name="" id="" class="dropdown-grid-link dropdown-light bg-light-accent-1 py-1 w-100" href="{{ route('leaderboards.pubg') }}" role="button">
                    <div>
                      <svg width="20" height="20" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M8.06459 2.03391C6.67527 2.21487 5.50953 2.74737 4.44797 3.68596C4.2314 3.87744 3.75686 4.39324 3.70012 4.49884C3.67688 4.54206 3.73262 4.54705 4.13316 4.53766C4.38601 4.53174 4.59285 4.53984 4.59285 4.55568C4.59285 4.57152 4.46344 4.61136 4.30526 4.64423C3.91646 4.72504 3.42946 4.89664 2.98098 5.11083C2.77641 5.20853 2.609 5.29467 2.609 5.30227C2.609 5.30984 2.73921 5.2864 2.89831 5.25016C3.14316 5.19438 3.31469 5.1838 4.01423 5.18132C4.73242 5.17878 4.89721 5.18817 5.27067 5.2531C6.39975 5.44937 7.5527 5.83417 8.42754 6.30669C8.75746 6.48491 9.13072 6.71709 9.11405 6.73375C9.1076 6.7402 8.91719 6.67004 8.69093 6.57782C7.29023 6.007 5.70176 5.61975 4.49955 5.5561C2.88258 5.47047 1.57013 5.79714 0.920118 6.44705C0.508072 6.859 0.360705 7.34832 0.473255 7.93068C0.530721 8.22812 0.530489 8.23906 0.45745 8.68136C0.388445 9.099 0.373236 9.14555 0.238797 9.35022C-0.0618558 9.80799 -0.0764702 10.1557 0.182852 10.6818C0.320895 10.962 0.380477 11.0389 0.733735 11.3927L1.12984 11.7895L1.01009 12.4342C0.863346 13.2243 0.838647 13.4843 0.886194 13.7388C0.940485 14.0292 0.972293 14.02 0.972458 13.7137C0.97259 13.4762 0.984527 13.4211 1.06934 13.2679C1.19118 13.0476 1.39009 12.8631 1.64369 12.7351C2.19798 12.4553 3.69533 12.361 5.08882 12.5183C5.33432 12.546 6.03363 12.6497 6.64283 12.7488C7.25204 12.8479 7.86952 12.9381 8.015 12.9492C8.6869 13.0008 9.36709 12.6656 9.64371 12.1466C9.75748 11.9331 9.82497 11.6768 10.3948 9.29315C10.6057 8.41116 10.7861 7.66352 10.7958 7.63168C10.8094 7.58694 10.8498 7.57381 10.9737 7.57381C11.0994 7.57381 11.2098 7.61065 11.4841 7.74399C11.705 7.85139 11.8931 7.91986 11.994 7.92955C12.1388 7.94347 12.1657 7.93444 12.2804 7.83376C12.5946 7.55788 12.6519 6.9404 12.3961 6.58721C12.3279 6.49304 12.2125 6.41181 11.9611 6.28087C11.6508 6.11922 11.5944 6.10113 11.3545 6.08602L11.09 6.06939L11.3143 5.94193C11.5882 5.78626 11.6152 5.78927 12.117 6.0318C12.5187 6.22602 12.6954 6.376 12.8019 6.61333C12.8579 6.73838 12.8648 6.80289 12.8474 7.04317C12.8051 7.62543 12.6283 8.90108 12.574 9.01568C12.4875 9.19779 12.323 9.30373 12.1035 9.31858C11.9329 9.33012 11.8863 9.31636 11.5694 9.16066C11.1716 8.96522 11.1246 8.92905 11.0319 8.74759C10.9711 8.62846 10.9616 8.62191 10.9356 8.68146C10.9197 8.71783 10.8195 9.14188 10.7129 9.62379C10.489 10.6355 10.4813 10.5516 10.827 10.8761C11.5935 11.5956 12.5747 11.896 13.5487 11.7093C14.2041 11.5837 15.4593 11.1564 15.6071 11.0087C15.6602 10.9556 15.6694 10.8952 15.6694 10.5992C15.6694 10.1975 15.6938 10.2163 15.3057 10.3183L15.0577 10.3835L14.8593 10.2461C13.977 9.6354 13.9087 9.57952 13.8316 9.40557C13.7009 9.1108 13.6773 8.97997 13.7314 8.85055C13.7879 8.71529 13.8741 8.65356 14.1338 8.56227C14.2727 8.51346 14.3454 8.50341 14.3953 8.52616C14.4443 8.54848 14.549 8.75526 14.7549 9.23612C14.9147 9.60928 15.0635 9.93923 15.0855 9.96938C15.1225 10.02 15.1533 10.0176 15.4875 9.93866C15.8821 9.84542 16 9.78845 16 9.69114C16 9.6563 15.9036 9.34877 15.7858 9.00777C15.5971 8.46195 15.5555 8.37149 15.4377 8.25146C15.3088 8.12003 15.2982 8.09206 15.1433 7.4725C14.7267 5.80584 14.124 4.66813 13.1389 3.68877C12.2574 2.81247 11.2127 2.28338 9.93282 2.06509C9.5174 1.99423 8.49962 1.97727 8.06459 2.03391ZM9.8865 3.43748C10.6959 3.60036 11.3635 3.92518 11.9992 4.46548L12.0819 4.53571L11.9662 4.50903C11.9025 4.49431 11.7091 4.48363 11.5363 4.48525C11.1695 4.48866 11.0311 4.53538 10.551 4.81798C10.2208 5.0123 10.0271 5.18764 9.89652 5.41049L9.81544 5.5488L9.4608 5.33487C8.62688 4.8319 7.69854 4.45609 6.39485 4.09374L6.22953 4.04778L6.53012 3.89539C7.05194 3.63081 7.6049 3.46367 8.24645 3.37658C8.59997 3.3286 9.51406 3.36256 9.8865 3.43748ZM5.23761 6.18472C5.69551 6.23227 5.84129 6.2695 5.85677 6.34283C5.88355 6.4699 5.55261 8.1936 5.48555 8.27643C5.43642 8.3371 5.41387 8.33862 5.07361 8.3044C4.87562 8.28446 4.29587 8.26833 3.78529 8.26852C3.02932 8.26879 2.78028 8.28082 2.44368 8.33336C1.77975 8.43699 1.26369 8.59275 0.894592 8.80092C0.797284 8.85581 0.70973 8.89281 0.700075 8.88312C0.690388 8.87343 0.700671 8.69763 0.722923 8.49244C0.814841 7.64431 0.89899 7.36829 1.13874 7.12854C1.29824 6.96904 1.23181 6.98068 1.0452 7.14494C0.873596 7.29601 0.779892 7.43524 0.669921 7.7025L0.593642 7.88792L0.592881 7.75087C0.591592 7.5269 0.708606 7.21169 0.868174 7.00951C1.24507 6.5318 2.02492 6.24116 3.20416 6.13893C3.478 6.11519 4.8696 6.14653 5.23761 6.18472ZM12.1108 6.62947C12.3206 6.83929 12.3312 7.20581 12.1327 7.38369C11.9406 7.55589 11.6879 7.47254 11.5505 7.19166C11.4427 6.97142 11.4608 6.79783 11.6092 6.62881C11.6938 6.53256 11.73 6.51576 11.8528 6.51576C11.9731 6.51576 12.0159 6.53464 12.1108 6.62947ZM7.46865 6.77025C7.55051 6.87431 7.54919 7.06882 7.4663 7.1207C7.2815 7.23636 7.07472 6.90932 7.22658 6.74155C7.30359 6.65645 7.38691 6.66633 7.46865 6.77025ZM11.8225 6.80768C11.7545 6.88284 11.7534 6.95406 11.8182 7.0795C11.8825 7.20369 12.0082 7.2115 12.0839 7.096C12.1416 7.00785 12.1257 6.90294 12.0398 6.80507C11.9743 6.73048 11.8915 6.73147 11.8225 6.80768ZM7.93981 7.76648C7.97122 7.79267 7.98818 7.82821 7.9775 7.84547C7.93197 7.91914 7.53557 8.0462 7.53557 7.98715C7.53557 7.97806 7.57607 7.89804 7.6256 7.80936C7.70998 7.65823 7.72089 7.65032 7.79919 7.68345C7.84515 7.70293 7.90843 7.74029 7.93981 7.76648ZM9.08621 8.12423L9.27947 8.14443L9.23206 8.33029C9.20597 8.43252 9.17033 8.57119 9.1528 8.63845L9.121 8.76075L8.88654 8.6484C8.75759 8.5866 8.64421 8.52814 8.63456 8.51849C8.6249 8.50887 8.60526 8.42998 8.59088 8.34325C8.57646 8.25649 8.55457 8.13766 8.54217 8.07917L8.51969 7.97283L8.7063 8.03843C8.80897 8.0745 8.97991 8.11312 9.08621 8.12423ZM8.22992 8.33522C8.22992 8.35175 8.2077 8.35674 8.18052 8.34632C8.15334 8.33588 8.13949 8.31379 8.14974 8.29722C8.17116 8.26254 8.22992 8.29038 8.22992 8.33522ZM7.13751 8.3336C7.27287 8.40604 7.28167 8.66649 7.15163 8.75282C7.09145 8.79276 7.0726 8.79011 6.99775 8.73123C6.88533 8.64281 6.85183 8.4892 6.92173 8.38253C6.97867 8.2956 7.04037 8.28162 7.13751 8.3336ZM4.54326 8.83078C5.3363 8.90395 6.19306 9.08706 6.99001 9.35376C7.38989 9.48757 8.42228 9.90444 8.47122 9.95186C8.4857 9.96591 8.28484 9.93552 8.02485 9.88431C7.53051 9.78693 6.87891 9.68787 6.2626 9.61639C5.68936 9.54989 3.6705 9.56008 3.26989 9.63146C2.49364 9.76977 1.91621 10.0098 1.61225 10.3204C1.39985 10.5375 1.38844 10.5652 1.25397 11.1916C1.19977 11.4439 1.14988 11.656 1.14307 11.6628C1.10944 11.6965 0.627004 11.1976 0.489159 10.9867C0.148432 10.4654 0.194954 10.0379 0.636228 9.63454C1.29665 9.03095 2.97354 8.68599 4.54326 8.83078ZM6.34317 10.9931C6.58752 11.0223 6.8851 11.0613 7.00446 11.0797C7.26626 11.12 8.47327 11.3497 8.48917 11.3623C8.531 11.3953 8.43495 11.5229 8.33767 11.5635C8.19761 11.622 8.21309 11.6237 6.87428 11.4079C5.1685 11.133 4.43835 11.0626 3.50567 11.0833C3.21252 11.0898 2.97271 11.093 2.97271 11.0905C2.97271 11.0732 3.46292 10.9725 3.66706 10.9479C4.05229 10.9013 5.82605 10.9313 6.34317 10.9931Z"/>
                        </svg>
                      </div>
                    <small class="text-capitalize ">PUBG</small>
                  </a>
                </div>
              </div>
              <div class="col my-2">
                <div class="card card-body p-0">
                  <a name="" id="" class="dropdown-grid-link dropdown-light bg-light-accent-1 py-1 w-100" href="{{ route('leaderboards.ride') }}" role="button">
                    <div><i class="fas fa-biking fa-fw"></i></div>
                    <small class="text-capitalize ">ride</small>
                  </a>
                </div>
              </div>
              <div class="col my-2">
                <div class="card card-body p-0">
                  <a name="" id="" class="dropdown-grid-link dropdown-light bg-light-accent-1 py-1 w-100" href="{{ route('leaderboards.run') }}" role="button">
                    <div><i class="fas fa-running fa-fw"></i></div>
                    <small class="text-capitalize ">run</small>
                  </a>
                </div>
              </div>
            </div>
            
          </div>
          <div class="row justify-content-between">
            <div class="col">
              <a role="button" href="{{ url('/') }}" class="nav-link link-light-theme fw-bold text-capitalize">
                <div class="d-flex justify-content-center"><i class="fas fa-home"></i></div>
                <p class="mx-0 mb-0 small-text text-center"><small>home</small></p>
              </a>
            </div>
            <div class="col">
              <a role="button" href="{{ url('/#announcement') }}" class="nav-link link-light-theme fw-bold text-capitalize">
                <div class="d-flex justify-content-center"><i class="fas fa-bullhorn"></i></div>
                <p class="mx-0 mb-0 small-text text-center"><small>pengumuman</small></p>
              </a>
            </div>
            <div class="col">
              <a role="button" href="{{ route('rule.index') }}" class="nav-link link-light-theme fw-bold text-capitalize">
                <div class="d-flex justify-content-center"><i class="fas fa-dice"></i></div>
                <p class="mx-0 mb-0 small-text text-center"><small>peraturan</small></p>
              </a>
            </div>
            <div class="col">
              <a class="nav-link link-light-theme fw-bold text-capitalize " data-bs-toggle="collapse" href="#leaderboardOptions" role="button" aria-expanded="false" aria-controls="collapseExample">
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
