<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Buku Tamu - BPS Kota Malang</title>
    <link rel="stylesheet" href="{{url('/form/css/style.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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

      <div class="tab" id = "tab-1">
        <p>Informasi Pribadi</p>
        <div class="input-group">
            <input type="text" name="hp" id="hp" class="form-control" placeholder="Silahkan isi no handphone anda"/>
        </div>

        <div class="input-group">
            <label for="name">Nama Lengkap</label>
            <input type="text" name="name" id="name" placeholder="Silahkan isi nama anda"/>
        </div>

        <div class="form-group mb-3">
            <label class="gender" for="gender">Jenis Kelamin</label>
            <select class="custom-select my-1 mr-sm-2" name="gender" id="inlineFormCustomSelectPref">
            <option selected="true" disabled="disabled" >Pilih Jenis Kelamin</option>
            <option value="lakilaki">Pria</option>
            <option value="perempuan">Wanita</option>
            </select>
        </div>

        <div class="input-group">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" class="form-control" placeholder="Silahkan isi email anda"/>
        </div>

        <div class="input-group">
            <label for="address">Alamat</label>
            <input type="text" name="address" id="address" class="form-control" placeholder="Silahkan isi alamat anda"/>
        </div>

        <div class="input-group">
            <label for="age">Usia</label>
            <input type="text" name="age" id="age" class="form-control" placeholder="Silahkan isi umur anda (contoh: 27)"/>
        </div>

        <div class="index-btn-wrapper">
          <div class="index-btn" onclick="run(1, 2);">Next</div>
        </div>
      </div>

      <div class="tab" id = "tab-2">
        <p>Riwayat</p>
      
        <div class="input-group">
            <label for="institute">Nama instansi</label>
            <input type="text" name="institute" id="institute" class="form-control" placeholder="Silahkan isi nama instansi anda"/>
        </div>

        <div class="input-group">
            <label for="nipnim">NIP/NIM</label>
            <input type="text" name="nipnim" id="nipnim" class="form-control" placeholder="Silahkan isi nip/nim anda"/>
        </div>

        <div class="form-group mb-3">
            <label class="label" for="job">Pekerjaan</label>
            <select class="custom-select my-1 mr-sm-2" name="job" id="inlineFormCustomSelectPref">
                <option selected="true" disabled="disabled">Pilih Pekerjaan</option>
                @foreach ($job as $p)
                <option value="{{ $p->id }}">{{$p->job_type}}</option>
                @endforeach
            </select>
        </div><br><br>

        <div class="form-group mb-3">
            <label class="label" for="education">Pendidikan</label>
            <select class="custom-select my-1 mr-sm-2" name="education" id="inlineFormCustomSelectPref">
                <option selected="true" disabled="disabled">Pilih Jenis Pendidikan</option>
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
                <label class="label" for="media">Media Pelayanan</label>
                <select class="custom-select my-1 mr-sm-2" name="media" id="inlineFormCustomSelectPref">
                <option selected="true" disabled="disabled">Pilih Media Pelayanan</option>
                @foreach ($media as $p)
                <option value="{{ $p->id }}">{{$p->media_type}}</option>
                @endforeach
                </select>
            </div>
        </div>

        <div class="input-group">
            <div class="form-group mb-3">
                <label class="label" for="media">Kebutuhan Data</label>
                <select class="custom-select my-1 mr-sm-2" name="sub_categories" id="inlineFormCustomSelectPref">
                    <option selected="true" disabled="disabled">Pilih Kebutuhan Data</option>
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
                <label class="label" for="service">Jenis Pelayanan</label>
                <select class="custom-select my-1 mr-sm-2" name="service" id="inlineFormCustomSelectPref">
                <option selected="true" disabled="disabled">Pilih Jenis Pelayanan</option>
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
                <label class="label" for="purpose">Tujuan</label>
                <select class="custom-select my-1 mr-sm-2" name="purpose" id="inlineFormCustomSelectPref">
                <option selected="true" disabled="disabled">Pilih Tujuan</option>
                @foreach ($purpose as $p)
                <option value="{{ $p->id }}">{{$p->purpose_type}}</option>
                @endforeach
                </select>
            </div>
        </div>

        <div class="input-group">
            <label for="data">Data</label>
            <textarea type="text" name="data" id="data" placeholder="Silahkan isi data spesifik yang anda perlukan" class="form-control" rows="10" cols="55"></textarea>
        </div>

        <div class="index-btn-wrapper">
          <div class="index-btn" onclick="run(4, 3);">Previous</div>
          <div class="index-btn" onclick="run(4, 5);">Next</div>
        </div>
      </div>

      <div class="tab" id = "tab-5">
        <div class="index-btn-wrapper">
          <div class="index-btn" onclick="run(5, 4);">Previous</div>
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
          for (i = 0; i < y.length; i++){
            if (y[i].value == ""){
              $(y[i]).css("background", "#ffdddd");
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
    </script>
  </body>
</html>