@extends('layouts.admin')

@section('content')
  <div class="row">
    <div class="col-sm">
      <h1 class="fw-bold pb-1">NAMA PESERTA</h1><br>
      <p class="text-muted"> NPP: XXXX-XXXX-XXXX |Catur</p>
    </div>
    <div class="col-sm-auto align-self-center">
      <a href="#" role="button" class="btn btn-warning fw-bold text-white"><i class="bi bi-pencil-fill"></i> Edit Data Turnamen</a>
    </div>
  </div>
  <div class="row">
    <div class="col-lg">
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
      
    </div>
    <div class="col-lg">
      <div class="card bg-light my-3">
        <div class="card-body">
          <h5 class="card-title">Data peserta</h5>
          <table  class="table table-borderless">
            <tr>
              <th>No HP</th>
              <td>: </td>
            </tr>
            <tr>
              <th>Tgl Lahir</th>
              <td>: </td>
            </tr>
            <tr>
              <th>Jenis Kelamin</th>
              <td>:
              </td>
            </tr>
            <tr>
              <th>Unit Kerja / Cabang</th>
              <td>: </td>
            </tr>
            <tr>
              <th>NPP</th>
              <td>: </td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection