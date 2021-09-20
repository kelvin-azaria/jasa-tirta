@extends('layouts.home')

@section('banner')
  <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ asset('img/banner-kegiatan-1.jpg') }}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('img/banner-kegiatan-2.jpg') }}" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
@endsection

@section('content')
  <section id="announcement">
    <div class="container">
      <h1 class="text-capitalize fw-bold">pengumuman</h1>
    </div>
    <div class="container-fluid">
      <div class="row mb-4">
        <div class="col-sm-3 bg-secondary">
        </div>
        <div class="col-sm-6 align-content-center px-4">
          <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              {{-- <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button> --}}
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{ asset('img/poster@1200x-8.jpg') }}" class="d-block w-100" alt="...">
              </div>
              {{-- <div class="carousel-item">
                <img src="{{ asset('img/closing@1200x-8.jpg') }}" class="d-block w-100" alt="...">
              </div> --}}
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
        <div class="col-sm-3 bg-secondary">
        </div>
      </div>
    </div>
  </section>
  
  <section id="registration" class=" py-3 bg-primary">
    <div class="container">
      <h1 class="text-capitalize fw-bold text-center text-white">segera daftarkan dirimu!</h1>
      <div class="row">
        <div class="col-lg">
          <div class="row">
            <div class="col-sm">
              <div class="card bg-transparent my-2 mx-2">
                <img src="{{ asset('img/pendukung-lomba-PUBG.jpg') }}" class="card-img" alt="...">
                <div class="card-img-overlay">
                  <div class="text-center h-100 align-content-end d-grid">
                    <a href="{{ route('dashboard.index') }}" class="btn btn-warning mx-auto fw-bold text-white">Daftar Disini</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm">
              <div class="card bg-transparent my-2 mx-2">
                <img src="{{ asset('img/pendukung-lomba-chess.jpg') }}" class="card-img" alt="...">
                <div class="card-img-overlay">
                  <div class="text-center h-100 align-content-end d-grid">
                    <a href="{{ route('dashboard.index') }}" class="btn btn-warning mx-auto fw-bold text-white">Daftar Disini</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm">
              <div class="card bg-transparent my-2 mx-2">
                <img src="{{ asset('img/pendukung-lomba-bridge.jpg') }}" class="card-img" alt="...">
                <div class="card-img-overlay">
                  <div class="text-center h-100 align-content-end d-grid">
                    <a href="{{ route('bridge.index') }}" class="btn btn-warning mx-auto fw-bold text-white">Daftar Disini</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg">
          <div class="row">
            <div class="col-sm">
              <div class="card bg-transparent my-2 mx-2">
                <img src="{{ asset('img/pendukung-lomba-bike.jpg') }}" class="card-img" alt="...">
                <div class="card-img-overlay">
                  <div class="text-center h-100 align-content-end d-grid">
                    <a href="{{ route('dashboard.index') }}" class="btn btn-warning mx-auto fw-bold text-white">Daftar Disini</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm">
              <div class="card bg-transparent my-2 mx-2">
                <img src="{{ asset('img/pendukung-lomba-run.jpg') }}" class="card-img" alt="...">
                <div class="card-img-overlay">
                  <div class="text-center h-100 align-content-end d-grid">
                    <a href="{{ route('dashboard.index') }}" class="btn btn-warning mx-auto fw-bold text-white">Daftar Disini</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="information">
    <div class="container pb-3">
      <h1 class="fw-bold text-capitalize">informasi perlombaan</h1>
      <div class="row">
        <div class="col-lg">
          <div id="carouselExampleIndicators2" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="1" aria-label="Slide 2"></button>\
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{ asset('img/informasi-lomba-opening-ceremony.jpg') }}" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{ asset('img/informasi-lomba-closing-ceremony.jpg') }}" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
        <div class="col-lg">
          <h2  class="fw-bold text-capitalize">penjelasan umum</h2>
          <p>Dengan konsep lomba virtual Peserta dapat melakukan kegiatan perlombaan PUBG, catur, bridge, lari dan sepeda dimana saja selama periode lomba berlangsung, tanpa harus berkumpul pada lokasi dan waktu yang sama</p>
          <h2 class="fw-bold text-capitalize">informasi tambahan</h2>
          <p>Untuk informasi lebih lanjut, peserta dapat mengklik link yang tertera dibawah ini:</p>
          <ul>
            <li class="py-2"><a href="{{ url('/rule/#pubgRule') }}">Aturan Lengkap Turnamen PUBG</a></li>
            <li class="py-2"><a href="{{ url('/rule/#chessRule') }}">Aturan Lengkap Turnamen Catur</a></li>
            <li class="py-2"><a href="{{ url('/rule/#bridgeRule') }}">Aturan Lengkap Turnamen Bridge</a></li>
            <li class="py-2"><a href="{{ url('/rule/#bikeRule') }}">Aturan Lengkap Turnamen Sepeda</a></li>
            <li class="py-2"><a href="{{ url('/rule/#runRule') }}">Aturan Lengkap Turnamen Lari</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section id="mechanism" class="bg-warning">
    <div class="container">
      <div class="row py-4">
        <div class="col align-self-center">
          <h1 class="text-white text-capitalize fw-bold text-center">pahami mekanisme perlombaan</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-lg">
          <div class="row pb-3">
            <div class="col-sm pb-4">
              <div class="card">
                <div class="card-body">
                  <h3 class="card-title fw-bold text-capitalize lh-base">Unduh JRKU</h3>
                  <h6 class="card-subtitle mb-2 text-capitalize text-muted">langkah pertama</h6>
                  <p class="card-text">Unduh aplikasi JRKU dari Play Store atau App Store. Lalu, Isi data diri Anda pada aplikasi JRKU dan <strong>screenshoot bukti data diri Anda</strong></p>
                </div>
              </div>
            </div>
            <div class="col-sm pb-4">
              <div class="card">
                <div class="card-body">
                  <h3 class="card-title fw-bold text-capitalize lh-base">Aplikasi JRKU</h3>
                  <h6 class="card-subtitle mb-2 text-capitalize text-muted">langkah kedua</h6>
                  <p class="card-text">Pilih [link/button] Olympic Jasa Raharja di aplikasi JRKU. Tunggu beberapa saat, Anda akan masuk ke laman : OlimpiadeJR2021. Pada laman OlimpiadeJR2021, Anda dapat memilih kategori lomba yang akan Anda ikuti.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg">
          <div class="row pb-3">
            <div class="col-sm pb-4">
              <div class="card">
                <div class="card-body">
                  <h3 class="card-title fw-bold text-capitalize lh-base">Registrasi</h3>
                  <h6 class="card-subtitle mb-2 text-capitalize text-muted">langkah ketiga</h6>
                  <p class="card-text">Sebelum ke proses selanjutnya diharapkan Anda melakukan registrasi terlebih dahulu untuk mengakses akun dashboard Anda, dan diperlukan screenshot bukti data diri JRKU Anda. Lalu pilih kembali salah satu lomba yang tersedia pada laman dashboard Anda</p>
                </div>
              </div>
            </div>
            <div class="col-sm pb-4">
              <div class="card">
                <div class="card-body">
                  <h3 class="card-title fw-bold text-capitalize lh-base">Dihubungi oleh tim kami.</h3>
                  <h6 class="card-subtitle mb-2 text-capitalize text-muted">langkah keempat</h6>
                  <p class="card-text">Anda akan dihubungi lebih lanjut oleh tim kami untuk mengkonfirmasi keikutsertaan Anda.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="rewards">
    <div class="container pb-4">
      <h1 class="text-capitalize fw-bold">dapatkan hadiah menarik</h1>
      <div class="row">
        <div class="col-lg">
          <div class="row pb-4">
            <div class="col">
              <img src="{{ asset('img/hadiah-lomba-pubg.jpg') }}" class="rounded w-100" alt="...">
            </div>
            <div class="col">
              <img src="{{ asset('img/hadiah-lomba-chess.jpg') }}" class="rounded w-100" alt="...">
            </div>
          </div>
        </div>
        <div class="col-lg">
          <div class="row pb-4">
            <div class="col">
              <img src="{{ asset('img/hadiah-lomba-bridge.jpg') }}" class="rounded w-100" alt="...">
            </div>
            <div class="col">
              <img src="{{ asset('img/hadiah-lomba-run-dan-bike.jpg') }}" class="rounded w-100" alt="...">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection