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
                    <input class="form-control" name="customer" id="id_customer" aria-describedby="id_customer" value="{{$transaction->id_customer}}">
                </div>
               <div class="form-group mb-3">
                  <label class="label" for="media">Id Media</label>
                  <select class="custom-select my-1 mr-sm-2" name="media" >
                    <option disabled value>Pilih Media</option>
                    <option value="{{$transaction->id_media}}">{{$transaction->media->media_type}}</option>
                    @foreach ($media as $e)
                    <option value="{{ $e->id }}">{{$e->media_type}}</option>
                    @endforeach
                  </select>
                </div>
               <div class="form-group mb-3">
                  <label class="label" for="media">Id Pelayanan</label>
                  <select class="custom-select my-1 mr-sm-2" name="service" >
                    <option disabled value>Pilih Pelayanan</option>
                    <option value="{{$transaction->id_service}}">{{$transaction->service->service_type}}</option>
                    @foreach ($service as $e)
                    <option value="{{ $e->id }}">{{$e->service_type}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="purpose">Tujuan</label>
                  <input type="text" class="form-control" name="purpose" id="purpose" aria-describedby="purpose" value="{{$transaction->purpose}}">
                </div>
                <div class="form-group">
                  <label for="data">Data</label>
                  <input type="text" class="form-control" name="data" id="data" aria-describedby="data" value="{{$transaction->data}}">
                </div>
                <div class="form-group">
                  <label for="data">Kebutuhan Data</label>
                  <input type="text" class="form-control" name="id_sub_categories" id="id_sub_categories" aria-describedby="id_sub_categories" value="{{$transaction->id_sub_categories}}">
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
