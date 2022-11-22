@extends('app')
@section('content')
<div class="d-flex justify-content-center">
  <div class="card" style="width: 40%">
    <div class="card-header">
      Form Edit Jenis Pelayanan
    </div>
    <div class="card-body">
      <form action="{{url('service/'.$service->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="_method" value="patch">
        <div class="form-group">
          <label for="service">Pelayanan</label>
          <input type="text" class="form-control @error('service_type') is-invalid @enderror" name="service_type"
            id="service_type" aria-describedby="service" value="{{$service->service_type}}"
            placeholder="Silahkan isi jenis pelayanan...">
          @error('service_type')
          <small class="text-danger">Data pelayanan yang diedit sebelumnya masih kosong, silahkan diedit!</small>
          @enderror
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
      </form>
      <br>
      <div class="button">
        <a href="{{ route('service.index')}}" class="btn btn-primary">Kembali</a>
      </div>
    </div>
  </div>
</div>
@endsection