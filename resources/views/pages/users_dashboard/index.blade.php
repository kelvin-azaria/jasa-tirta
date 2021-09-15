@extends('layouts.user')

@section('content')
<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-md-10">
      <h1>dashboard user</h1>
      <div class="row">
        <h5>Nama : {{ $user->name }}</h5>
      </div>
      <div class="row">
        <h5>No HP : {{ $user->phone }}</h5>
      </div>
      <div class="row">
        <h5>Tgl Lahir : {{ $user->birth_date }}</h5>
      </div>
      <div class="row">
        <h5>Unit Kerja / Cabang : {{ $user->work_unit }}</h5>
      </div>
      <div class="row">
        <h5>NPP : {{ $user->npp }}</h5>
      </div>
      <div class="row">
        <h5>Bukti Akun JRku : </h5>
        <div class="image-container border">
          <img src="{{ asset($user->image()) }}" width="650">
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
