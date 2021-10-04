@extends('layouts.home')
@section('banner')
  <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ asset('img/banner-leaderboard-bike.jpg') }}" class="d-block w-100" alt="...">
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
      <h1 class="fw-bold text-capitalize text-center">leaderboards lomba ride putra</h1>
      <p class="text-muted text-capitalize text-center mb-4">Terakhir diperbaharui {{ date('d M Y', strtotime($last_edited_male)) }}</p>
      @if (count($leaderboards_male) < 10)
        <div class="alert alert-primary text-center fw-bold" role="alert">
          Leaderboard sedang diproses oleh panitia
        </div>
      @else
        <div class="table-responsive">
          <table class="table table-striped text-capitalize">
            <thead>
              <tr class="border-top">
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th class="text-center" scope="col">Tanggal Aktifitas</th>
                <th class="text-center" scope="col">Durasi Aktifitas (Elapsed Time)</th>
                <th class="text-center" scope="col">Jarak yang Ditempuh</th>
                <th class="text-end pe-3" scope="col">Link Strava</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($leaderboards_male as $l)
                <tr>
                  <th scope="row">{{ $l->position }}</th>
                  <td>{{ $l->participant_name }}</td>
                  <td class="text-center">{{ date('d-m-Y', strtotime($l->activity_date)) }}</td>
                  <td class="text-center">{{ gmdate("H:i:s", $l->activity_duration) }}</td>
                  <td class="text-center">{{ $l->activity_length }} km</td>
                  <td class="text-end pe-3">
                    <a href="{{ $l->strava_activity_url_1 }}">
                      {{ $l->strava_activity_url_1 }}
                    </a>
                    @if ($l->strava_activity_url_2)
                      <a href="{{ $l->strava_activity_url_2 }}">
                        {{ $l->strava_activity_url_2 }}
                      </a>
                    @endif
                  </td>
                </tr>
              @endforeach
            </tbody>

          </table>
        </div>
      @endif

      <h1 class="fw-bold text-capitalize text-center">leaderboards lomba ride putri</h1>
      <p class="text-muted text-capitalize text-center mb-4">Terakhir diperbaharui {{ date('d M Y', strtotime($last_edited_male)) }}</p>
      @if (count($leaderboards_female) < 3)
        <div class="alert alert-primary text-center fw-bold" role="alert">
          Leaderboard sedang diproses oleh panitia
        </div>
      @else
        <div class="table-responsive">
          <table class="table table-striped text-capitalize">
            <thead>
              <tr class="border-top">
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th class="text-center" scope="col">Tanggal Aktifitas</th>
                <th class="text-center" scope="col">Durasi Aktifitas (Elapsed Time)</th>
                <th class="text-center" scope="col">Jarak yang Ditempuh</th>
                <th class="text-end pe-3" scope="col">Link Strava</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($leaderboards_female as $l)
                <tr>
                  <th scope="row">{{ $l->position }}</th>
                  <td>{{ $l->participant_name }}</td>
                  <td class="text-center">{{ date('d-m-Y', strtotime($l->activity_date)) }}</td>
                  <td class="text-center">{{ gmdate("H:i:s", $l->activity_duration) }}</td>
                  <td class="text-center">{{ $l->activity_length }} km</td>
                  <td class="text-end pe-3">
                    <a href="{{ $l->strava_activity_url_1 }}">
                      {{ $l->strava_activity_url_1 }}
                    </a>
                    @if ($l->strava_activity_url_2)
                      <a href="{{ $l->strava_activity_url_2 }}">
                        {{ $l->strava_activity_url_2 }}
                      </a>
                    @endif
                  </td>
                </tr>
              @endforeach
            </tbody>

          </table>
        </div>
      @endif
    </div>
  </section>
@endsection