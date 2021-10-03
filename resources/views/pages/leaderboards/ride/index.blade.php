@extends('layouts.home')
@section('banner')
  <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ asset('img/banner-leaderboard-bike.jpg') }}" class="d-block w-100" alt="...">
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
      <h1 class="fw-bold text-capitalize text-center">leaderboards lomba ride putra</h1>
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
              <td>Bagus Tri Maistiyanto</td>
              <td class="text-center">02-10-2021</td>
              <td class="text-center">2:57:38</td>
              <td class="text-center">100.13 km</td>
              <td class="text-end pe-3">
                <a href="https://www.strava.com/activities/6049655561">
                  https://www.strava.com/activities/6049655561
                </a>
              </td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Nurvi Murdiyanto</td>
              <td class="text-center">02-10-2021</td>
              <td class="text-center">3:34:42</td>
              <td class="text-center">100.45 km</td>
              <td class="text-end pe-3">
                <a href="https://www.strava.com/activities/6049867676">
                  https://www.strava.com/activities/6049867676
                </a>
              </td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Agus Ardian Hanifa</td>
              <td class="text-center">02-10-2021</td>
              <td class="text-center">3:49:55</td>
              <td class="text-center">100.51 km</td>
              <td class="text-end pe-3">
                <a href="https://www.strava.com/activities/6049858039">
                  https://www.strava.com/activities/6049858039
                </a>
              </td>
            </tr>
            <tr>
              <th scope="row">4</th>
              <td>Munawir</td>
              <td class="text-center">02-10-2021</td>
              <td class="text-center">5:53:37</td>
              <td class="text-center">100.07 km</td>
              <td class="text-end pe-3">
                <a href="https://www.strava.com/activities/6050281630">
                  https://www.strava.com/activities/6050281630
                </a>
              </td>
            </tr>
            <tr>
              <th scope="row">5</th>
              <td>Firdaus</td>
              <td class="text-center">02-10-2021</td>
              <td class="text-center">6:06:29</td>
              <td class="text-center">105.2 km</td>
              <td class="text-end pe-3">
                <a href="https://www.strava.com/activities/6050181670">
                  https://www.strava.com/activities/6050181670
                </a>
              </td>
            </tr>
            <tr>
              <th scope="row">6</th>
              <td>Ahmad Ari Prasojo</td>
              <td class="text-center">02-10-2021</td>
              <td class="text-center">6:07:57</td>
              <td class="text-center">102.87 km</td>
              <td class="text-end pe-3">
                <a href="https://www.strava.com/activities/6050226103">
                  https://www.strava.com/activities/6050226103
                </a>
              </td>
            </tr>
            <tr>
              <th scope="row">7</th>
              <td>Barkah Wahyu Budi Setiaji</td>
              <td class="text-center">02-10-2021</td>
              <td class="text-center">6:12:10</td>
              <td class="text-center">100.3 km</td>
              <td class="text-end pe-3">
                <a href="https://www.strava.com/activities/6049995844">
                  https://www.strava.com/activities/6049995844
                </a>
              </td>
            </tr>
            <tr>
              <th scope="row">8</th>
              <td>Mochamad Iqbal</td>
              <td class="text-center">02-10-2021</td>
              <td class="text-center">6:50:09</td>
              <td class="text-center">100.54 km</td>
              <td class="text-end pe-3">
                <a href="https://www.strava.com/activities/6050438516">
                  https://www.strava.com/activities/6050438516
                </a>
              </td>
            </tr>
            <tr>
              <th scope="row">9</th>
              <td>Rudianto Lubis</td>
              <td class="text-center">02-10-2021</td>
              <td class="text-center">7:04:48</td>
              <td class="text-center">102.26 km</td>
              <td class="text-end pe-3">
                <a href="https://www.strava.com/activities/6050466410">
                  https://www.strava.com/activities/6050466410
                </a>
              </td>
            </tr>
            <tr>
              <th scope="row">10</th>
              <td>Toto Hendro</td>
              <td class="text-center">02-10-2021</td>
              <td class="text-center">10:31:52</td>
              <td class="text-center">100.14 km</td>
              <td class="text-end pe-3">
                <a href="https://www.strava.com/activities/6051476881">
                  https://www.strava.com/activities/6051476881
                </a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>

      <h1 class="fw-bold text-capitalize text-center">leaderboards lomba ride putri</h1>
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
              <td>Nuvaria Irianti</td>
              <td class="text-center">02-10-2021</td>
              <td class="text-center">4:16:16</td>
              <td class="text-center">50.03 km</td>
              <td class="text-end pe-3">
                <a href="https://www.strava.com/activities/6050915565">
                  https://www.strava.com/activities/6050915565
                </a>
                <a href="https://www.strava.com/activities/6049894251">
                  https://www.strava.com/activities/6049894251
                </a>
              </td>
            </tr>
            <tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>
@endsection