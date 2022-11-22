@extends('app')
@section('content')
<div class="col-sm-12">
    <div class="card">
        <div class="card-body">
            <h4><i class="fa fa-pencil-alt"></i> Detail Jenis Media Pelayanan</h4><br>
            <table class="table">
                <tbody>
                    <tr>
                        <td>Jenis Media Pelayanan</td>
                        <td>:</td>
                        <td>{{ $media->media_type }}</td>
                    </tr>
                </tbody>
            </table>
            <div class="button">
                <a href="{{ route('media.index')}}" class="btn btn-primary">Kembali</a>
            </div>
        </div>
    </div>
</div>
@endsection