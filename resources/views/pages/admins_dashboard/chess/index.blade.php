@extends('layouts.admin')

@section('content')
  
  <div class="row">
    <div class="col-sm">
      <h1 class="fw-bold">Turnamen Catur</h1>
    </div>
    <div class="col-sm-auto align-self-center">
      <a href="{{ route('admin.create.bridge') }}" role="button" class="btn btn-primary fw-bold text-white"><i class="bi bi-plus"></i> Tambah Peserta</a>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <div class="card bg-light my-3">
        <div class="card-body">
          <h5 class="card-title">Peserta</h5>
          <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">NPP</th>
                <th scope="col">NAMA</th>
                <th scope="col">POIN</th>
                <th scope="col">OPERASI DATA</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>30000</td>
                <td>
                  <a href="{{ route('admin.show.bridge') }}"role="button" class="btn btn-info text-white fw-bold me-3">Info</button>
                  <a href="{{ route('admin.edit.bridge') }}"role="button" class="btn btn-warning text-white fw-bold">Edit</button>
                </td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Mark</td>
                <td>30000</td>
                <td>
                  <a href=""role="button" class="btn btn-info text-white fw-bold me-3">Info</button>
                  <a href=""role="button" class="btn btn-warning text-white fw-bold">Edit</button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection