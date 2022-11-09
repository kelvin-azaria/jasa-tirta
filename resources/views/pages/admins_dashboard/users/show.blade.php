@extends('layouts.admin')

@section('content')
  <nav aria-label="breadcrumb mt-3 mb-2">
    <ol class="breadcrumb mt-3">
      <li class="breadcrumb-item"><a href="{{ route('admin.dashboard.index') }}" class="text-decoration-none fw-bold">Dashboard</a></li>
      <li class="breadcrumb-item"><a href="{{ route('admin.users.index') }}" class="text-decoration-none fw-bold">Users</a></li>
      <li class="breadcrumb-item active text-capitalize" aria-current="page">{{ $user->name }}</li>
    </ol>
  </nav>

  <div class="row">
    <div class="col-12 col-lg-6 mb-4">
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col mt-2"><h6 class="text-capitalize fw-bold">user information</h6></div>
            <div class="col-auto mt-2">
              <div class="form-check form-switch">
                <input id="enableEditSwitch" class="form-check-input" type="checkbox" role="switch" checked >
                <label id="enableEditSwitchLabel" class="form-check-label text-accent-2" for="enableEditSwitch"><i class="fas fa-lock mx-2"></i></label>
              </div>
            </div>
          </div>
          <hr>
          <form id="userEditForm" onsubmit="editUser(event)">
            <small><p class="fw-bold text-accent-2 text-capitalize mb-2">general information</p></small>
            <input type="hidden" id="userID" name="id" value="{{ $user->id}}"> 
            <div class="p-3">
              <table class="table">
                <tbody>
                  <tr>
                    <td scope="row" class="align-middle">Name</td>
                    <td class="align-middle"> : </td>
                    <td><input id="userNameInput" name="userNameInput" class="form-control form-control-sm" type="text" placeholder="type user name" value="{{ $user->name }}"></td>
                  </tr>
                  <tr>
                    <td scope="row" class="align-middle">Gender</td>
                    <td class="align-middle"> : </td>
                    <td class="text-capitalize"> 
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" @if($user->gender === 'L') checked @endif name="gender" id="gender1" value="L">
                        <label class="form-check-label align-middle" for="inlineRadio1">Laki-laki</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" @if($user->gender === 'P') checked @endif name="gender" id="gender2" value="P">
                        <label class="form-check-label align-middle" for="inlineRadio2">Perempuan</label>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td scope="row" class="align-middle">Birthday</td>
                    <td class="align-middle"> : </td>
                    <td><input id="birthdayInput" name="birthdayInput" class="form-control form-control-sm" type="date" placeholder="type user birthday" value="{{ $user->birth_date }}"></td>
                  </tr>
                  <tr>
                    <td scope="row" class="align-middle">Branch</td>
                    <td class="align-middle"> : </td>
                    <td><input id="branchInput" name="branchInput" class="form-control form-control-sm" type="text" placeholder="type user work unit" value="{{ $user->work_unit }}"></td>
                  </tr>
                  <tr>
                    <td scope="row" class="align-middle">NPP</td>
                    <td class="align-middle"> : </td>
                    <td><input id="nppInput" name="nppInput" class="form-control form-control-sm" type="number" placeholder="type user NPP" value="{{ $user->npp }}"></td>
                  </tr>
                </tbody>
              </table>
            </div>
            <small><p class="fw-bold text-accent-2 text-capitalize">contact</p></small>
            <div>
              <table class="table">
                <tbody>
                  <tr>
                    <td scope="row">
                      <div class="input-group">
                        <div class="input-group-text"><i class="far fa-envelope"></i></div>
                        <input id="userEmailInput" name="userEmailInput" type="email" class="form-control" value="{{ $user->email }}">
                      </div>
                    </td>
                    <td>
                      <div class="input-group">
                        <div class="input-group-text"><i class="fas fa-phone-alt"></i></div>
                        <input id="userPhoneInput" name="userPhoneInput" type="tel" class="form-control" value="{{ $user->phone }}">
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <button type="submit" class="btn btn-primary w-100 text-white"><i class="fas fa-save me-2"></i>Save</button>
          </form>
        </div>
      </div>
    </div>

    <div class="col-12 col-lg-6 mb-4">
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col mt-2"><h6 class="text-capitalize fw-bold">competition information</h6></div>
            <div class="col-auto mt-2">
              <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                <label class="form-check-label text-accent-2" for="flexSwitchCheckDefault">Enable edit</label>
              </div>
            </div>
          </div>
          <hr>
          <div class="card">
            <div class="card-body">
              <h2 class="fw-bold my-0">{{ $user->competition}}</h2>
            </div>
          </div>
          <h6 class="text-capitalize fw-bold mt-4">Change Request</h6>
          <hr>
          <div class="card">
            <div class="card-body">
              <h6>Chess <i class="fas fa-exchange-alt mx-3"></i> PUBG</h6>
              <p><strong class="text-accent-2">Reason :</strong></p>
              <div class="row">
                <div class="col">
                  <button type="submit" class="btn btn-success w-100 text-white"><i class="fas fa-check me-2"></i>Approve</button>
                </div>
                <div class="col">
                  <button type="submit" class="btn btn-danger w-100 text-white"><i class="fas fa-times me-2"></i>Decline</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  {{-- <img src="{{ asset($user->image()) }}" class="card-img-top" alt="Akun JR-ku"> --}}
  <div class="card">
    <div class="card-body">
      <h6 class="text-capitalize fw-bold my-2">user activity history</h6>
      <hr>
      <table id="adminUserTable" class="table table-bordered table-sm">
        <thead>
            <tr>
              <th>Type</th>
              <th>Name</th>
              <th>Activity</th>
              <th>Status</th>
              <th>Time & Date</th>
            </tr>
        </thead>
        <tbody class="">
            
        </tbody>
      </table>
    </div>
  </div>
@endsection

@section('script')
    <script>
      $('#enableEditSwitch').on('change', function(){
        if(this.checked){
          $("#userEditForm :input").prop("disabled", true);
          document.getElementById('enableEditSwitchLabel').innerHTML = '<i class="fas fa-lock mx-2"></i>'
        }else{
          $("#userEditForm :input").prop("disabled", false);
          document.getElementById('enableEditSwitchLabel').innerHTML = '<i class="fas fa-unlock mx-2"></i>'
        }
      });
      function editUser(event){
        event.preventDefault();
        if (confirm("Are you sure want to make changes to this User") == true) {
          updateUser($('#userID').val());
        }
      }
      function updateUser(id){
        const formData = new FormData();
        formData.append('_method', 'PUT');
        formData.append('id', $('#userID').val());
        formData.append('name', $('#userNameInput').val());
        formData.append('gender', $('input[name=gender]:checked', '#userEditForm').val());
        formData.append('birth_date',  $('#birthdayInput').val());
        formData.append('work_unit',  $('#branchInput').val());
        formData.append('npp',  $('#nppInput').val());
        formData.append('email',  $('#userEmailInput').val());
        formData.append('phone',  $('#userPhoneInput').val());

        let url = '{{ route("admin.users.update",":id") }}';
        url = url.replace(':id', id);
        axios.post(url, formData)
        .then(function (response) {
          let user = response.data.user;
          toastIcon.innerHTML = '<i class="fas fa-user-edit me-2"></i>';
          toastTitle.innerHTML= 'User Update' ;
          toastBody.innerHTML='User updated Successfully'
          ;
          $('#liveSuccessToast').toast('show');
        })
        .catch(function (error) {
          let errors = error.response.data.errors;
          let errorMessage = "";
          $.each(errors, function(input, message) {
            errorMessage += ('<p class="m-0">'+message[0]+'<p>')
          });
          if( errorMessage === ""){
            errorMessage = error.message
          }
          console.log(errorMessage);
          toastErrorIcon.innerHTML = '<i class="fas fa-user-edit me-2"></i>';
          toastErrorTitle.innerHTML= 'Something went wrong' ;
          toastErrorBody.innerHTML=errorMessage;
          $('#liveErrorToast').toast('show');
        });
      }
    </script>
    
    <script>
      $( document ).ready(function() {
        $('#enableEditSwitch').prop("checked", true);
        $("#userEditForm :input").prop("disabled", true);
      });
    </script>
@endsection
