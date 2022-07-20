@extends('app')
@section('content')
<div class="d-flex justify-content-center">
    <div class="card" style="width: 40%">
        <div class="card-header">
          Form Edit Jenis Pendidikan
        </div>
        <div class="card-body">
            <form action="{{url('education/'.$education->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="_method" value="patch">
                <div class="form-group">
                    <label for="education">Pendidikan</label>
                    <input type="text" class="form-control" name="education" id="nama" aria-describedby="nama" value="{{$education->education_type}}">
                  </div>
                <button type="submit" class="btn btn-success">Simpan</button>
              </form>
              <br>
              <div class="button">
                <a href="{{ route('education.index')}}" class="btn btn-primary">Kembali</a>
            </div>
        </div>
      </div>
</div>
@endsection