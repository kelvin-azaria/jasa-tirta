@extends('layouts.user')

@section('content')

  <nav aria-label="breadcrumb">
    <ol class="breadcrumb mt-3 mb-2">
      <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}" class="text-decoration-none fw-bold">Dashboard</a></li>
      <li class="breadcrumb-item active" aria-current="page">Announcement</li>
    </ol>
  </nav>

  <div class="row">
    <div class="col-12 col-xl-6 my-3 align-self-stretch ">
      <div class="card h-100 bg-dark-accent-1 text-accent-1">
        <div class="card-body bg-dark-accent-1">
          <h6 class="text-capitalize fw-bold my-3 pb-2">announcement</h6>
          <table id="userAnnouncementTable" class="table bg-dark-accent-1 text-accent-2 table-borderless table-sm">
            <tbody class="">

            </tbody>
          </table>
        </div>
      </div>
    </div>

    <div class="col-12 col-xl-6 my-3 align-self-stretch " >
      <div class="card h-100 bg-dark-accent-1 text-accent-1">
        <div class="card-body">
          <h6 class="text-capitalize fw-bold my-3 pb-2">preview</h6>
          <div class="card bg-dark-accent-2">
            <div class="card-body">
              <h5 id="announcementTitle" class="fw-bold text-center mb-1 text-capitalize"></h5>
              <small><p id="announcementDate" class="text-accent-2 text-center mb-4">Please select available announcement to show.</p></small>
              <p id="announcementMessage"></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



@endsection

@section('script')
    <script>
      function previewAnnouncement(id){
        const formData = new FormData();
        formData.append('_method', 'GET');
        formData.append('id', id);
        let url = '{{ route("admin.event_managements.announcements.show",":id") }}';
        url = url.replace(':id', id);

        axios.post(url, formData)
        .then(function (response) {
          let announcement = response.data.announcement;
          document.getElementById('announcementDate').innerText = announcement.formattedUpdatedAt;
          document.getElementById('announcementTitle').innerText = announcement.title;
          document.getElementById('announcementMessage').innerText = announcement.message;
        })
        .catch(function (error) {
          let errorMessage = response.data.errors;
          console.log(errorMessage);
        });
      }
      function truncate(str, n){
        return (str.length > n) ? str.slice(0, n-1) + '&hellip;' : str;
      };
    </script>
    <script>
      $( document ).ready(function() {
        var table =$('#userAnnouncementTable').DataTable({
          processing: true,
          serverSide: true,
          ordering: false,
          ajax: '{{ route('announcements.index')."?type=note" }}',
          columns: [
            { data: 'id',
              name: 'title',
              width: '50px',
              render: function ( data, type, row, meta ) {
              return type === 'display'  ?
              '<div class="card bg-dark-accent-1"><div class="card-body">' + (meta.row + 1) + '</div></div>'
              :data;
            }},
            // render a button inside row
            { data: function ( data, type, row, meta ) {
              return type === 'display' ?
              '<div onClick="previewAnnouncement(' + data.id + ')" class="card btn-primary bg-dark-accent-2 text-accent-2"><div class="card-body"><div class="row"><div class="col text-start">' + truncate(data.title, 32) + '</div><div class="col text-end">' + data.formattedUpdatedAt + '</div></div></div></div>' : data;
              },
              searchable: false,
            },
          ],
        });
      });
    </script>
@endsection