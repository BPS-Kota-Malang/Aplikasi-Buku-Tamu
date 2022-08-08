<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" href="{{ asset('pengguna/assets/css/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <style>
        .banner-image{
            background-image: url('pengguna/assets/images/bg-navbar.png');
            background-size: cover;
        }
    </style>
</head>
<body>
    <nav class="banner-image w-100 vh-100 d-flex justify-content-center align-items-center">
        <div class="wrapper">
            <img src="{{ asset('pengguna/assets/images/1726px-lambang-badan-pusat-statistik-bps-indonesia.svg-123x95.png') }}" style="float:left; height: 59px; width: 76px; margin-top: 23px; padding: 10px 10px">
            <div class="logo"><a href=''>Badan Pusat Statistik<br>Kota Malang</a></div>
            <div class="menu">
                <ul>
                    <li><a href="pelanggan">Home</a></li>
                    <li><a href="feedback">Feedback</a></li>
                    <li><a href="about">About</a></li>
                    <li><a href="contact">Contact</a></li>
                </ul>
                </div>
                <br><br>
                <div class="kolom-about">
                    <p class="deskripsi">
                        <h2>About Us</h2>
                    </p>
                </div>
            </div>
        </div>
    </nav>


    <section class="tutors">
            <div class="tengah">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-4 image-wrapper">
                            <br><br><br>
                            <img class="w-100" src="{{ asset('pengguna/assets/images/bps-1076x1053.jpg') }}" style="float: left; width: 500px;
                            height: 520px; margin-right: 40px; margin-left: 140px; width:500px; justify-content: space-ground;"  >
                        </div>
                        <div class="col-12 col-md">
                            <div class="text-wrapper text-center">

                                <p class="mbr-text mbr-fonts-style display-7" style="font-size:15px; font-family:Poppins; line-height: 30px; text-align: justify; margin: 10px auto;
                                width: 1000px; justify-content: space-between;">
                                    {{-- <img src="{{ asset('pengguna/assets/images/right-arrow-angle.png') }}" style="width:15px; height:15px;"> --}}
                                    <strong class="judul">VISI</strong>
                                    <br>Pelopor data statistik terpecaya untuk semua<br><br>

                                    <strong class="judul">MISI</strong>
                                    <br>Menyiapkan data statistik berkualitas melalui kegiatan statistik yang terintegrasi dan berstandar nasional maupun internasional Memperkuat Sistem Statistik Nasional yang berkesinambungan melalui pembinaan dan koordinasi di bidang statistik Membangun insan statistik yang profesional, integritas, dan amanah untuk kemajuan perstatistikan<br><br>

                                    <strong class="judul">TUJUAN</strong>
                                    <br>Peningkatkan kualitas data statistik melalui kerangka penjaminan kualitas Peningkatan kualitas pelayanan prima hasil kegiatan statistik Penguatan Sistem Statistik Nasional melalui koordinasi dan pembinaan yang efektif di bidang statistik Peningkatan birokrasi yang akuntabel<br>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <div class="footer">
         <h4>
            <img src="{{ asset('pengguna/assets/images/global.png') }}" style="width:25px; height:25px;"> &nbsp; malangkota.bps.go.id &nbsp; &nbsp; &nbsp; &nbsp;
            <img src="{{ asset('pengguna/assets/images/instagram.png') }}" style="width:25px; height:25px;"> &nbsp;
            <img src="{{ asset('pengguna/assets/images/youtube.png') }}" style="width:25px; height:25px;">
            <img src="{{ asset('pengguna/assets/images/facebook-app-symbol.png') }}" style="width:25px; height:25px;">  &nbsp;
            @bpskotamalang
        </h4>
    </div>
</body>
</html>
