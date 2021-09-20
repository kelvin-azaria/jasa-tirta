@extends('layouts.home')
@section('titile','Leaderboards')
@section('banner')
  <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ asset('img/banner-faq.jpg') }}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('img/banner-kegiatan-1.jpg') }}" class="d-block w-100" alt="...">
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
  <section id="leaderboard">
    <div class="container py-4">
      <h1 class="fw-bold text-capitalize text-center">frequently asked question</h1>
      <div class="accordion" id="accordionPanelsStayOpenExample">
        <div class="accordion-item">
          <h3 class="accordion-header" id="panelsStayOpen-headingOne">
            <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
              Apa itu Konsep Lomba Virtual? 
            </button>
          </h3>
          <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
            <div class="accordion-body">
              Peserta dapat melakukan kegiatan perlombaan lari dan sepeda dimana saja selama periode lomba berlangsung, tanpa harus berkumpul pada lokasi dan waktu yang sama, didukung dengan menggunakan aplikasi Activity Tracker <b>(STRAVA)</b>.
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h3 class="accordion-header" id="panelsStayOpen-headingTwo">
            <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
              Apa saja kategori virtual race yang diselenggarakan?
            </button>
          </h3>
          <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
            <div class="accordion-body">
              <ul>
                <li>PUBG</li>
                <li>Chess</li>
                <li>Bridge</li>
                <li>Bike & Run</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h3 class="accordion-header" id="panelsStayOpen-headingThree">
            <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
              Apakah terdapat aplikasi Activity Tracker tertentu yang digunakan?
            </button>
          </h3>
          <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
            <div class="accordion-body">
              Ya, peserta wajib menggunakan aplikasi Activity Tracker bernama “STRAVA” yang dapat diunduh melalui App Store dan Play Store untuk merekam jarak, jumlah aktifitas dan informasi lainnya.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection