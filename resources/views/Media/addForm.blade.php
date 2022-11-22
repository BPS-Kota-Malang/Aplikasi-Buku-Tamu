@extends('app')
@section('content')
<div class="d-flex justify-content-center">
  <div class="card" style="width: 40%">
    <div class="card-header">
      Form Tambah Jenis Media Pelayanan
    </div>
    <div class="card-body">
      <div class="form-group">
        <form action="{{route('media.store')}}" method="post">
          @csrf
          <label for="media">Media Pelayanan</label>
          <input type="text" class="form-control @error('media_type') is-invalid @enderror" name="media_type"
            id="media_type" aria-describedby="nama" placeholder="Silahkan isi jenis media...">
          @error('media_type')
          <small class="text-danger">Data media pelayanan masih kosong, silahkan diisi!</small>
          @enderror
      </div>
      <button type="submit" class="btn btn-success">Simpan</button>
      </form>
      <br><br>
      <div class="button-right">
        <a href="{{ route('media.index')}}" class="btn btn-primary">Kembali</a>
      </div>
    </div>
  </div>
</div>
@endsection