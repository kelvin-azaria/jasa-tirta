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
    </div>
  </div>

  @if ($is_registered)
    <div class="row">
      <div class="col">
        <div class="card bg-lightdarkblue my-3">
          <div class="row text-white text-center my-3">
            <div class="card-body text-white">
              <h3 class="card-title fw-bold text-center text-capitalize">Anda <strong class="text-primary">TELAH TERDAFTAR</strong> di lomba {{ $user->competition }} Online!</h3>
              <hr>
              @if ($current_date >= $start_date && $current_date <= $end_date)
                <p class="text-muted">
                  Segera submit data anda melalui link dibawah ini
                </p>
                <a href="{{ route('activity.create') }}" class="btn fw-bold text-white btn-success">
                  Submit Data Turnamen Ride & Run
                </a>
              @else
                <p>
                  Pelaksanaan lomba dan submit data akan dibuka pada tanggal 2-7 Oktober
                </p>
                <a href="{{ route('activity.create') }}" class="btn fw-bold text-white btn-success disabled">
                  Submit Data Turnamen Bike & Run
                </a>
              @endif
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="row">
      @if (!$activities->isEmpty())
      <div class="col-md">
        <div class="card bg-lightdarkblue my-3">
          <div class="row text-white text-center my-3">
            <div class="card-body text-white">
              <h3 class="fw-bold text-info">Total Jarak Aktifitas</h3>
              <hr>
              @if ($user->competition === 'Ride')
                @if ($user->gender === 'L')
                  <h1 class="fw-bold">{{ round($total_distance/1000, 2) }} km dari 100 km</h1>
                @elseif($user->gender === 'P')
                  <h1 class="fw-bold">{{ round($total_distance/1000, 2) }} km dari 50 km</h1>
                @endif
              @elseif($user->competition === 'Run')
                <h1 class="fw-bold">{{ round($total_distance/1000, 2) }} km</h1>
              @endif
            </div>
          </div>
        </div>
      </div>
      @endif
      <div class="col-md">
        <div class="card bg-lightdarkblue my-3">
          <div class="row text-white text-center my-3">
            <div class="card-body text-white">
              <h3 class="fw-bold text-info">Jadwal Technical Meeting</h3>
              <hr>
              <div class="table-responsive py-3">
                <table  class="table table-borderless table-responsive">
                  <tr class="text-white-50">
                    <th>Hari</th>
                    <th>Tanggal</th>
                    <th>Waktu</th>
                  </tr>
                  <tr class="text-white">
                    <td>Jumat</td>
                    <td>1 Oktober 2021</td>
                    <td>16:00 WIB</td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    @if (!$activities->isEmpty())
      <div class="col-md">
        <div class="card bg-lightdarkblue my-3">
          <div class="card-body text-white table-width">
            <h3 class="fw-bold text-info">Detail Aktifitas</h3>
            <hr>
            <div class="table-responsive">
              <table  class="table text-white-50 table-striped table-responsive-xxl">
                <tr class="text-white-50 fw-bold">
                  <th>Nama Aktifitas</th>
                  <th>Jenis Aktifitas</th>
                  <th>Tanggal Aktifitas</th>
                  <th>Jarak Ditempuh</th>
                  <th>Durasi Aktifitas (Elapsed Time)</th>
                  <th>Link Strava</th>
                </tr>
                @foreach ($activities as $activity)
                  <tr class="text-white">
                    <td>{{ $activity->activity_name }}</td>
                    <td>{{ $activity->activity_type }}</td>
                    <td>{{ date('d-m-Y', strtotime($activity->activity_date)) }}</td>
                    <td>{{ round(($activity->activity_length)/1000, 2) }} km</td>
                    <td>{{ gmdate("H:i:s", $activity->activity_duration) }} jam</td>
                    <td>
                      <a href="https://www.strava.com/activities/{{ $activity->strava_activity_id }}">
                        https://www.strava.com/activities/{{ $activity->strava_activity_id }}
                      </a>
                    </td>
                  </tr>
                @endforeach
              </table>
            </div>
          </div>
        </div>
      </div>
    @endif
  @else
  <div class="row">
    <div class="col-md">
      <div class="card bg-lightdarkblue my-3">
        <div class="row text-white text-center my-3">
          <div class="card-body text-white">
              <h3 class="card-title fw-bold text-center text-primary">Daftar Sekarang</h3>
              <p>
                Sebelum mendaftar harap baca terlebih dahulu peraturan dan mekanisme 
                pertandingan Bike & Run Virtual ini melalui link berikut
              </p>
              <a href="{{ route('rule.index') }}" class="btn w-100 btn-outline-info">Peraturan Bike & Run</a> 
              <hr>
              <p class="text-white-50">
                Apabila sudah mengetahui peraturan dan mekanisme pertandingan, daftar segera dengan mengklik tombol dibawah ini.
              </p>
              <div class="row">
                <div class="col-sm my-2">
                  <button type="button" class="btn btn-success w-100 text-white fw-bold" data-bs-toggle="modal" data-bs-target="#competitionRideConfirmationModal">
                    Ikuti Turnamen Ride <i class="bi bi-bicycle ms-2"></i>
                  </button>
                </div>
                <div class="col-sm my-2">
                  <button type="button" class="btn btn-warning w-100 text-white fw-bold" data-bs-toggle="modal" data-bs-target="#competitionRunConfirmationModal">
                    Ikuti Turnamen Run <i class="fas fa-running ms-2"></i></i>
                  </button>
                </div>
              </div>
              <p class="text-white-50 mt-2"><i class="bi bi-exclamation-diamond-fill me-2"></i>Pastikan jika Anda sudah benar-benar memilih untuk mengikuti lomba lari atau sepeda. <br><strong>Pilihan lomba tidak dapat diubah di kemudian hari.</strong> </p>
              <!-- Modal -->
              <div class="modal fade" id="competitionRideConfirmationModal" tabindex="-1" aria-labelledby="competitionRideConfirmationModal" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content bg-dark">
                    <div class="modal-header">
                      <h5 class="modal-title text-success fw-bold f-montserrat" id="competitionRideConfirmationModal"><i class="bi bi-exclamation-diamond-fill me-1"></i> Konfirmasi Lomba Sepeda</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <span class="text-white-50"> Saya akan mengikuti lomba "Ride" dalam acara Jasa Raharja Virtual Olympic kali ini</span>
                      <hr>
                      <strong> Saya Paham bahwa <span class="text-warning">tidak dapat mengubah/mengganti Lomba</span> setelah meng-klik tombol 'Daftar' dibawah ini </strong>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                      <a href="{{ route('activity.join',['type' => 'Ride']) }}" class="btn btn-outline-success">
                        Daftar Lomba Ride <i class="bi bi-arrow-right-circle-fill ms-2"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Modal -->
              <div class="modal fade" id="competitionRunConfirmationModal" tabindex="-1" aria-labelledby="competitionRunConfirmationModal" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content bg-dark">
                    <div class="modal-header">
                      <h5 class="modal-title text-warning fw-bold f-montserrat" id="competitionRunConfirmationModal"><i class="bi bi-exclamation-diamond-fill me-1"></i> Konfirmasi Lomba Lari</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <span class="text-white-50"> Saya akan mengikuti lomba "Run" dalam acara Jasa Raharja Virtual Olympic kali ini</span>
                      <hr>
                      <strong> Saya Paham bahwa <span class="text-warning">tidak dapat mengubah/mengganti Lomba</span> setelah meng-klik tombol 'Daftar' dibawah ini </strong>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                      <a href="{{ route('activity.join',['type' => 'Run']) }}" class="btn btn-outline-success">
                        Daftar Lomba Run <i class="bi bi-arrow-right-circle-fill ms-2"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endif
@endsection
