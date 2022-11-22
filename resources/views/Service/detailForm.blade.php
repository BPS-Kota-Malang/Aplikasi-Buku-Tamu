@extends('app')
@section('content')
<div class="col-sm-12">
    <div class="card">
        <div class="card-body">
            <h4><i class="fa fa-pencil-alt"></i> Detail Jenis Pelayanan</h4><br>
            <table class="table">
                <tbody>
                    <tr>
                        <td>Jenis Pelayanan</td>
                        <td>:</td>
                        <td>{{ $service->service_type }}</td>
                    </tr>
                </tbody>
            </table>
            <div class="button">
                <a href="{{ route('service.index')}}" class="btn btn-primary">Kembali</a>
            </div>
        </div>
    </div>
</div>
@endsection