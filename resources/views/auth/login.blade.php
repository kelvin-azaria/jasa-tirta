@extends('layouts.user')
@section('content')
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
      <h1 class="text-capitalize text-white fw-bold">{{ __('Login') }}</h1>
      <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-group row my-3">
          <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
          <div class="col-md-6">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            @error('email')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
        </div>
        <div class="form-group row">
          <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
          <div class="col-md-6">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            @error('password')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
        </div>
        <div class="form-group row">
          <div class="col-md-6 offset-md-4">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
              <label class="form-check-label" for="remember">
                {{ __('Remember Me') }}
              </label>
            </div>
          </div>
        </div>
        <div class="form-group row text-center mt-5 mb-4">
          <div class="col justify-content-center">
            <button type="submit" class="btn btn-primary  w-100">
              {{ __('Login') }}
            </button>
          </div>
        </div>
        <div class="form-group row text-center my-4">
          <div class="col justify-content-center">
            <a href="{{ route('register') }}" class="btn btn-outline-primary w-100">
              Register
            </a>
          </div>
        </div>
      </form>
    </div>
  </div>
@endsection