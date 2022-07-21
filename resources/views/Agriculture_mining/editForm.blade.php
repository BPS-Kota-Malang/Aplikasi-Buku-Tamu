@extends('app')
@section('content')
<div class="d-flex justify-content-center">
    <div class="card" style="width: 40%">
        <div class="card-header">
          Form Edit Jenis Pertanian dan Pertambangan
        </div>
        <div class="card-body">
            <form action="{{url('agrimin/'.$agrimin->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="_method" value="patch">
                <div class="form-group">
                    <label for="agrimin">Pertanian dan Pertambangan</label>
                    <input type="text" class="form-control" name="type" id="agrimin" aria-describedby="agrimin" value="{{$agrimin->agrimin_type}}">
                  </div>
                <button type="submit" class="btn btn-success">Simpan</button>
              </form>
              <br>
              <div class="button">
                <a href="{{ route('agrimin.index')}}" class="btn btn-primary">Kembali</a>
            </div>
        </div>
      </div>
</div>
@endsection