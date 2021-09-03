<div class="row">
  <div class="col-md-6">
    {{-- NAMA --}}
    <div class="form-group">
      <label>Nama</label>
      <input 
        type="text" 
        name="name"
        class="form-control @error('name') is-invalid @enderror"
        placeholder="Masukan nama peserta anda"
        value="{{ old('name',$contestant->name ?? null) }}"/>
    </div>

    {{-- FOTO KTM --}}
    
    <div class="form-group">
      <label>Foto KTM</label>
      <input 
        type="file" 
        name="ktm_image_path" 
        class="form-control-file @error('ktm_image_path') is-invalid @enderror"/>

        @error('ktm_image_path')
          <div class="mt-2 mb-2">
              <div class="alert alert-danger" role="alert">
                {{ $message }}
              </div>
          </div>
        @enderror
      <label class=" my-3">Format file berupa .JPG dan file harus berukuran dibawah 5 Mb.</label>
    </div>

    {{-- KAMPUS --}}
    <div class="form-group">
      <label>Nama Kampus Asal</label>
      <input 
        type="text"
        name="campus_name" 
        class="form-control @error('campus_name') is-invalid @enderror"
        placeholder="Masukan nama dari kampus asal anda"
        value="{{ old('campus_name', $contestant->campus_name ?? null) }}"/>
    </div>
    <div class="form-group">
      <label>Provinsi Asal Kampus</label>
      <input 
        type="text"
        name="campus_province" 
        class="form-control @error('campus_province') is-invalid @enderror"
        placeholder="Masukan provinsi asal kampus anda"
        value="{{ old('campus_province', $contestant->campus_province ?? null) }}"/>
    </div>
    <div class="form-group">
      <label>Kota Asal Kampus</label>
      <input 
        type="text"
        name="campus_city" 
        class="form-control @error('campus_city') is-invalid @enderror"
        placeholder="Masukan nama kota asal kampus anda"
        value="{{ old('campus_city', $contestant->campus_city ?? null) }}"/>
    </div>
  </div>
  <div class="col-md-6">
    {{-- ALAMAT KTP --}}
    <div class="form-group">
      <label>Alamat KTP</label>
      <input 
        type="text"
        name="id_card_address" 
        class="form-control @error('id_card_address') is-invalid @enderror"
        placeholder="Masukan alamat lengkap yang tertera pada KTP anda"
        value="{{ old('id_card_address', $contestant->id_card_address ?? null) }}"/>
    </div>

    {{-- ALAMAT DOMISILI --}}
    <div class="form-group">
      <label>Alamat Domisili</label>
      <input 
        type="text"
        name="residence_address" 
        class="form-control @error('residence_address') is-invalid @enderror"
        placeholder="Masukan alamat tempat tinggal anda sekarang"
        value="{{ old('residence_address', $contestant->residence_address ?? null) }}"/>
    </div>

    {{-- NO HP --}}
    <div class="form-group">
      <label>Nomor Whatsapp</label>
      <div class="input-group mb-2">
        <div class="input-group-prepend">
          <div class="input-group-text">+62</div>
        </div>
        <input 
          type="text"
          name="phone" 
          class="form-control @error('phone') is-invalid @enderror"
          placeholder="Masukan nomor Whatsapp anda"
          value="{{ old('phone', $contestant->phone ?? null) }}"/>
      </div>
    </div>

    {{-- TANGGAL LAHIR --}}
    <div class="form-group">
      <label>Tanggal Lahir</label>
      <input 
        type="date"
        name="birth_date" 
        class="form-control @error('birth_date') is-invalid @enderror"
        placeholder="Masukan tanggal lahir anda"
        value="{{ old('birth_date', $contestant->birth_date ?? null) }}"/>
    </div>

    {{-- URL VIDEO --}}
    <div class="form-group">
      <label>Link postingan content Instagram</label>
      <input 
        type="text"
        name="instagram_video_url" 
        class="form-control @error('instagram_video_url') is-invalid @enderror"
        placeholder="Masukan link dari video instagram anda"
        value="{{ old('instagram_video_url', $contestant->instagram_video_url ?? null) }}"/>
    </div> 
    <div class="form-group">
      <label>Link postingan content Tiktok</label>
      <input 
        type="text"
        name="tiktok_url" 
        class="form-control @error('tiktok_url') is-invalid @enderror"
        placeholder="Masukan link dari video tiktok anda"
        value="{{ old('tiktok_url', $contestant->tiktok_url ?? null) }}"/>
    </div> 
  </div>
</div>
<div class="row">
  <div class="col">
    {{-- ALASAN --}}
    <div class="form-group">
      <label>
        Apa yang bisa kamu lakukan untuk lingkungan yang lebih baik untuk masa kini dan masa depan
      </label>
      @error('description')
        <div class="mt-2 mb-2">
            <div class="alert alert-danger" role="alert">
              {{ $message }}
            </div>
        </div>
      @enderror
      <textarea 
        name="description" 
        style="min-width: 100%"
        rows="10"
      >{{ old('description', $contestant->description ?? null) }}</textarea>
    </div>
    <div class="form-check my-4">
      <input type="checkbox" class="form-check-input" name="rights" id="rights" onClick="EnableSubmit()">
      <label class="form-check-label" for="rights">
        Dengan ini saya menyetujui bahwa Panitia dan BPDLH/IEF tidak bertanggung jawab jika di kemudian hari terdapat permasalahan hukum mengenai hak cipta dari karya (paper dan content) saya sampaikan.
      </label>
      @error('rights')
        <div class="mt-2 mb-2">
            <div class="alert alert-danger" role="alert">
              {{ $message }}
            </div>
        </div>
      @enderror
    </div>
    <div class="form-check my-4">
      <input type="checkbox" class="form-check-input" name="terms" id="terms" onClick="EnableSubmit()">
      <label class="form-check-label" for="rights">
        Dengan ini saya menyetujui bahwa content Instagram dan Tiktok yang saya unggah untuk pendaftaran dan pelaksanaan challenges kegiatan Youth Camp for Future Leader on Environment Tahun 2021 dapat digunakan oleh Panitia dan BPDLH/IEF untuk keperluan publikasi dan non komersial lainnya.
      </label>
      @error('terms')
        <div class="mt-2 mb-2">
            <div class="alert alert-danger" role="alert">
              {{ $message }}
            </div>
        </div>
      @enderror
    </div>
  </div>
</div>