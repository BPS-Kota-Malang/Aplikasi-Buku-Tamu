<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Buku Tamu - BPS Kota Malang</title>
    <link rel="stylesheet" href="{{url('/form/css/style.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}" />

  </head>
  <body>
    <form id="myForm" action="{{ url ('/simpan-bukutamu')}}" method="POST" autocomplete = "off">
        @csrf
      <h1 align = center>Buku Tamu - BPS Kota Malang</h1>

      <div style="text-align:center;">
        <span class="step" id = "step-1">1</span>
        <span class="step" id = "step-2">2</span>
        <span class="step" id = "step-3">3</span>
        <span class="step" id = "step-4">4</span>
      </div>
      <h2>Informasi Pribadi</h2>
      <div class="tab" id = "tab-1">
        <label for="name" style="color:#000000">No Handphone</label>
        <div class="input-group">
            <input type="text" name="hp" id="hp" class="form-control" placeholder="Silahkan isi no handphone anda"/>
        </div>

        <div class="input-group">
            <label for="name" style="color:#000000">Nama Lengkap</label>
            <input type="text" name="name" id="name" placeholder="Silahkan isi nama anda" 
            onkeypress="return event.charCode < 48 || event.charCode  >57"/>
        </div>

        <div class="form-group mb-3">
            <label class="gender" for="gender" style="color:#000000">Jenis Kelamin</label>
            <select class="custom-select my-1 mr-sm-2" name="gender" id="inlineFormCustomSelectPref"  required>
            <option selected="false" disabled="disabled" >Silahkan Pilih Jenis Kelamin
            <option value="lakilaki">Pria</option>
            <option value="perempuan">Wanita</option>
            </select>
        </div>

        <div class="input-group">
            <label for="email" style="color:#000000">Email</label>
            <input type="text" name="email" id="email" class="form-control" placeholder="Silahkan isi email anda"/>
        </div>

        <div class="input-group">
            <label for="address" style="color:#000000">Alamat</label>
            <input type="text" name="address" id="address" class="form-control" placeholder="Silahkan isi alamat anda"/>
        </div>

        <div class="input-group">
            <label for="age" style="color:#000000">Usia</label>
            <input type="text" name="age" id="age" class="form-control" placeholder="Silahkan isi umur anda (contoh: 27)"
            onkeypress="return event.charCode >= 48 && event.charCode <=57"/>
        </div>

        <div class="index-btn-wrapper">
          <div class="index-btn" onclick="run(1, 2);">Next</div>
        </div>
      </div>

      <div class="tab" id = "tab-2">
        <p>Riwayat</p>
      
        <div class="input-group">
            <label for="institute" style="color:#000000">Nama instansi</label>
            <input type="text" name="institute" id="institute" class="form-control" placeholder="Silahkan isi nama instansi anda"
            onkeypress="return event.charCode < 48 || event.charCode  >57"/>
        </div>

        <div class="input-group">
            <label for="nipnim" style="color:#000000">NIP/NIM</label>
            <input type="text" name="nipnim" id="nipnim" class="form-control" placeholder="Silahkan isi nip/nim anda"
            onkeypress="return event.charCode >= 48 && event.charCode <=57"/>
        </div>

        <div class="form-group mb-3">
            <label class="label" for="job" style="color:#000000">Pekerjaan</label>
            <select class="custom-select my-1 mr-sm-2" name="job" id="inlineFormCustomSelectPref" required>
                <option selected="false" disabled="disabled">Silahkan Pilih Pekerjaan</option>
                @foreach ($job as $p)
                <option value="{{ $p->id }}">{{$p->job_type}}</option>
                @endforeach
            </select>
        </div><br><br>

        <div class="form-group mb-3">
            <label class="label" for="education" style="color:#000000">Pendidikan</label>
            <select class="custom-select my-1 mr-sm-2" name="education" id="inlineFormCustomSelectPref" required>
                <option selected="false" disabled="disabled">Silahkan Pilih Pendidikan</option>
                @foreach ($education as $p)
                <option value="{{ $p->id }}">{{$p->education_type}}</option>
                @endforeach
            </select>
        </div><br><br>

        <div class="index-btn-wrapper">
          <div class="index-btn" onclick="run(2, 1);">Previous</div>
          <div class="index-btn" onclick="run(2, 3);">Next</div>
        </div>
      </div>

      <div class="tab" id = "tab-3">
        <p>Pelayanan</p>

        <div class="input-group">
            <div class="form-group mb-3">
                <label class="label" for="media" style="color:#000000" >Media Pelayanan</label>
                <select class="custom-select my-1 mr-sm-2" name="media" id="inlineFormCustomSelectPref" required>
                <option selected="false" disabled="disabled">Silahkan Pilih Media Pelayanan</option>
                @foreach ($media as $p)
                <option value="{{ $p->id }}">{{$p->media_type}}</option>
                @endforeach
                </select>
            </div>
        </div>

        <div class="input-group">
            <div class="form-group mb-3">
                <label class="label" for="media"  style="color:#000000" >Kebutuhan Data</label>
                <select class="custom-select my-1 mr-sm-2" name="sub_categories" id="inlineFormCustomSelectPref" required>
                    <option selected="false" disabled="disabled">Silahkan Pilih Kebutuhan Data</option>
                    @foreach($categories as $group)
                        <optgroup label="{{$group->categories_type }}">
                            @foreach ($sub_categories as $s)
                            @if($s->id_categories == $group->id)
                                <option value="{{ $s->id}}">{{$s->sub_categories_type}}</option>
                            @endif
                            @endforeach
                        </optgroup>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="input-group">
            <div class="form-group mb-3">
                <label class="label" for="service"  style="color:#000000" >Jenis Pelayanan</label>
                <select class="custom-select my-1 mr-sm-2" name="service" id="inlineFormCustomSelectPref" required>
                <option selected="false" disabled="disabled">Silahkan Pilih Jenis Pelayanan</option>
                @foreach ($service as $j)
                <option value="{{ $j->id }}">{{$j->service_type}}</option>
                @endforeach
                </select>
            </div>
        </div>

        <div class="index-btn-wrapper">
          <div class="index-btn" onclick="run(3, 2);">Previous</div>
          <div class="index-btn" onclick="run(3, 4);">Next</div>
        </div>
      </div>

      <div class="tab" id = "tab-4">
        <p>Tujuan</p>

        <div class="input-group">
            <div class="form-group mb-3">
                <label class="label" for="purpose" style="color:#000000">Tujuan</label>
                <select class="custom-select my-1 mr-sm-2" name="purpose" id="inlineFormCustomSelectPref" required>
                <option selected="false" disabled="disabled">Silahkan Pilih Tujuan</option>
                @foreach ($purpose as $p)
                <option value="{{ $p->id }}">{{$p->purpose_type}}</option>
                @endforeach
                </select>
            </div>
        </div>

        <div class="input-group">
            <label for="data" style="color:#000000">Data</label>
            <textarea type="text" name="data" id="data" placeholder="Silahkan isi data spesifik yang anda perlukan" class="form-control" rows="10" cols="55" required
            onkeypress="return event.charCode < 48 || event.charCode  >57"></textarea>
        </div>

        <div class="index-btn-wrapper">
          <div class="index-btn" onclick="run(4, 3);">Previous</div>
          <button class = "index-btn" type="submit" name="submit" style = "background: blue;">Submit</button>
        </div>
      </div>
    </form>

    <script>
      // Default tab
      $(".tab").css("display", "none");
      $("#tab-1").css("display", "block");

      function run(hideTab, showTab){
        if(hideTab < showTab){ // If not press previous button
          // Validation if press next button
          var currentTab = 0;
          x = $('#tab-'+hideTab);
          y = $(x).find("input")
          z = $(x).find("select")
          for (i = 0; i < y.length; i++){
            if (y[i].value == ""){
              $(y[i]).css("background", "#ffdddd");
              return false;
            }
          }
          for (i = 0; i < z.length; i++){
            if (z[i].value == ""){
              $(z[i]).css("background", "#ffdddd");
              return false;
            }
          }
        }

        // Progress bar
        for (i = 1; i < showTab; i++){
          $("#step-"+i).css("opacity", "1");
        }

        // Switch tab
        $("#tab-"+hideTab).css("display", "none");
        $("#tab-"+showTab).css("display", "block");
        $("input").css("background", "#fff");
      }


      $('#hp').on('keyup', function (){

        $value = $(this).val();
        // alert ($value); 
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
            }
        });
        alert ($value);
        $.ajax({

          type  : 'post',
          url   : '{{ URL::to('cekcustomer') }}',
          data  : {'search':$value},
          success:function(data)
          {
              console.log(data);
              
          }
        });
      })
      
    </script>
  </body>
</html>