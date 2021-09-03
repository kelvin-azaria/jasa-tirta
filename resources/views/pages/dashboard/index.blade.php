@extends('layouts.admin')

@section('content')
<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-md-10">
      <a href="{{ route('dashboard.export') }}" class="btn btn-success">Export All Data</a>
      <table class="table table-bordered table-hover">
        <thead class="font-weight-bold">
          <tr>
            <td>Nama</td>
            <td>Kampus</td>
            <td>No. HP</td>
            <td>Tanggal Lahir</td>
            <td>URL Video Instagram</td>
            <td>Upaya Untuk Lingkungan</td>
            <td></td>
          </tr>
        </thead>
        <tbody>
          @foreach ($contestants as $c)
            <tr>
              <td>{{ $c->name }}</td>
              <td>{{ $c->campus_name }}</td>
              <td>{{ $c->phone }}</td>
              <td>{{ $c->birth_date }}</td>
              <td>{{ $c->instagram_video_url }}</td>
              <td>{{ $c->description }}</td>
              <td>
                <a href="{{ route('dashboard.show', $c->id) }}" class="btn btn-info">
                  Show
                </a>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
      {{ $contestants->links('pagination::bootstrap-4') }}
    </div>
  </div>
</div>
@endsection
