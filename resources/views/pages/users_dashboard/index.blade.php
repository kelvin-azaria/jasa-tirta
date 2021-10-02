@extends('layouts.user')

@section('content')

  <h2 class="text-white fw-bold">Selamat Datang {{ $user->name }},</h2>
  <div class="bg-gradient w-100 my-2">

  </div>
  <div class="row">
    @if (session('warning'))
      <div class="alert alert-warning alert-dismissible fade show" role="alert">
        {{ session('warning') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif
    <div class="col-md">
      <div class="row">
        <div class="col">
          <div class="card bg-lightdarkblue my-3">
            <div class="card-body text-white">
              <h5 class="card-title">Data Saya</h5>
              <table  class="table text-white-50 table-borderless">
                <tr>
                  <th>No HP</th>
                  <td>: {{ $user->phone }}</td>
                </tr>
                <tr>
                  <th>Tgl Lahir</th>
                  <td>: {{ $user->birth_date }}</td>
                </tr>
                <tr>
                  <th>Jenis Kelamin</th>
                  <td>:
                    @if ($user->gender === 'P')
                      Perempuan
                    @else
                      Laki-laki
                    @endif
                  </td>
                </tr>
                <tr>
                  <th>Unit Kerja / Cabang</th>
                  <td>: {{ $user->work_unit }}</td>
                </tr>
                <tr>
                  <th>NPP</th>
                  <td>: {{ $user->npp }}</td>
                </tr>
      @if (is_null($user->competition))
                <tr>
                  <th colspan="2" class="text-capitalize text-primary"><i class="bi bi-info-circle-fill me-2"></i> Silahkan Daftarkan Diri Anda untuk mengikuti salah satu turnamen dibawah ini</th>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <h3 class="fw-bold text-white">Pilih Turnamen</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg pb-3">
          <div class="card bg-transparent my-2 mx-2">
            <img src="{{ asset('img/pendukung-lomba-PUBG.jpg') }}" class="card-img" alt="...">
            <div class="card-img-overlay">
              <div class="text-center h-100 align-content-end d-grid">
                <a href="{{ route('pubg.index') }}" class="btn btn-sm btn-warning mx-auto fw-bold text-white">Daftar Disini</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg pb-3">
          <div class="card bg-transparent my-2 mx-2">
            <img src="{{ asset('img/pendukung-lomba-chess.jpg') }}" class="card-img" alt="...">
            <div class="card-img-overlay">
              <div class="text-center h-100 align-content-end d-grid">
                <a href="{{ route('chess.index') }}" class="btn btn-sm btn-warning mx-auto fw-bold text-white">Daftar Disini</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg pb-3">
          <div class="card bg-transparent my-2 mx-2">
            <img src="{{ asset('img/pendukung-lomba-bridge.jpg') }}" class="card-img" alt="...">
            <div class="card-img-overlay">
              <div class="text-center h-100 align-content-end d-grid">
                <a href="{{ route('bridge.index') }}" class="btn btn-sm btn-warning mx-auto fw-bold text-white">Daftar Disini</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg pb-3">
          <div class="card bg-transparent my-2 mx-2">
            <img src="{{ asset('img/pendukung-lomba-bike.jpg') }}" class="card-img" alt="...">
            <div class="card-img-overlay">
              <div class="text-center h-100 align-content-end d-grid">
                <a href="{{ route('activity.index') }}" class="btn btn-sm btn-warning mx-auto fw-bold text-white">Daftar Disini</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg pb-3">
          <div class="card bg-transparent my-2 mx-2">
            <img src="{{ asset('img/pendukung-lomba-run.jpg') }}" class="card-img" alt="...">
            <div class="card-img-overlay">
              <div class="text-center h-100 align-content-end d-grid">
                <a href="{{ route('activity.index') }}" class="btn btn-sm btn-warning mx-auto fw-bold text-white">Daftar Disini</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      @else
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md">
          <div class="card bg-lightdarkblue my-3">
            <div class="card-body text-white">
              <h3 class="lh-base text-white-50">Lomba yang diikuti :</h3>
              <h1 class="text-primary fw-bold">{{ $user->competition }}</h1>
              @if ($user->google_form_status == 0)
                @if ($user->competition === 'Run' || $user->competition === 'Ride')
                  <p class="text-info">
                  <i class="bi bi-info-circle-fill me-2"></i> Segera submit data anda melalui link berikut</p>
                  <a href="{{ route('activity.index') }}" class="btn fw-bold text-white btn-success">
                    Submit Data Turnamen Ride & Run
                  </a>
                @else
                  <p class="text-info">
                  <i class="bi bi-info-circle-fill me-2"></i> Silahkan Lengkapi Data Diri pada Google Form untuk Lomba terkait</p>
                @endif
              @endif
            </div>
          </div>
        </div>
      </div>        
      @endif
    </div>
    <div class="col-md">
      <div class="card bg-lightdarkblue my-3">
        <img src="{{ asset($user->image()) }}" class="card-img-top" alt="Akun JR-ku">
        <div class="card-body text-white">
          <h5 class="card-title">Bukti Akun JR-ku</h5>
        </div>
      </div>
    </div>
  </div>
@endsection
