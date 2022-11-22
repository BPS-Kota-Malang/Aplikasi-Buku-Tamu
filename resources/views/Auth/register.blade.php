<!DOCTYPE html>
<html dir="ltr">
<link rel="icon" href="{{ url('assets/img/logo.png') }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <title>Adminmart Template - The Ultimate Multipurpose admin template</title>
    <link href="{{ asset('assets/css/style.min.css') }}" rel="stylesheet">
</head>

<body>
    <div class="main-wrapper">
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center position-relative"
            style="background:url('{{  asset('assets/img/auth-bg.jpg')}}') no-repeat center center;">
            <div class="auth-box row text-center">
                <div class="col-lg-7 col-md-5 modal-bg-img"
                    style="background-image: url('{{ asset('assets/img/3.png')}}');">
                </div>
                <div class="col-lg-5 col-md-7 bg-white">
                    <div class="p-3">

                        <img src="{{ ('assets/img/icon.png') }}" alt="wrapkit">
                        <h2 class="mt-3 text-center">Registrasi</h2>

                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <form class="mt-4">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input name="name" class="form-control @error('name') is-invalid @enderror"
                                                type="text" placeholder="Silahkan Masukkan Nama">

                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input name="email"
                                                class="form-control @error('email') is-invalid @enderror" type="email"
                                                placeholder="Silahkan Masukkan email">
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12">

                                        <div class="form-group">
                                            <input name="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                type="password" placeholder="Silahkan Masukkan Password">
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <input name="password_confirmation" class="form-control" type="password"
                                                placeholder="Konfirmasi Password">
                                        </div>

                                    </div>
                                    <div class="col-lg-12 text-center">
                                        <button type="submit" class="btn btn-block btn-dark">Registrasi</button>
                                    </div>
                                    <div class="col-lg-12 text-center mt-5">
                                        Apakah Anda Sudah Memiliki Akun? <a href="{{ route('login') }}"
                                            class="text-danger">Login</a>
                                    </div>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/libs/jquery/dist/jquery.min.js "></script>
    <script src="assets/libs/popper.js/dist/umd/popper.min.js "></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js "></script>
    <script>
        $(".preloader ").fadeOut();
    </script>
</body>

</html>