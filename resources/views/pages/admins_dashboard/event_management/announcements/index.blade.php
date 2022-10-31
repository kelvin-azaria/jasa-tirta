@extends('layouts.admin')

@section('content')

  <nav aria-label="breadcrumb">
    <ol class="breadcrumb my-3">
      <li class="breadcrumb-item "><a href="#">Dashboard</a></li>
      <li class="breadcrumb-item active" aria-current="page">Announcement</li>
    </ol>
  </nav>

  <div class="row">
    <div class="col-12 col-lg-6 my-3 align-self-stretch ">
      <div class="card h-100">
        <div class="card-body">
          <h6 class="text-capitalize fw-bold my-3 pb-2">compose announcement</h6>
          <form onsubmit="postAnnouncement(event)" class="form-floating mb-2">
            <div class="row">
              <div class="col">
                <input type="hidden" id="typeInput" name="typeInput" value="note">  
                <div class="form-floating mb-2">  
                  <input name="titleInput" id="titleInput" type="text" class="form-control" placeholder="Type title here..." >
                  <label for="titleInput">Title</label>
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

  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body ">
          <h6 class="text-capitalize fw-bold my-3 pb-2">announcement list</h6>
          <table id="table_id" class="table table-bordered table-sm">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Message</th>
                    <th>Type</th>
                    <th>Status</th>
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

  {{-- Toast --}}
  <div class="toast-container position-fixed top-0 start-50 translate-middle-x p-3">
    <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
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
          $('#table_id').DataTable().ajax.reload();
          let announcement = response.data.announcement;
          toastTitle.innerHTML= 'Announcement' ;
          toastBody.innerHTML='Announcement created Successfully'
          ;
          // const toast = new bootstrap.Toast(toastLiveExample);
          $('#liveToast').toast('show');
        })
        .catch(function (error) {
          console.log(error);
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
          $('#table_id').DataTable().ajax.reload();
          let announcement = response.data.announcement;
          toastTitle.innerHTML= 'Announcement' ;
          toastBody.innerHTML='Announcement created Successfully'
          ;
          // const toast = new bootstrap.Toast(toastLiveExample);
          $('#liveToast').show();
        })
        .catch(function (error) {
          console.log(error);
        });
      }
    </script>
    
    <script>
      $( document ).ready(function() {
        var table =$('#table_id').DataTable({
          processing: true,
          serverSide: true,
          ajax: '{{ route('admin.announcements.indexAnnouncement') }}',
          columns: [
            { data: 'id', name: 'id' },
            { data: 'title', name: 'title' },
            { data: 'message', name: 'message' },
            { data: 'type', name: 'type' },
            // render a button inside row
            { data: function ( data, type, row, meta ) {
              return type === 'display'  ? 
                (data.active !== null?'<div class="form-check form-switch justify-content-center d-flex"><input onchange="changeStatus('+data.id+')"'+ (data.active == 1? 'checked=true ': '') +'class="form-check-input text-center" type="checkbox" role="switch" id="flexSwitchCheckDefault" ></div>': 'Sent')
                :data;
            }},
            // render a button inside row
            { data: function ( data, type, row, meta ) {

              return type === 'display'  ?
                // '<a class="btn btn-outline-light text-warning" href="#'+ data +'" ><i class="fas fa-pencil-alt"></i></a>' :
                '<button type="button" onClick="editAnnouncementModal('+ data.id +')" class="btn btn-light text-warning me-2"><i class="fas fa-pencil-alt"></i></button><button type="button" onClick="deleteAnnouncement('+ data.id +')" class="btn btn-light text-danger"><i class="fas fa-trash-alt"></i></button>':
                data;
            }},
          ],
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

    <script>
      function editAnnouncementModal(id){

      }

      function changeStatus(id){
        const formData = new FormData();
        formData.append('id', id);
        let url = "{{ route('admin.announcements.status')}}";
        axios.post(url, formData)
        .then(function (response) {
          $('#table_id').DataTable().ajax.reload();
          let announcement = response.data.announcement;
          toastTitle.innerHTML= 'Announcement' ;
          toastBody.innerHTML='Status Changed Successfully'
          ;
          // const toast = new bootstrap.Toast(toastLiveExample);
          $('#liveToast').toast('show');
        })
        .catch(function (error) {
          console.log(error);
        });
      }

      
    </script>
@endsection