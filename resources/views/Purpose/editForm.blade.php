@extends('app')
@section('content')
<div class="d-flex justify-content-center">
  <div class="card" style="width: 40%">
    <div class="card-header">
      Form Edit Jenis Tujuan
    </div>
    <div class="card-body">
      <form action="{{url('purpose/'.$purpose->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="_method" value="patch">
        <div class="form-group">
          <label for="purpose">Tujuan</label>
          <input type="text" class="form-control @error('purpose_type') is-invalid @enderror" name="purpose_type"
            id="purpose_type" aria-describedby="nama" value="{{$purpose->purpose_type}}"
            placeholder="Silahkan isi tujuan penggunaan data...">
          @error('purpose_type')
          <small class="text-danger">Data tujuan yang diedit sebelumnya masih kosong, silahkan diedit!</small>
          @enderror
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
      </form>
      <br>
      <div class="button">
        <a href="{{ route('purpose.index')}}" class="btn btn-primary">Kembali</a>
      </div>
    </div>
  </div>
</div>
@endsection