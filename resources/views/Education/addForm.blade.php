@extends('app')
@section('content')
<div class="d-flex justify-content-center">
  <div class="card" style="width: 40%">
    <div class="card-header">
      Form Tambah Jenis Pendidikan
    </div>
    <div class="card-body">
      <div class="form-group">
        <form action="{{route('education.store')}}" method="post">
          @csrf
          <label for="education_type">Pendidikan</label>
          <input type="text" class="form-control @error('education_type') is-invalid @enderror" name="education_type"
            id="education_type" aria-describedby="nama" placeholder="Silahkan isi jenis pendidikan...">
          @error('education_type')
          <small class="text-danger">Data pendidikan masih kosong, silahkan diisi!</small>
          @enderror
      </div>
      <button type="submit" class="btn btn-success">Simpan</button>
      </form>
      <br><br>
      <div class="button-right">
        <a href="{{ route('education.index')}}" class="btn btn-primary">Kembali</a>
      </div>
    </div>
  </div>
</div>
@endsection