<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Transaksi - BPS Kota Malang</title>
    <style>
        #emp {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
            text-align: center;
        }

        #emp td,
        #emp th {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        #emp tr:nth-child(even) {
            background-color: #0bfdfd;
            text-align: center;
        }

        #emp th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #4CAF50;
            color: #fff;
            text-align: center;
        }

        h2 {
            text-align: center;
        }
    </style>
</head>

<table>
    <tr>
        <td><img src="{{public_path('/assets/img/logo.png')}}" style="width: 100px; height: 100px"></td>
        <td>
            <h2 style="text-align: center">Badan Pusat Statistik (BPS)</h2>
            <h3 style="text-align: center"><b>Kota Malang<b></h3>
            <h4 style="text-align: center"><i>Jl. Janti Bar. No.47, Bandungrejosari, Kec. Sukun, Kota Malang, Jawa Timur
                    65148<i></h4>
        </td>
    </tr>
    <tr>
        <td colspan="10">
            <hr>
        </td>
    </tr>
</table>
<br>

<body>
    <div class="card-header">
        <h2>Data Transaksi</h2><br>
    </div>
    <table id="emp">
        <title>Transaksi - BPS</title>
        <thead>
            <tr>
                <th>No</th>
                <th>Id <br>Customer </th>
                <th>Id Media</th>
                <th>Id <br> Pelayanan</th>
                <th>Tujuan</th>
                <th>Kebutuhan Data</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($transaction as $item)
            <tr>
                <td>{{ $loop->iteration}}</td>
                <td>{{ $item->customer->name }}</td>
                <td>{{ $item->media->media_type}}</td>
                <td>{{ $item->service->service_type }}</td>
                <td>{{ $item->purpose->purpose_type}}</td>
                <td>{{ $item->subcategory->sub_categories_type}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>