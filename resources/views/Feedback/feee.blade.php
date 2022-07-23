<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Star Rating Form </title>
    <link rel="stylesheet" type="text/css" href="{!! asset('assets/css/feedback.css') !!}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  </head>
  <body>
    <div class="form-step form-step-active">
      
      <div class="form-group mb-3">
        <label class="sarana" for="sarana">sarana dan prasarana</label>
        <select class="custom-select my-1 mr-sm-2" name="facility" id="inlineFormCustomSelectPref">
          <option selected="true" disabled="disabled" >nilai</option>
          <option value="sangat kurang">1</option>
          <option value="kurang">2</option>
          <option value="cukup">3</option>
          <option value="baik">4</option>
          <option value="sempurna">5</option>
        </select>
      </div>
      <div class="form-group mb-3">
        <label class="pelayanan" for="pelayanan">pelayanan</label>
        <select class="custom-select my-1 mr-sm-2" name="service" id="inlineFormCustomSelectPref">
          <option selected="true" disabled="disabled" >nilai</option>
          <option value="sangat kurang">1</option>
          <option value="kurang">2</option>
          <option value="cukup">3</option>
          <option value="baik">4</option>
          <option value="sempurna">5</option>
        </select>
      </div>
      <div class="form-group mb-3">
        <label class="kualitas" for="kualitas">kualitas data</label>
        <select class="custom-select my-1 mr-sm-2" name="dataqualities" id="inlineFormCustomSelectPref">
          <option selected="true" disabled="disabled" >nilai</option>
          <option value="sangat kurang">1</option>
          <option value="kurang">2</option>
          <option value="cukup">3</option>
          <option value="baik">4</option>
          <option value="sempurna">5</option>
        </select>
      </div>
      <div class="">
        <a href="#" class="btn btn-next width-50 ml-auto">Next</a>
      </div>
  </div>
  </body>
</html>