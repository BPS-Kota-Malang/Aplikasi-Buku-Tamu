@extends('app')
@section('content')
<div class="d-flex justify-content-center">
  <div class="card" style="width: 40%">
    <div class="card-header">
      Form Edit Jenis Pekerjaan
    </div>
    <div class="card-body">
      <form action="{{url('job/'.$job->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="_method" value="patch">
        <div class="form-group">
          <label for="job">Pekerjaan</label>
          <input type="text" class="form-control @error('job_type') is-invalid @enderror" name="job_type" id="job_type"
            aria-describedby="job" value="{{$job->job_type}}" placeholder="Silahkan isi jenis pekerjaan...">
          @error('job_type')
          <small class="text-danger">Data pekerjaan yang diedit sebelumnya masih kosong, silahkan diedit!</small>
          @enderror
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
      </form>
      <br>
      <div class="button">
        <a href="{{ route('job.index')}}" class="btn btn-primary">Kembali</a>
      </div>
    </div>
  </div>
</div>
@endsection