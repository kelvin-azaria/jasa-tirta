@extends('layouts.admin')

@section('content')
<div class="row">
  <div class="col-sm">
    <h1 class="fw-bold pb-1">Ubah Data Leaderboard <strong class="text-primary">Ride</strong></h1><br>
  </div>
  <div class="col-sm-auto align-self-center">
    <a href="{{ url()->previous() }}" role="button" class="btn btn-danger fw-bold text-white"><i class="bi bi-x"></i> Batal</a>
  </div>
</div>
<div class="row">
  <div class="col-lg">
    <div class="card bg-light my-3">
      <div class="card-body">
          <form method="POST" action="{{ route('admin.leaderboard.ride.update',['ride' => $leaderboard->id]) }}">
            @csrf
            @method('PATCH')

            @include('pages.admins_dashboard.ride_leaderboard._form')

            <button type="submit" class="btn btn-success w-100 text-white fw-bold">Ubah Data</button>
          </form>
      </div>
    </div>
  </div>
</div>
@endsection
