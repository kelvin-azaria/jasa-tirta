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

  <div class="card mt-3 mb-2 bg-white">
    <div class="card-body">
      <div class="row justify-content-between">
        <div class="col">
          <h5 class="text-capitalize fw-bold my-3">{{$comp}} Competition Participants</h5>
        </div>
        <div class="col-auto">
        </div>
      </div>

      <hr>
      <table id="adminParticipantTable" class="table table-bordered min-w-100 bg-white">
        <thead>
            <tr>
                <th>Name</th>
                <th>Gender</th>
                <th>Distance (Km)</th>
                <th>Total Duration</th>
                <th>Average Speed (Km/h)</th>
                <th>Activity Name</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>

        <tbody>
        </tbody>

        <tfoot>
          <tr>
            <td>Search by name</td>
            <td>Search by Gender</td>
            <td>Search by Distance</td>
            <td></td>
            <td></td>
            <td>Search by activity name</td>
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
          dom: "<'row'<'col-12 mb-2'B>>" +"<'row'<'col-sm-12 col-md-6'l><'col-sm-12 col-md-6'f>>" + "<'row'<'col-sm-12'tr>>" + "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
          buttons: [
            {
                extend: 'spacer',
                style: 'bar',
                text: 'Export based on filter:'
            },
            {
                extend: 'print',
                className: 'btn btn-outline-info',
                title: "{{$comp}} Competition Data",
                exportOptions: {
                    columns: ':visible'
                }
            },
            {
                extend: 'excel',
                className: 'btn btn-outline-success',
                title: "{{$comp}} Competition Data",
                exportOptions: {
                    columns: ':visible'
                }
            },
            {
                extend: 'pdf',
                className: 'btn btn-outline-danger',
                orientation: 'landscape',
                pageSize: 'LEGAL',
                title: "{{$comp}} Competition Data",
                exportOptions: {
                    columns: ':visible'
                }
            },
            {
                extend: 'spacer',
                style: 'd-block mt-2',
            },
            {
                extend: 'spacer',
                style: 'bar',
                text: 'Column Display: '
            },
            {
                extend: 'columnsToggle',
            },
          ],
          columnDefs: [ {
            targets: -1,
            visible: false
          } ],
          processing: true,
          select:true,
          scrollX: true,
          footer: true,
          ajax: '{{ route('admin.competitions.participants.index') }}?comp={{$comp}}',
          columns: [
            {
              name: 'name',
              data: function ( data, type, row, meta ) {
                return `<a href="/admin/users/${data.user_id}" class="link-dark link-underline-info fw-bold link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover text-capitalize">${data.name}</a>`
              }
            },
            {
              data: 'gender',
              name: 'gender',
            },
            {
              data: 'formattedActivityLength',
              name: 'activity_length',
            },
            {
              data: 'formattedActivityDuration',
              name: 'activity_duration',
            },
            {
              data: 'formattedActivityAverageSpeed',
              searchable: false
            },
            {
              data: 'activity_name',
              name: 'activity_name',
            },
            { searchable: false,
              sortable:false,
              data: function ( data, type, row, meta ) {
                return `
                <a href="participants/${data.id}" type="button" class="btn btn-light text-warning me-2"><i class="fas fa-pencil-alt"></i></a>
                <form method="POST" class="d-inline" class="btn"
                    onsubmit="return confirm('Do you really want to delete the participant?');"
                    action="participants/${data.id}">
                  @csrf
                  @method('DELETE')

                  <button type="submit" class="btn btn-light text-danger"><i class="fas fa-trash-alt"></i></button>
                </form>`
              }
            },
          ],
          columnDefs : [{
            targets: '_all',
            className: 'bg-white'
          }],
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

              if(title.includes("Gender")){
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