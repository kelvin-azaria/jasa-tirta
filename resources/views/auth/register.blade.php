@extends('layouts.user')
@section('content')
<div class="container">
  <div class="row mt-3 justify-content-center">
    <div class="col-lg-6 align-self-center">
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{ asset('img/opening@1200x-8.jpg') }}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('img/poster@1200x-8.jpg') }}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('img/closing@1200x-8.jpg') }}" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    <div class="col-lg-6 align-self-center text-white p-3">
      <h1 class="text-capitalize text-white fw-bold">{{ __('Register') }}</h1>
      @error('image')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
					@if (\Session::has('success'))
						<div class="alert alert-success">
							<ul>
								<li>{!! \Session::get('success') !!}</li>
							</ul>
						</div>
					@endif
          <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
            @csrf
						{{-- NAME FIELD --}}
            <div class="form-group row my-3">
              <label for="name" class="col-md-4 col-form-label text-md-right">
								Nama Lengkap
							</label>
              <div class="col-md-6">
                <input 
									id="name" 
									type="text" 
									class="form-control @error('name') is-invalid @enderror" 
									name="name" 
									value="{{ old('name') }}" 
									required 
									autocomplete="name" 
									autofocus
								>
                @error('name')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
                @enderror
              </div>
            </div>
						{{-- EMAIL FIELD --}}
            <div class="form-group row my-3">
              <label for="email" class="col-md-4 col-form-label text-md-right">
								Alamat E-Mail
							</label>
              <div class="col-md-6">
                <input 
									id="email" 
									type="email" 
									class="form-control @error('email') is-invalid @enderror" 
									name="email" 
									value="{{ old('email') }}" 
									required 
									autocomplete="email"
								>
                @error('email')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
                @enderror
              </div>
            </div>
						{{-- PHONE FIELD --}}
            <div class="form-group row my-3">
              <label for="phone" class="col-md-4 col-form-label text-md-right">
								Nomor Telepon
							</label>
              <div class="col-md-6">
                <input 
									id="phone" 
									type="number" 
									class="form-control @error('phone') is-invalid @enderror" 
									name="phone" 
									value="{{ old('phone') }}" 
									required 
									autocomplete="phone"
								>
                @error('phone')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
                @enderror
              </div>
            </div>
						{{-- BIRTH DATE FIELD --}}
            <div class="form-group row my-3">
              <label for="birth_date" class="col-md-4 col-form-label text-md-right">
								Tanggal Lahir
							</label>
              <div class="col-md-6">
                <input 
									id="birth_date" 
									type="date" 
									class="form-control @error('birth_date') is-invalid @enderror" 
									name="birth_date" 
									value="{{ old('birth_date') }}" 
									required 
									autocomplete="birth_date"
								>
                @error('birth_date')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
                @enderror
              </div>
            </div>
						{{-- WORK UNIT FIELD --}}
            <div class="form-group row my-3">
              <label for="work_unit" class="col-md-4 col-form-label text-md-right">
								Unit Kerja / Cabang
							</label>
              <div class="col-md-6">
                <input 
									id="work_unit" 
									type="text" 
									class="form-control @error('work_unit') is-invalid @enderror" 
									name="work_unit" 
									value="{{ old('work_unit') }}" 
									required 
									autocomplete="work_unit"
								>
                @error('work_unit')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
                @enderror
              </div>
            </div>
						{{-- NPP FIELD --}}
            <div class="form-group row my-3">
              <label for="npp" class="col-md-4 col-form-label text-md-right">
								NPP
							</label>
              <div class="col-md-6">
                <input 
									id="npp" 
									type="text" 
									class="form-control @error('npp') is-invalid @enderror" 
									name="npp" 
									value="{{ old('npp') }}" 
									required 
									autocomplete="npp"
								>
                @error('npp')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
                @enderror
              </div>
            </div>
						{{-- JRKU IMAGE FIELD --}}
            <div class="form-group row my-3">
              <label for="jrku_image_path" class="col-md-4 col-form-label text-md-right">
								Screenshot Bukti Akun JRku
							</label>
              <div class="col-md-6">
                <input 
									id="npp" 
									type="file" 
									class="form-control-file @error('njrku_image_pathpp') is-invalid @enderror" 
									name="jrku_image_path" 
									value="{{ old('jrku_image_path') }}" 
									required 
									autocomplete="jrku_image_path"
								>
                @error('jrku_image_path')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
                @enderror
              </div>
            </div>
						{{-- PASSWORD FIELD --}}
            <div class="form-group row my-3">
              <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
              <div class="col-md-6">
                <input 
									id="password"
									type="password"
									class="form-control @error('password') is-invalid @enderror"
									name="password"
									required
									autocomplete="new-password"
								>
                @error('password')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
                @enderror
              </div>
            </div>
            <div class="form-group row my-3">
              <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
              <div class="col-md-6">
                <input 
									id="password-confirm" 
									type="password" 
									class="form-control" 
									name="password_confirmation" 
									required 
									autocomplete="new-password"
								>
              </div>
            </div>
            <div class="form-group row my-4">
              <div class="col-md-8 offset-md-1">
                <button type="submit" class="btn btn-primary w-100">
									{{ __('Register') }}
                </button>
              </div>
            </div>
          </form>
    </div>
  </div>
</div>
@endsection