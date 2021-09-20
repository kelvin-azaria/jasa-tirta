@extends('layouts.admin')

@section('content')
  
  <div class="row">
    <div class="col-sm">
      <h1 class="fw-bold">Turnamen Bridge</h1>
    </div>
    <div class="col-sm-auto align-self-center">
      <a href="{{ route('admin.bridge.create') }}" role="button" class="btn btn-primary fw-bold text-white"><i class="bi bi-plus"></i> Tambah Peserta</a>
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
          <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">NAMA</th>
                <th scope="col">NO. HP/WA</th>
                <th scope="col">USERNAME BBO</th>
                <th scope="col" colspan="3"></th>
              </tr>
            </thead>
            <tbody>
              @foreach ($bridges as $b)
                <tr>
                  <th scope="row">{{ $b->name }}</th>
                  <td>{{ $b->phone }}</td>
                  <td>{{ $b->bbo_username }}</td>
                  <td>
                    <a href="{{ route('admin.bridge.show',['bridge' => $b->id]) }}" class="btn btn-info text-white fw-bold">
                      Info
                    </a>
                  </td>
                  <td>
                    <a href="{{ route('admin.bridge.edit',['bridge' => $b->id]) }}" class="btn btn-warning text-white fw-bold">
                      Edit
                    </a>
                  </td>
                  <td>
                    <form method="POST" class="d-inline" class="btn" id="activityForm"
                          action="{{ route('admin.bridge.destroy',['bridge' => $b->id]) }}">
                      @csrf
                      @method('DELETE')

                      <input type="submit" class="btn btn-danger text-white fw-bold" value="Hapus">
                    </form>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        {{ $bridges->links('pagination::bootstrap-4') }}
        </div>
      </div>
    </div>
  </div>
@endsection