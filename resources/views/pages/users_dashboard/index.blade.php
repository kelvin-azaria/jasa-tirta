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
        <div class="col-md pb-3">
          <div class="card bg-transparent my-2 mx-2">
            <img src="{{ asset('img/pendukung-lomba-PUBG.jpg') }}" class="card-img" alt="...">
            <div class="card-img-overlay">
              <div class="text-center h-100 align-content-end d-grid">
                <a href="{{ route('pubg.index') }}" class="btn btn-sm btn-warning mx-auto fw-bold text-white">Daftar Disini</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md pb-3">
          <div class="card bg-transparent my-2 mx-2">
            <img src="{{ asset('img/pendukung-lomba-chess.jpg') }}" class="card-img" alt="...">
            <div class="card-img-overlay">
              <div class="text-center h-100 align-content-end d-grid">
                <a href="#" class="btn btn-sm btn-warning mx-auto fw-bold text-white">Daftar Disini</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md pb-3">
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
        <div class="col-md pb-3">
          <div class="card bg-transparent my-2 mx-2">
            <img src="{{ asset('img/pendukung-lomba-bike.jpg') }}" class="card-img" alt="...">
            <div class="card-img-overlay">
              <div class="text-center h-100 align-content-end d-grid">
                <a href="{{ route('activity.create') }}" class="btn btn-sm btn-warning mx-auto fw-bold text-white">Daftar Disini</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md pb-3">
          <div class="card bg-transparent my-2 mx-2">
            <img src="{{ asset('img/pendukung-lomba-run.jpg') }}" class="card-img" alt="...">
            <div class="card-img-overlay">
              <div class="text-center h-100 align-content-end d-grid">
                <a href="{{ route('activity.create') }}" class="btn btn-sm btn-warning mx-auto fw-bold text-white">Daftar Disini</a>
              </div>
            </div>
          </div>
        </div>
      </div>
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
