@extends('layouts.home')

@section('content')
<div class="landing-page">
  <section id="landing">
    <div class="container p-1rem">
      <div class="row mt-1rem justify-content-center">
        <div class="col-md-8 my-4">
          <h1 class="font-weight-bold dark-text-green my-4 title-text">Example Landing Page</h1>
          <p class="my-4">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
            Praesent sapien nibh, porta suscipit est egestas, euismod varius tortor. 
            Quisque volutpat lorem risus, eu facilisis lectus ornare quis.
          </p>
          <a class="btn cta-button my-3 font-weight-bold text-capitalize p-4" href="{{ url('/') }}"  role="button">
            Button 1 <i class="fa fa-angle-double-right" aria-hidden="true"></i>
          </a>
          <a class="my-3 font-weight-bold text-capitalize p-4" href="{{ url('/') }}#about" role="button">
            Button 2 <i class="fa fa-angle-double-right" aria-hidden="true"></i>
          </a>
        </div>
      </div>
    </div>
  </section>

  <section id="carousel">
    <div id="carouselExample" class="carousel slide bg-dark" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExample" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExample" data-slide-to="1"></li>
        <li data-target="#carouselExample" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner justify-content-center">
        <div class="carousel-item active">
          <img class="d-block w-50 mx-auto p-5" src="{{ asset('img/carousel_placeholder.svg') }}" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-50 mx-auto p-5" src="{{ asset('img/carousel_placeholder.svg') }}" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-50 mx-auto p-5" src="{{ asset('img/carousel_placeholder.svg') }}" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </section>
  
  <section id="list" class=" py-3 bg-green text-white">
    <div class="container p-1rem">
      <div class="row justify-content-between">
        <div class="col-md-5 font-weight-bold mx-auto my-auto">
          <h1 class="title-text text-white font-weight-bold text-capital">
            Example List
          </h1>
        </div>
        <div class="col-md-6 align-self-center font-weight-bold high-line-height">
          <ol>
            <li>The first item</li>
            <li>The second item</li>
            <li>The third item</li>
            <li>The fourth item</li>
            <li>The fifth item</li>
            <li>The sixth item</li>
            <li>The seventh item</li>
            <li>The eighth item</li>
            <li>The ninth item</li>
            <li>The tenth item</li>
          </ol>
        </div>
      </div>
    </div>
  </section>

  <section id="image_gallery_1" class="py-3">
    <div class="container p-1rem">
      <div class="row justify-content-center">
        <div class="col-md-12 font-weight-bold text-center">
          <h3 class="font-weight-bold text-capital">Example Image Gallery 1</h3>
          <div class="row">
            <div class="col align-self-center">
              <div class="row justify-content-center">
                <img src="{{ asset('img/image_placeholder.png') }}" width="500" alt="">
                <img src="{{ asset('img/image_placeholder.png') }}" width="500" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="image_gallery_2" class="py-3">
    <div class="container p-1rem">
      <h3 class="font-weight-bold text-capital text-center">Example Image Gallery 2</h3>
      <div class="row justify-content-between">

        <div class="col-md-6 font-weight-bold text-center">
          <div class="row">
            <div class="col align-self-center">
              <div class="row justify-content-center">
                <img src="{{ asset('img/image_placeholder.png') }}" width="500" alt="">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col text-center">Image label</p></div>
          </div>
        </div>

        <div class="col-md-6 font-weight-bold text-center">
          <div class="row">
            <div class="col align-self-center">
              <div class="row justify-content-center">
                <img src="{{ asset('img/image_placeholder.png') }}" width="500" alt="">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col text-center">Image label</p></div>
          </div>
        </div>
        
      </div>
    </div>
  </section>

  <section id="cards" class="py-3">
    <div class="container p-1rem">
      <h3 class="font-weight-bold text-capital text-center">Example Cards</h3>
      <div class="row justify-content-center py-4">
        <div class="card m-2" style="width: 14rem;">
          <div class="card-body">
            <h5 class="card-title">Card 1</h5>
            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
            <p class="card-text">Card Description</p>
            <a href="#" class="card-link">link to somewhere</a>
          </div>
        </div>
        <div class="card m-2" style="width: 14rem;">
          <div class="card-body">
            <h5 class="card-title">Card 2</h5>
            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
            <p class="card-text">Card Description</p>
            <a href="#" class="card-link">link to somewhere</a>
          </div>
        </div>
        <div class="card m-2" style="width: 14rem;">
          <div class="card-body">
            <h5 class="card-title">Card 3</h5>
            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
            <p class="card-text">Card Description</p>
            <a href="#" class="card-link">link to somewhere</a>
          </div>
        </div>
        <div class="card m-2" style="width: 14rem;">
          <div class="card-body">
            <h5 class="card-title">Card 4</h5>
            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
            <p class="card-text">Card Description</p>
            <a href="#" class="card-link">link to somewhere</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="youtube_embed" class="py-3">
    <div class="container p-1rem">
      <h3 class="font-weight-bold text-capital text-center">Example Youtube Embed</h3>
      <div class="row justify-content-center py-4">
        <iframe width="1280" height="720" src="https://www.youtube.com/embed/dQw4w9WgXcQ"></iframe>
      </div>
    </div>
  </section>

</div>
@endsection