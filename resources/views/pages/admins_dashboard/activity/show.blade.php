@extends('layouts.admin')

@section('content')
  <div class="row">
    <div class="col-sm">
      <h1 class="fw-bold pb-1">{{ $activity->user->name }}</h1><br>
    </div>
    <div class="col-sm-auto align-self-center">
      <a href="{{ route('admin.activity.edit',['activity' => $activity->id]) }}" role="button" class="btn btn-warning fw-bold text-white">
        <i class="bi bi-pencil-fill"></i> Edit Data Aktifitas
      </a>
    </div>
  </div>
  <div class="row">
    <div class="col-lg">
      <div class="card bg-light my-3">
        <div class="card-body">
          <h5 class="card-title">Data peserta</h5>
          <table  class="table table-borderless">
            <tr>
              <th>Nama Peserta</th>
              <td>: {{ $activity->user->name }} </td>
            </tr>
            <tr>
              <th>Nama Aktifitas</th>
              <td>: {{ $activity->activity_name }} </td>
            </tr>
            <tr>
              <th>Tanggal Aktifitas</th>
              <td>: {{ date('d-m-Y', strtotime($activity->activity_date)) }} </td>
            </tr>
            <tr>
              <th>Jarak yang Ditempuh</th>
              <td>: {{ $activity->activity_length/1000 }} km</td>
            </tr>
            <tr>
              <th>Durasi Aktifitas</th>
              <td>: {{ $activity->activity_duration/3600 }} jam</td>
            </tr>
            <tr>
              <th>Link Strava</th>
              <td>: 
                <a href="https://www.strava.com/activities/{{ $activity->strava_activity_id }}">
                  https://www.strava.com/activities/{{ $activity->strava_activity_id }}
                </a> 
            </td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection