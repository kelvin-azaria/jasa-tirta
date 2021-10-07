@extends('layouts.admin')

@section('content')
<div class="row">
  <div class="col-sm">
    <h1 class="fw-bold pb-1">Menambahkan Data Leaderboard <strong class="text-primary">Run</strong></h1><br>
  </div>
  <div class="col-sm-auto align-self-center">
    <a href="{{ url()->previous() }}" role="button" class="btn btn-danger fw-bold text-white"><i class="bi bi-x"></i> Batal</a>
  </div>
</div>
<div class="row">
  <div class="col-lg">
    <div class="card bg-light my-3">
      <div class="card-body">
        <h5 class="card-title fw-bold">Tambah Data Leaderboard</h5>
          <form method="POST" action="{{ route('admin.leaderboard.run.store') }}" >
            @csrf
            @include('pages.admins_dashboard.run_leaderboard._form')

            <button type="submit" class="btn btn-success w-100 text-white fw-bold">Simpan Data</button>
          </form>
      </div>
    </div>
  </div>
</div>
@endsection
