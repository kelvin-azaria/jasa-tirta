@extends('layouts.home')
@section('title','Peraturan per Lomba')

@section('content')
  <section id="rule">
    <div class="container">
      <h1 class="fw-bold text-capitalize text-center">turnamen catur online HUT jasa raharja</h1>
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
              <img src="{{ asset('chess-rule-3.jpg') }}" class="rounded w-100" alt="...">
            </div>
            <div class="col">
              <img src="{{ asset('chess-rule-4.jpg') }}" class="rounded w-100" alt="...">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection