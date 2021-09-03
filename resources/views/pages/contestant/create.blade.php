@extends('layouts.user')

@section('content')
<div class="container m-responsive">
  <div class="row">
    <div class="col-md-12 align-self-center">
      <h1 class="text-capitalize my-3 text-center">Form Pendaftaran</h1>
    </div>
  </div>
  <div class="row ">
    <div class="col-md-12 my-3 round-border light-green-shadow">
      <form method="POST" action="{{ route('contestant.store') }}" 
          enctype="multipart/form-data">
          @csrf
            
          @include('pages.contestant._form')

        <button type="submit" class="btn btn btn-outline-success btn-lg btn-block" id="submit-button" disabled>Create</button>
      </form>
    </div>
  </div>
</div>
@endsection
@section('script')
<script>
  EnableSubmit = function(val){
    var sbmt = document.getElementById("submit-button");
    var rights = document.getElementById("rights");
    var terms = document.getElementById("terms");
    if (rights.checked == true && terms.checked == true){
      sbmt.disabled = false;
    }else{
      sbmt.disabled = true;
    }
  }
</script>
@endsection