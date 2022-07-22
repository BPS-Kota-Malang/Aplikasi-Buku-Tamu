<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Star Rating Form </title>
    <link rel="stylesheet" type="text/css" href="{!! asset('assets/css/feedback.css') !!}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  </head>
  <body>
    <div class="container">
      <div class="next">
        <div class="text">Pelayanan</div>
        <div class="neext">NEXT</div>
      </div>
      <div class="star-pelayanan">
        <input type="radio" name="rate" id="rate-5">
        <label for="rate-5" class="fas fa-star"></label>
        <input type="radio" name="rate" id="rate-4">
        <label for="rate-4" class="fas fa-star"></label>
        <input type="radio" name="rate" id="rate-3">
        <label for="rate-3" class="fas fa-star"></label>
        <input type="radio" name="rate" id="rate-2">
        <label for="rate-2" class="fas fa-star"></label>
        <input type="radio" name="rate" id="rate-1">
        <label for="rate-1" class="fas fa-star"></label>
        {{-- <form action="#">
          <header></header>
          <div class="textarea">
            <textarea cols="30" placeholder="kritik dan saran"></textarea>
          </div>
          <div class="btn">
            <button type="submit">Next</button>
          </div>
        </form> --}}
      </div>
    </div>
    <div class="container">
      <div class="next">
        <div class="text">Sarana dan Prasarana</div>
        <div class="neext">NEXT</div>
      </div>
      <div class="star-sarana">
        <input type="radio" name="rate" id="rate-5">
        <label for="rate-5" class="fas fa-star"></label>
        <input type="radio" name="rate" id="rate-4">
        <label for="rate-4" class="fas fa-star"></label>
        <input type="radio" name="rate" id="rate-3">
        <label for="rate-3" class="fas fa-star"></label>
        <input type="radio" name="rate" id="rate-2">
        <label for="rate-2" class="fas fa-star"></label>
        <input type="radio" name="rate" id="rate-1">
        <label for="rate-1" class="fas fa-star"></label>
        {{-- <form action="#">
          <header></header>
          <div class="textarea">
            <textarea cols="30" placeholder="kritik dan saran"></textarea>
          </div>
          <div class="btn">
            <button type="submit">Next</button>
          </div>
        </form> --}}
      </div>
    </div>
    <div class="container">
      <div class="post">
        <div class="text">Kualitas Data</div>
        <div class="edit">EDIT</div>
      </div>
      <div class="star-kualitas">
        <input type="radio" name="rate" id="rate-5">
        <label for="rate-5" class="fas fa-star"></label>
        <input type="radio" name="rate" id="rate-4">
        <label for="rate-4" class="fas fa-star"></label>
        <input type="radio" name="rate" id="rate-3">
        <label for="rate-3" class="fas fa-star"></label>
        <input type="radio" name="rate" id="rate-2">
        <label for="rate-2" class="fas fa-star"></label>
        <input type="radio" name="rate" id="rate-1">
        <label for="rate-1" class="fas fa-star"></label>
        <form action="#">
          <header></header>
          <div class="textarea">
            <textarea cols="30" placeholder="kritik dan saran"></textarea>
          </div>
          <div class="btn">
            <button type="submit">Post</button>
          </div>
        </form>
      </div>
    </div>
    <script>
      const btn = document.querySelector("button");
      const post = document.querySelector(".post");
      const widget = document.querySelector(".star-pelayanan");
      const widget2 = document.querySelector(".star-sarana");
      const widget 3= document.querySelector(".star-kualitas");
      const editBtn = document.querySelector(".edit");
      btn.onclick = ()=>{
        widget.style.display = "none";
        post.style.display = "block";
        editBtn.onclick = ()=>{
          widget.style.display = "block";
          post.style.display = "none";
        }
        return false;
      }
      btn.onclick = ()=>{
        widget1.style.display = "none";
        post.style.display = "block";
        editBtn.onclick = ()=>{
          widget1.style.display = "block";
          post.style.display = "none";
        }
        return false;
      }
      btn.onclick = ()=>{
        widge2t.style.display = "none";
        post.style.display = "block";
        editBtn.onclick = ()=>{
          widget2.style.display = "block";
          post.style.display = "none";
        }
        return false;
      }
    </script>
  </body>
</html>