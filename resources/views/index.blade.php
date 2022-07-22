<!DOCTYPE html>
<html lang="en">
  
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="{{url('/frontend/css/formTamuStyle/style.css')}}" />
  <script src="{{url('/frontend/css/formTamuStyle/script.js')}}" defer></script>
  <title>Form Buku Tamu</title>
</head>
<body>
  <form action="{{url('simpan-bukutamu')}}" method="post" class="sigin-form">
    @csrf
  <h1 class="text-center">BUKU TAMU</h1>
  <h2 class="text-center">Badan Pusat Statistik  Kota Malang</h2>

  <!-- Progress bar -->
  <div class="progressbar">
    <div class="progress" id="progress"></div>
    <div class="progress-step progress-step-active text-center" data-title="Informasi Pribadi"></div>
    <div class="progress-step" data-title="Riwayat"></div>
    <div class="progress-step" data-title="Pelayanan"></div>
    <div class="progress-step" data-title="Tujuan"></div>
  </div>
  
  <!-- Steps 1-->
  <div class="form-step form-step-active">
      <div class="input-group">
        <label for="hp">No Handphone</label>
        <input type="text" name="hp" id="hp" placeholder="Silahkan isi no handphone anda" />
      </div>
      <div class="input-group">
        <label for="name">Nama Lengkap</label>
        <input type="text" name="name" id="name" placeholder="Silahkan isi nama anda" />
      </div>
      <div class="form-group mb-3">
        <label class="gender" for="gender">Jenis Kelamin</label>
        <select class="custom-select my-1 mr-sm-2" name="gender" id="inlineFormCustomSelectPref">
          <option selected="true" disabled="disabled" >Pilih Jenis Kelamin</option>
          <option value="lakilaki">L</option>
          <option value="perempuan">P</option>
        </select>
      </div>
      <div class="input-group">
        <label for="email">Email</label>
        <input type="text" name="email" id="email" placeholder="Silahkan isi email anda" />
      </div>
      <div class="input-group">
        <label for="address">Alamat</label>
        <input type="text" name="address" id="address" placeholder="Silahkan isi alamat anda" />
      </div>
      <div class="input-group">
        <label for="age">Usia</label>
        <input type="text" name="age" id="age" placeholder="Silahkan isi umur anda (contoh: 27)" />
      </div>
      <div class="">
        <a href="#" class="btn btn-next width-50 ml-auto">Next</a>
      </div>
  </div>


  <!-- Steps 2-->
  <div class="form-step">
    <div class="input-group">
      <label for="institute">Nama instansi</label>
      <input type="text" name="institute" id="institute" placeholder="Silahkan isi nama instansi anda"/>
    </div>
    <div class="input-group">
      <label for="nipnim">NIP/NIM</label>
      <input type="text" name="nipnim" id="nipnim" placeholder="Silahkan isi nip/nim anda"/>
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
    <div class="btns-group">
      <a href="#" class="btn btn-prev">Previous</a>
      <a href="#" class="btn btn-next">Next</a>
    </div>
  </div>


  <!-- Steps 3-->
  <div class="form-step">
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
      <label for="needs">Kebutuhan Data</label>
      <select name="needs" id="needs"  >
        <option selected="true" disabled="disabled">Pilih Kebutuhan Data</option>
        <optgroup label="Sosial dan Kependudukan">
          @foreach ($needs1 as $p)
          <option value="{{ $p->id }}">{{$p->sospol_type}}</option>
          @endforeach
        </optgroup>
        <optgroup label="Ekonomi dan Perdagangan">
          @foreach ($needs2 as $q)
          <option value="{{ $q->id }}">{{$q->ecotra_type}}</option>
          @endforeach
        </optgroup>
        <optgroup label="Pertanian dan Pertambangan">
          @foreach ($needs3 as $r)
          <option value="{{ $r->id }}">{{$r->agrimin_type}}</option>
          @endforeach
        </optgroup>
      </select>
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
    <div class="btns-group">
      <a href="#" class="btn btn-prev">Previous</a>
      <a href="#" class="btn btn-next">Next</a>
    </div>
  </div>


  <!-- Steps 4-->
  <div class="form-step">
    <div class="input-group">
      <label for="purpose">Tujuan</label>
      <input type="text" name="purpose" id="purpose" placeholder="Silahkan isi tujuan anda" />
    </div>
    <div class="input-group">
      <label for="data">Data</label>
      <input type="text" name="data" id="data" placeholder="Silahkan isi data spesifik yang anda perlukan" />
    </div>
    <div class="btns-group">
      <a href="#" class="btn btn-prev">Previous</a>
      <input type="submit" value="Submit" class="btn" />
    </div>
  </form>
  </div>

</body>
</html>