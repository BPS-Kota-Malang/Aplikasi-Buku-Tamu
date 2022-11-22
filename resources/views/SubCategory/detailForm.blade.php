@extends('app')
@section('content')
<div class="col-sm-12">
    <div class="card">
        <div class="card-body">
            <h4><i class="fa fa-pencil-alt"></i> Detail Sub Kategori</h4><br>
            <table class="table">
                <tbody>
                    <tr>
                        <td>Sub Kategori</td>
                        <td>:</td>
                        <td>{{ $sub_categories->sub_categories_type }}</td>
                    </tr>
                    <tr>
                        <td>Jenis Kategori</td>
                        <td>:</td>
                        <td>{{ $sub_categories->guestCategory->categories_type }}</td>
                    </tr>
                </tbody>
            </table>
            <div class="button">
                <a href="{{ route('subcategory.index')}}" class="btn btn-primary">Kembali</a>
            </div>
        </div>
    </div>
</div>
@endsection