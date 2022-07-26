<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Feedback</title>
    <h1 class="mb-3 text-center">Feedback </h1>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
    <div class="form-step form-step-active">
        <form action="{{'showtransaction'}}" method="post" class="sigin-form">
          @csrf
          <div class="mb-3">
            <label for="hp" class="form-label">No Handphone</label>
            <input type="text" class="form-control" name ='hp' id="hp" placeholder="Silahkan isi no handphone anda">
            <input class="btn btn-primary" type="submit" value="Submit">
          </div>

          
            {{-- No Handphone masuk ke route Store. Harusnya bikin route khusus.
            Store untuk ke database

            ijin arep isi kegiatan sek, lanjutne dewe pastikan routenya
            oke --}}
          
          

        {{-- <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">no</th>
                <th scope="col">transaksi</th>
                <th scope="col">tanggal</th>
                <th scope="col">action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($transaction as $tran)
              <tr>
                <th scope="row">{{ $tran->id }}</th>
                <td>{{ $tran->customer->name }}</td>
                <td>{{ $tran->media->media_type }}</td>
                <td>@mdo</td>
              </tr>
                  
              @endforeach
              
            </tbody>
          </table> --}}
</body>


  