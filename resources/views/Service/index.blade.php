@extends('app')
@section('content')
<div class="card">
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
    <div class="card-header">
        Data Jenis Layanan <br><br> <a href="{{route('service.create')}}" class="btn btn-success">Add Data</a>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    </div>
    <div class="card-body">
        <table class="table" id="myTable">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Jenis Pelayanan</th>
                    <th scope="col" width="20%">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($service as $item)
                <tr>

                    <td>{{ $loop->iteration}}
                    <td>{{ $item->service_type}}
                    <td>
                        <div class="row">
                                <div class="col-4">
                                    <a href="{{ route('service.edit', $item->id)}}" class="btn btn-warning">Edit</a>
                                </div>
                                <div class="col-4">
                                    <a href="{{ route('service.show', $item->id)}}" class="btn btn-info">Show</a>
                                </div>
                                <div class="col-4">
                                    <form action="{{route('service.destroy', $item->id)}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger"
                                            onclick="return confirm('Apakah anda yakin ingin menghapus Jenis Pelayanan ini ?')">Delete</button>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>

<script>
    $(document).ready( function () {
    $('#myTable').DataTable({
        dom: 'Bfrtip',
        scrollX: true
    });
    });
</script>
@endsection