@extends('layouts.user')
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">{{ __('Register') }}</div>
        <div class="card-body">
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
            <div class="form-group row">
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
            <div class="form-group row">
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
            <div class="form-group row">
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
            <div class="form-group row">
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
            <div class="form-group row">
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
            <div class="form-group row">
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
            <div class="form-group row">
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
            <div class="form-group row">
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
            <div class="form-group row">
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
            <div class="form-group row mb-0">
              <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
									{{ __('Register') }}
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection