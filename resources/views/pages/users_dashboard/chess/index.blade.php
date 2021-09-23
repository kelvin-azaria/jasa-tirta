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
        <img src="{{ asset('img/pendukung-lomba-chess.jpg') }}" class="card-img-top" alt="Akun JR-ku">
      </div>
    </div>
      <div class="col-md-7">
        <div class="card bg-lightdarkblue my-3">
          <div class="card-body text-white">
            @if ($is_registered)
              @if ($google_form_status)
              <h5 class="card-title fw-bold text-center">Anda sudah terdaftar di lomba Catur Online !</h5>
              <p>
                Anda dihubungi oleh panitia untuk instruksi lebih lanjut mengenai lomba catur online
              </p>
              @else
                <h5 class="card-title fw-bold text-center">Anda sudah terdaftar di lomba Catur Online !</h5>
                <p>
                  Isi formulir google form dibawah ini untuk melengkapi data pendaftaran anda
                </p>
                <a href="https://forms.gle/wkwSAq5ZJy9JWJQN7" target="_blank" class="btn btn-sm btn-success">
                  Daftar Turnamen Catur Online Melalui Google Form
                </a>
                <a href="{{ route('chess.google_form_confirmation') }}" class="btn btn-sm btn-outline-warning mt-2">
                  Saya Sudah Mengisi Google Form
                </a>
              @endif
            @else
              <h5 class="card-title fw-bold text-center">Daftar Sekarang</h5>
              <p>
                Sebelum mendaftar harap baca terlebih dahulu peraturan dan mekanisme 
                pertandingan Catur Online ini melalui link berikut
              </p>
              <a href="{{ route('rule.index') }}" class="btn btn-sm btn-outline-info">Peraturan Catur Online</a> 
              <hr>
              <p>
                Apabila sudah mengetahui peraturan dan mekanisme pertandingan, daftar segera di link berikut
              </p>
              <a href="{{ route('chess.join') }}" class="btn btn-sm btn-success">
                Daftar untuk Turnamen Catur Online
              </a>
            @endif
          </div>
        </div>
      </div>
  </div>
@endsection
