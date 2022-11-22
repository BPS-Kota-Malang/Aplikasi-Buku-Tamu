@extends('app')
@section('content')
<div class="d-flex justify-content-center">
  <div class="card" style="width: 40%">
    <div class="card-header">
      Form Edit Kategori
    </div>
    <div class="card-body">
      <form action="{{url('subcategory/'.$sub_categories->id)}}" method="post" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <input type="hidden" name="_method" value="patch">
        <div class="form-group">
          <label for="category">Sub Kategori</label>
          <input type="text" class="form-control @error('sub_categories_type') is-invalid @enderror"
            name="sub_categories_type" id="sub_categories_type" aria-describedby="sub_categories_type"
            value="{{$sub_categories->sub_categories_type}}" placeholder="Silahkan isi sub kategori data...">
          @error('sub_categories_type')
          <small class="text-danger">Data sub kategori data yang diedit sebelumnya masih kosong, silahkan
            diedit!</small>
          @enderror
        </div>
        <div class="form-group mb-3">
          <label class="label" for="education">Jenis Kategori</label>
          <select class="form-control @error('id_categories') is-invalid @enderror" name="id_categories"
            id="id_categories" required>
            <option value="{{ $sub_categories->id }}">{{$sub_categories->guestCategory->categories_type}}</option>
            @foreach ($categories as $item)
            <option value="{{ $item->id }}" @selected(old('id_categories')==$item->id)>{{$item->categories_type}}
            </option>
            @endforeach
          </select>
          @error('id_categories')
          <small class="text-danger">Data kategori data yang diedit sebelumnya masih kosong, silahkan diedit!</small>
          @enderror
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
      </form>
      <br>
      <div class="button">
        <a href="{{ route('subcategory.index')}}" class="btn btn-primary">Kembali</a>
      </div>
    </div>
  </div>
</div>
@endsection