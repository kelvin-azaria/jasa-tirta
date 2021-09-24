@extends('layouts.admin')

@section('content')
  <div class="row">
    <div class="col-sm">
      <h1 class="fw-bold pb-1">{{ $user->name }}</h1><br>
    </div>
  </div>

  <div class="row">
    <div class="col-sm">
      <a href="{{ url()->previous() }}" role="button" class="btn btn-info fw-bold text-white">
        <i class="bi bi-arrow-left"></i> Kembali
      </a>
    </div>
  </div>

  <div class="row">
    <div class="col-lg">
      <div class="card bg-light my-3">
        <div class="card-body">
          <h5 class="card-title">Data peserta</h5>
          <table  class="table table-borderless">
            <tr>
              <th>Nama</th>
              <td>: {{ $user->name }} </td>
            </tr>
            <tr>
              <th>Email</th>
              <td>: {{ $user->email }} </td>
            </tr>
            <tr>
              <th>No HP</th>
              <td>: {{ $user->phone }} </td>
            </tr>
            <tr>
              <th>Jenis Kelamin</th>
              <td>: 
                @if ($user->gender === 'L')
                  Laki-laki
                @else
                  Perempuan
                @endif
              </td>
            </tr>
            <tr>
              <th>Tanggal Lahir</th>
              <td>: {{ $user->birth_date }} </td>
            </tr>
            <tr>
              <th>Cabang</th>
              <td>: {{ $user->work_unit }} </td>
            </tr>
            <tr>
              <th>NPP</th>
              <td>: {{ $user->npp }} </td>
            </tr>
            <tr>
              <th>Lomba yang diikuti</th>
              <td>: {{ $user->competition }} </td>
            </tr>
          </table>
        </div>
      </div>
    </div>
    <div class="col-lg">
      <div class="card my-3">
        <div class="card-body">
          <h5 class="card-title">Bukti Akun JRku Peserta</h5>
        </div>
        <img src="{{ asset($user->image()) }}" class="card-img-top" alt="Akun JR-ku">
      </div>
    </div>
  </div>
@endsection