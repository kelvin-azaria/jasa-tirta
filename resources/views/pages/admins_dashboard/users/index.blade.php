@extends('layouts.admin')

@section('content')
  <nav aria-label="breadcrumb mt-3 mb-2">
    <ol class="breadcrumb mt-3">
      <li class="breadcrumb-item"><a href="{{ route('admin.dashboard.index') }}" class="text-decoration-none fw-bold">Dashboard</a></li>
      <li class="breadcrumb-item active" aria-current="page">Users</li>
    </ol>
  </nav>

  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <div class="row my-3">
            <div class="col align-self-center"><h6 class="text-capitalize fw-bold">user list</h6></div>
            <div class="col-auto">

              <a href="{{ route('admin.users.export') }}" role="button" class="btn btn-success fw-bold text-white">
                <small><i class="fas fa-file-export me-2"></i>Export Data</small>
              </a>
            </div>
          </div>
          
          <table id="adminUserTable" class="table table-bordered table-sm">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Branch</th>
                    <th>NPP</th>
                    <th>Competition</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody class="">
                
            </tbody>
          </table>
        </div>
      </div> 
    </div>
  </div>
  
  {{-- <div class="row">
    <div class="col-sm">
      <h1 class="fw-bold">Data Semua Peserta</h1>
    </div>
    <div class="col-sm-auto align-self-center">
      <a href="{{ route('admin.users.export') }}" role="button" class="btn btn-success fw-bold text-white">
        <i class="fas fa-file-export"></i> Export Data
      </a>
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
        {{ $users->links('pagination::bootstrap-4') }}
        </div>
      </div>
    </div>
  </div> --}}
@endsection

@section('script')
  <script>
    $( document ).ready(function() {
      var table =$('#adminUserTable').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{{ route('admin.users.index') }}',
        columns: [
          { data: 'id', name: 'id' },
          { data: 'name', name: 'name', },
          { data: 'email', name: 'email' },
          { data: 'work_unit', name: 'work_unit' },
          { data: 'npp', name: 'npp' },
          { data: 'competition', name: 'competition' },
          { searchable: false,
            data: function ( data, type, row, meta ) {
              return type === 'display' ? '<button type="button" onClick="editAnnouncementModal(' + data.id + ')" class="btn btn-light text-warning me-2"><i class="fas fa-pencil-alt"></i></button><button type="button" onClick="deleteAnnouncement(' + data.id + ')" class="btn btn-light text-danger"><i class="fas fa-trash-alt"></i></button>' : data
            }
          },
        ],
      });
    });
  </script>
@endsection