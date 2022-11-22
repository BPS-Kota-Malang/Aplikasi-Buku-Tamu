@extends('app')
@section('content')
<div class="d-flex justify-content-center">
  <div class="card" style="width: 40%">
    <div class="card-header">
      Form Tambah Jenis Pelayanan
    </div>
    <div class="card-body">
      <div class="form-group">
        <form action="{{route('service.store')}}" method="post">
          @csrf
          <label for="service">Pelayanan</label>
          <input type="text" class="form-control @error('service_type') is-invalid @enderror" name="service_type"
            id="service_type" aria-describedby="service" placeholder="Silahkan isi jenis pelayanan...">
          @error('service_type')
          <small class="text-danger">Data pelayanan masih kosong, silahkan diisi!</small>
          @enderror
      </div>
      <button type="submit" class="btn btn-success">Simpan</button>
      </form>
      <br><br>
      <div class="button-right">
        <a href="{{ route('service.index')}}" class="btn btn-primary">Kembali</a>
      </div>
    </div>
  </div>
</div>
@endsection