@extends('layouts.home')
@section('banner')
  <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ asset('img/banner-leaderboard-run.jpg') }}" class="d-block w-100" alt="...">
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
      <h1 class="fw-bold text-capitalize text-center">leaderboards lomba run</h1>
      <p class="text-muted text-capitalize text-center mb-4">Terakhir diperbaharui 2 Oktober 2021</p>
      <div class="table-responsive">
        <table class="table table-striped ">
          <thead>
            <tr class="border-top">
              <th scope="col">#</th>
              <th scope="col">Nama</th>
              <th class="text-center" scope="col">Tanggal Aktifitas</th>
              <th class="text-center" scope="col">Durasi Aktifitas (Elapsed Time)</th>
              <th class="text-center" scope="col">Jarak yang Ditempuh</th>
              <th class="text-end pe-3" scope="col">Link Strava</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Awat Attamimi</td>
              <td class="text-center">02-10-2021</td>
              <td class="text-center">51:15</td>
              <td class="text-center">10.0 km</td>
              <td class="text-end pe-3">
                <a href="https://www.strava.com/activities/6049181135">
                  https://www.strava.com/activities/6049181135
                </a>
              </td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Jenius Romadoni</td>
              <td class="text-center">02-10-2021</td>
              <td class="text-center">1:03:17</td>
              <td class="text-center">10.9 km</td>
              <td class="text-end pe-3">
                <a href="https://www.strava.com/activities/6049901649">
                  https://www.strava.com/activities/6049901649
                </a>
              </td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Dimas Hendriyanto</td>
              <td class="text-center">02-10-2021</td>
              <td class="text-center">1:07:16</td>
              <td class="text-center">10.1 km</td>
              <td class="text-end pe-3">
                <a href="https://www.strava.com/activities/6049248946">
                  https://www.strava.com/activities/6049248946
                </a>
              </td>
            </tr>
            <tr>
              <th scope="row">4</th>
              <td>Ujang Setyawan</td>
              <td class="text-center">02-10-2021</td>
              <td class="text-center">1:10:11</td>
              <td class="text-center">10.0 km</td>
              <td class="text-end pe-3">
                <a href="https://www.strava.com/activities/6049289526">
                  https://www.strava.com/activities/6049289526
                </a>
              </td>
            </tr>
            <tr>
              <th scope="row">5</th>
              <td>Fawzan Rinaldy</td>
              <td class="text-center">02-10-2021</td>
              <td class="text-center">1:12:01</td>
              <td class="text-center">10.3 km</td>
              <td class="text-end pe-3">
                <a href="https://www.strava.com/activities/6049653632">
                  https://www.strava.com/activities/6049653632
                </a>
              </td>
            </tr>
            <tr>
              <th scope="row">6</th>
              <td>Salma Haris</td>
              <td class="text-center">02-10-2021</td>
              <td class="text-center">1:16:32</td>
              <td class="text-center">10.0 km</td>
              <td class="text-end pe-3">
                <a href="https://www.strava.com/activities/6049244814">
                  https://www.strava.com/activities/6049244814
                </a>
              </td>
            </tr>
            <tr>
              <th scope="row">7</th>
              <td>Reno Vancasavio</td>
              <td class="text-center">02-10-2021</td>
              <td class="text-center">1:29:59</td>
              <td class="text-center">10.0 km</td>
              <td class="text-end pe-3">
                <a href="https://www.strava.com/activities/6049628188">
                  https://www.strava.com/activities/6049628188
                </a>
              </td>
            </tr>
            <tr>
              <th scope="row">8</th>
              <td>M. Ridwan Rifani</td>
              <td class="text-center">02-10-2021</td>
              <td class="text-center">1:32:37</td>
              <td class="text-center">10.2 km</td>
              <td class="text-end pe-3">
                <a href="https://www.strava.com/activities/6049590859">
                  https://www.strava.com/activities/6049590859
                </a>
              </td>
            </tr>
            <tr>
              <th scope="row">9</th>
              <td>Aditya Kusuma</td>
              <td class="text-center">02-10-2021</td>
              <td class="text-center">1:35:56</td>
              <td class="text-center">10.0 km</td>
              <td class="text-end pe-3">
                <a href="https://www.strava.com/activities/6049560316">
                  https://www.strava.com/activities/6049560316
                </a>
              </td>
            </tr>
            <tr>
              <th scope="row">10</th>
              <td>Adityo Hananto</td>
              <td class="text-center">02-10-2021</td>
              <td class="text-center">1:55:53</td>
              <td class="text-center">10.1 km</td>
              <td class="text-end pe-3">
                <a href="https://www.strava.com/activities/6051323587">
                  https://www.strava.com/activities/6051323587
                </a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>
@endsection