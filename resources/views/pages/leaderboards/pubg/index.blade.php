@extends('layouts.home')
@section('banner')
  <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ asset('img/banner-leaderboard-pubg.jpg') }}" class="d-block w-100" alt="...">
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
      <h1 class="fw-bold text-capitalize text-center">leaderboards lomba PUBG</h1>
      <p class="text-muted text-capitalize text-center mb-4">Terakhir diperbaharui 2 Oktober 2021</p>
      
      {{-- SQUAD TABLE --}}
      <div class="table-responsive">
        <table class="table table-striped ">
          <thead>
            <tr class="border-top">
              <th scope="col">#</th>
              <th scope="col">Nama Squad</th>
              <th class="text-center" scope="col">Total Point</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>JSP</td>
              <td class="text-center">53</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Satanic Squad</td>
              <td class="text-center">42</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>WONG EDAN</td>
              <td class="text-center">38</td>
            </tr>
          </tbody>
        </table>
      </div>

      {{-- MVP TABLE  --}}
      <h1 class="fw-bold text-capitalize text-center">MVP</h1>
      <div class="table-responsive">
        <table class="table table-striped ">
          <thead>
            <tr class="border-top">
              <th scope="col">#</th>
              <th scope="col">Username</th>
              <th class="text-center" scope="col">Total Kill</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>R E T R O •</td>
              <td class="text-center">12</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>
@endsection