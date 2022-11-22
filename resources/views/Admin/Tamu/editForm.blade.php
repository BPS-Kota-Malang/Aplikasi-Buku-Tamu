@extends('app')
@section('content')
<div class="d-flex justify-content-center">
  <div class="card" style="width: 40%">
    <div class="card-header">
      Form Edit Buku Tamu
    </div>
    <div class="card-body">
      <form action="{{url('admin/update-data/'.$customer->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="name">Nama</label>
          <input type="text" class="form-control" name="name" id="nama" aria-describedby="nama"
            value="{{$customer->name}}">
        </div>

        <div class="form-group">
          <label for="hp">Telepon</label>
          <input type="text" class="form-control" name="hp" id="hp" aria-describedby="hp" value="{{$customer->hp}}">
        </div>

        <div class="form-group">
          <label for="exampleFormControlSelect1">Jenis Kelamin</label>
          <select class="form-control" name="gender">
            <option disabled value>Pilih Jenis Kelamin</option>
            <option value="{{$customer->gender}}">{{$customer->gender}}</option>
            <option value="Pria">Pria</option>
            <option value="Wanita">Wanita</option>
          </select>
        </div>

        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control" name="email" id="email" aria-describedby="email"
            value="{{$customer->email}}">
        </div>

        <div class="form-group">
          <label for="address">Alamat</label>
          <textarea name="address" class="form-control">{{$customer->address}}</textarea>
        </div>

        <div class="form-group">
          <label for="age">Usia</label>
          <input type="text" class="form-control" name="age" id="age" aria-describedby="age" value="{{$customer->age}}">
        </div>

        <div class="form-group mb-3">
          <label class="label" for="education">Pendidikan</label>
          <select class="custom-select my-1 mr-sm-2" name="education" ">
                    <option disabled value>Pilih Pendidikan</option>
                    <option value=" {{$customer->id_education}}">{{$customer->guestEducation->education_type}}</option>
            @foreach ($education as $e)
            <option value="{{ $e->id }}">{{$e->education_type}}</option>
            @endforeach
          </select>
        </div>

        <div class="form-group mb-3">
          <label class="label" for="job">Pekerjaan</label>
          <select class="custom-select my-1 mr-sm-2" name="job">
            <option disabled value>Pilih Pekerjaan</option>
            <option value="{{$customer->id_job}}">{{$customer->guestJob->job_type}}</option>
            @foreach ($job as $j)
            <option value="{{ $j->id }}">{{$j->job_type}}</option>
            @endforeach
          </select>
        </div>

        <div class="form-group">
          <label for="nipnim">NIP/NIM</label>
          <input type="text" class="form-control" name="nipnim" id="nipnim" aria-describedby="nipnim"
            value="{{$customer->nipnim}}">
        </div>

        <div class="form-group">
          <label for="institute">Nama Instansi</label>
          <textarea name="institute" class="form-control">{{$customer->institute}}</textarea>
        </div>

        <input type="hidden" value="{{$customer->id}}" name="id">
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