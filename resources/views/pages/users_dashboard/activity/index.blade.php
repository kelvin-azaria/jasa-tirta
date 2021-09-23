@extends('layouts.user')

@section('content')

<h2 class="text-white fw-bold">Selamat Datang {{ $user->name }},</h2>
  
 <div class="bg-gradient w-100 my-2"></div>

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

      {{-- <div class="card bg-lightdarkblue my-3">
        @if ($activity !== null)
          <div class="row text-white text-center my-3">
            <h4>Total Jarak Aktifitas</h3>
            <h4>{{ $total_distance/1000 }} km</h3>
          </div>
          <div class="table-responsive">
            <table  class="table text-white-50 table-borderless table-responsive">
              <tr>
                <th>Nama Aktifitas</th>
                <th>Jenis Aktifitas</th>
                <th>Tanggal Aktifitas</th>
                <th>Jarak Ditempuh</th>
                <th>Durasi Aktifitas</th>
                <th>Link Strava</th>
              </tr>
              <tr>
                <td>{{ $activity->activity_name }}</td>
                <td>{{ $activity->activity_type }}</td>
                <td>{{ $activity->activity_date }}</td>
                <td>{{ ($activity->activity_length)/1000 }} km</td>
                <td>{{ ($activity->activity_duration)/3600 }} jam</td>
                <td>
                  <a href="https://www.strava.com/activities/{{ $activity->strava_activity_id }}">
                    https://www.strava.com/activities/{{ $activity->strava_activity_id }}
                  </a>
                </td>
              </tr>
            </table>
          </div>
        @else
          <div class="row text-white text-center my-3">
            <h5 class="card-title fw-bold text-center">Daftar Sekarang</h5>
            <p>
              Sebelum mendaftar harap baca terlebih dahulu peraturan dan mekanisme 
              pertandingan Bridge Online ini melalui link berikut
            </p>
            <a href="{{ route('rule.index') }}" class="btn btn-sm btn-outline-info">Peraturan Bridge Online</a> 
            <hr>
            <p>
              Apabila sudah mengetahui peraturan dan mekanisme pertandingan, daftar segera di link berikut
            </p>
            <a href="https://forms.gle/VKnD4Qaz39Rtpy747" target="_blank" class="btn btn-sm btn-success">
              Daftar Turnamen Bridge Online Melalui Google Form
            </a>
          </div>
        @endif
      </div> --}}

      <div class="col-md">
        <div class="card bg-lightdarkblue my-3">
          @if ($activity !== null)
            <div class="row text-white text-center my-3">
              <h4>Total Jarak Aktifitas</h3>
              <h4>{{ $total_distance/1000 }} km</h3>
            </div>
            <div class="table-responsive">
              <table  class="table text-white-50 table-borderless table-responsive">
                <tr>
                  <th>Nama Aktifitas</th>
                  <th>Jenis Aktifitas</th>
                  <th>Tanggal Aktifitas</th>
                  <th>Jarak Ditempuh</th>
                  <th>Durasi Aktifitas</th>
                  <th>Link Strava</th>
                </tr>
                <tr>
                  <td>{{ $activity->activity_name }}</td>
                  <td>{{ $activity->activity_type }}</td>
                  <td>{{ $activity->activity_date }}</td>
                  <td>{{ ($activity->activity_length)/1000 }} km</td>
                  <td>{{ ($activity->activity_duration)/3600 }} jam</td>
                  <td>
                    <a href="https://www.strava.com/activities/{{ $activity->strava_activity_id }}">
                      https://www.strava.com/activities/{{ $activity->strava_activity_id }}
                    </a>
                  </td>
                </tr>
              </table>
            </div>
          @else
            <div class="row text-white text-center my-3">
              <div class="card-body text-white">
                @if ($is_registered)
                  <h5 class="card-title fw-bold text-center">Anda sudah terdaftar di lomba {{ $user->competition }} !</h5>
                  <p>
                    Segera submit data anda melalui link dibawah ini
                  </p>
                  <hr>
                  <a href="{{ route('activity.create') }}" class="btn btn-sm btn-success">
                    Submit Data Turnamen Bike & Run
                  </a>
                @else
                  <h5 class="card-title fw-bold text-center">Daftar Sekarang</h5>
                  <p>
                    Sebelum mendaftar harap baca terlebih dahulu peraturan dan mekanisme 
                    pertandingan Bike & Run ini melalui link berikut
                  </p>
                  <a href="{{ route('rule.index') }}" class="btn btn-sm btn-outline-info">Peraturan Bike & Run</a> 
                  <hr>
                  <p>
                    Apabila sudah mengetahui peraturan dan mekanisme pertandingan, segera mendaftar langsung dengan 
                    cara submit data anda melalui link berikut. <b>*data tidak bisa diubah lagi setelah mendaftar</b>
                  </p>
                  <a href="{{ route('activity.join',['type' => 'Ride']) }}" class="btn btn-sm btn-success">
                    Daftar untuk Turnamen Ride
                  </a>
                  <a href="{{ route('activity.join',['type' => 'Run']) }}" class="btn btn-sm btn-success">
                    Daftar untuk Turnamen Run
                  </a>
                @endif
                
              </div>
            </div>
          @endif
          
        </div>
      </div>
    </div>
  </div>
@endsection
