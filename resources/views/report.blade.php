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
        <td colspan="10"><hr></td>
    </tr>
</table>
<body>
    <div class="card-header">
        <h2>Ringkasan - Data Buku Tamu</h2>
        <p style="text-align: justify">Buku tamu <strong>BPS - Kota Malang</strong> merupakan buku yang berisi daftar pelanggan yang bertujuan dalam pemenuhan kebutuhan data. 
            Buku tamu ini bisa menjadi patokan dalam evaluasi BPS Kota Malang dalam melayani masyarakat. Berikut ini ringkasan data buku tamu:</p>
    </div>

    <p style="text-align: center">Total Pengunjung : <strong>{{$customer}}</strong></p>

    <h4>1. Data Customer - Berdasarkan Pekerjaan</h4> 
    <p>a. ASN (Aparatur Sipil Negara) : <strong>{{$asn}}</strong> pengunjung</p> 
    <p>b. Pelajar/Mahasiswa           : <strong>{{$student}}</strong> pengunjung</p> 
    <p>c. Dosen/Peneliti              : <strong>{{$lecturer}}</strong> pengunjung</p> 

    <h4>2. Data Customer - Berdasarkan Pendidikan</h4> 
    <p>a. SMP/Dibawahnya : <strong>{{$smp}}</strong> pengunjung</p> 
    <p>b. SMA/SMK : <strong>{{$sma}}</strong> pengunjung</p>
    <p>c. Diploma (D1/D2/D3) : <strong>{{$diploma}}</strong> pengunjung</p>
    <p>d. Sarjana (S1) : <strong>{{$sarjana}}</strong> pengunjung</p>
    <p>e. Magister (S2) : <strong>{{$magister}}</strong> pengunjung</p>
    <p>f. Doktor (D3) : <strong>{{$doktor}}</strong> pengunjung</p>
</body>
</html>