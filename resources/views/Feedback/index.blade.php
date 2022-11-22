<!doctype html>
<html lang="en" class="h-100">
<link rel="icon" href="{{ url('assets/img/logo.png') }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="generator" content="Hugo 0.101.0">
    <title>FEEDBACK</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Custom styles for this template -->
    <link href="assets/css/cover.css" rel="stylesheet">
</head>

<body class="d-flex h-100 text-center ">
    {{-- <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column"> --}}
        <div class="wrapper fadeInDown">
            <div id="formContent">
                <!-- Icon -->
                <div class="fadeIn first">
                    <img src="{{ asset('pengguna/assets/images/1726px-lambang-badan-pusat-statistik-bps-indonesia.svg-123x95.png') }}"
                        id="icon" alt="User Icon">
                </div>
                <br>
                <h3>Feedback</h3>
                <div class="form-step form-step-active">
                    <form action="{{'showtransaction'}}" method="post">
                        @include('sweetalert::alert')
                        @csrf
                        <div class="mb-3">
                            <input type="text" class="form-control" name='hp' id="hp"
                                placeholder="Silahkan isi no handphone anda...">
                            <input class="btn btn-success fadeIn fourth" type="submit" value="Submit"
                                style="margin-top: 30px; padding: 15px 70px;">
                            {{-- <br>
                            <marquee behavior="scroll" direction="left">Silahkan berikan penilaian anda tentang
                                pelayanan data kami</marquee> --}}
                        </div>
                    </form>
                </div>
            </div><br>
            <a class="btn btn-light fadeIn fourth" style="margin-left: 15px; padding: 15px 30px;"
                href="{{ url('/') }}">&xlarr; Kembali</a><br>
        </div>
        {{--
    </div> --}}



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</body>

</html>