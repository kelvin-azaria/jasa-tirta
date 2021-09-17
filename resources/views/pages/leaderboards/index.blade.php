@extends('layouts.home')
@section('titile','Leaderboards')
@section('banner')
  <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ asset('img/banner-leaderboard@1200x-8.jpg') }}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('img/banner-placeholder.jpg') }}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('img/banner-placeholder.jpg') }}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('img/banner-placeholder.jpg') }}" class="d-block w-100" alt="...">
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
      <h1 class="fw-bold text-capitalize text-center">leaderboards</h1>
      <table class="table table-striped ">
        <caption>Terakhir diperbaharui : 14/9/2021</caption>
        <thead>
          <tr class="border-top">
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th class="text-center" scope="col">Rasio Kemenangan</th>
            <th class="text-end pe-3" scope="col">Nilai</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>John</td>
            <td class="text-center">0.6</td>
            <td class="text-end pe-3">1600</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Mark</td>
            <td class="text-center">0.4</td>
            <td class="text-end pe-3">1050</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Jacob</td>
            <td class="text-center">0.2</td>
            <td class="text-end pe-3">430</td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>
@endsection