<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Feedback</title>
    <h1 class="mb-3 text-center">Feedback </h1>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
    <div class="form-step form-step-active">
       
          

        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">no</th>
                <th scope="col">transaksi</th>
                <th scope="col">tanggal</th>
                <th scope="col">action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($transaction as $tran)
              <tr>
                <th scope="row">{{ $tran->id }}</th>
                <td>{{ $tran->customer->name }}</td>
                <td>{{ $tran->media->media_type }}</td>
                <td>
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Feedback
                  </button>

                   <!-- Modal -->
                  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          ...
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </td>
              </tr>
              @endforeach
              
            </tbody>
          </table>

          <!-- Button trigger modal -->
         

         
</body>


  