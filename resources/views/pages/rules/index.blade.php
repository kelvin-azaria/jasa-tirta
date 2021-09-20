@extends('layouts.home')
@section('title','Peraturan per Lomba')

@section('content')
  <section id="rule">
    <div class="container">
      <section id="pubgRule">
        <h1 class="fw-bold text-capitalize text-center">PUBG mobile tournament</h1>
        <ul>
          <li class="my-2">
            Setiap team (peserta) terdiri dari 4 orang pemain dan 1 orang cadangan.
          </li>
          <li class="my-2">
            Custom lobby akan dibuat oleh pihak panitia, dan peserta wajib untuk standby 10 menit di dalam lobby sebelum pertandingan dimulai.   
          </li>
          <li class="my-2">
            Setiap perwakilan team (kapten team) wajib untuk melakukan Screenshoot pada akhir permainan (hasil akhir untuk rank dan total kill). Dan upload hasil screenshoot ke grup Whatsapp yang sudah di siapkan oleh pihak panitia.
          </li>
          <li class="my-2">
            Apabila team yang terdaftar lebih dari 16 team, maka pada babak penyisihan akan dibagi menjadi 2 grup, yaitu Grup A dan B
            <div class="row justify-content-md-center my-3">
              <div class="col-6">
                <img src="{{ asset('img/pubg-team-table.png') }}" class="rounded w-100" alt="...">
              </div>
            </div>
          </li>
          <li class="my-2">
            Setiap grup akan bermain sebanyak 2x (2 map) untuk babak penyisihan dan 3x untuk babak semifinal dan final.
          </li>
          <li class="my-2">
            10 team dengan total nilai point terendah dari masing-masing grup akan di eliminasi dan tidak dapat meneruskan pertandingan ke babak selanjutnya.
          </li>
          <li class="my-2">
            Team yang tersisa akan menjadi 1 grup pada babak semifinal dan final. Dan akan bermain sebanyak 3x (3map).
          </li>
          <li class="my-2">
            3 team dengan total nilai point tertinggi akan menjadi pemenang dari pertandingan.
          </li>
        </ul>
      </section>
      <hr>
      <section id="chessRule">
        <h1 class="fw-bold text-capitalize text-center">turnamen catur online HUT jasa raharja</h1>
        <ul>
          <li class="my-2">
            Turnamen diikuti oleh karyawan Jasa Raharja 
          </li>
          <li class="my-2">
            Free Pendaftaran   
          </li>
          <li class="my-2">
            Tanggal pelaksanaan: 25 September 2021
            <ul>
              <li class="my-2">
                Acara Pembukaan:
              </li>
              <li class="my-2">
                Technical Meeting: 23 September 2021 
              </li>
              <li class="my-2">
                Trial 1: 24 September
              </li>
              <li class="my-2">
                Pelaksanaan:
                <br>
                <span class="fw-bold text-muted">Live kamera zoom (sesuai Protocol FIDE) </span>
              </li>
            </ul>
          </li>
          <li class="my-2">
            Sistem Pertandingan 
            <ul>
              <li class="my-2">
                Swiss 7 babak
              </li>
              <li class="my-2">
                Kontrol waktu : 10+3 (10 Menit Increment 3 Detik) 
              </li>
            </ul>
          </li>
          <li class="my-2">
            Pengawasan Pertandingan
            <ul>
              <li class="my-2">
                Peserta wajib menggunakan 2 device
                <br>
                <span class="fw-bold"> 1 untuk bertanding menggunakan lichess</span>
                <br>
                <span class="fw-bold"> 1 lagi untuk zoom meeting (sebagai kontrol panitia/wasit)</span>
              </li>
              <li class="my-2">
                ID zoom harus sesuai dengan nama peserta yang terdaftar 
              </li>
              <li class="my-2">
                Pendaftaran wajib rekomendasi jasa raharja
              </li>
              <li class="my-2">
                Untuk masuk link zoom 30 menit sebelum pertandingan  
              </li>
              <li class="my-2">
                Untuk trial, diarahkan untuk ikut turnamen di lichess dengan kontrol waktu yang mendekati.  
              </li>
              <li class="my-2">
                Peserta melengkapi identitas di profile akun lichess masing-masing berisi nama lengkap dan Unit Kerja / Cabang [ Kantor Pusat / Cabang ] 
                <br>
                Contoh:
                <br>
                Nama : Retno Utami
                <br>
                Unit Kerja : Divisi Human Capital
                <ul class="my-2">
                  <li>
                    Peserta membuat akun lichess sesuai menggunakan nama dan Unit Kerja / Cabang [ Kantor Pusat / Cabang ]
                    <br>
                    Contoh : RetnoUtami_DivisiHumanCapital
                  </li>
                </ul>
              </li>
            </ul>
          </li>
        </ul>
        <h2 class="fw-bold text-capitalize">regulasi pertandingan</h2>
        <ul style="list-style-type: value;">
          <li class="my-2">
            Pastikan KONEKSI INERNET LANCAR. Mainkan catur online Lichess bisa dari LAPTOP atau HP. Memainkan Lichess dari BROWSER, bukan dari App Lichess (jika pakai HP). Kekalahan karena koneksi internet lemot atau terputus adalah resiko dari pemain. 
          </li>
          <li class="my-2">
            Pastikan semua peserta sudah join di Lichess (id.lichess.org) dan sudah bisa Login di situs Lichess dengan memasukkan username dan password dengan benar. 
          </li>
          <li class="my-2">
            Join/gabung ke team dengan mengklik alamat URL yang sudah dibagikan oleh panitia Tunggu konfirmasi dari Admin/Team Leader/Wasit Turnamen. 
          </li>
          <li class="my-2">
            Gabung ke room dengan klik room turnamennya (di bawah tulisan Tournaments di sebelah kanan tengah yang di sebelah kirinya ada icon KELINCI warna tulisan kuning/orange) atau bisa juga klik LINK TURNAMEN YANG DIBAGIKAN PANITIA, tunggu halaman turnamen muncul dan klik join/gabung kotak warna hijau. 
          </li>
          <li class="my-2">
            Pertandingan menggunakan sistem Swiss dengan jumlah babak menyesuaikan jumlah peserta, 
            Dengan mengikuti aturan dari Lichess (sudah sesuai dengan aturan FIDE) termasuk untuk pemakaian nilai Tie-Break dan rankingnya. Jeda waktu antar babak adalah 1 Menit. Menang diberi poin 1, remis 0.5 dan kalah 0. Bye diberi nilai 1. Acuan 
            Lichess Swiss Rule: <a href="https://lichess.org/swiss">https://lichess.org/swiss </a> 
          </li>
          <li class="my-2">
            Peserta yang terlambat masuk room turnamen, meski itu hanya 1 detik, maka akan diberi nilai 0.5 dan baru bisa bertanding di babak berikutnya menunggu semua games di babak saat ini selesai main semuanya. Peserta harus join setidaknya sebelum separuh dari jumlah total babak (kalo 6 babak berarti wajib join sebelum babak3), selebihnya tidak bisa join turnamen. 
          </li>
          <li class="my-2">
            Peserta siap bertanding dan menunggu turnamen dimulai. Pairing akan otomatis dibuat oleh Lichess jika waktunya telah tiba. Peserta tinggal duduk manis menunggu papan catur muncul di layar sebagai tanda dimulai pertandingan. Pertandingan dimulai ditandai dengan munculnya papan catur secara otomatis di browser untuk dimainkan. Mainkan caturnya sampai selesai. Dalam sistem Swiss, semua peserta dalam turnamen ini tetap bertanding terus sampai semua babak selesai, tidak peduli hasilnya menang kalah atau remis. 
          </li>
          <li class="my-2">
            Setiap selesai bertanding tiap babaknya ditandai dengan munculnya angka hasil skor, jangan lupa untuk klik ‘back to tournament’ atau ‘kembali ke turnamen’, agar akun dipairing di babak selanjutnya oleh server Lichess. Tunggu semua games selesai main di semua meja. 
          </li>
          <li class="my-2">
            Jika ada masalah dengan server Lichess di pusat, peserta supaya merefresh kembali browsernya untuk melanjutkan pertandingan. 
          </li>
          <li class="my-2">
            Jika turnamen telah selesai, akan muncul para pemenang di halaman room turnamen yang diikuti. Juara 1,2,3 akan muncul Trophy dan nama akun peserta di sebelah atas halaman turnamen. Ranking akhir ditentukan oleh Nilai Utama dan Nilai Tie-Break. Penentuan skor dan ranking semua otomatis diatur oleh server Lichess, tanpa campur tangan dari wasit. 
          </li>
          <li>
            Semua peserta wajib video live zoom dengan pencahayaan yang baik, agar ketika bertanding dengan tampilan dari arah belakang kanan/kiri sehingga tampilan Lichess jelas terlihat di laptop/HP dan peserta bisa kelihatan sebagian wajahnya. Audio ZOOM supaya selalu dalam keadaan hidup, kecuali wasit menginstruksikan lain. Ketentuan lebih lengkap ada di Regulasi Terkait Live Camera Zoom di bagian bawah. 
          </li>
          <li class="my-2">
            Semua peserta dilarang meninggalkan tempat pertandingan dari depan laptopnya ketika pertandingan berlangsung. Peserta diperkenankan meninggalkan pertandingan pada jam istirahat. 
          </li>
          <li class="my-2">
            Semua peserta dilarang berbicara, dan tak boleh ada suara (noise, musik dll) yang mengganggu dari peserta saat video zoom live. 
          </li>
          <li class="my-2">
            Bagi peserta yang bertanding catur online Lichess menggunakan HP/TAB diperkenankan, tapi tetap mengacu pada aturan No.10.  
          </li>
          <li class="my-2">
            Jika ada yang ditanyakan oleh peserta kepada wasit, bisa via suara zoom, chat zoom atau bisa juga memberi tanda icon tangan warna kuning lebih dulu di app zoomnya. 
          </li>
          <li class="my-2">
            Akun Lichess plat merah dilarang mengikuti turnamen. Semua peserta dilarang minta bantuan komputer/engine. Akun Lichess dilarang dimainkan oleh orang lain (JOKI).  Peserta dilarang mengetikkan kata di chat Lichess yang mengandung kata jorok, ujaran kebencian, dan sejenisnya. Segala pelanggaran  bisa terkena plat merah dan diclosed/dibanned oleh Lichess. 
          </li>
          <li class="my-2">
            Semua akun Lichess peserta yang dalam pertandingan terkena plat merah atau diclosed karena melanggar kebijakan Lichess, otomatis peserta tersebut gugur atau didiskualifikasi dari turnamen ini. 
          </li>
          <li class="my-2">
            Pemain yang kedapatan curang akun dibanned terkena plat merah (utamanya karena disebabkan kecurangan engine), maka pemain yang bersangkutan dikenai sanksi tidak boleh ikut turnamen catur online yang diadakan oleh panitia untuk kemudian hari. Kecuali 
            jika akun yang digunakan bisa dipulihkan kembali setelah banding ke Lichess. 
          </li>
        </ul>
        <h2 class="fw-bold text-capitalize">regulasi terkait live camera ZOOM saat bertanding catur</h2>
        <ul style="list-style-type: disc;">
          <li>
            <h3 class="fw-bold">Komputer</h3>
            <ul style="list-style-type: lower-alpha;">
              <li class="my-2">
                Komputer yang Anda gunakan dengan nyaman untuk panggilan video.   
              </li>
              <li class="my-2">
                Jika anda tidak yakin, silakan uji lebih dahulu sebelum dipergunakan.    
              </li>
            </ul>
          </li>
          <li>
            <h3 class="fw-bold">Koneksi internet</h3>
            <p>Konektivitas internet adalah tanggung jawab pemain.  Pastikan anda memiliki koneksi yang cepat, andal yang anda percayai.</p>
          </li>
          <li>
            <h3 class="fw-bold">Kamera Web (Device Ke-2 untuk ZOOM)</h3>
            <ul style="list-style-type: lower-alpha;">
              <li class="my-2">
                Webcam yang berfungsi sebagai device ke-2 adalah wajib sehingga arbiter dapat dengan nyaman melihat anda dan lingkungan anda. Fungsi webcam bisa digantikan dengan camera di smartphone.  
              </li>
              <li class="my-2">
                Memakai webcam yang memiliki resolusi minimal 720p dan lebih dari cukup untuk tujuan kami. Silakan mengujinya dulu untuk memastikan itu berfungsi seperti yang diharapkan.     
              </li>
            </ul>
          </li>
          <li>
            <h3 class="fw-bold">Pencahayaan</h3>
            <p>Pastikan pencahayaan di kamera anda memadai, tidak terlalu gelap, tidak terlalu terang dan jelas terlihat, termasuk pada wajah pemain.  Harap pastikan bahwa anda dan lingkungan anda akan terlihat di kamera zoom setiap saat bertanding. 
            </p>
          </li>
          <li>
            <h3 class="fw-bold">Mikrofon/Audio</h3>
            <ul style="list-style-type: lower-alpha;">
              <li class="my-2">
                Mikrofon yang berfungsi adalah persyaratan.  Mikrofon biasanya terpasang di komputer atau device ke-2 yang anda gunakan.   
              </li>
              <li class="my-2">
                Ini akan membantu memastikan komunikasi dua arah bisa dipahami dengan jelas bagi semua pihak.     
              </li>
              <li class="my-2">
                Sebagian besar komputer dan kamera web modern dilengkapi dengan mikrofon internal.  Jika anda pernah melakukan panggilan web sebelumnya, maka anda memiliki mikrofon.   
              </li>
            </ul>
          </li>
          <li>
            <h3 class="fw-bold">Speaker</h3>
            <ul style="list-style-type: lower-alpha;">
              <li class="my-2">
                Speaker yang berfungsi adalah wajib.  Anda harus dapat mendengar arbiter.   
              </li>
              <li class="my-2">
                Harap pastikan speaker dihidupkan sebelum kompetisi dimulai sehingga arbiter dapat berkomunikasi dengan anda.  Wasit dapat meminta anda untuk menaikkan suara anda untuk mengamati suara bising yang berasal dari panggilan anda.  Pemain harus mematuhi arahan wasit ini.  Selama bermain, headphone tidak akan diizinkan.     
              </li>
            </ul>
          </li>
          <li>
            <h3 class="fw-bold">Area Bertanding</h3>
            <ul style="list-style-type: lower-alpha;">
              <li class="my-2">
                Area bertanding anda harus bersih dari semua perangkat elektronik lain kecuali komputer bermain anda.      
              </li>
              <li class="my-2">
                Ponsel dan perangkat genggam lainnya yang tidak digunakan untuk keperluan zoom, harus jauh dari pandangan dan jangkauan.    
              </li>
              <li class="my-2">
                Area bertanding tidak diperbolehkan ada orang lain di dekat sekitar anda, tidak boleh ada bantuan catur dari orang lain di sekitar anda.  
              </li>
            </ul>
          </li>
        </ul>
        <h2 class="fw-bold text-capitalize">foto posisi ZOOM saat bertanding </h2>
        <div class="row">
          <div class="col-lg">
            <div class="row pb-4">
              <div class="col">
                <img src="{{ asset('img/chess-rule-1.jpg') }}" class="rounded w-100" alt="...">
              </div>
              <div class="col">
                <img src="{{ asset('img/chess-rule-2.jpg') }}" class="rounded w-100" alt="...">
              </div>
            </div>
          </div>
          <div class="col-lg">
            <div class="row pb-4">
              <div class="col">
                <img src="{{ asset('img/chess-rule-3.jpg') }}" class="rounded w-100" alt="...">
              </div>
              <div class="col">
                <img src="{{ asset('img/chess-rule-4.jpg') }}" class="rounded w-100" alt="...">
              </div>
            </div>
          </div>
        </div>
        <h3 class="fw-bold text-danger text-center">Tidak boleh ada perangkat lain seperti laptop lain, hp, dan headset.  </h3>
      </section>
      <hr>
      <section id="bridgeRule">
        <h1 class="fw-bold text-capitalize text-center">Pertandingan Bridge Online</h1>
        <h2 class="fw-bold text-capitalize">Syarat Umum Bridge Online</h2>
        <ul>
          <li class="my-2">
            Pertandingan ini dilaksanakan dalam rangka Hari Olahraga Nasional 2021.
          </li>
          <li class="my-2">
            Peserta adalah Perorangan yang merupakan karyawan PT Jasa Raharja.  
          </li>
          <li class="my-2">
            Pertandingan Bridge Online akan menggunakan patform Bridge Base Online (www.bridgebase.com) sebagai media pertandingan.
          </li>
          <li class="my-2">
            Setiap peserta wajib memiliki Nama Pengguna (username) BBO dan hanya berhak mendaftarkan 1 (satu) Nama Pengguna BBO. Cara membuat akun BBO dapat dilihat di : <a href="https://www.ebu.co.uk/ebuscore-wiki/bboregistering">https://www.ebu.co.uk/ebuscore-wiki/bboregistering </a> 
          </li>
          <li class="my-2">
            Pendaftaran Peserta dilakukan melalui GoogleForm dan akan diverifikasi oleh Panitia Pelaksana untuk keabsahan peserta.
          </li>
          <li class="my-2">
            Akan dibuat WAG untuk kelancaran komunikasi.
          </li >
          <li class="my-2">
            Jenis Pertandingan adalah kombinasi Pasangan dan Perorangan. 
            <ul>
            <li class="my-2">Menggunakan Random Hand (bukan Best Hand).</li>
            <li class="my-2">Maksimal 32 papan, masing-masing 16 papan untuk setiap Babak.</li>
            <li class="my-2">Penilaian Match Points (Top-Bottom).</li>
            </ul>
          </li>
          <li class="my-2">
            Mekanisme pertandingan:
            <ul>
              <li class="my-2">
                Panitia Pelaksana membuat WAG yang terdiri dari Panpel. Pimpinan Pertandingan, Calon Peserta beserta semua pihak yang terkait.
              </li>
              <li class="my-2">
                Setiap peserta wajib membuat Nama Pengguna (user ID) BBO. Tutorial akan diberikan di WAG.
              </li>
              <li class="my-2">
                Pendaftaran peserta pada GForm akan dibuka pada Senin 20 September 2021, ditutup Rabu 22 September 2021.
              </li>
              <li class="my-2">
                Trial Match dilakukan pada tanggal 23 September 2021 setelah Rapat Teknis.
              </li>
              <li class="my-2">
                Setiap peserta diwajibkan untuk melakukan re-registrasi di BBO 120 menit sebelum pertandingan dimulai.
              </li>
              <li class="my-2">
                Setiap peserta diwajibkan untuk online pada BBO (standby) 10 menit sebelum pertandingan dimulai.
              </li>
            </ul>
          </li>
          <li class="my-2">
            Waktu pertandingan ditentukan oleh Pimpinan Pertandingan dan Panitia Pelaksana.
          </li>
          <li class="my-2">
            Hasil Pertandingan akan dilaporkan secara resmi oleh Pemimpin Pertandingan.
          </li>
          <li class="my-2">
            Akan dilakukan Rapat Teknis Pertandingan tanggal 23 September 2021, semua peserta sudah harus memiliki Nama Pengguna (user ID) BBO.
          </li>
          <li class="my-2">
            Penjelasan lanjut pada Rapat Teknis.
          </li>
        </ul>
        <h2 class="fw-bold text-capitalize">Jadwal</h2>
        <ul>
          <li class="my-2">
            PERTANDINGAN (tgl 26 September 2021).
          </li>
          <li class="my-2">
            09:30-12:30 Babak Penyisihan berupa Pertandingan Pasangan.
          </li>
          <li class="my-2">
            15:00-18:00 Babak Final berupa Pertandingan Perorangan.
          </li>
        </ul>
      </section>
      <hr>
      <section id="bikeRule">
        <h1 class="fw-bold text-capitalize text-center">turnamen Sepeda</h1>
        <div class="row justify-content-md-center">
          <div class="col-8">
            <img class="w-100 rounded" src="{{ asset('img/bike-rule.png') }}" alt="">
          </div>
        </div>
        <h2 class="fw-bold text-capitalize">Peraturan Best Performance Ride 100 KM :</h2>
        <ul>
          <li class="my-2">
            Penilaian Best Performance adalah waktu tercepat menyelesaikan jarak yang telah ditentukan yaitu 100 KM terhitung saat lomba dimulai tanggal…pukul 00.00 WIB dan berakhir pada …pukul 23.59 WIB (2 hari)
          </li>
          <li class="my-2">
            Peserta kategori Best Performance Ride 100 KM hanya diperbolehkan menyelesaikan 100 KM maksimal 2 hari workout di tanggal … pukul 00.00 WIB dan berakhir pada …pukul 23.59 WIB. Jika lebih dari 2 (dua) workout maka peserta tidak termasuk nominasi Best Performance.   
          </li>
          <li class="my-2">
            Peserta yang ingin mengikuti kategori Best Performance Ride 100 KM hanya diperbolehkan 2 X upload workout di website paling lambat tanggal …pukul 23.59 WIB, dan jika peserta ingin mencoba mengikuti kategori KM terbanyak bisa memulai workout dan pelaporannya di tanggal … setelah kategori Best Performance ditutup.
          </li>
          <li class="my-2">
            Peserta yang sudah memenuhi syarat selanjutnya akan dinilai waktu yang paling cepat berdasarkan elapsed time hasil workout yang dilaporkan peserta di STRAVA.
          </li>
          <li class="my-2">
            Pemenang ditentukan berdasarkan waktu bersepeda tercepat (elapsed time) bukan berdasarkan upload tercepat.
          </li>
          <li class="my-2">
            Yang menjadi acuan panitia adalah hasil workout yang sudah di upload dan dilaporkan di web resmi terhitung tanggal … pukul 00.00 WIB dan berakhir pada …pukul 23.59 WIB.
          </li class="my-2">
          <li class="my-2">
            Peserta diharapkan segera melaporkan hasil workoutnya ke website yang telah ditentukan. Segala kesalahan selama proses pelaporan seperti tidak stabilnya jaringan internet sehingga peserta tidak dapat melaporkan di waktu yang telah ditentukan menjadi tanggung jawab masing-masing  peserta.
          </li>
          <li class="my-2">
            Peserta wajib menyelesaikan ride 100 KM batas maksimal kelebihan jarak adalah 1 KM dari 100 KM, jika ada kelebihan jarak lebih dari 101 KM maka peserta tidak termasuk nominasi Best Performance kategori ride.
          </li>
          <li class="my-2">
            Kelebihan jarak jika mempengaruhi waktu tercepat peserta maka menjadi tanggung jawab masing-masing peserta.
          </li>
          <li class="my-2">
            Setiap peserta wajib mengisi seluruh form pelaporan yang disediakan seperti jarak tempuh, waktu dan link STRAVA sesuai hasil yang diperoleh.
          </li>
          <li class="my-2">
            Waktu yang menjadi acuan perhitungan panitia adalah elapsed time (durasi dari saat peserta menekan tombol start di perangkat atau ponsel hingga saat peserta menyelesaikan aktifitas termasuk saat berhenti di lampu lalu lintas, istirahat, ke kamar mandi, berfoto mempause workout dll)
          </li>
          <li class="my-2">
            Nama peserta yang didaftarkan harus sesuai dengan nama peserta pada NIK
          </li>
          <li class="my-2">
            Peserta hanya bisa memenangkan 1 kategori lomba Best Performance 100 KM atau kilometer terbanyak, dan jika ada peserta yang masuk nominasi juara di 2 kategori maka salah satu kategori akan gugur dan diambil nominasi hadiah tertinggi diantara 2 kategori ini.
          </li>
          <li class="my-2">
            Penilaian calon Pemenang/ Potential Winner hanya dilakukan kepada peserta sepeda yang dilakukan di outdoor dst. Bagi peserta lain yang menggunakan sepeda indoor, sepeda elektrik hanya akan dinilai sebagai finisher dan tidak masuk dalam penilaian calon juara.
          </li>
          <li class="my-2">
            Calon pemenang akan diverifikasi terlebih dahulu oleh panitia melalui wawancara untuk menghindari kecurangan.
          </li>
          <li class="my-2">
            Setiap peserta wajib untuk memenuhi protokol kesehatan dan peraturan PPKM yang berlaku didaerah masing-masing peserta. Jika terjadi pelanggaran peraturan PPKM oleh peserta maka menjadi tanggung jawab masing-masing.
          </li>
          <li class="my-2">
            Keputusan panitia tidak dapat diganggu gugat dan bersifat mutlak.
          </li>
        </ul>
      </section>
      <hr>
      <section id="runRule">
        <h1 class="fw-bold text-capitalize text-center">turnamen lari</h1>
        <h2 class="fw-bold text-capitalize">Syarat Umum Lomba Lari</h2>
        <ul>
          <li class="my-2">
            Pendaftaran dibuka untuk pegawai Jasa Raharja (aktif) 
          </li>
          <li class="my-2">
            Download aplikasi JRku pada Playstore atau AppStore pada smartphone   
          </li>
          <li class="my-2">
            Pendaftaran dapat dilakukan melalui link yang terdapat di dalam Aplikasi JRku
          </li>
          <li class="my-2">
            Peserta WAJIB memiliki aplikasi dan akun STRAVA, kemudian pada aplikasi STRAVA wajib mengikuti Group/Club "JR Run Olimpiade" untuk mendaftar sebagai peserta (link PRIVATE)
          </li>
          <li class="my-2">
            Peserta WAJIB menggunakan nama lengkap (tdk boleh nama alias/panggilan) di STRAVA dan akun tidak di private
          </li>
          <li class="my-2">
            1 peserta hanya boleh memilih dan mengikuti 1 jenis kategori lomba
          </li class="my-2">
          <li class="my-2">
            Kompetisi bersifat single submission (hanya boleh satu kali submit yang dianggap sah adalah submission yang pertama) 
          </li>
          <li class="my-2">
            Pace lari yang diterima oleh panitia adalah minimal 5 menit/KM dan maks 12 menit/KM
          </li>
          <li class="my-2">
            Peserta tidak diperkenankan berlari di treadmill
          </li>
          <li class="my-2">
            Jika terdapat permasalah dikarenakan data tidak terekam pada aplikasi STRAVA, menjadi tanggung jawab peserta masing masing
          </li>
          <li class="my-2">
            Submit hasil lari di <a href="{{ url('https://olimpiadejr2021.com/') }}">https://olimpiadejr2021.com/</a>
          </li>
          <li class="my-2">
            Peserta boleh berlari kapan saja mulai tanggal xx September pukul xx.xx WIB sampai dengan tanggal xx September 2021 pukul xx.xx WIB
          </li>
        </ul>
        <h2 class="fw-bold text-capitalize">Tantangan /Kategori</h2>
        <ul>
          <li class="my-2">
            Virtual Run 10K (Single Submit)
          </li>
          <li class="my-2">
            Kategori Kelas Male dan Female
          </li>
        </ul>
      </section>
    </div>
  </section>
@endsection