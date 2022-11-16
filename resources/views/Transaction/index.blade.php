@extends('app')
@section('content')
<div class="card">
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
    <div class="card-header">
        <h5 class="mb-0 text-center">Data Transaksi</h5>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
        <a href="{{ route('transaction.index')}}" class="btn btn-success btn-refresh"><i
                class="fa fa-retweet"></i>Refresh</a>

        <a href="#" class="btn btn-primary  btn-filter" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <i class="fa fa-filter"></i> Filter Tanggal</a>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Filter Tanggal Transaksi</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                            aria-hidden="true">X
                    </div>

                    <div class="modal-body">
                        <form action="{{ route ('filter')}}" method="post">
                            @csrf
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Dari Tanggal</label>
                                    <input type="date" class="form-control datepicker" placeholder="Dari Tanggal"
                                        name="dari" value="{{ date('Y-m-d') }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Sampai Tanggal</label>
                                    <input type="date" class="form-control datepicker" placeholder="Sampai Tanggal"
                                        name="sampai" value="{{ date('Y-m-d') }}">
                                </div>

                            </div>
                            <!-- /.box-body -->

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="card-body">
        <a href="{{('/download-pdf-transaction')}}" class="btn btn-danger border">PDF Data</a>
        <a href="{{('/export-excel-transaction')}}" class="btn btn-info border">Excel Data</a>
        <a href="{{('export-csv-transaction')}}" class="btn btn-dark border">CSV Data</a>
        <table class="table table-striped border" id="myTable">
            <thead class="thead-dark text-center">
                <tr style="text-align: center">
                    <th scope="col">No</th>
                    <th scope="col"><br>Customer</th>
                    <th scope="col">Status Transaksi</th>
                    {{-- <th scope="col">Id Media</th>
                    <th scope="col">Id <br> Pelayanan</th> --}}
                    <th scope="col">Feedback <br>Pelayanan</th>
                    <th scope="col">Feedback <br>Sarana</th>
                    <th scope="col">Feedback <br>Kualitas</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Status Penilaian</th>
                    <th scope="col" width="25%">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($transaction as $item)
                <tr style="text-align: center">
                    <td>{{ $loop->iteration}}</td>
                    <td>{{ $item->customer->name }}</td>
                    <td>
                        @if($item->status==1)
                        <a href="{{ url('change-status/'.$item->id) }}"
                            onclick="return confirm('Apakah anda yakin ingin mengubah status transaksi ini?')"
                            class="btn btn-sm btn-success">Sudah dilayani</a>
                        @else
                        <a href="{{ url('change-status/'.$item->id) }}"
                            onclick="return confirm('Apakah anda yakin ingin mengubah status transaksi ini?')"
                            class="btn btn-sm btn-danger">Belum dilayani</a>
                        @endif
                    </td>
                    {{-- <td>{{ $item->media->media_type}}</td>
                    <td>{{ $item->service->service_type }}</td> --}}
                    @if ($item->Feedback != null)
                    <td>{{ $item->Feedback->service }}</td>
                    <td>{{ $item->Feedback->facility }}</td>
                    <td>{{ $item->Feedback->dataqualities }}</td>
                    @else
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    @endif
                    <td>{{ $item->created_at }}</td>
                    <td>
                        @if ($item->FeedBack!=null )
                        <span class="badge badge-success">Sudah menilai</span>
                        @else ()
                        <span class="badge badge-danger">Belum menilai</span>
                        @endif
                    </td>

                    <td>
                        <div class="row justify-content-center">
                            <div class="">
                                <a href="{{ route('transaction.edit', $item->id)}}" class="btn btn-warning">Edit</a>
                            </div>
                            <div class="ml-2">
                                <a href="{{ route('transaction.show', $item->id)}}" class="btn btn-info">Show</a>
                            </div>
                            <div class="ml-2">
                                <form action="{{route('transaction.destroy', $item->id)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger"
                                        onclick="return confirm('Apakah anda yakin ingin menghapus Data Transaksi ini ?')">Delete</button>

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
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
    integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
    integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
</script>
<script src="extensions/auto-refresh/bootstrap-table-auto-refresh.js"></script>

<script type="text/javascript">
    $(document).ready( function () {
        $('#myTable').DataTable({
            dom: 'Bfrtip'
        });

        $('.btn-filter').click(function(e){
            e.preventDefault();

            $('$modal-filter').modal();
        })

        const myModal = document.getElementById('myModal')
        const myInput = document.getElementById('myInput')

        myModal.addEventListener('shown.bs.modal', () => {
        myInput.focus()
})
    });
</script>
@endsection