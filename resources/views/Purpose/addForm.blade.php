@extends('app')
@section('content')
<div class="d-flex justify-content-center">
  <div class="card" style="width: 40%">
    <div class="card-header">
      Form Tambah Jenis Tujuan
    </div>
    <div class="card-body">
      <div class="form-group">
        <form action="{{route('purpose.store')}}" method="post">
          @csrf
          <label for="purpose">Tujuan</label>
          <input type="text" class="form-control @error('purpose_type') is-invalid @enderror" name="purpose_type"
            id="purpose_type" aria-describedby="nama" placeholder="Silahkan isi tujuan penggunaan data...">
          @error('purpose_type')
          <small class="text-danger">Data tujuan masih kosong, silahkan diisi!</small>
          @enderror
      </div>
      <button type="submit" class="btn btn-success">Simpan</button>
      </form>
      <br><br>
      <div class="button-right">
        <a href="{{ route('purpose.index')}}" class="btn btn-primary">Kembali</a>
      </div>
    </div>
  </div>
</div>
@endsection