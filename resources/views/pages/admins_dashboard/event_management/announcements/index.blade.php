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
        <div class="card-body">
          <div class="row">
            <div class="col my-3">
              <h6 class="text-capitalize fw-bold pb-2">create running text</h6>
            </div>
            <div class="col-auto my-3">
              <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                <label class="form-check-label text-accent-2" for="flexSwitchCheckDefault">Display status</label>
              </div>
            </div>
          </div>
          <form action="">
            <div class="row">
              <div class="col-4">
                <label for="inputEmail4" class="form-label">Title</label>
                <input type="text" class="form-control" id="inputEmail4">
              </div>
              
              <div class="col-8">
                <label for="inputPassword4" class="form-label">Message</label>
                <input type="text" class="form-control" id="inputPassword4">
              </div>
            </div>
            <div class="row mt-3">
              <div class=" col-auto col-md-12 col-xl-auto align-self-center pb-md-2"> 
                <small><p class="m-0 p-0"> Set Color :</p></small>
              </div>
              <div class="col align-self-center">
                <input type="color" class="form-control form-control-color d-inline-block mx-2" id="exampleColorInput" value="#563d7c" title="Text Color">
                <input type="color" class="form-control form-control-color d-inline-block mx-2" id="exampleColorInput" value="#563d7c" title="Background color">
              </div>
              <div class="col-auto align-self-center ">
                <button type="button" name="" id="" class="btn btn-primary text-light"><i class="fas fa-plus"></i><span class="text-capitalize  ps-2">add</span></button>
              </div>
              <marquee direction="left" class="bg-warning text-light fw-bold py-2 mt-4">
                Pemilihan lomba akan ditutup dalam 1x24 jam, Harap segera memilih perlombaan yang tersedia
              </marquee>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-12 col-lg-8">
      <div class="card">
        <div class="card-body">
          <h6 class="text-capitalize fw-bold my-3 pb-2">announcement list</h6>
          <table id="table_id" class="display">
              <thead>
                  <tr>
                      <th>Column 1</th>
                      <th>Column 2</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <td>Row 1 Data 1</td>
                      <td>Row 1 Data 2</td>
                  </tr>
                  <tr>
                      <td>Row 2 Data 1</td>
                      <td>Row 2 Data 2</td>
                  </tr>
              </tbody>
          </table>
        </div>
      </div> 
    </div>

    <div class="col-12 col-lg-4">
      <div class="card bg-transparent">
        <div class="card-body">
          <h6 class="text-capitalize fw-bold my-3 pb-2">activity</h6>
        </div>
      </div> 
    </div>
   
  </div>

  {{-- Toast --}}
  <div class="toast-container position-fixed top-0 start-50 translate-middle-x p-3">
    <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
      <div class="toast-header">
        <i class="fas fa-plus-square me-2"></i>
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
          console.log(response.status);
          let announcement = response.data.announcement;
          toastTitle.innerHTML= 'Announcement' ;
          toastBody.innerHTML='Announcement created Successfully'
          ;
          const toast = new bootstrap.Toast(toastLiveExample);
          toast.show();
        })
        .catch(function (error) {
          console.log(error);
        });
      }
    </script>
    <script>
      $( document ).ready(function() {
        let url= "{{ route('admin.announcements.indexAnnouncement') }}"
        axios.post(url, {
          _method:'GET'
        })
        .then(function (response) {
          console.log(response.data.announcements);
        })
        .catch(function (error) {
          console.log(error);
        });
        $('#table_id').DataTable();
      });
    </script>
@endsection