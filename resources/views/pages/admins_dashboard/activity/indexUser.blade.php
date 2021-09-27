@extends('layouts.admin')

@section('content')
  
  <div class="row">
    <div class="col-sm">
      <h1 class="fw-bold">Data Peserta Turnamen {{ $type }}</h1>
    </div>
    <div class="col-sm-auto align-self-center">
      @if ($type === 'Run')
        <a href="{{ route('admin.activity.index.run.user.export') }}" role="button" class="btn btn-success fw-bold text-white">
          <i class="fas fa-file-export"></i> Export Data
        </a>
      @elseif($type === 'Ride')
        <a href="{{ route('admin.activity.index.ride.user.export') }}" role="button" class="btn btn-success fw-bold text-white">
          <i class="fas fa-file-export"></i> Export Data
        </a>
      @endif
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
      <div class="card bg-light my-3 table-width">
        <div class="card-body">
          <div class="table-responsive-xxl">
          <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">NAMA</th>
                <th scope="col">EMAIL</th>
                <th scope="col">CABANG</th>
                <th scope="col">NPP</th>
                <th scope="col">LOMBA</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
              @foreach ($users as $u)
                <tr>
                  <th scope="row">{{ $u->name }}</th>
                  <td>{{ $u->email }}</td>
                  <td>{{ $u->work_unit }}</td>
                  <td>{{ $u->npp }}</td>
                  <td>{{ $u->competition }}</td>
                  <td>
                    <a href="{{ route('admin.users.show',['user' => $u->id]) }}" class="btn btn-info text-white fw-bold">
                      Info
                    </a>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        {{ $users->links('pagination::bootstrap-4') }}
        </div>
      </div>
    </div>
  </div>
@endsection