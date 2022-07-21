@extends('app')
@section('content')
<div class="col-sm-12">
    <div class="card">
        <div class="card-body">
        <h4><i class="fa fa-pencil-alt"></i>Detail Data Transaksi</h4><br>
            <table class="table">
                <tbody>
                    <tr>
                        <td>Id Cust</td>
                        <td>:</td>
                        <td>{{ $transaction->id_customer }}</td>
                    </tr>
                    <tr>
                        <td>Id Media</td>
                        <td>:</td>
                        <td>{{ $transaction->id_media}}</td>
                    </tr>
                    <tr>
                        <td>Id Pelayanan</td>
                        <td>:</td>
                        <td>{{ $transaction->id_service }}</td>
                    </tr>
                    <tr>
                        <td>Tujuan</td>
                        <td>:</td>
                        <td>{{ $transaction->tujuan }}</td>
                    </tr>
                    <tr>
                        <td>Data</td>
                        <td>:</td>
                        <td>{{ $transaction->data }}</td>
                    </tr>
                    <tr>
                        <td>Id Sosial & Pendudukan</td>
                        <td>:</td>
                        <td>{{ $transaction->id_social_population }}</td>
                    </tr>
                    <tr>
                        <td>Id Ekonomi & Perdagangan</td>
                        <td>:</td>
                        <td>{{ $transaction->id_economy_trade}}</td>
                    </tr>
                    <tr>
                        <td>Id Pertanian & Pertambangan</td>
                        <td>:</td>
                        <td>{{ $transaction->id_agriculture_mining }}</td>
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
