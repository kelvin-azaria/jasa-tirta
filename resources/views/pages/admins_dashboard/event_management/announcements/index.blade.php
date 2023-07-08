@extends('layouts.admin')

@section('content')

  <nav aria-label="breadcrumb">
    <ol class="breadcrumb mt-3 mb-2">
      <li class="breadcrumb-item"><a href="{{ route('admin.dashboard.index') }}" class="text-decoration-none fw-bold">Dashboard</a></li>
      <li class="breadcrumb-item active" aria-current="page">Announcement</li>
    </ol>
  </nav>

  <div class="row">
    <div class="col-12 col-lg-6 my-3 align-self-stretch ">
      <div class="card h-100">
        <div class="card-body">
          <h6 class="text-capitalize fw-bold my-3 pb-2">compose announcement</h6>
          <form id="announcementForm" onsubmit="postAnnouncement(event)" class="form-floating mb-2">
            <div class="row">
              <div class="col">
                <input type="hidden" id="typeInput" name="typeInput" value="note">
                <div class="form-floating mb-2">
                  <input name="titleInput" id="titleInput" type="text" class="form-control" placeholder="Type title here..." >
                  <label for="titleInput">Title</label>
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>
                <div class="form-floating">
                  <textarea name="messageInput" id="messageInput" class="form-control" placeholder="Leave a comment here" style="height: 80px"></textarea>
                  <label for="messageInput">Message</label>
                </div>
              </div>
            </div>
            <div class="row my-2">
              <div class="col">
                <button type="submit" class="btn btn-primary w-100 text-white"><i class="fas fa-paper-plane me-2"></i> Send</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

    <div class="col-12 col-lg-6 my-3 align-self-stretch " >
      <div class="card h-100">
        <form onsubmit="postRunningText(event)">
          <div class="card-body">
            <div class="row">
              <div class="col my-3">
                <h6 class="text-capitalize fw-bold pb-2">create running text</h6>
              </div>
              <div class="col-auto my-3">
                <div class="form-check form-switch">
                  <input class="form-check-input" type="checkbox" role="switch" id="inputActive">
                  <label class="form-check-label text-accent-2" for="inputActive">Active status</label>
                </div>
              </div>
            </div>

              <div class="row">
                <input type="hidden" id="inputType" name="inputType" value="running text">
                <div class="col-4">
                  <label for="inputRunningTitle" class="form-label">Title</label>
                  <input type="text" class="form-control" id="inputRunningTitle">
                </div>

                <div class="col-8">
                  <label for="inputRunningMessage" class="form-label">Message</label>
                  <input type="text" class="form-control" id="inputRunningMessage">
                </div>
              </div>
              <div class="row mt-3">
                <div class=" col-auto col-md-12 col-xl-auto align-self-center pb-md-2">
                  <small><p class="m-0 p-0"> Set Color :</p></small>
                </div>
                <div class="col align-self-center">
                  <input type="color" class="form-control form-control-color d-inline-block mx-2" id="inputRunningTextColor" value="#000000" title="Text Color">
                  <input type="color" class="form-control form-control-color d-inline-block mx-2" id="inputRunningBackgroundColor" value="#ffffff" title="Background color">
                </div>
                <div class="col-auto align-self-center ">
                  <button type="submit" class="btn btn-primary text-light"><i class="fas fa-plus"></i><span class="text-capitalize  ps-2">add</span></button>
                </div>
                <marquee id="runningTextPreview" direction="left" class="fw-bold py-2 mt-4">
                  running text preview
                </marquee>
              </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <div class="row mb-4">
    <div class="col-12">
      <div class="card">
        <div class="card-body ">
          <h6 class="text-capitalize fw-bold my-3 pb-2">announcement list</h6>
          <table id="adminAnnouncementTable" class="table table-bordered table-sm min-w-100">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Message</th>
                    <th>Type</th>
                    <th class="text-center">Created at</th>
                    <th class="text-center">Status</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
            <tfoot>
              <tr>
                <td>Search by Title</td>
                <td>Search by Message</td>
                <td>Search by Type</td>
                <td colspan=3></td>
              </tr>
            </tfoot>
        </table>
        </div>
      </div>
    </div>
  </div>

  {{-- Edit Modal --}}
  <div class="modal fade" id="editAnnouncementModal" tabindex="-1" aria-labelledby="editAnnouncementModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h6 class="modal-title fs-6 text-bold m-0 text-capitalize fw-bold" id="editAnnouncementModalLabel">edit announcement</h6>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form onsubmit="updateAnnouncement(event)">
          <input type="hidden" id="inputEditId" name="inputEditId">
          <input type="hidden" id="inputEditType" name="inputEditType">
          <div id="noteType" class="modal-body">
            <div class="form-floating mb-2">
              <input name="titleEditInput" id="titleEditInput" type="text" class="form-control" placeholder="Type title here..." >
              <label for="titleInput">Title</label>
            </div>
            <div class="form-floating">
              <textarea name="messageEditInput" id="messageEditInput" class="form-control" placeholder="Leave a comment here" style="height: 80px"></textarea>
              <label for="messageInput">Message</label>
            </div>
            <div class="row mt-3 d-none" id="runningTextEditSection">
              <div class=" col-auto col-md-12 col-xl-auto align-self-center pb-md-2">
                <small><p class="m-0 p-0"> Set Color :</p></small>
              </div>
              <div class="col align-self-center">
                <input type="color" class="form-control form-control-color d-inline-block mx-2" id="inputRunningEditTextColor" title="Text Color">
                <input type="color" class="form-control form-control-color d-inline-block mx-2" id="inputRunningEditBackgroundColor" title="Background color">
              </div>
            </div>
          </div>
          {{-- <div id="runningTextType" class="modal-body d-none">
            ...
          </div> --}}
          <div class="modal-footer">
            <button type="button" class="btn btn-light fw-bold text-accent-2" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary fw-bold text-white">Save changes</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  {{-- Toast --}}
  <div class="toast-container position-fixed top-0 start-50 translate-middle-x p-3">
    <div id="liveToast" class="toast hide" role="alert" aria-live="assertive" aria-atomic="true">
      <div class="toast-header">
        <span class="text-warning"><i class="fas fa-bell me-2"></i></span>
        <strong id="toastTitle" class="me-auto">Bootstrap</strong>
        <small>Just Now</small>
        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
      </div>
      <div id="toastBody" class="toast-body">
        <strong class="text-capitalize">title</strong><br>
        <small>content</small>
      </div>
    </div>
  </div>

@endsection

@section('script')
    <script>
      const toastLiveExample = document.getElementById('liveToast')
      const toastTitle = document.getElementById('toastTitle');
      const toastBody = document.getElementById('toastBody');

      function postAnnouncement(event){
        event.preventDefault();

        const formData = new FormData();
        formData.append('title', $('#titleInput').val());
        formData.append('message', $('#messageInput').val());
        formData.append('type',  $('#typeInput').val());

        let url = "{{ route('admin.announcements.store') }}";
        axios.post(url, formData)
        .then(function (response) {
          $('#adminAnnouncementTable').DataTable().ajax.reload();
          let announcement = response.data.announcement;
          toastTitle.innerHTML= 'Announcement' ;
          toastBody.innerHTML='Announcement created Successfully'
          ;
          $('#liveToast').toast('show');
        })
        .catch(function (error) {
          let errors = error.response.data.errors;
          let errorMessage = "";
          $.each(errors, function(input, message) {
            errorMessage += ('<p class="m-0">'+message[0]+'<p>')
          });
          console.log(errorMessage);
          toastTitle.innerHTML= 'Something went wrong' ;

          toastBody.innerHTML=errorMessage;
          ;
          $('#liveToast').toast('show');
        });
      }

      function postRunningText(event){
        event.preventDefault();

        const formData = new FormData();
        formData.append('title', $('#inputRunningTitle').val());
        formData.append('message', $('#inputRunningMessage').val());
        formData.append('type',  $('#inputType').val());
        formData.append('textColor',  $('#inputRunningTextColor').val());
        formData.append('bgColor',  $('#inputRunningBackgroundColor').val());
        formData.append('active',  ($('#inputActive:checked').val() == 'on'? 1 : 0));

        let url = "{{ route('admin.announcements.store') }}";

        axios.post(url, formData)
        .then(function (response) {
          $('#adminAnnouncementTable').DataTable().ajax.reload();
          let announcement = response.data.announcement;
          toastTitle.innerHTML= 'Announcement' ;
          toastBody.innerHTML='Announcement created Successfully'
          ;
          $('#liveToast').show();
        })
        .catch(function (error) {
          let errors = error.response.data.errors;
          let errorMessage = "";
          $.each(errors, function(input, message) {
            errorMessage += ('<p class="m-0">'+message[0]+'<p>')
          });
          console.log(errorMessage);
          toastTitle.innerHTML= 'Something went wrong' ;

          toastBody.innerHTML=errorMessage;
          ;
          $('#liveToast').toast('show');
        });
      }

      function changeStatus(id){
        const formData = new FormData();
        formData.append('id', id);
        let url = "{{ route('admin.announcements.status')}}";

        axios.post(url, formData)
        .then(function (response) {
          $('#adminAnnouncementTable').DataTable().ajax.reload();
          let announcement = response.data.announcement;
          toastTitle.innerHTML= 'Announcement' ;
          toastBody.innerHTML='Status changed successfully !'
          ;
          $('#liveToast').toast('show');
        })
        .catch(function (error) {
          console.log(error);
        });
      }

      function editAnnouncementModal(id){
        const formData = new FormData();
        formData.append('_method', 'GET');
        formData.append('id', id);
        let url = '{{ route("admin.announcements.show",":id") }}';
        url = url.replace(':id', id);

        axios.post(url, formData)
        .then(function (response) {

          let announcement = response.data.announcement;
          $("#inputEditId").val(announcement.id);
          $("#inputEditType").val(announcement.type);
          $("#titleEditInput").val(announcement.title);
          $("#messageEditInput").val(announcement.message);

          if(announcement.type == 'running text'){
            $('#runningTextEditSection').removeClass('d-none');
            $('#inputRunningEditBackgroundColor').val(announcement.bg_color);
            $('#inputRunningEditTextColor').val(announcement.text_color);
          } else {
            $('#runningTextEditSection').addClass('d-none');
            $('#inputRunningEditBackgroundColor').val('');
            $('#inputRunningEditTextColor').val('');
          }

          $('#editAnnouncementModal').modal('show');
        })
        .catch(function (error) {
          let errorMessage = response.data.errors;
          console.log(errorMessage);
        });
      }

      function updateAnnouncement(event){
        event.preventDefault();
        let id = $("#inputEditId").val();

        const formData = new FormData();
        formData.append('_method', 'PUT');

        let url = '{{ route("admin.announcements.update",":id") }}';
        url = url.replace(':id', id);

        formData.append('title', $('#titleEditInput').val());
        formData.append('message', $('#messageEditInput').val());
        formData.append('textColor',  $('#inputRunningEditTextColor').val());
        formData.append('bgColor',  $('#inputRunningEditBackgroundColor').val());

        axios.post(url, formData)
        .then(function (response) {
          $('#adminAnnouncementTable').DataTable().ajax.reload();
          let announcement = response.data.announcement;
          toastTitle.innerHTML= 'Announcement' ;
          toastBody.innerHTML='Announcement updated Successfully'
          ;
          $('#editAnnouncementModal').modal('hide');
          $('#liveToast').show();

        })
        .catch(function (error) {
          console.log(error);
        });
      }

      function deleteAnnouncement(id){
        if (confirm("Are you sure want to delete the announcement") == true) {
          destroyAnnouncement(id);
        }
      }

      function destroyAnnouncement(id){
        const formData = new FormData();
        formData.append('id', id);
        let url = '{{ route("admin.announcements.delete",":id") }}';
        url = url.replace(':id', id);

        axios.delete(url, formData)
        .then(function (response) {
          $('#adminAnnouncementTable').DataTable().ajax.reload();
          let message = response.data.message;
          toastTitle.innerHTML= 'Announcement' ;
          toastBody.innerHTML= message ;
          ;
          $('#liveToast').toast('show');
        })
        .catch(function (error) {
          console.log(error);
        });
      }
      function truncate(str, n){
        return (str.length > n) ? str.slice(0, n-1) + '&hellip;' : str;
      };
    </script>

    <script>
      $( document ).ready(function() {
        var table =$('#adminAnnouncementTable').DataTable({
          processing: true,
          serverSide: true,
          responsive: true,
          scrollX: true,
          footer: true,
          ajax: '{{ route('admin.announcements.indexAnnouncement') }}',
          columns: [
            { data: 'title',
              name: 'title',
              render: function ( data, type, row, meta ) {
                return type === 'display' ? truncate( data, 48 ) : data
              }
            },
            { data: 'message',
              name: 'message',
              render: function ( data, type, row, meta ) {
                return type === 'display' ? truncate( data, 48 ) : data
              }
            },
            { data: 'type', name: 'type' },
            { searchable: false,
              data: 'formattedCreatedAt', name: 'created_at'
            },
            { searchable: false,
              sortable:false,
              data: function ( data, type, row, meta ) {
                return type === 'display' ? ( data.active !== null ? '<div class="form-check form-switch justify-content-center d-flex"><input onchange="changeStatus(' + data.id + ')"' + ( data.active == 1 ? 'checked=true ' : '' ) + 'class="form-check-input text-center" type="checkbox" role="switch" id="flexSwitchCheckDefault" ></div>' : 'Sent' ) : data
              }
            },
            { searchable: false,
              sortable:false,
              data: function ( data, type, row, meta ) {
                return type === 'display' ? '<button type="button" onClick="editAnnouncementModal(' + data.id + ')" class="btn btn-light text-warning me-2"><i class="fas fa-pencil-alt"></i></button><button type="button" onClick="deleteAnnouncement(' + data.id + ')" class="btn btn-light text-danger"><i class="fas fa-trash-alt"></i></button>' : data
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

              if(title.includes("Type")){
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

        $("#inputRunningMessage").on('change', function(){
          $('#runningTextPreview').text($("#inputRunningMessage").val());
        });

        $("#inputRunningTextColor").on('change', function(){
          $('#runningTextPreview').css("color",$("#inputRunningTextColor").val());
        });

        $("#inputRunningBackgroundColor").on('change', function(){
          $('#runningTextPreview').css("background-color",$("#inputRunningBackgroundColor").val());
        });
      });
    </script>
@endsection