@extends('app')
@section('content')
<div class="card">
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
    <div class="card-header">
        Data Buku Tamu <br><br> <a href="{{url('admin/form-tambah')}}" class="btn btn-success">Add Data</a>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">
    </div>
    <div class="card-body">
        <table class="table" id="myTable">
            <thead class="thead-dark text-center">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Telepon</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Email</th>
                    <th scope="col" width="25%">Aksi</th>
                </tr>
            </thead>
            <tbody> 
                @foreach ($customer as $key => $item)
                <tr>
                    <th scope="row">{{$key+ 1}}</th>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->hp }}</td>
                    <td>{{ $item->address }}</td>
                    <td>{{ $item->email}}</td>            
                    <td>
                        <div class="row">
                            <div class="col-4">
                                <a href="{{url('admin/form-edit', $item->id)}}" class="btn btn-warning">Edit</a>
                            </div>
                            <div class="col-4">
                                <a href="{{ url('admin/show', $item->id)}}" class="btn btn-info">Detail</a>
                            </div>
                            <div class="col-3">
                                <form action="{{url('admin/hapus-data')}}" method="post">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$item->id}}">
                                    <button type="submit" class="btn btn-danger"
                                        onclick="return confirm('Apakah anda yakin ingin menghapus Data Tamu ini ?')">Hapus</button>
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
        buttons: ['copy', 'csv', 'excel', 'pdf', 'print'],
        scrollX: true
    });
    });
</script>
@endsection