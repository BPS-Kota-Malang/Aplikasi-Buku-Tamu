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
          <input type="text" class="form-control" name="service" id="service" aria-describedby="service">
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