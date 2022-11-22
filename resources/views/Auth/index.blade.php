@extends('app')
@section('content')
<div class="card">
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
    <div class="card-header">
        <h5 class="mb-0 text-center">Data Admin</h5>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    </div>
    <div class="card-body">
        <a href="{{route('data-admin.create')}}" class="btn btn-success">Add Data</a>
        <table class="table table-striped border" id="myTable">
            <thead class="thead-dark">
                <tr style="text-align: center">
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Role</th>
                    <th scope="col" width="20%">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pengguna as $item)
                <tr style="text-align: center">

                    <td>{{ $loop->iteration}}
                    <td>{{ $item->name}}
                    <td>{{ $item->email}}
                    <td>{{ $item->role }}</td>
                    <td>
                        <div class="row justify-content-center">
                            <div class="">
                                <a href="{{ route('data-admin.edit', $item->id)}}" class="btn btn-warning">Edit</a>
                            </div>
                            <div class="ml-2">
                                <a href="{{ route('data-admin.show', $item->id)}}" class="btn btn-info">Show</a>
                            </div>
                            <div class="ml-2">
                                <form action="{{route('data-admin.destroy', $item->id)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger"
                                        onclick="return confirm('Apakah anda yakin ingin menghapus Jenis Tujuan ini ?')">Delete</button>
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

<script src="{{ asset('https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js') }}"></script>
<script src="{{ asset('https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js') }}"></script>

<script>
    $(document).ready( function () {
    $('#myTable').DataTable({
        dom: 'Bfrtip'
    });
    });
</script>
@endsection