@extends('app')
@section('content')
<div class="col-sm-12">
    <div class="card">
        <div class="card-body">
            <h4><i class="fa fa-pencil-alt"></i>Detail Data Transaksi</h4><br>
            <table class="table">
                <tbody>
                    <tr>
                        <td>Nama Tamu</td>
                        <td>:</td>
                        <td>{{ $transaction->customer->name }}</td>
                    </tr>
                    <tr>
                        <td>Media</td>
                        <td>:</td>
                        <td>{{ $transaction->media->media_type}}</td>
                    </tr>
                    <tr>
                        <td>Pelayanan</td>
                        <td>:</td>
                        <td>{{ $transaction->service->service_type }}</td>
                    </tr>
                    <tr>
                        <td>Tujuan</td>
                        <td>:</td>
                        <td>{{ $transaction->purpose->purpose_type }}</td>
                    </tr>
                    <tr>
                        <td>Data</td>
                        <td>:</td>
                        <td>{{ $transaction->data }}</td>
                    </tr>
                    <tr>
                        <td>Kebutuhan Data</td>
                        <td>:</td>
                        <td>{{ $transaction->subcategory->sub_categories_type }}</td>
                    </tr>
                    <tr>
                        <td>Dibuat Tanggal</td>
                        <td>:</td>
                        <td>{{ $transaction->created_at }}</td>
                    </tr>
                    <tr>
                        <td>Diupdate Tanggal</td>
                        <td>:</td>
                        <td>{{ $transaction->updated_at }}</td>
                    </tr>


                </tbody>
            </table>
            <div class="col-4">
                <a href="{{ route('transaction.index')}}" class="btn btn-primary">Kembali</a>
            </div>
        </div>
    </div>
</div>
@endsection