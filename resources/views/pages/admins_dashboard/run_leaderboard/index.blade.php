@extends('layouts.admin')

@section('content')
  
  <div class="row">
    <div class="col-sm">
      <h1 class="fw-bold">Leaderboard Run</h1>
    </div>
    <div class="col-sm-auto align-self-center">
      <a href="{{ route('admin.leaderboard.run.create') }}" role="button" class="btn btn-primary fw-bold text-white"><i class="bi bi-plus"></i> Tambah Data Leaderboard</a>
    </div>
  </div>
  <div class="row">
    <div class="col">
      @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session('success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif
      @if (session('warning'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
          {{ session('warning') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif
      <div class="card bg-light my-3">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th scope="col">POSISI</th>
                  <th scope="col">NAMA</th>
                  <th scope="col">CABANG</th>
                  <th scope="col">TANGGAL AKTIFITAS</th>
                  <th scope="col">JARAK YANG DITEMPUH</th>
                  <th scope="col">DURASI AKTIFITAS</th>
                  <th scope="col">LINK STRAVA</th>
                  <th scope="col" colspan="3"></th>
                </tr>
              </thead>
              <tbody>
                @foreach ($leaderboards as $l)
                  <tr>
                    <th scope="row">{{ $l->position }}</th>
                    <td>{{ $l->participant_name }}</td>
                    <td>{{ $l->participant_work_unit }}</td>
                    <td>{{ $l->activity_date }}</td>
                    <td>{{ $l->activity_length }} km</td>
                    <td>{{ gmdate("H:i:s", $l->activity_duration) }}</td>
                    <td>{{ $l->strava_activity_url }}</td>
                    {{-- <td>
                      <a href="{{ route('admin.leaderboard.run.show',['run' => $l->id]) }}" class="btn btn-info text-white fw-bold">
                        Info
                      </a>
                    </td> --}}
                    <td>
                      <a href="{{ route('admin.leaderboard.run.edit',['run' => $l->id]) }}" class="btn btn-warning text-white fw-bold">
                        Edit
                      </a>
                    </td>
                    <td>
                      <form method="POST" class="d-inline" class="btn" id="activityForm"
                            action="{{ route('admin.leaderboard.run.destroy',['run' => $l->id]) }}">
                        @csrf
                        @method('DELETE')

                        <input type="submit" class="btn btn-danger text-white fw-bold" value="Hapus">
                      </form>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>

        </div>
      </div>
    </div>
  </div>
@endsection