@extends('app')
@section('content')
<div class="d-flex justify-content-center">
  <div class="card" style="width: 40%">
    <div class="card-header">
      Form Tambah Sub Kategori
    </div>
    <div class="card-body">
      <div class="form-group">
        <form action="{{route('subcategory.store')}}" method="post">
          @csrf
          <label for="category">Sub Kategori</label>
          <input type="text" class="form-control @error('sub_categories_type') is-invalid @enderror"
            name="sub_categories_type" id="sub_categories_type" aria-describedby="category"
            placeholder="Silahkan isi sub kategori data...">
          @error('sub_categories_type')
          <small class="text-danger">Data sub kategori masih kosong, silahkan diisi!</small>
          @enderror
      </div>
      <div class="form-group mb-3">
        <label class="label" for="education">Jenis Kategori</label>
        <select class="form-control @error('id_categories') is-invalid @enderror" name="id_categories"
          id="id_categories" required>
          <option selected disabled>Pilih Jenis Kategori</option>
          @foreach ($categories as $item)
          <option value="{{ $item->id }}">{{$item->categories_type}}</option>
          @endforeach
        </select>
        @error('id_categories')
        <small class="text-danger">Data kategori data yang diedit sebelumnya masih kosong, silahkan diedit!</small>
        @enderror
      </div>
      <button type="submit" class="btn btn-success">Simpan</button>
      </form>
      <br><br>
      <div class="button-right">
        <a href="{{ route('subcategory.index')}}" class="btn btn-primary">Kembali</a>
      </div>
    </div>
  </div>
</div>
@endsection