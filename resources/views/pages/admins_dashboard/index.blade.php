@extends('layouts.admin')

@section('content')
  <h2 class="text-black fw-bold">Selamat Datang {{ Auth::guard('admin')->user()->name }},</h2>
  <div class="bg-gradient w-100 my-2"></div>
  <div class="row">
    <div class="col-lg">
      <div class="row pb-4">
        <div class="col-sm pt-4">
          <a href="">
            <div class="card">
              <img src="{{ asset('img/pendukung-lomba-PUBG.jpg') }}" class="card-img-top" alt="...">
              <div class="card-body">
                <h3 class="card-title fw-bold">PUBG</h3>
              </div>
            </div>
          </a>
        </div>
        <div class="col-sm pt-4">
          <a href="">
            <div class="card">
              <img src="{{ asset('img/pendukung-lomba-chess.jpg') }}" class="card-img-top" alt="...">
              <div class="card-body">
                <h3 class="card-title fw-bold">Chess</h3>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
    <div class="col-lg">
      <div class="row pb-4">
        <div class="col-sm pt-4">
          <a href="{{ route('admin.bridge.index') }}">
            <div class="card">
              <img src="{{ asset('img/pendukung-lomba-bridge.jpg') }}" class="card-img-top" alt="...">
              <div class="card-body">
                <h3 class="card-title fw-bold">Bridge</h3>
              </div>
            </div>
          </a>
        </div>
        <div class="col-sm pt-4">
          <a href="">
            <div class="card">
              <img src="{{ asset('img/pendukung-lomba-run.jpg') }}" class="card-img-top" alt="...">
              <div class="card-body">
                <h3 class="card-title fw-bold">Run</h3>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>


  
@endsection
