@extends('layouts.home')
@section('banner')
  <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ asset('img/banner-leaderboard-bridge.jpg') }}" class="d-block w-100" alt="...">
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
      <h1 class="fw-bold text-capitalize text-center">leaderboards lomba bridge</h1>
      <p class="text-muted text-capitalize text-center mb-4">Terakhir diperbaharui 4 Oktober 2021</p>
      
      <div class="table-responsive">
        <table class="table table-striped ">
          <thead>
            <tr class="border-top">
              <th scope="col">#</th>
              <th scope="col">Nama</th>
              <th class="text-center" scope="col">Score (%)</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>iwayaneka+Siladen</td>
              <td class="text-center">67.92</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>myday26+indrafauza</td>
              <td class="text-center">65.05</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Undip+anak_baru</td>
              <td class="text-center">62.73</td>
            </tr>
            <tr>
              <th scope="row">4</th>
              <td>ledies28+adty19</td>
              <td class="text-center">51.04</td>
            </tr>
            <tr>
              <th scope="row">5</th>
              <td>jahja joel+kiky07</td>
              <td class="text-center">48.75</td>
            </tr>
            <tr>
              <th scope="row">6</th>
              <td>damainofs+mfauzi99</td>
              <td class="text-center">46.05</td>
            </tr>
            <tr>
              <th scope="row">7</th>
              <td>adiset24+emsatria</td>
              <td class="text-center">45.42</td>
            </tr>
            <tr>
              <th scope="row">8</th>
              <td>gustiJB+YuliandiJB</td>
              <td class="text-center">42.79</td>
            </tr>
            <tr>
              <th scope="row">9</th>
              <td>Ariesmoe+vinanugrah</td>
              <td class="text-center">38.96</td>
            </tr>
            <tr>
              <th scope="row">10</th>
              <td>Adi_boim+Mfarid</td>
              <td class="text-center">34.58</td>
            </tr>
          </tbody>
        </table>
      </div>

    </div>
  </section>
@endsection