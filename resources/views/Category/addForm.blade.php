@extends('app')
@section('content')
<div class="d-flex justify-content-center">
  <div class="card" style="width: 40%">
    <div class="card-header">
      Form Tambah Kategori
    </div>
    <div class="card-body">
      <div class="form-group">
        <form action="{{route('category.store')}}" method="post">
          @csrf
          <label for="category">Kategori</label>
          <input type="text" class="form-control @error('categories_type') is-invalid @enderror" name="categories_type"
            id="categories_type" aria-describedby="categories_type" placeholder="Silahkan isi kategori data...">
          @error('categories_type')
          <small class="text-danger">Data kategori masih kosong, silahkan diisi!</small>
          @enderror
      </div>
      <button type="submit" class="btn btn-success">Simpan</button>
      </form>
      <br><br>
      <div class="button-right">
        <a href="{{ route('category.index')}}" class="btn btn-primary">Kembali</a>
      </div>
    </div>
  </div>
</div>
@endsection