<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badan Pusat Statistik</title>
    <link rel="stylesheet" href="{{ url ('pengguna/assets/css/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

</head>
<body>
    <nav>
        @include('sweetalert::alert')
        <div class="wrapper">
            <img src="{{ asset('pengguna/assets/images/1726px-lambang-badan-pusat-statistik-bps-indonesia.svg-123x95.png') }}" style="float:left; height: 59px; width: 76px; margin-top: 23px; padding: 10px 10px">
            <div class="logo"><a href=''>Badan Pusat Statistik<br>Kota Malang</a></div>
            <div class="menu">
                <ul>
                    <li><a href="pelanggan">Home</a></li>
                    <li><a href="feedback.html">Feedback</a></li>
                    <li><a href="about">About</a></li>
                    <li><a href="contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="wrapper">
        <!-- untuk home -->
        <section id="home">
            <div class="kolom">
                <p class="deskripsi"><br></p>
                <h2> BUKU TAMU</h2>
                <p>Melayani dengan Profesional, integritas, dan Amanah</p>
                <p><a href="/" class="tbl-blue">FORM &xrarr;</a></p>
            </div>
            <img src="{{ asset('pengguna/assets/images/img-home.png') }}" style="float:left; height: 470px; padding: 10px 10px; margin-left: 180px; filter: drop-shadow(10px 10px 15px rgba(0, 0, 0, 0.15));"/>
        </section>
    </div>
</body>
</html>
