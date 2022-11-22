@extends('app')
@section('content')
<div class="d-flex justify-content-center">
  <div class="card" style="width: 40%">
    <div class="card-header">
      Form Tambah Buku Tamu
    </div>
    <div class="card-body">
      <form action="{{url('admin/simpan-data')}}" method="post">
        @csrf
        <div class="form-group">
          <label for="name">Nama</label>
          <input type="text" class="form-control" name="name" id="name" aria-describedby="name">
        </div>

        <div class="form-group">
          <label for="hp">Telepon</label>
          <input type="text" class="form-control" name="hp" id="hp" aria-describedby="hp">
        </div>

        <div class="form-group">
          <label for="exampleFormControlSelect1">Jenis Kelamin</label>
          <select class="form-control" id="exampleFormControlSelect1" name="gender">
            <option selected disabled>Pilih Jenis Kelamin</option>
            <option>Pria</option>
            <option>Wanita</option>
          </select>
        </div>

        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control" name="email" id="email" aria-describedby="email">
        </div>

        <div class="form-group">
          <label for="address">Alamat</label>
          <textarea name="address" class="form-control"></textarea>
        </div>

        <div class="form-group">
          <label for="age">Usia</label>
          <input type="text" class="form-control" name="age" id="age" aria-describedby="age">
        </div>

        <div class="form-group mb-3">
          <label class="label" for="education">Pendidikan</label>
          <select class="custom-select my-1 mr-sm-2" name="education" id="inlineFormCustomSelectPref">
            <option selected disabled>Pilih Pendidikan</option>
            @foreach ($education as $e)
            <option value="{{ $e->id }}">{{$e->education_type}}</option>
            @endforeach
          </select>
        </div>

        <div class="form-group mb-3">
          <label class="label" for="job">Pekerjaan</label>
          <select class="custom-select my-1 mr-sm-2" name="job" id="inlineFormCustomSelectPref">
            <option selected disabled>Pilih Pekerjaan</option>
            @foreach ($job as $j)
            <option value="{{ $j->id }}">{{$j->job_type}}</option>
            @endforeach
          </select>
        </div>

        <div class="form-group">
          <label for="nipnim">NIP/NIM</label>
          <input type="text" class="form-control" name="nipnim" id="nipnim" aria-describedby="nipnim">
        </div>

        <div class="form-group">
          <label for="institute">Nama Instansi</label>
          <textarea name="institute" class="form-control"></textarea>
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
      </form>
      <br>
      <div class="button">
        <a href="{{ url('admin/tamu')}}" class="btn btn-primary">Kembali</a>
      </div>
    </div>
  </div>
</div>
@endsection