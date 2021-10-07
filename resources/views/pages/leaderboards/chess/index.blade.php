@extends('layouts.home')
@section('banner')
  <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ asset('img/banner-leaderboard-chess.jpg') }}" class="d-block w-100" alt="...">
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
      <h1 class="fw-bold text-capitalize text-center text-primary">chess tournament winner</h1>
      <p class="text-muted text-capitalize text-center mb-4">Terakhir diperbaharui 7 Oktober 2021</p>
      
      <div class="table-responsive">
        <table class="table table-striped ">
          <thead>
            <tr class="border-top">
              <th scope="col">#</th>
              <th scope="col">Nama</th>
              <th scope="col">Nama Akun Lichess</th>
              <th scope="col">Divisi</th>
              <th scope="col">Kantor Cabang</th>
              <th class="text-center" scope="col">Score</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1st Winner</th>
              <td>Pangihutan Dame Ondo Hirasalex Surya Sitohang</td>
              <td>OndoSitohang</td>
              <td>Samsat Jakarta Barat</td>
              <td>DKI Jakarta</td>
              <td>26.5</td>
            </tr>
            <tr>
              <th scope="row">2nd Winner</th>
              <td>Widodo</td>
              <td>Widodojr</td>
              <td>Kasir</td>
              <td>Jawa Timur</td>
              <td>25.5</td>
            </tr>
            <tr>
              <th scope="row">3rd Winner</th>
              <td>M Juan Kusuma Wardana</td>
              <td>MJuanK_SamsatJakBar</td>
              <td>LBJR Samsat Jakbar</td>
              <td>DKI Jakarta</td>
              <td>25</td>
            </tr>
          </tbody>
        </table>
      </div>

    </div>
  </section>
@endsection