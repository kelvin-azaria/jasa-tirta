<div class="my-3">
  <label for="name" class="form-label">Nama Peserta</label>
  <input 
    type="text" 
    class="form-control @error('name') is-invalid @enderror" 
    id="name" 
    name="name"
    placeholder="Masukan nama peserta"
    value="{{ old('name',$bridge->name ?? null) }}"
  >
</div>
<div class="my-3">
  <label for="phone" class="form-label">Nomor HP/WA Peserta</label>
  <input 
    type="number" 
    class="form-control @error('phone') is-invalid @enderror" 
    id="phone" 
    name="phone"
    placeholder="Masukan nomor HP/WA peserta"
    value="{{ old('phone',$bridge->phone ?? null) }}"
  >
</div>
<div class="my-3">
  <label for="bbo_username" class="form-label">BBO Username</label>
  <input 
    type="text" 
    class="form-control @error('bbo_username') is-invalid @enderror" 
    id="bbo_username" 
    name="bbo_username"
    placeholder="Masukan nama pengguna BBO peserta"
    value="{{ old('bbo_username',$bridge->bbo_username ?? null) }}"
  >
</div>