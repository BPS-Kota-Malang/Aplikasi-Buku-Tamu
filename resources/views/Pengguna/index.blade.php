<!DOCTYPE html>
<html lang="en">

<link rel="icon" href="{{ url('assets/img/logo.png') }}">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Home</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('template/assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('template/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('template/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('template/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('template/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('template/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('template/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('template/assets/css/style.css') }}" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">Buku Tamu</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->

      <nav id="navbar" class="navbar">
        @include('sweetalert::alert')
        <ul>
          <li><a class="nav-link scrollto" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto" href="#cta">Feedback</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
          data-aos="fade-up" data-aos-delay="200">
          <h1>Badan Pusat Statistik <br> Kota Malang</h1>
          <h2>Melayani dengan Profesional, Integritas, dan Amanah</h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="/bukutamu" class="btn-get-started scrollto">Form Tamu</a>
            <a href="https://www.youtube.com/watch?v=iTYmojXCpIw" class="glightbox btn-watch-video"><i
                class="bi bi-play-circle"></i><span>Lihat Kantor BPS</span></a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="{{  asset('template/assets/img/hero-img.png') }}" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg">
      <div class="container">
        <div class="row" data-aos="zoom-in">
          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{ asset('template/assets/img/mitra/ppn.png') }}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{ asset('template/assets/img/mitra/kemendagri.png') }}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{ asset('template/assets/img/mitra/kemenkeu.png') }}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{ asset('template/assets/img/mitra/kominfo.png') }}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{ asset('template/assets/img/mitra/kemendes.png') }}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{ asset('template/assets/img/mitra/bps.png') }}" class="img-fluid" alt="">
          </div>

        </div>

      </div>
    </section><!-- End Cliens Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>About Us</h2>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <strong>VISI</strong>
            <p style="text-align: justify">
              Pelopor data statistik bagi semua kalangan dengan pendataan secara digital.
              Dengan visi baru ini, eksistensi BPS sebagai penyedia data dan informasi
              statistik menjadi semakin penting, karena memegang peran dan pengaruh sentral
              dalam penyediaan statistik berkualitas tidak hanya di Indonesia, melainkan juga
              di tingkat dunia. Dengan visi tersebut juga, semakin menguatkan peran BPS sebagai pembina data statistik.
            </p>
            <a href="https://malangkota.bps.go.id/" class="btn-learn-more">Web BPS Kota Malang</a>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <strong>MISI</strong>
            <p style="text-align:justify">
              Menjadi jembatan atau penghubung untuk mendapatkan data antara pengguna dan penyedia layanan data (BPS).
              Dalam memenuhi kebutuhan masyarakat akan data, buku tamu elektronik memiliki tujuan sebagai berikut:
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i>Mengetahui data jumlah banyaknya tamu yang berkunjung</li>
              <li><i class="ri-check-double-line"></i>Mengetahui tujuan penggunaan data dan kunjungan tiap periode</li>
              <li><i class="ri-check-double-line"></i>Mendapat timbal balik antara pengunjung dengan layanan BPS</li>
            </ul>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
            <img src="{{ asset('template/assets/img/skills.png') }}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
            <h3>Ringkasan Data Pengunjung</h3>
            <p>
              Berikut ini merupakan ringkasan jumlah pengguna buku tamu BPS Kota Malang berdasarkan kriteria pekerjaan:
            </p>

            <div class="row">

              <!-- Data Pengunjung -->
              <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-sm font-weight-bold text-primary text-uppercase mb-1">
                          Total Pengunjung</div>
                        <div class="h5 mb-0 font-weight text-gray-800"><strong>{{$customer}}</strong> orang</div>
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-users fa-2x text-gray-300"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Data ASN -->
              <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-sm font-weight-bold text-success text-uppercase mb-1">
                          ASN</div>
                        <div class="h5 mb-0 font-weight text-gray-800"><strong>{{$asn}}</strong> orang</div>
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-user-circle fa-2x text-gray-300"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Data Pelajar/Mahasiswa-->
              <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-sm font-weight-bold text-info text-uppercase mb-1">Pelajar
                        </div>
                        <div class="row no-gutters align-items-center">
                          <div class="col-auto">
                            <div class="h5 mb-0 mr-3 font-weight text-gray-800"><strong>{{$student}}</strong> orang
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-address-card fa-2x text-gray-300"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Data Guru/Dosen -->
              <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-dark shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-sm font-weight-bold text-dark text-uppercase mb-1">
                          Guru/Dosen</div>
                        <div class="h5 mb-0 font-weight text-gray-800"><strong>{{$lecturer}}</strong> orang</div>
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-address-book fa-2x text-gray-300"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Data Peneliti -->
              <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-sm font-weight-bold text-warning text-uppercase mb-1">
                          Peneliti</div>
                        <div class="h5 mb-0 font-weight text-gray-800"><strong>{{$researcher}}</strong> orang</div>
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-american-sign-language-interpreting fa-2x text-gray-300"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- General -->
              <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-secondary shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-sm font-weight-bold text-secondary text-uppercase mb-1">
                          Umum</div>
                        <div class="h5 mb-0 font-weight text-gray-800"><strong>{{$general_job}}</strong> orang</div>
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-comments fa-2x text-gray-300"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>

      </div>
    </section><!-- End Skills Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
          <p>
            Pelayanan Statistik BPS Kota Malang terdiri berbagai macam layanan.
            Di halaman ini Anda dapat menemukan berbagai layanan yang kami sediakan.
            #MelayaniDenganHati❤️
          </p>
        </div>

        <div class="row">
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4><a href="">Permintaan Data</a></h4>
              <p>
                Melayani permintaan data dari pengguna data baik dari kalangan peneliti, mahasiswa, maupun kalangan
                umum.
              </p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
            data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="">Konsultasi Data</a></h4>
              <p>Konsultasi dilakukan berupa hal terkait data, metadata, klasifikasi, dan produk statistik BPS lainnya.
              </p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in"
            data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4><a href="">Rekomendasi Data</a></h4>
              <p>
                Rekomendasi kegiatan statistik adalah saran yang diberikan oleh BPS terhadap kegiatan statistik.
              </p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in"
            data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-layer"></i></div>
              <h4><a href="">Umum (lain-lain)</a></h4>
              <p>Informasi general atau yang berkaitan dengan hal-hal yang lain dapat langsung mengujungi kantor BPS
                Kota Malang.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">
        <div class="row">
          <div class="col-lg-9 text-center text-lg-start">
            <h3>Berikan Penilaian - Feedback</h3>
            <p>
              Kritik dan Saran dapat disampaikan melalui tombol penilaian disebelah kanan Anda.
              Kritik dan Saran yang diberikan akan dilindungi dan kerahasiaan identitas Anda
              terjaga dengan baik. Berikan penilaian secara bebas tanpa paksaan.
            </p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="feedback">Beri Nilai</a>
          </div>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up" style="justify-content: center">

        <div class="section-title">
          <h2>Pricing</h2>
          <p>
            Gratis adalah layanan data BPS yang memungkinkan konsumen data untuk mendapatkan data atau publikasi secara
            gratis.
            Sedangkan, Berbayar adalah layanan data BPS yang memberlakukan tarif pada produk BPS. Pada layanan berbayar
            ini
            didasarkan kepada Peraturan <b>Pemerintah no.54 Tahun 2009</b>.
          </p>
        </div>

        <div class="row" style="justify-content: center">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="box">
              <h3>Gratis</h3>
              <h4>Rp 0.-<span>Perdokumen</span></h4>
              <ul>
                <li><i class="bx bx-check"></i> Mendapatkan Publikasi Gratis</li>
                <li><i class="bx bx-check"></i> Jumlah Data Sedikit</li>
              </ul>
              <a href="#" class="buy-btn">Isi Form Tamu</a>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="box featured">
              <h3>Berbayar</h3>
              <h4>Rp. 5 Rupiah<span>>5 mb Perdokumen</span></h4>
              <ul>
                <li><i class="bx bx-check"></i> Mendapatkan Publikasi Gratis</li>
                <li><i class="bx bx-check"></i> Jumlah Data Banyak</li>
              </ul>
              <a href="#" class="buy-btn">Isi Form Tamu</a>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Pricing Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact" style="justify-content: center">
      <div class="container" data-aos="fade-up" style="justify-content: center">
        <div class="section-title">
          <h2>Contact</h2>
          <p>
            Bagi konsumen data yang datang langsung ke BPS dapat dilayani di Ruang Perpustakaan,
            Ruang Galeri Buku dan Ruang Konsultasi Statistik. Pengunjung dapat membaca publikasi dalam bentuk softcopy.
            Sedangkan untuk penjualan dilakukan di Ruang Galeri Buku dan Ruang Konsultasi Statistik.
          </p>
        </div>

        <div class="row" style="justify-content: center">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Lokasi</h4>
                <p>Janti Bar. No.47, Bandungrejosari,Kec. Sukun, Kota Malang, Jawa Timur 65148</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>bps3573@bps.go.id</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Telepon:</h4>
                <p>(0341) 801164</p>
              </div>

              <div class="calendar">
                <i class="bi bi-calendar"></i>
                <h4>Jadwal Buka:</h4>
                <p>
                  Senin-Kamis, 08.00-16.00 WIB<br>Jumat, 08.00-15.00 WIB
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>BPS Kota Malang</span></strong>. All Rights Reserved 2022
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('template/assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('template/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('template/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('template/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('template/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('template/assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
  <script src="{{ asset('template/assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('template/assets/js/main.js') }}"></script>

</body>

</html>