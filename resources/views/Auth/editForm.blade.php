@extends('app')
@section('content')
<div class="d-flex justify-content-center">
  <div class="card" style="width: 40%">
    <div class="card-header">
      Form Edit Data Admin
    </div>
    <div class="card-body">
      <form action="{{url('pengguna/'.$pengguna->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="_method" value="patch">
        <div class="form-group">
          <label for="admin">Nama</label>
          <input type="text" class="form-control" name="name" id="name" aria-describedby="name"
            value="{{$pengguna->name}}">
        </div>

        <div class="form-group">
          <label for="admin">Email</label>
          <input type="text" class="form-control" name="email" id="email" aria-describedby="email"
            value="{{$pengguna->email}}">
        </div>

        <div class="form-group">
          <label for="admin">Password</label>
          <input type="text" class="form-control" name="password" id="email" aria-describedby="email"
            value="{{$pengguna->password}}">
        </div>

        <label for="admin">Role</label>
        <div class="form-group">
          <select class="form-control select2bs4" style="width: 100%;">

            <option>Super admin</option>
            <option>Admin</option>
          </select>
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
      </form>
      <br>
      <div class="button">
        <a href="{{ route('data-admin.index')}}" class="btn btn-primary">Kembali</a>
      </div>
    </div>
  </div>
</div>
@endsection