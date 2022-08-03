<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="{{ asset('pengguna/assets/css/style.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
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
                  <li><a href="#courses">Feedback</a></li>
                  <li><a href="about">About</a></li>
                  <li><a href="contact">Contact</a></li>
              </ul>
               </div>
                <br><br>
                <div class="kolom-about">
                    <p class="deskripsi">
                        <h2>Contact Us</h2>
                    </p>
                </div>
          </div>
      </div>
    </nav>

    <section class="tutors">
        <div class="tengah">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="table-contact">
                        <div class="card col-12 col-md-6">
                            <div class="card-wrapper">
                                <div class="text-wrapper">
                                    <br>
                                    <h6>
                                    <img src="{{ asset('pengguna/assets/images/placeholder.png') }}" style="width:60px; height:60px;">
                                    </h6>
                                    <br>
                                    <p class="mbr-text mbr-fonts-style display-7">
                                        <a class="text-primary" style="color: #37517E;"><b>Address</b><br><br> Janti Bar. No.47, Bandungrejosari,Kec. Sukun, Kota Malang, Jawa Timur 65148</a>
                                    </p>
                                </div>
                                <br><br>
                                <div class="text-wrapper">
                                    <br>
                                    <h6>
                                     <img src="{{ asset('pengguna/assets/images/telephone.png') }}" style="width:60px; height:60px;">
                                    </h6>
                                    <br>
                                    <p class="mbr-text mbr-fonts-style display-7 " style="color: #37517E;"><b>Call</b><br><br>Telepon: (0341) 801164</p>
                                </div>
                            </div>
                        </div>
                        <br><br>
                        <div class="card col-12 col-md-6">
                            <div class="card-wrapper">
                                <div class="image-wrapper">
                                    <span class="mbr-iconfont socicon-mail socicon" style="color: rgb(68, 121, 217); fill: rgb(68, 121, 217);"></span>
                                </div>
                                <div class="text-wrapper">
                                    <br>
                                    <h6>
                                     <img src="{{ asset('pengguna/assets/images/email.png') }}" style="width:60px; height:60px;">
                                    </h6>
                                    <br>
                                    <p class="mbr-text mbr-fonts-style display-7" style="color: #37517E;"><b>Email</b><br><br>bps3573@bps.go.id
                                    </p>
                                </div>
                                 <br><br>
                                 <div class="text-wrapper">
                                    <br>
                                    <h6>
                                     <img src="{{ asset('pengguna/assets/images/24-hour-clock.png') }}" style="width:60px; height:60px;">
                                    </h6>
                                    <br>
                                    <p class="mbr-text mbr-fonts-style display-7" style="color: #37517E;"><b>Open Hours</b><br><br>Senin-Kamis, 08.00-16.00 WIB<br>Jumat, 08.00-15.00 WIB</p>
                                </div>
                            </div>
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
