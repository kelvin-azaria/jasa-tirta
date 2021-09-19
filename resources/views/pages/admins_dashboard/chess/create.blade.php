@extends('layouts.admin')

@section('content')
<div class="row">
  <div class="col-sm">
    <h1 class="fw-bold pb-1">Menambahkan Peserta <strong class="text-primary">Catur</strong></h1><br>
  </div>
  <div class="col-sm-auto align-self-center">
    <a href="#" role="button" class="btn btn-danger fw-bold text-white"><i class="bi bi-x"></i> Batal</a>
  </div>
</div>
<div class="row">
  <div class="col-lg">
    <div class="card bg-light my-3">
      <div class="card-body">
        <h5 class="card-title fw-bold">Edit Data Turnament</h5>
        <div class="my-3">
          <label for="exampleFormControlInput1" class="form-label">Jumlah Poin</label>
          <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="1000">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <button type="button" class="btn btn-success w-100 text-white fw-bold">Simpan Data</button>
      </div>
    </div>
  </div>
</div>
@endsection
