@extends('layouts.user')

@section('content')

  <h2 class="text-white fw-bold">Selamat Datang {{ $user->name }},</h2>
  <div class="bg-gradient w-100 my-2">

  </div>
  <div class="row">
    <div class="col-md">
      <div class="row">
        <div class="col">
          <div class="card bg-lightdarkblue my-3">
            <div class="card-body text-white">
              <h5 class="card-title">Data Saya</h5>
              <a href="{{ route('user.strava_auth') }}">
                Ambil Data
              </a>
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
