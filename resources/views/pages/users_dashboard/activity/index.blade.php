@extends('layouts.user')

@section('content')

  <h2 class="text-white fw-bold">Selamat Datang {{ $user->name }},</h2>
  <div class="bg-gradient w-100 my-2">

  </div>
  <div class="row">
    <div class="col">
      @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session('success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif
      @if (session('warning'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
          {{ session('warning') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif
      <div class="card bg-lightdarkblue my-3">
        <div class="row text-white text-center my-3">
          <h4>Total Jarak Aktifitas</h3>
          <h4>{{ $total_distance/1000 }} km</h3>
        </div>
        <table  class="table text-white-50 table-borderless table-responsive">
          <tr>
            <th>Nama Aktifitas</th>
            <th>Jenis Aktifitas</th>
            <th>Tanggal Aktifitas</th>
            <th>Jarak Ditempuh</th>
            <th>Durasi Aktifitas</th>
            <th>Link Strava</th>
          </tr>
          @foreach ($activities as $a)
            <tr>
              <td>{{ $a->activity_name }}</td>
              <td>{{ $a->activity_type }}</td>
              <td>{{ $a->activity_date }}</td>
              <td>{{ ($a->activity_length)/1000 }} km</td>
              <td>{{ ($a->activity_duration)/3600 }} jam</td>
              <td>
                <a href="https://www.strava.com/activities/{{ $a->strava_activity_id }}">
                  https://www.strava.com/activities/{{ $a->strava_activity_id }}
                </a>
              </td>
            </tr>
          @endforeach
        </table>
      </div>
    </div>
  </div>
@endsection
