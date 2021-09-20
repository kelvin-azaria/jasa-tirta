@extends('layouts.admin')

@section('content')
  <div class="row">
    <div class="col-sm">
      <h1 class="fw-bold pb-1">{{ $bridge->name }}</h1><br>
    </div>
    <div class="col-sm-auto align-self-center">
      <a href="{{ route('admin.bridge.edit',['bridge' => $bridge->id]) }}" role="button" class="btn btn-warning fw-bold text-white">
        <i class="bi bi-pencil-fill"></i> Edit Data Turnamen
      </a>
    </div>
  </div>
  <div class="row">
    {{-- <div class="col-lg">
      <div class="row">
        <div class="col">
          <div class="card bg-light my-3">
            <div class="card-body">
              <h5 class="card-title">Jumlah Poin</h5>
              <h1 class="fw-bold text-center">1000</h1>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <div class="card bg-light my-3">
            <div class="card-body">
            </div>
          </div>
        </div>
      </div>
      
    </div> --}}
    <div class="col-lg">
      <div class="card bg-light my-3">
        <div class="card-body">
          <h5 class="card-title">Data peserta</h5>
          <table  class="table table-borderless">
            <tr>
              <th>Nama</th>
              <td>: {{ $bridge->name }} </td>
            </tr>
            <tr>
              <th>No HP</th>
              <td>: {{ $bridge->phone }} </td>
            </tr>
            <tr>
              <th>Username BBO</th>
              <td>: {{ $bridge->bbo_username }} </td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection