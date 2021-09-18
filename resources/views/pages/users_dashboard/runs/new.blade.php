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
          @if (session('duplicate'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
              {{ session('duplicate') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          @endif
          <div class="card bg-lightdarkblue my-3">
            <div class="card-body text-white">
              <h5 class="card-title">Tambahkan Data Lari</h5>
              <a href="{{ route('user.strava_auth') }}">
                Ambil Data Strava
              </a>
              {{-- <table class="table text-white-50 table-borderless">
                <tr>
                  <th>Nama</th>
                </tr>
              </table> --}}
            </div>
          </div>
        </div>
      </div>
      
    </div>
    <div class="col-md">
      <div class="card bg-lightdarkblue my-3">
        <table  class="table text-white-50 table-borderless">
          <tr>
            <th>Nama Aktifitas</th>
            <th>Jenis Aktifitas</th>
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
                  <a>
                    <form method="POST" class="d-inline" class="btn"
                          action="{{ route('run.store',['activity_id' => $a->id]) }}">
                      @csrf
                      <input type="submit" class="btn btn-success" value="Upload Data">
                    </form>
                  </a>
                </td>
              </tr>
            @endforeach
          @endif
        </table>
      </div>
    </div>
  </div>
@endsection
