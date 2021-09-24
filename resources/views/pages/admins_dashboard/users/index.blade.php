@extends('layouts.admin')

@section('content')
  
  <div class="row">
    <div class="col-sm">
      <h1 class="fw-bold">Data Semua Peserta</h1>
    </div>
  </div>
  <div class="row">
    <div class="col-3">
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
    </div>
  </div>
  <div class="row">
    <div class="col-sm">
      <div class="card bg-light table-width">
        <div class="card-body">
          <div class="table-responsive-xxl">
            <table class="table table-hover table-fit">
              <thead>
                <tr>
                  <th scope="col">NAMA</th>
                  <th scope="col">EMAIL</th>
                  <th scope="col">JENIS KELAMIN</th>
                  <th scope="col">CABANG</th>
                  <th scope="col">NPP</th>
                  <th scope="col">LOMBA</th>
                  <th scope="col" colspan="3"></th>
                </tr>
              </thead>
              <tbody>
                @foreach ($users as $u)
                  <tr>
                    <th scope="row">{{ $u->name }}</th>
                    <td>{{ $u->email }}</td>
                    <td>
                      @if ($u->gender === 'L')
                        Laki-laki
                      @else
                        Perempuan
                      @endif
                    </td>
                    <td>{{ $u->work_unit }}</td>
                    <td>{{ $u->npp }}</td>
                    <td>{{ $u->competition }}</td>
                    <td>
                      <a href="{{ route('admin.users.show',['user' => $u->id]) }}" class="btn btn-info text-white fw-bold">
                        Info
                      </a>
                    </td>
                    <td>
                      <form method="POST" class="d-inline" class="btn"
                            action="{{ route('admin.users.destroy',['user' => $u->id]) }}">
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
        {{ $users->links('pagination::bootstrap-4') }}
        </div>
      </div>
    </div>
  </div>
@endsection