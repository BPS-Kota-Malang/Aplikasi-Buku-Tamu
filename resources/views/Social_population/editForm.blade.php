@extends('app')
@section('content')
<div class="d-flex justify-content-center">
    <div class="card" style="width: 40%">
        <div class="card-header">
          Form Edit Jenis Sosial dan Kependudukan
        </div>
        <div class="card-body">
            <form action="{{url('socpul/'.$socpul->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="_method" value="patch">
                <div class="form-group">
                    <label for="socpul">Sosial dan Kependudukan</label>
                    <input type="text" class="form-control" name="type" id="socpul" aria-describedby="socpul" value="{{$socpul->sospol_type}}">
                  </div>
                <button type="submit" class="btn btn-success">Simpan</button>
              </form>
              <br>
              <div class="button">
                <a href="{{ route('socpul.index')}}" class="btn btn-primary">Kembali</a>
            </div>
        </div>
      </div>
</div>
@endsection