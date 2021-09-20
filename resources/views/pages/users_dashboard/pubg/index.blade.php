@extends('layouts.user')

@section('content')

  <h2 class="text-white fw-bold">Selamat Datang {{ $user->name }},</h2>
  
  <div class="bg-gradient w-100 my-2"></div>

  <div class="row">
    @if (session('warning'))
      <div class="alert alert-warning alert-dismissible fade show" role="alert">
        {{ session('warning') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif
    <div class="col-md-5">
      <div class="card bg-lightdarkblue my-3">
        <img src="{{ asset('img/pendukung-lomba-PUBG.jpg') }}" class="card-img-top" alt="Akun JR-ku">
      </div>
    </div>
    @if ($status === 'registered')
    <div class="col-md-7">
      <div class="card bg-lightdarkblue my-3">
        <div class="card-body text-white">
          <h5 class="card-title fw-bold text-center">Anda sudah terdaftar untuk turnamen ini</h5>
          <table class="table table-borderless text-white">
            <tr>
              <td>Nama Tim</td>
              <td>: {{ $pubg_team->team_name }}</td>
            </tr>
            <tr>
              <td>Kapten Tim</td>
              <td>: {{ $pubg_team->team_captain_name }}</td>
            </tr>
            <tr>
              <td>Grup</td>
              <td>: {{ $pubg_team->group }}</td>
            </tr>
            <tr>
              <td>Nickname anda</td>
              <td>: {{ $pubg_team->player_nickname }}</td>
            </tr>
          </table>
        </div>
      </div>
    </div>
    @else
      <div class="col-md-7">
        <div class="card bg-lightdarkblue my-3">
          <div class="card-body text-white">
            <h5 class="card-title fw-bold text-center">Daftar Sekarang</h5>
            <p>
              Sebelum mendaftar harap baca terlebih dahulu peraturan dan mekanisme 
              pertandingan Bridge Online ini melalui link berikut
            </p>
            <a href="{{ route('rule.index') }}" class="btn btn-sm btn-outline-info">Peraturan Turnamen PUBG</a> 
            <hr>
            <p>
              Pastikan semua anggota tim telah membuat akun di website ini. Pendaftaran cukup dilakukan oleh kapten tim
              Apabila sudah mengetahui peraturan dan mekanisme pertandingan, daftar segera di link berikut
            </p>
            <a href="https://forms.gle/4ersjPP245bHTqQR6" target="_blank" class="btn btn-sm btn-success">
              Daftar Turnamen PUBG Melalui Google Form
            </a>
          </div>
        </div>
      </div>
    @endif
  </div>
@endsection
