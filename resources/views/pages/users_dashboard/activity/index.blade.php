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
                @if ($current_date >= $start_date && $current_date <= $end_date)
                  <h3 class="card-title fw-bold text-center text-capitalize">Anda <strong class="text-primary">TELAH TERDAFTAR</strong> di lomba {{ $user->competition }} Online!</h3>
                  <hr>
                  <p>
                    Segera submit data anda melalui link dibawah ini
                  </p>
                  <hr>
                  <a href="{{ route('activity.create') }}" class="btn btn-sm btn-success">
                    Submit Data Turnamen Bike & Run
                  </a>
                @else
                  <h3 class="card-title fw-bold text-center text-capitalize">Anda <strong class="text-primary">TELAH TERDAFTAR</strong> di lomba {{ $user->competition }} Online!</h3>
                  <hr>
                  <p>
                    Pelaksanaan lomba dan submit data akan dibuka pada tanggal 2-7 Oktober
                  </p>
                  <hr>
                  <a href="{{ route('activity.create') }}" class="btn btn-sm btn-success disabled">
                    Submit Data Turnamen Bike & Run
                  </a>
                @endif
                @else
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

                @endif
                
              </div>
            </div>
          @endif
          
        </div>
      </div>
    </div>
  </div>
@endsection
