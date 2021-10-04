<div class="my-3">
  <label for="position" class="form-label">Posisi (Rank)</label>
  <input 
    type="number" 
    class="form-control @error('position') is-invalid @enderror" 
    id="position" 
    name="position"
    placeholder="Posisi peserta pada leaderboard (ranking)"
    value="{{ old('position',$leaderboard->position ?? null) }}"
  >
</div>
<div class="my-3">
  <label for="participant_name" class="form-label">Nama Peserta</label>
  <input 
    type="text" 
    class="form-control @error('participant_name') is-invalid @enderror" 
    id="participant_name" 
    name="participant_name"
    placeholder="Masukan nama peserta"
    value="{{ old('participant_name',$leaderboard->participant_name ?? null) }}"
  >
</div>
<div class="form-group row my-3">
  <label for="participant_gender" class="col-md-4 col-form-label text-md-right">
    Jenis Kelamin
  </label>
  <div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="participant_gender" id="radioMale" value="L">
      <label class="form-check-label" for="radioMale">
        Laki-laki
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="participant_gender" id="radioFemale" value="P">
      <label class="form-check-label" for="radioFemale">
        Perempuan
      </label>
    </div>
  </div>
</div>
<div class="my-3">
  <label for="activity_date" class="form-label">Tanggal Aktifitas</label>
  <input 
    type="date" 
    class="form-control @error('activity_date') is-invalid @enderror" 
    id="activity_date" 
    name="activity_date"
    value="{{ old('activity_date',$leaderboard->activity_date ?? null) }}"
  >
</div>
<div class="my-3">
  <label for="activity_length" class="form-label">Jarak yang Ditempuh</label>
  <input 
    type="text" 
    class="form-control @error('activity_length') is-invalid @enderror" 
    id="activity_length" 
    name="activity_length"
    placeholder="Masukan jarak yang ditempuh (km)"
    value="{{ old('activity_length',$leaderboard->activity_length ?? null) }}"
  >
</div>
<div class="my-3">
  <label for="activity_duration" class="form-label">Durasi Aktifitas</label>
  <input 
    type="number" 
    class="form-control @error('activity_duration') is-invalid @enderror" 
    id="activity_duration" 
    name="activity_duration"
    placeholder="Masukan durasi aktifitas (DALAM DETIK)"
    value="{{ old('activity_duration',$leaderboard->activity_duration ?? null) }}"
  >
</div>
<div class="my-3">
  <label for="strava_activity_url_1" class="form-label">Link Strava 1</label>
  <input 
    type="text" 
    class="form-control @error('strava_activity_url_1') is-invalid @enderror" 
    id="strava_activity_url_1" 
    name="strava_activity_url_1"
    placeholder="Masukan link strava"
    value="{{ old('strava_activity_url_1',$leaderboard->strava_activity_url_1 ?? null) }}"
  >
</div>
<div class="my-3">
  <label for="strava_activity_url_1" class="form-label">Link Strava 2</label>
  <input 
    type="text" 
    class="form-control @error('strava_activity_url_2') is-invalid @enderror" 
    id="strava_activity_url_2" 
    name="strava_activity_url_2"
    placeholder="Masukan link strava ke 2 (kosongkan jika tidak ada)"
    value="{{ old('strava_activity_url_2',$leaderboard->strava_activity_url_2 ?? null) }}"
  >
</div>