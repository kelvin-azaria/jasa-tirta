@extends('layouts.admin')

@section('content')
  <div class="row">
    <div class="col-sm">
      <h1 class="fw-bold pb-1">Data Leaderboard Ride {{ $leaderboard->participant_name }}</h1><br>
    </div>
    <div class="col-sm-auto align-self-center">
      <a href="{{ route('admin.leaderboard.ride.edit',['ride' => $leaderboard->id]) }}" role="button" class="btn btn-warning fw-bold text-white">
        <i class="bi bi-pencil-fill"></i> Edit Data Leaderboard
      </a>
    </div>
  </div>
  <div class="row">
    <div class="col-lg">
      <div class="card bg-light my-3">
        <div class="card-body">
          <h5 class="card-title">Data Leaderboard</h5>
          <table  class="table table-borderless">
            <tr>
              <th>Posisi</th>
              <td>: {{ $leaderboard->position }}</td>
            </tr>
            <tr>
              <th>Nama Peserta</th>
              <td>: {{ $leaderboard->participant_name }}</td>
            </tr>
            <tr>
              <th>Tanggal Aktifitas</th>
              <td>: {{ $leaderboard->activity_date }}</td>
            </tr>
            <tr>
              <th>Jarak yang Ditempuh</th>
              <td>: {{ $leaderboard->activity_length }}</td>
            </tr>
            <tr>
              <th>Durasi Aktifitas</th>
              <td>: {{ gmdate("H:i:s", $leaderboard->activity_duration) }}</td>
            </tr>
            <tr>
              <th>Link Strava</th>
              <td>
                : {{ $leaderboard->strava_activity_url_1 }}
                @if (!is_null($leaderboard->strava_activity_url_2))
                  <br>
                  {{ $leaderboard->strava_activity_url_2 }}
                @endif
              </td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection