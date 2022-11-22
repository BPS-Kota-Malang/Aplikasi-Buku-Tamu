@extends('app')
@section('content')
<div class="d-flex justify-content-center">
  <div class="card" style="width: 40%">
    <div class="card-header">
      Form Edit Kategori
    </div>
    <div class="card-body">
      <form action="{{url('category/'.$categories->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="_method" value="patch">
        <div class="form-group">
          <label for="category">Kategori</label>
          <input type="text" class="form-control @error('categories_type') is-invalid @enderror" name="categories_type"
            id="categories_type" aria-describedby="categories_type" value="{{$categories->categories_type}}"
            placeholder="Silahkan isi kategori data...">
          @error('categories_type')
          <small class="text-danger">Data kategori yang diedit sebelumnya masih kosong, silahkan diedit!</small>
          @enderror
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
      </form>
      <br>
      <div class="button">
        <a href="{{ route('category.index')}}" class="btn btn-primary">Kembali</a>
      </div>
    </div>
  </div>
</div>
@endsection