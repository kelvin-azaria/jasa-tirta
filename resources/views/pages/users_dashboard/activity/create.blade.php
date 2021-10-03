@extends('layouts.user')

@section('content')

  <h2 class="text-white fw-bold">Selamat Datang {{ $user->name }},</h2>
  <div class="bg-gradient w-100 my-2">

  </div>
  <div class="row">
    <div class="col-md">
      <div class="row">
        <div class="col">
          @error('auth')
          <div class="mt-2 mb-2">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              {{ $message }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          </div>
          @enderror
          @if (session('warning'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
              {{ session('warning') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          @endif
          @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              {{ session('success') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          @endif
        </div>
      </div>
      <div class="card bg-lightdarkblue my-3">
        <div class="card-body text-white">
          <div class="row">
            <div class="col-sm">
              <h5 class="card-title">
                Pilih data yang akan di submit
                
              </h5>
            </div>
            <div class="col-sm">
              {{-- @if (!$user->access_token) --}}
                <a href="{{ route('user.strava_auth') }}" class="btn btn-sm btn-warning float-end">
                  Ambil Data Strava
                </a>
              {{-- @endif --}}
            </div>
          </div>
          <hr>
          <div class="table-responsive">
          <table class="table text-white-50 table-borderless">
            <tr>
              <th>Nama Aktifitas</th>
              <th>Tipe Aktifitas</th>
              <th>Tanggal Aktifitas</th>
              <th>Jarak Ditempuh</th>
              <th>Durasi Aktifitas (Elapsed Time)</th>
              <th></th>
            </tr>
            @if (isset($activities))
              @foreach ($activities as $a)
                @php
                  $current_date = strtotime($a->start_date_local)
                @endphp
                @if (($current_date >= $start_date) && ($current_date <= $end_date))
                  <tr>
                    <td>{{ $a->name }}</td>
                    <td>{{ $a->type }}</td>
                    <td>{{ date('d-m-Y', strtotime($a->start_date_local)) }}</td>
                    <td>{{ round($a->distance/1000, 2) }} km</td>
                    <td>{{ gmdate("H:i:s", $a->elapsed_time) }}</td>
                    <td>
                      <div class="form-check">
                        <input 
                          class="form-check-input" 
                          type="radio" 
                          name="activity_data" 
                          id="radioActivity{{ $a->id }}" 
                          value="{{ $a->id }},{{ $a->start_date_local }}" 
                          form="activityForm"
                        >
                      </div>
                    </td>
                  </tr>
                @else
                  @continue
                @endif
              @endforeach
            @endif
          </table>
        </div>
          <a>
            <form method="POST" class="d-inline" class="btn" id="activityForm"
                  action="{{ route('activity.store') }}">
              @csrf
              <input type="submit" class="btn btn-success" value="Upload Data">
            </form>
          </a>
        </div>
      </div>
    </div>
  </div>
@endsection
