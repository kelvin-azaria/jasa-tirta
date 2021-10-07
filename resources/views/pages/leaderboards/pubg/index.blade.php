@extends('layouts.home')
@section('banner')
  <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ asset('img/banner-leaderboard-pubg.jpg') }}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('img/banner-kegiatan-1.jpg') }}" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
@endsection

@section('content')
  <section id="leaderboard">
    <div class="container py-4">
      <h1 class="fw-bold text-capitalize text-center text-primary">PUBG Tournament Winners</h1>
      <p class="text-muted text-capitalize text-center mb-4">Terakhir diperbaharui 7 Oktober 2021</p>
      
      <h3 class="fw-bold text-capitalize text-center">1st Winner Team JSP</h3>
      <div class="table-responsive">
        <table class="table table-striped ">
          <thead>
            <tr class="border-top">
              <th scope="col">Nama Anggota</th>
              <th scope="col">Nickname</th>
              <th class="text-center" scope="col">Asal Cabang</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">Rizky Fadhilah</th>
              <td>JSP•DMSRF</td>
              <td class="text-center align-middle" rowspan="4">Kalimantan Timur</td>
            </tr>
            <tr>
              <th scope="row">Budi Purnama</th>
              <td>JSP•Budhie</td>
            </tr>
            <tr>
              <th scope="row">Famylia</th>
              <td>BTR•MeyyraKTR</td>
            </tr>
            <tr>
              <th scope="row">Amri</th>
              <td>ALPHAwolves</td>
            </tr>
            <tfoot>
              <tr>
                <td class="fw-bold text-center" colspan="2">Total Point</td>
                <td class="fw-bold text-center">53</td>
              </tr>
            </tfoot>
          </tbody>
        </table>
      </div>

      <hr>

      <h3 class="fw-bold text-capitalize text-center">2nd Winner Team KEPRI•BROTHERS</h3>
      <div class="table-responsive">
        <table class="table table-striped ">
          <thead>
            <tr class="border-top">
              <th scope="col">Nama Anggota</th>
              <th scope="col">Nickname</th>
              <th class="text-center" scope="col">Asal Cabang</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">Lambang Priantono Putra</th>
              <td>MakAmpiun</td>
              <td class="text-center align-middle" rowspan="4">Kepulauan Riau</td>
            </tr>
            <tr>
              <th scope="row">Doli zontia</th>
              <td>R E T R O •</td>
            </tr>
            <tr>
              <th scope="row">M. Halim</th>
              <td>BlekZhaoldyeck</td>
            </tr>
            <tr>
              <th scope="row">Rama Pramu Wicaksono</th>
              <td>orangmales</td>
            </tr>
            <tfoot>
              <tr>
                <td class="fw-bold text-center" colspan="2">Total Point</td>
                <td class="fw-bold text-center">42</td>
              </tr>
            </tfoot>
          </tbody>
        </table>
      </div>

      <h3 class="fw-bold text-capitalize text-center">3rd Winner Team WONG EDAN</h3>
      <div class="table-responsive">
        <table class="table table-striped ">
          <thead>
            <tr class="border-top">
              <th scope="col">Nama Anggota</th>
              <th scope="col">Nickname</th>
              <th class="text-center" scope="col">Asal Cabang</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">Rudi Tris Tiyanto</th>
              <td>BoweZt ' Edan</td>
              <td class="text-center align-middle" rowspan="3">Jawa Timur</td>
            </tr>
            <tr>
              <th scope="row">Perdana N. Badroes</th>
              <td>BREWOK ' Edan</td>
            </tr>
            <tr>
              <th scope="row">Defri Endra S.</th>
              <td>Suka Di Emut</td>
            </tr>
            <tr>
              <th scope="row">Seto Hariaji</th>
              <td>PPC . Talijiwo</td>
              <td class="text-center align-middle">Jawa Barat</td>
            </tr>
            <tfoot>
              <tr>
                <td class="fw-bold text-center" colspan="2">Total Point</td>
                <td class="fw-bold text-center">38</td>
              </tr>
            </tfoot>
          </tbody>
        </table>
      </div>

      {{-- MVP TABLE  --}}
      <h3 class="fw-bold text-capitalize text-center text-info">MVP</h3>
      <div class="table-responsive">
        <table class="table table-striped ">
          <thead>
            <tr class="border-top">
              <th scope="col">Nama Anggota</th>
              <th scope="col">Username</th>
              <th scope="col">Asal Cabang</th>
              <th class="text-center" scope="col">Total Kill</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">Doli Zontia</th>
              <td>R E T R O •</td>
              <td>Kepulauan Riau</td>
              <td class="text-center">12</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>
@endsection