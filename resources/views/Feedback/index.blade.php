<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Feedback</title>
    <h1 class="mb-3 text-center">Feedback </h1>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>

<body>
    <div class="form-step form-step-active">



        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">no</th>
                <th scope="col">nama</th>
                <th scope="col">data layanan</th>
                <th scope="col">action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($transaction as $tran)
              <tr>
                <th scope="row">{{ $tran->id }}</th>
                <td>{{ $tran->customer->name }}</td>
                <td>{{ $tran->data}}</td>
                <td>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-sm feedbackBtn btn-primary" data-toggle="modal"data-target="">
                  Update
                </button>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>

                <!-- Modal -->
                <div class="modal fade" id="feedbackModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">feedback</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <form method="post" action="feedback"  class="sigin-form">
                          @csrf
                        
                        <col-md-10>
                        <div class="col-md-8">
                          <h6 id="transactionID"></h6>
                        </div>
                        <div class="col-md-8">
                          <label>pelayanan</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="service" id="1" value="1">
                          <label class="form-check-label" for="1">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="service" id="2" value="2">
                          <label class="form-check-label" for="2">2</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="service" id="3" value="3">
                          <label class="form-check-label" for="3">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="service" id="4" value="4">
                          <label class="form-check-label" for="4">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="service" id="5" value="5">
                          <label class="form-check-label" for="5">5</label>
                        </div>
                        </col-md-10>
                        <col-md-10>
                        <div class="col-md-8">
                          <label>sarana dan prasarana</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="facility" id="1" value="1">
                          <label class="form-check-label" for="1">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="fasility" id="2" value="2">
                          <label class="form-check-label" for="2">2</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="facility" id="3" value="3">
                          <label class="form-check-label" for="3">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="facility" id="4" value="4">
                          <label class="form-check-label" for="4">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="facility" id="5" value="5">
                          <label class="form-check-label" for="5">5</label>
                        </div>
                        </col-md-10>
                        <col-md-10>
                        <div class="col-md-8">
                          <label>kualitas data</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="dataqualities" id="1" value="1">
                          <label class="form-check-label" for="1">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="dataqualities" id="2" value="2">
                          <label class="form-check-label" for="2">2</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="dataqualities" id="3" value="3">
                          <label class="form-check-label" for="3">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="dataqualities" id="4" value="4">
                          <label class="form-check-label" for="4">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="dataqualities" id="5" value="5">
                          <label class="form-check-label" for="5">5</label>
                        </div>
                        </col-md-10>


                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <input class="btn btn-primary" type="submit" value="Submit">
                      </div>
                    </div>
                  </div>
                </div>

                <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
              

           

          <!-- Button trigger modal -->

          <script>
            $(document).ready(function(){
                $('.feedbackBtn').on('click', function(){
        
                    $('#feedbackModal').modal('show');
                    $tr =$(this).closest('tr');
                    var data= $tr.children("td").map(function(){
                      return $(this).text();
                    }).get();
        
                    
                    alert(data[0]);
                    
                    
                });
            });
          </script>
</body>


