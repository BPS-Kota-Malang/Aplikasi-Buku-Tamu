@extends('app')
@section('content')
<div class="d-flex justify-content-center">
  <div class="card" style="width: 40%">
    <div class="card-header">
      Form Tambah Jenis Pertanian dan Pertambangan
    </div>
    <div class="card-body">
        <div class="form-group">
          <form action="{{route('agrimin.store')}}" method="post">
            @csrf
          <label for="job">Pertanian dan Pertambangan</label>
          <input type="text" class="form-control" name="type" id="type" aria-describedby="agrimin">
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
      </form>
      <br><br>
      <div class="button-right">
        <a href="{{ route('agrimin.index')}}" class="btn btn-primary">Kembali</a>
    </div>
    </div>
  </div>
</div>
@endsection