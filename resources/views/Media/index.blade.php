@extends('app')
@section('content')
<div class="card">
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
    <div class="card-header">
        <h5 class="mb-0 text-center">Data Media Pelayanan</h5>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    </div>
    <div class="card-body">
        <a href="{{route('media.create')}}" class="btn btn-success">Add Data</a>
        <table class="table table-striped border" id="myTable">
            <thead class="thead-dark">
                <tr style="text-align: center">
                    <th scope="col">No</th>
                    <th scope="col">Jenis Media Pelayanan</th>
                    <th scope="col" width="20%">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($media as $item)
                <tr style="text-align: center">

                    <td>{{ $loop->iteration}}
                    <td>{{ $item->media_type}}
                    <td>
                        <div class="row row justify-content-center">
                            <div class="">
                                <a href="{{ route('media.edit', $item->id)}}" class="btn btn-warning">Edit</a>
                            </div>
                            <div class="ml-2">
                                <a href="{{ route('media.show', $item->id)}}" class="btn btn-info">Show</a>
                            </div>
                            <div class="ml-2">
                                <form action="{{route('media.destroy', $item->id)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger"
                                        onclick="return confirm('Apakah anda yakin ingin menghapus Jenis Media Pelayanan ini ?')">Delete</button>
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
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>

<script>
    $(document).ready( function () {
    $('#myTable').DataTable({
        dom: 'Bfrtip'
    });
    });
</script>
@endsection