<!doctype html>
<html lang="en" class="h-100">
<link rel="icon" href="{{ url('assets/img/logo.png') }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <meta name="generator" content="Hugo 0.101.0">
  <title>Feedback</title>
  <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/cover/">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="assets/css/cover.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</head>

<body class="d-flex h-100 ">
  <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">

    <div class="px-3">
      <header class="mb-5">
        <div>
          <img src="https://img.icons8.com/fluency/48/000000/feedback.png" style="float:left" />
          <h1><b>FeedBack</b></h1>
        </div>
      </header>
      <p class="lead">Silahkan Berikan Feedback bagi perusahaan kami agar menjadi lebih baik lagi kedepannya</p>

      <div class="form-step form-step-active">
        <div id="formFeedback">
          <table class="table table-striped text-center">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Data Layanan</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($transaction as $tran)
              <tr>
                <td scope="row">{{ $tran->id }}</td>
                <td>{{ $tran->customer->name }}</td>
                <td>{{ $tran->data}}</td>
                <td>
                  @if ($tran->Feedback!=null )
                  <span class="badge bg-success">Sudah Mengisi</span>
                <td>
                  <button type="button" id="btnmodal" class="btn btn-sm feedbackBtn btn-primary " disabled
                    data-toggle="modal">
                    Submit
                  </button>
                </td>
                @else ()
                <span class="badge bg-danger">Belum Mengisi</span>
                <td>
                  <button type="button" id="btnmodal" class="btn btn-sm feedbackBtn btn-primary " data-toggle="modal">
                    Submit
                  </button>
                </td>
                @endif
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>

          <!-- Modal -->
          <div class="modal fade" id="feedbackModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
            aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="staticBackdropLabel">Feedback</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form method="post" action="simpanfeed" class="sigin-form">
                    @csrf
                    <input type="hidden" name="id" id="id">
                    <col-md-10>
                      <div class="col-md-8">
                        <h6 id="transactionID"></h6>
                      </div>
                      <div>
                        <label>Apakah anda puas dengan pelayanan yang kami berikan?</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <div class="rating">
                          <input class="form-check-input" type="radio" name="service" id="1" value="5">
                          <label class="form-check-label" for="1"></label>

                          <input class="form-check-input" type="radio" name="service" id="2" value="4">
                          <label class="form-check-label" for="2"></label>

                          <input class="form-check-input" type="radio" name="service" id="3" value="3">
                          <label class="form-check-label" for="3"></label>

                          <input class="form-check-input" type="radio" name="service" id="4" value="2">
                          <label class="form-check-label" for="4"></label>

                          <input class="form-check-input" type="radio" name="service" id="5" value="1">
                          <label class="form-check-label" for="5"></label>
                        </div>
                      </div>
                    </col-md-10>
                    <col-md-10>
                      <div>
                        <label>Apakah anda puas dengan sarana dan fasilitas yang kami sediakan?</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <div class="rating">
                          <input class="form-check-input" type="radio" name="facility" id="6" value="5">
                          <label class="form-check-label" for="6"></label>

                          <input class="form-check-input" type="radio" name="facility" id="7" value="4">
                          <label class="form-check-label" for="7"></label>

                          <input class="form-check-input" type="radio" name="facility" id="8" value="3">
                          <label class="form-check-label" for="8"></label>

                          <input class="form-check-input" type="radio" name="facility" id="9" value="2">
                          <label class="form-check-label" for="9"></label>

                          <input class="form-check-input" type="radio" name="facility" id="10" value="1">
                          <label class="form-check-label" for="10"></label>

                        </div>

                      </div>
                    </col-md-10>
                    <col-md-10>
                      <div>
                        <label>Apakah anda puas dengan kualitas data yang kami berikan?</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <div class="rating">
                          <input class="form-check-input" type="radio" name="dataqualities" id="11" value="5">
                          <label class="form-check-label" for="11"></label>

                          <input class="form-check-input" type="radio" name="dataqualities" id="12" value="4">
                          <label class="form-check-label" for="12"></label>

                          <input class="form-check-input" type="radio" name="dataqualities" id="13" value="3">
                          <label class="form-check-label" for="13"></label>

                          <input class="form-check-input" type="radio" name="dataqualities" id="14" value="2">
                          <label class="form-check-label" for="14"></label>

                          <input class="form-check-input" type="radio" name="dataqualities" id="15" value="1">
                          <label class="form-check-label" for="15"></label>

                        </div>
                      </div>
                    </col-md-10>

                    <div class="form-group">
                      <label>Kritik dan Saran</label>
                      <textarea name="suggestions" class="textarea form-control" id="suggestions" cols="40" rows="5"
                        placeholder="Silahkan berikan kritik dan saran" required="required"
                        oninvalid="this.setCustomValidity('Silahkan isi data yang anda inginkan')"
                        onvalid="this.setCustomValidity('')"></textarea>

                      {{-- <div class="invalid-feedback">
                        Please enter a message in the textarea.
                      </div> --}}
                    </div>

                    {{-- @error('feedback')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror --}}
                </div>
                <div class="modal-button">
                  <input type="button" class="btn btn-secondary" data-bs-dismiss="modal" value="Close">
                  <input class="btn btn-primary" type="submit" value="Submit">
                </div>
                @include('sweetalert::alert')
              </div>
            </div>
          </div>
          <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
            integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
          </script>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
            integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
          </script>


          <script>
            $(document).ready(function(){
                        $('.feedbackBtn').on('click', function(){

                            $('#feedbackModal').modal('show');

                            $tr =$(this).closest('tr');
                            var data= $tr.children("td").map(function(){
                            return $(this).text();
                            }).get();

                            $(".modal-body #id").val( data[0] );
                        });

                        
                    });
                    
          </script>
        </div>
      </div>
      <a class="btn btn-dark fadeIn fourth" style="margin-left: 15px; padding: 15px 30px;"
        href="{{ url('feedback') }}">&xlarr; Kembali</a><br>
    </div>
  </div>
</body>