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
          <div class="card bg-lightdarkblue my-3">
            <div class="card-body text-white">
              <h5 class="card-title">Submit data Bike & Run</h5>
              <hr>
              <table class="table text-white text-center table-borderless">
                <tr>
                  <th colspan="2">Pilih kategori lomba yang akan diikuti</th>
                </tr>
                <tr>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="type" id="radioRide" value="Bike" form="activityForm">
                      <label class="form-check-label" for="radioRide">
                        Bike
                      </label>
                    </div>
                  </td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="type" id="radioRun" value="Run" form="activityForm">
                      <label class="form-check-label" for="radioRun">
                        Run
                      </label>
                    </div>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
      
    </div>
    <div class="col-md">
      <div class="card bg-lightdarkblue my-3">
        <div class="card-body text-white">
          <div class="row">
            <div class="col-sm">
              <h5 class="card-title">
                Pilih data yang akan di submit
                
              </h5>
            </div>
            <div class="col-sm">
              <a href="{{ route('user.strava_auth') }}" class="btn btn-sm btn-warning float-end w-100">
                Ambil Data Strava
              </a>
            </div>
          </div>
          <hr>
          <div class="table-responsive">
          <table class="table text-white-50 table-borderless">
            <tr>
              <th>Nama Aktifitas</th>
              <th>Laju/Pace Aktifitas</th>
              <th>Tanggal Aktifitas</th>
              <th>Jarak Ditempuh</th>
              <th>Durasi Aktifitas</th>
              <th></th>
            </tr>
            @if (isset($activities))
              @foreach ($activities as $a)
                <tr>
                  <td>{{ $a->name }}</td>
                  <td>{{ $a->type }}</td>
                  <td>{{ $a->start_date_local }}</td>
                  <td>{{ ($a->distance)/1000 }} km</td>
                  <td>{{ ($a->elapsed_time)/3600 }} jam</td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="activity_id" id="radioActivity{{ $a->id }}" value="{{ $a->id }}" form="activityForm">
                    </div>
                  </td>
                </tr>
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
