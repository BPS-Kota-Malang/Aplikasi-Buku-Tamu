@extends('app')
@section('content')
<div class="col-sm-12">
    <div class="card">
        <div class="card-body">
            <h4><i class="fa fa-pencil-alt"></i> Detail Data Admin</h4><br>
            <table class="table">
                <tbody>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td>{{ $pengguna->name }}</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td>{{ $pengguna->email }}</td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td>:</td>
                        <td>{{ $pengguna->password }}</td>
                    </tr>
                </tbody>
            </table>
            <div class="button">
                <a href="{{ route('data-admin.index')}}" class="btn btn-primary">Kembali</a>
            </div>
        </div>
    </div>
</div>
@endsection