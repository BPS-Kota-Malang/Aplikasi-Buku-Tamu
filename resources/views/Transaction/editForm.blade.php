@extends('app')
@section('content')
<div class="d-flex justify-content-center">
    <div class="card" style="width: 40%">
        <div class="card-header">
          Form Edit Data Transaction
        </div>
        <div class="card-body">
            <form action="{{url('transaction/'.$transaction->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="_method" value="patch">
                <div class="form-group">
                    <label for="id_customer">Id Cust</label>
                    <input class="form-control" name="id_customer" id="id_customer" aria-describedby="id_customer" value="{{$transaction->id_customer}}">
                </div>
                <div class="form-group">
                    <label for="id_media">Id Media</label>
                    <input class="form-control" name="id_media" id="id_media" aria-describedby="id_media" value="{{$transaction->id_media}}">
                </div>
                <div class="form-group">
                    <label for="id_service">Id Pelayanan</label>
                    <input class="form-control" name="id_service" id="id_service" aria-describedby="id_service" value="{{$transaction->id_service}}">
                </div>
                <div class="form-group">
                  <label for="tujuan">Tujuan</label>
                  <input type="text" class="form-control" name="tujuan" id="tujuan" aria-describedby="tujuan" value="{{$transaction->tujuan}}">
                </div>
                <div class="form-group">
                  <label for="data">Data</label>
                  <input type="text" class="form-control" name="data" id="data" aria-describedby="data" value="{{$transaction->data}}">
                </div>
                
                <button type="submit" class="btn btn-success">Simpan</button>
              </form>
              <br>
              <div class="button">
                <a href="{{ route('transaction.index')}}" class="btn btn-primary">Kembali</a>
            </div>
        </div>
      </div>
</div>
@endsection
