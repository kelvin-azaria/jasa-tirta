@extends('layouts.admin')

@section('content')
  
  <div class="row">
    <div class="col-sm">
      <h1 class="fw-bold">Data Turnamen {{ $type }}</h1>
    </div>
    {{-- <div class="col-sm-auto align-self-center">
      <a href="{{ route('admin.bridge.create') }}" role="button" class="btn btn-primary fw-bold text-white">
        <i class="bi bi-plus"></i> Tambah Data
      </a>
    </div> --}}
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
                <th scope="col">NAMA PESERTA</th>
                <th scope="col">NAMA AKTIFITAS</th>
                <th scope="col">TANGGAL AKTIFITAS</th>
                <th scope="col">JARAK YANG DITEMPUH</th>
                <th scope="col">DURASI AKTIFITAS</th>
                <th scope="col" colspan="3"></th>
              </tr>
            </thead>
            <tbody>
              @foreach ($activities as $a)
                <tr>
                  <th scope="row">{{ $a->user->name }}</th>
                  <td>{{ $a->activity_name }}</td>
                  <td>{{ date('d-m-Y', strtotime($a->activity_date)) }}</td>
                  <td>{{ $a->activity_length/1000 }} km</td>
                  <td>{{ $a->activity_duration/3600 }} jam</td>
                  <td>
                    <a href="{{ route('admin.activity.show',['activity' => $a->id]) }}" class="btn btn-info text-white fw-bold">
                      Info
                    </a>
                  </td>
                  <td>
                    <form method="POST" class="d-inline" class="btn" id="activityForm"
                          action="{{ route('admin.activity.destroy',['activity' => $a->id]) }}">
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
        {{ $activities->links('pagination::bootstrap-4') }}
        </div>
      </div>
    </div>
  </div>
@endsection