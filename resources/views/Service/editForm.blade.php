@extends('app')
@section('content')
<div class="d-flex justify-content-center">
    <div class="card" style="width: 40%">
        <div class="card-header">
          Form Edit Jenis Pelayanan
        </div>
        <div class="card-body">
            <form action="{{url('service/'.$service->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="_method" value="patch">
                <div class="form-group">
                    <label for="service">Pelayanan</label>
                    <input type="text" class="form-control" name="service" id="service" aria-describedby="service" value="{{$service->service_type}}">
                  </div>
                <button type="submit" class="btn btn-success">Simpan</button>
              </form>
              <br>
              <div class="button">
                <a href="{{ route('service.index')}}" class="btn btn-primary">Kembali</a>
            </div>
        </div>
      </div>
</div>
@endsection