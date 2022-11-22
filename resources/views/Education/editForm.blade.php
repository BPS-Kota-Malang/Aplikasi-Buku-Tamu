@extends('app')
@section('content')
<div class="d-flex justify-content-center">
  <div class="card" style="width: 40%">
    <div class="card-header">
      Form Edit Jenis Pendidikan
    </div>
    <div class="card-body">
      <form action="{{url('education/'.$education->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="_method" value="patch">
        <div class="form-group">
          <label for="education_type">Pendidikan</label>
          <input type="text" class="form-control @error('education_type') is-invalid @enderror" name="education_type"
            id="nama" aria-describedby="nama" value="{{$education->education_type}}"
            placeholder="Silahkan isi jenis pendidikan...">
          @error('education_type')
          <small class="text-danger">Data pendidikan yang diedit sebelumnya masih kosong, silahkan diedit!</small>
          @enderror
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
      </form>
      <br>
      <div class="button">
        <a href="{{ route('education.index')}}" class="btn btn-primary">Kembali</a>
      </div>
    </div>
  </div>
</div>
@endsection