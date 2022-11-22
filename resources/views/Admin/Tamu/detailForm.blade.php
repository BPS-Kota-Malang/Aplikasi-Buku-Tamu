@extends('app')
@section('content')
<div class="col-sm-12">
    <div class="card">
        <div class="card-body">
            <h4><i class="fa fa-pencil-alt"></i>Customer</h4><br>
            <table class="table">
                <tbody>
                    <tr>
                        <td>Nama Tamu</td>
                        <td>:</td>
                        <td>{{ $customer->name }}</td>
                    </tr>
                    <tr>
                        <td>Telepon</td>
                        <td>:</td>
                        <td>{{ $customer->hp }}</td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td>{{ $customer->gender }}</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td>{{ $customer->email }}</td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td>{{ $customer->address }}</td>
                    </tr>
                    <tr>
                        <td>Usia</td>
                        <td>:</td>
                        <td>{{ $customer->age }}</td>
                    </tr>
                    <tr>
                        <td>Pendidikan</td>
                        <td>:</td>
                        <td>{{ $customer->guestEducation->education_type }}</td>
                    </tr>
                    <tr>
                        <td>Pekerjaan</td>
                        <td>:</td>
                        <td>{{ $customer->guestJob->job_type }}</td>
                    </tr>
                    <tr>
                        <td>NIP/NIM</td>
                        <td>:</td>
                        <td>{{ $customer->nipnim }}</td>
                    </tr>
                    <tr>
                        <td>Nama Instansi</td>
                        <td>:</td>
                        <td>{{ $customer->institute }}</td>
                    </tr>
                    <tr>
                        <td>Dibuat Tanggal</td>
                        <td>:</td>
                        <td>{{ $customer->created_at }}</td>
                    </tr>
                    <tr>
                        <td>Diupdate Tanggal</td>
                        <td>:</td>
                        <td>{{ $customer->updated_at }}</td>
                    </tr>
                </tbody>
            </table>
            <div class="col-4">
                <a href="{{ url('admin/tamu')}}" class="btn btn-primary">Kembali</a>
            </div>
        </div>
    </div>
</div>
@endsection