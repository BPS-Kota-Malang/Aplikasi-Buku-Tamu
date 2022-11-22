@extends('app')
@section('content')
<div class="d-flex justify-content-center">
  <div class="card" style="width: 40%">
    <div class="card-header">
      Form Edit Jenis Media Pelayanan
    </div>
    <div class="card-body">
      <form action="{{url('media/'.$media->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="_method" value="patch">
        <div class="form-group">
          <label for="media">Media</label>
          <input type="text" class="form-control @error('media_type') is-invalid @enderror" name="media_type"
            id="media_type" aria-describedby="media_type" value="{{$media->media_type}}"
            placeholder="Silahkan isi jenis media...">
          @error('media_type')
          <small class="text-danger">Data media pelayanan yang diedit sebelumnya masih kosong, silahkan diedit!</small>
          @enderror
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
      </form>
      <br>
      <div class="button">
        <a href="{{ route('media.index')}}" class="btn btn-primary">Kembali</a>
      </div>
    </div>
  </div>
</div>
@endsection