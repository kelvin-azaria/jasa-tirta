@extends('layouts.admin')

@section('content')
  <h2 class="text-black fw-bold">Selamat Datang {{ Auth::guard('admin')->user()->name }},</h2>
  <div class="bg-gradient w-100 my-2"></div>
  <div class="row">
    <div class="col-lg">
      <h3 class="fw-bold text-muted">
        Data Peserta yang Terdaftar Hari ini
      </h3>
      <div class="card bg-light table-width">
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
                <th scope="col" colspan="3"></th>
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
                      Detail
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
        </div>
      </div>
    </div>
  </div>


  
@endsection
