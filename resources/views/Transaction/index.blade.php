@extends('app')
@section('content')
<div class="card">
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
    <div class="card-header">
        Data Transaksi <br><br>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">

    </div>

    {{-- Filtering --}}

    <form action="{{ route('transaction.index') }}" method="GET">
        @csrf
        <br>
        <div class="container">
            <div class="row">
                <div class="container-fluid">
                    <div class="form-group row">
                        <label type="date" class="col-form-label col-sm-2">Mulai Tanggal</label>
                        <div class="col-sm-3">
                            <input type="date" class="form-control input-sm" id="fromdate" name="date" required/>
                        </div>
                    </div>
                     <div class="form-group row">
                        <label type="date" class="col-form-label col-sm-2">Sampai Tanggal</label>
                        <div class="col-sm-3">
                            <input type="date" class="form-control input-sm" id="todate" name="todate" required/>
                        </div>
                        <div class="col-sm-2">
                            <button type="submit" class="btn" name="search" title=Search><img src="https://img.icons8.com/material-outlined/24/000000/search--v1.png"/>
                    </div>

                </div>
            </div>
        </div>
        <br>
    </form>

    <div class="card-body">
        <table class="table" id="myTable">
            <thead class="thead-dark text-center">
                <tr text-align="center">
                    <th scope="col" >No</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Id Cust </th>
                    <th scope="col">Id Media</th>
                    <th scope="col">Id Pelayanan</th>
                    <th scope="col">Kebutuhan Data</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($transaction as $item)
                <tr>
                    <td>{{ $loop->iteration}}</td>
                    <td>{{ $item->created_at }}</td>
                    <td>{{ $item->customer->name }}</td>
                    <td>{{ $item->media->media_type}}</td>
                    <td>{{ $item->id_service }}</td>
                    <td>{{ $item->id_sub_categories}}</td>

                    <td>
                        <div class="row">
                                <div class="col-4">
                                    <a href="{{ route('transaction.edit', $item->id)}}" class="btn btn-warning">Edit</a>
                                </div>
                                <div class="col-4">
                                    <a href="{{ route('transaction.show', $item->id)}}" class="btn btn-info">Show</a>
                                </div>
                                <div class="col-4">
                                    <form action="{{route('transaction.destroy', $item->id)}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger"
                                            onclick="return confirm('Apakah anda yakin ingin menghapus Jenis Pendidikan ini ?')">Delete</button>
                                    </form>
                                </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

@section('script')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>

<script>
    $(document).ready( function () {
    $('#myTable').DataTable({
        dom: 'Bfrtip',
        buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
    });
    });
</script>
@endsection
