@extends('layouts.user')

@section('content')

  <h2 class="text-white fw-bold">Selamat Datang {{ $user->name }},</h2>
  
  <div class="bg-gradient w-100 my-2"></div>

  <div class="row">
    @if (session('warning'))
      <div class="alert alert-warning alert-dismissible fade show" role="alert">
        {{ session('warning') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif
    <div class="col-md-5">
      <div class="card bg-lightdarkblue my-3">
        <img src="{{ asset('img/pendukung-lomba-chess.jpg') }}" class="card-img-top" alt="Akun JR-ku">
      </div>
    </div>
      <div class="col-md-7">
        <div class="card bg-lightdarkblue my-3">
          <div class="card-body text-white">
            @if ($is_registered)
              <h3 class="card-title fw-bold text-center text-capitalize">Anda <strong class="text-primary">TELAH TERDAFTAR</strong> di lomba {{ $user->competition }} Online!</h3>
              <hr>
              @if ($google_form_status)
              <div class="row text-white text-center my-3">
                <h4>Jadwal Pertandingan</h3>
              </div>
              <div class="table-responsive">
                <table  class="table text-white-50 table-borderless table-responsive">
                  <tr>
                    <th>Hari</th>
                    <th>Tanggal</th>
                    <th>Waktu</th>
                  </tr>
                  <tr>
                    <td>Selasa</td>
                    <td>5 Oktober 2021</td>
                    <td>10:00 WIB</td>
                  </tr>
                </table>
              </div>
              
              <hr>

              <div class="row text-white text-center my-3">
                <h4>Jadwal Technical Meeting</h3>
              </div>
              <div class="table-responsive">
                <table  class="table text-white-50 table-borderless table-responsive">
                  <tr>
                    <th>Hari</th>
                    <th>Tanggal</th>
                    <th>Waktu</th>
                  </tr>
                  <tr>
                    <td>Jumat</td>
                    <td>1 Oktober 2021</td>
                    <td>14:00 WIB</td>
                  </tr>
                </table>
              </div>
              @else
              <p class="text-white-50">
                <strong class="text-primary"> Silahkan isi formulir Google Form Dibawah ini</strong><br>Bersifat Wajib untuk melengkapi data pendaftaran anda
              </p>
              <div class="w-100">
                <a href="https://forms.gle/wkwSAq5ZJy9JWJQN7" target="_blank" class="btn btn-success fw-bold text-white w-100">
                  Lengkapi Data Google Form Turnamen Catur Online 
                </a>
              </div>
              <p class="text-white pt-4">
                Klik tombol dibawah ini jika sudah mengisi Google Form
              </p>
              <button type="button" class="btn btn-outline-warning w-100" data-bs-toggle="modal" data-bs-target="#googleFormModal">
                  Saya Sudah Mengisi Google Form
              </button>
              <p class="text-white-50 mt-2"><i class="bi bi-exclamation-diamond-fill me-2"></i>Pastikan jika Anda sudah benar-benar mengisi dan mengirimkan Google Form tersebut</p>

              <!-- Modal -->
              <div class="modal fade" id="googleFormModal" tabindex="-1" aria-labelledby="googleFormModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content bg-dark">
                    <div class="modal-header">
                      <h5 class="modal-title text-warning fw-bold f-montserrat" id="googleFormModalLabel"><i class="bi bi-exclamation-diamond-fill me-1"></i> Konfirmasi</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      Saya telah benar-benar mengisi dan mengumpulkan data di Google Form untuk Turnamen Lomba Catur. <br>
                      <hr>
                      <strong> Jika belum maka saya akan terima konsekuensi jika tidak terdaftar dengan benar. </strong>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                      <a href="{{ route('chess.google_form_confirmation') }}" class="btn btn-outline-success ">
                        Lanjut <i class="bi bi-arrow-right-circle-fill ms-2"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              @endif
            @else
            <h3 class="card-title fw-bold text-center text-primary">Daftar Sekarang</h3>
            <p>
              Sebelum mendaftar harap baca terlebih dahulu peraturan dan mekanisme 
              pertandingan Catur Online ini melalui link berikut
            </p>
              <a href="{{ route('rule.index') }}" class="btn w-100 btn-outline-info">Peraturan Catur Online</a> 
              <hr>
              <p class="text-white-50">
                Apabila sudah mengetahui peraturan dan mekanisme pertandingan, daftar segera dengan mengklik tombol dibawah ini.
              </p>
              <button type="button" class="btn btn-success w-100 text-white fw-bold" data-bs-toggle="modal" data-bs-target="#competitionConfirmationModal">
                Ikuti Turnamen Catur <i class="bi bi-box-arrow-in-right ms-2"></i>
              </button>
              <p class="text-white-50 mt-2"><i class="bi bi-exclamation-diamond-fill me-2"></i>Pastikan jika Anda sudah benar-benar memilih untuk mengikuti lomba Catur. <br><strong>Pilhan lomba tidak dapat diubah di kemudian hari.</strong> </p>
              <!-- Modal -->
            <div class="modal fade" id="competitionConfirmationModal" tabindex="-1" aria-labelledby="competitionConfirmationModal" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content bg-dark">
                  <div class="modal-header">
                    <h5 class="modal-title text-warning fw-bold f-montserrat" id="competitionConfirmationModal"><i class="bi bi-exclamation-diamond-fill me-1"></i> Konfirmasi Lomba</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <span class="text-white-50"> Saya akan mengikuti lomba "Catur" dalam acara Jasa Raharja Virtual Olympic kali ini</span>
                    <hr>
                    <strong> Saya Paham bahwa <span class="text-warning">tidak dapat mengubah/mengganti Lomba</span> setelah meng-klik tombol 'Daftar' dibawah ini </strong>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                    <a href="{{ route('chess.join')  }}" class="btn btn-outline-success">
                      Daftar Catur <i class="bi bi-arrow-right-circle-fill ms-2"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            @endif
          </div>
        </div>
      </div>
  </div>
@endsection
