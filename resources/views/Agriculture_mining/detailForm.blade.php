@extends('app')
@section('content')
<div class="col-sm-12">
    <div class="card">
        <div class="card-body">
        <h4><i class="fa fa-pencil-alt"></i> Detail Jenis Pertanian dan Pertambangan</h4><br>
            <table class="table">
                <tbody>
                    <tr>
                        <td>Jenis Pertanian dan Pertambangan</td>
                        <td>:</td>
                        <td>{{ $agrimin->agrimin_type }}</td>
                    </tr>
                </tbody>
            </table>
            <div class="button">
                <a href="{{ route('agrimin.index')}}" class="btn btn-primary">Kembali</a>
            </div>
        </div>
    </div>
</div>
@endsection