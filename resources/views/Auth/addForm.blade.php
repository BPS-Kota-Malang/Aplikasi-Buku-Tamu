@extends('app')

@section('content')

<div class="d-flex justify-content-center">
  <div class="card" style="width: 40%">
    <div class="card-header">
      Form Tambah Data Admin
    </div>
    <div class="card-body">
      <div class="form-group">
        <form action="{{route('data-admin.store')}}" method="post">
          @csrf
          <label for="admin">Nama</label>
          <input type="text" class="form-control" name="name" id="name" aria-describedby="name">

          <label for="admin">Email</label>
          <input type="email" class="form-control" name="email" id="email" aria-describedby="email">
          <label for="admin">Password</label>
          <input type="password" class="form-control" name="password" id="password" aria-describedby="password">
          <label for="admin">Role</label>
          <div class="form-group">
            <select class="form-control select2bs4" style="width: 100%;">

              <option>Admin</option>
            </select>
          </div>
      </div>
    </div>
    <button type="submit" class="btn btn-success">Simpan</button>
    </form>
    <br><br>
    <div class="button-right">
      <a href="{{ route('data-admin.index')}}" class="btn btn-primary">Kembali</a>
    </div>
  </div>
</div>
</div>
@endsection