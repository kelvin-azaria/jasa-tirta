@extends('layouts.admin')

@section('content')
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

  <div class="card mt-3 mb-4">
    <div class="card-body">
      <div class="row justify-content-between">
        <div class="col">
          <h5 class="text-capitalize fw-bold my-3 pb-2">Participants</h5>
        </div>
        <div class="col-auto">
          <a href="{{ route('admin.users.export') }}" role="button" class="btn btn-success text-white">
            <i class="fas fa-file-export"></i> Export to Excel (.xlsx)
          </a>
        </div>
      </div>

      <table id="adminParticipantTable" class="table table-bordered min-w-100">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Work Unit</th>
                <th class="text-center">NPP</th>
                <th class="text-center">Registered at</th>
                <th class="text-center">Competition</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>

        <tbody>
        </tbody>

        <tfoot>
          <tr>
            <td>Search by name</td>
            <td>Search by email</td>
            <td>Search by work unit</td>
            <td>Search by NPP</td>
            <td></td>
            <td>Search by Competition</td>
            <td></td>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>
@endsection

@section('script')
    <script>
      $( document ).ready(function() {
        var table =$('#adminParticipantTable').DataTable({
          processing: true,
          serverSide: true,
          scrollX: true,
          footer: true,
          ajax: '{{ route('admin.users.index') }}',
          columns: [
            {
              data: 'name',
              name: 'name',
            },
            {
              data: 'email',
              name: 'email',
            },
            {
              data: 'work_unit',
              name: 'work_unit'
            },
            {
              data: 'npp',
              name: 'npp'
            },
            {
              data: 'formattedCreatedAt',
              name: 'created_at'
            },
            {
              data: 'competition',
              name: 'competition'
            },
            { searchable: false,
              sortable:false,
              data: function ( data, type, row, meta ) {
                return `
                <a href="users/${data.id}" type="button" class="btn btn-light text-warning me-2"><i class="fas fa-pencil-alt"></i></a>
                <form method="POST" class="d-inline" class="btn"
                    onsubmit="return confirm('Do you really want to delete the participant?');"
                    action="users/${data.id}">
                  @csrf
                  @method('DELETE')

                  <button type="submit" class="btn btn-light text-danger"><i class="fas fa-trash-alt"></i></button>
                </form>`
              }
            },
          ],
          initComplete: function () {
            // Add search inputs for each column
            this.api().columns().every(function () {
              var column = this;
              var footer = $(column.footer());
              if(footer == null || footer == undefined){
                return;
              }

              let title = column.footer().textContent;
              if(title == ''){
                return;
              }

              if(title.includes("Competition")){
                // Create select element
                let select = document.createElement('select');
                select.add(new Option(''));
                select.classList.add("w-100");
                select.classList.add("form-select");
                column.footer().replaceChildren(select);

                // Apply listener for user change in value
                select.addEventListener('change', function () {
                    var val = DataTable.util.escapeRegex(select.value);
                    column
                        .search(val ? '^' + val + '$' : '', true, false)
                        .draw();
                });

                // Add list of options
                column
                    .data()
                    .unique()
                    .sort()
                    .each(function (d, j) {
                        select.add(new Option(d));
                    });

              }else{
                // Create input element
                let input = document.createElement('input');
                  input.placeholder = title;
                  input.classList.add("w-100");
                  input.classList.add("form-control");
                  column.footer().replaceChildren(input);

                // Event listener for user input
                input.addEventListener('keyup', () => {
                    if (column.search() !== this.value) {
                        column.search(input.value).draw();
                    }
                });
              }

            });
          }
        });
      });
    </script>
@endsection