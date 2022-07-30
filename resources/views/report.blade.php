<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Customer - BPS Kota Malang</title>
    <style>
        #emp{
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
            text-align: center;
        }
        #emp td,#emp th{
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }
        #emp tr:nth-child(even){
            background-color: #0bfdfd; 
            text-align: center;
        }
        #emp th{
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
        <h4 style="text-align: center"><i>Jl. Janti Bar. No.47, Bandungrejosari, Kec. Sukun, Kota Malang, Jawa Timur 65148<i></h4>  
    </td>
    </tr>
    <tr>
        <td colspan="10"><hr> </td>
    </tr>
</table>
<body>
    <div class="card-header">
        <h2>Ringkasan - Data Buku Tamu</h2>
        <p style="text-align: justify">Buku tamu <strong>BPS - Kota Malang</strong> merupakan buku yang berisi daftar pelanggan yang bertujuan dalam pemenuhan kebutuhan data. 
            Buku tamu ini bisa menjadi patokan dalam evaluasi BPS Kota Malang dalam melayani masyarakat. Berikut ini ringkasan data buku tamu:</p>
    </div>
    <div class="card-header">
        <p style="text-align: center">Total Pengunjung : <strong>{{$customer}}</strong></p>
    </div>
    <h4>1. Data Customer - Berdasarkan Pekerjaan</h4> 
    <table id="emp" border="2">
        <title>Customer - BPS</title>
        <thead class="thead-dark">
            <tr>
                <th>Aparatur Sipil Negara</th>
                <th>Pelajar/Mahasiswa</th>
                <th>Dosen/Peneliti</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$asn}}</td>
                <td>{{$student}}</td>
                <td>{{$lecturer}}</td>
            </tr> 
        </tbody>
    </table>
</body>

</html>