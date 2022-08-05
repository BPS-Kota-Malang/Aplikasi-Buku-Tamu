<!doctype html>
<html lang="en" class="h-100">




<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="generator" content="Hugo 0.101.0">
    <title>FEEDBACK</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    

    
    <!-- Custom styles for this template -->
    <link href="assets/css/cover.css" rel="stylesheet">
</head>

<body class="d-flex h-100 text-center ">
  <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
    <header class="mb-5">
      <div>
        <h3 class="float-md-start mb-0">FeedBack</h3>
        <nav class="nav nav-masthead justify-content-center float-md-end">
          
        </nav>
      </div>
    </header>
  
    <main class="px-3">
      <h1>Selamat Datang</h1>
      <div class="form-step form-step-active">
        <form action="{{'showtransaction'}}" method="post" class="sigin-form">
          @include('sweetalert::alert')
          @csrf
          <div class="mb-3">
            <label for="hp" class="form-label">Tolong isi nomor hp anda</label>
            <input type="text" class="form-control" name ='hp' id="hp" placeholder="Silahkan isi no handphone anda">
            <input class="btn btn-lg btn-primary fw-bold border-white bg-white" type="submit" value="Submit">
          </div>
    </main>
  
    
  </div>
  
  

          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>


  </html>