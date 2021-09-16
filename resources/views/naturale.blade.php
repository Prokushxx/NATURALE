<!DOCTYPE html>
<html lang="en">
<style>
  * {
    margin: 0%;
    padding: 0%;
    box-sizing: border-box;
  }

  /* body {
    /* font-family: 'Open Sans Condensed', sans-serif; 
  } */



  .navbar {
    display: flex;
    align-items: center;
    padding: 20px;
  }

  nav {
    flex: 1;
    text-align: right;

  }

  nav ul {
    display: inline-block;
    list-style-type: none;
  }

  nav ul li {
    display: inline-block;
    margin-right: 20px;
  }

  /* nav ul li a{

  } */
  a {
    text-decoration: none;
    color: #555;
    font-size: 15px;
  }

  p {
    color: #555;
  }

  .sliding {
    margin: 0;
    padding: 0;
    height: 80vh;
    display: flex;
    justify-content: center;
    align-items: center;
    background: #3ab15a;
  }

  .slider {
    width: 800px;
    height: 500px;
    border-radius: 10px;
    overflow: hidden;
  }

  .slides {
    width: 500%;
    height: 500px;
    display: flex;
  }

  .slides input {
    display: none;
  }

  .slide {
    width: 20%;
    transition: 2s;
  }

  .slide img {
    width: 800px;
    height: 500px;
  }

  .navigation-manual {
    position: absolute;
    width: 800px;
    margin-top: -40px;
    display: flex;
    justify-content: center;
  }

  .manual-btn {
    border: 2px solid #40D3DC;
    padding: 5px;
    border-radius: 10px;
    cursor: pointer;
    transition: 1s;
  }

  .manual-btn:not(:last-child) {
    margin-right: 40px;
  }

  .manual-btn:hover {
    background: #40D3DC;
  }

  #radio1:checked~.first {
    margin-left: 0;
  }

  #radio2:checked~.first {
    margin-left: -20%;
  }

  #radio3:checked~.first {
    margin-left: -40%;
  }

  #radio4:checked~.first {
    margin-left: -60%;
  }

  .navigation-auto {
    position: absolute;
    display: flex;
    width: 800px;
    justify-content: center;
    margin-top: 460px;
  }

  .navigation-auto div {
    border: 2px solid #40D3DC;
    padding: 5px;
    border-radius: 10px;
    transition: 1s;
  }

  .navigation-auto div:not(:last-child) {
    margin-right: 40px;
  }

  #radio1:checked~.navigation-auto .auto-btn1 {
    background: #40D3DC;
  }

  #radio2:checked~.navigation-auto .auto-btn2 {
    background: #40D3DC;
  }

  #radio3:checked~.navigation-auto .auto-btn3 {
    background: #40D3DC;
  }

  #radio4:checked~.navigation-auto .auto-btn4 {
    background: #40D3DC;
  }

  .upload-btn {
    margin-top: 550px;
    background-color: unset;
    color: #000;
  }

  .some {
    width: 80px;
    /* background: ; */
    font-weight: 600;
    color: #32A852;
    transition: ease .9s;
  }

  .some:hover {

    background: #555;
  }

  .container {
    max-width: 1300px;
    margin: auto;
    padding-left: 25px;
    padding-right: 25px;
  }

  .row {
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    justify-content: space-around;
  }

  .col-2 {
    flex-basis: 50%;
    min-width: 300px;
  }

  .col-2 img {
    width: 100%;
    padding: 40px 0;
    margin-bottom: 0;
    /* background-color: #ff523b; */
  }

  .col-2 h1 {
    font-size: 50px;
    line-height: 60px;
    margin: 25px 0;
  }

  .btn {
    display: inline-block;
    background: #ff523b;
    color: #fff;
    padding: 8px 30px;
    border-radius: 30px;
    transition: background 1s;
  }

  .header {
    background: radial-gradient(#fff, #32A852);
  }

  .btn:hover {
    background: #32A852;
  }

  .header .row {
    margin-top: 70px;
  }

  .categories {
    margin: 70px 0;
  }

  .col-3 {
    flex-basis: 30%;
    min-width: 250px;
    margin-bottom: 30px;
  }

  .col-3 img {
    width: 100%;
  }



  .small-container {
    max-width: 1080px;
    margin: auto;
    padding-left: 25px;
    padding-right: 25px;
  }

  .col-4 {
    flex-basis: 25%;
    padding: 10px;
    min-width: 200px;
    margin-bottom: 50px;
    transition: transform 0.5s;
  }

  .col-4 img {
    width: 100%;
  }

  .title {
    text-align: center;
    margin: 0 auto 80px;
    position: relative;
    line-height: 60px;
    color: #555;
  }

  .title::after {
    content: '';
    background: #32A852;
    width: 80px;
    height: 5px;
    border-radius: 5px;
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translate(-50%);
  }

  h4 {
    color: #555;
    font-weight: normal;
  }

  .col-4 {
    font-size: 14px;
  }

  .col-4:hover {
    transform: translate(-5px);
  }

  .offer {
    background: radial-gradient(#fff, #32A852);
    margin-top: 80px;
    padding: 30px 0;
  }

  .col-2 .offer-img {
    padding: 50px;
  }

  small {
    color: #555;
  }

  .testimonial {
    padding-top: 100px;
  }

  .testimonial .col-3 {
    text-align: center;
    padding: 40px 20px;
    box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.1);
    cursor: pointer;
    transition: ease 1s;
  }

  .testimonial .col-3 img {
    width: 50px;
    margin-top: 20px;
    border-radius: 50%;
  }

  .testimonial .col-3:hover {
    transform: translateY(-10px);
  }

  .fa.fa-quote-left {
    font-size: 34px;
    color: #5ec579;
  }

  .col-3 p {
    font-size: 12px;
    margin: 1px 0;
    color: #777;
  }

  .testimonial.col-3 h3 {
    font-weight: 600;
    color: #555;
    font-size: 16px;
  }

  .brands {
    margin: 100px auto;
  }

  .col-5 {
    width: 160px;
  }

  .col-5 img {
    width: 100%;
    cursor: pointer;
    filter: grayscale(100%);
    transition: ease-out 1s;
  }

  .col-5 img:hover {
    filter: grayscale(0);
  }

  .footer {
    background: #000;
    color: #32A852;
    font-size: 14px;
    padding: 60px 0 20px;
  }

  .footer p {
    color: #32A852;
  }

  .footer h3 {
    color: #fff;
    margin-bottom: 20px;
  }

  .footer-col-1,
  .footer-col-2,
  .footer-col-3,
  .footer-col-4 {
    min-width: 250px;
    margin-bottom: 20px;
  }

  .footer-col-1 {
    flex-basis: 30%;
  }

  .footer-col-2 {
    flex: 1;
    text-align: center;
  }

  .footer-col-2 img {
    width: 180px;
    margin-bottom: 20px;
  }

  .footer-col-3,
  .footer-col-4 {
    flex-basis: 12%;
    text-align: center;
  }

  ul {
    list-style-type: none;
  }

  .app-logo {
    margin-top: 20px;
  }

  .app-logo img {
    width: 140px;
  }

  .footer hr {
    border: none;
    background: #b5b5b5;
    height: 1px;
    margin: 20px 0;
  }

  .copyright {
    text-align: center;
  }

  .menu-icon {
    width: 28px;
    margin-left: 20px;
    display: none;
  }

  @media only screen and (max-width: 800px) {
    nav ul {
      position: absolute;
      top: 70px;
      left: 0;
      background: #333;
      width: 100%;
      overflow: hidden;
      transition: max-height 2.6;
    }

    nav ul li {
      display: block;
      margin-right: 50px;
      margin-top: 10px;
      margin-bottom: 10px;
    }

    nav ul li a {
      color: #fff;
    }

    .menu-icon {
      display: block;
      cursor: pointer;
    }
  }


  /* *,
*::after,
*::before {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
} */

  html {
    font-size: 62.5%;
  }

  body {
    --light: hsl(0, 0%, 100%);
    --background: linear-gradient(to right bottom, hsl(236, 50%, 50%), hsl(195, 50%, 50%));

    display: flex;
    flex-direction: column;

    min-height: 100vh;
    background: linear-gradient(to bottom, hsl(236, 50%, 98%), hsl(236, 50%, 94%));
  }

  a,
  a:link {
    font-family: inherit;
    text-decoration: none;
  }

  /* modal */
  /* =============================================== */
  .modal-container {
    position: fixed;
    top: 0;
    left: 0;
    z-index: 10;

    display: none;
    justify-content: center;
    align-items: center;

    width: 100%;
    height: 100%;

    background: hsla(0, 0%, 40%, .6);
  }

  /* using :target */
  .modal-container:target {
    display: flex;
  }

  .modal {
    width: 60rem;
    padding: 4rem 2rem;
    border-radius: .8rem;

    color: var(--light);
    background: var(--background);
    box-shadow: .4rem .4rem 2.4rem .2rem hsla(236, 50%, 50%, 0.3);
    position: relative;

    overflow: hidden;
  }

  .modal__details {
    text-align: center;

    margin-bottom: 4rem;
    padding-bottom: 4rem;
    border-bottom: 1px solid hsla(0, 0%, 100%, .4);
  }

  .modal__title {
    font-size: 3.2rem;
  }

  .modal__description {
    margin-top: 2rem;

    font-size: 1.6rem;
    font-style: italic;
  }

  .modal__text {
    padding: 0 4rem;
    margin-bottom: 4rem;

    font-size: 1.6rem;
    line-height: 2;
  }

  .modal__text::before {
    content: '';

    position: absolute;
    top: 0%;
    left: 100%;
    transform: translate(-50%, -50%);

    width: 18rem;
    height: 18rem;
    border: 1px solid hsla(0, 0%, 100%, .2);
    border-radius: 100rem;

    pointer-events: none;
  }

  .modal__btn {
    padding: 1rem 1.6rem;
    border: 1px solid hsla(0, 0%, 100%, .4);
    border-radius: 100rem;

    color: inherit;
    background: transparent;
    font-size: 1.4rem;
    font-family: inherit;
    letter-spacing: .2rem;

    transition: .2s;
    cursor: pointer;
  }

  .modal__btn:hover,
  .modal__btn:focus {
    border-color: hsla(0, 0%, 100%, .6);
    transform: translateY(-.2rem);
  }

  /* links */
  /* =============================================== */
  .link-1 {
    font-size: 1.8rem;
    margin-left: 20px;
    color: var(--light);
    background: var(--background);
    box-shadow: .4rem .4rem 2.4rem .2rem hsla(236, 50%, 50%, 0.3);
    border-radius: 100rem;
    padding: 1.4rem 3.2rem;
    transition: .2s;
  }

  .link-1:hover,
  .link-1:focus {
    transform: translateY(-.2rem);
    box-shadow: 0 0 4.4rem .2rem hsla(236, 50%, 50%, 0.4);
  }

  .link-2 {
    width: 4rem;
    height: 4rem;
    border: 1px solid hsla(0, 0%, 100%, .4);
    border-radius: 100rem;

    color: inherit;
    font-size: 2.2rem;

    position: absolute;
    top: 2rem;
    right: 2rem;

    display: flex;
    justify-content: center;
    align-items: center;

    transition: .2s;
  }

  .link-2::before {
    content: '×';

    transform: translateY(-.1rem);
  }

  .link-2:hover,
  .link-2:focus {
    border-color: hsla(0, 0%, 100%, .6);
    transform: translateY(-.2rem);
  }

  /* Second Version Link
/* =============================================== */
  .second-version-link,
  .second-version-link:link {
    color: hsl(236, 50%, 50%);
    padding: .8rem 1.6rem .8rem .2rem;
    border-bottom: 2px solid hsl(236, 50%, 50%);

    font-size: 1.4rem;
    font-weight: bold;

    position: absolute;
    top: 4rem;
    right: 4rem;
  }

  .second-version-link::after {
    content: '\2197';

    position: absolute;
    top: 0;
    right: 0;

    font-size: .9em;
  }

  .abs-site-link {
    position: fixed;
    bottom: 20px;
    left: 20px;
    color: hsla(0, 0%, 0%, .6);
    font-size: 1.6rem;
  }
.w-5{
  display: none;
}
  */
</style>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <title>Naturale</title>
</head>

<body>
  @csrf
  <div class="header">
    <div class="container">
      <div class="navbar">
        <div class="logo">
          <img src="../IMG/pic2.jpg" width="100px">
        </div>
        <nav>
          <ul id="MenuItems">
            <li></li>
            <li><a href="/products">Product</a></li>
            <li><a href="#Rev">Review</a></li>
            <li><a href="/users">Users</a></li>
            {{-- <li><a href="#">Business Analysis</a></li> --}}
            <li><a href="{{ route('logout') }}">Log out</a></li>
          </ul>
        </nav>
        <img src="/IMG/menu.png" width="30px" height="30px" class="menu-icon" onclick="menutoggle()">
      </div>
      <div class="row">
        <div class="col-2">
          <H1>Hello {{ session('user') }} <br> Let's</H1>
          <h1>Get Your Skin <br> Clean & Beautiful</h1>
          <p>These products are made of natural chemicals which soul purpose is to get rid
            <br> of underlying dirt and unwanted matters which the body produces.
          </p><br>
          <a href="#" class="btn">Explore now &#8594;</a>
        </div>
        <div class="col-2">
          <img src="/IMG/blackGirl2.png" width="600px" height="500px">
        </div>
      </div>
    </div>
  </div>

  <!-- <div class="categories">
    <div class="small-container">
      <div class="row">
        <div class="col-3"> <img src="../IMG/pic5.jpg" alt=""></div>
        <div class="col-3"> <img src="../IMG/pic6.jpg" alt=""></div>
        <div class="col-3"> <img src="../IMG/pic7.jpg" alt=""></div>
      </div>
    </div>
  </div> -->
  <div class="sliding">
    <div class="slider">
      <div class="slides">
        <input type="radio" name="radio-btn" id="radio1">
        <input type="radio" name="radio-btn" id="radio2">
        <input type="radio" name="radio-btn" id="radio3">
        <input type="radio" name="radio-btn" id="radio4">
        <!-- <input type="radio" name="radio-btn" id="radio5"> -->

        <div class="slide first">
          <img src="../IMG/pic7.jpg" alt="">
        </div>
        <div class="slide">
          <img src="../IMG/pic8.jpg" alt="">
        </div>
        <div class="slide">
          <img src="../IMG/pic9.jpg" alt="">
        </div>
        <!-- <div class="slide">
          <img src="../IMG/pic22.jpg" alt="">
        </div> -->
        <div class="slide-first">
          <img src="../IMG/pic12.jpg" alt="">
        </div>
        <div class="navigation-auto">
          <div class="auto-btn1"></div>
          <div class="auto-btn2"></div>
          <div class="auto-btn3"></div>
          <div class="auto-btn4"></div>
          <!-- <div class="auto-btn5"></div> -->
        </div>

      </div>
      <div class="navigation-manual">
        <label for="radio1" class="manual-btn"></label>
        <label for="radio2" class="manual-btn"></label>
        <label for="radio3" class="manual-btn"></label>
        <label for="radio4" class="manual-btn"></label>
        <!-- <label for="radio5" class="manual-btn"></label> -->
      </div>

    </div>
    {{-- <a href="#modal-opened" class="link-1" id="modal-closed">ADD PHOTO</a> --}}

    <div class="modal-container" id="modal-opened">
      <div class="modal">

        <div class="modal__details">
          <h1 class="modal__title">PHOTOS</h1>
          <p class="modal__description"></p>
        </div>

        <p class="modal__text">No photos found</p>
        <form action="" method="post">
          <button class="modal__btn" type="submit">Button &rarr;</button>
        </form>
        <a href="#modal-closed" class="link-2"></a>

      </div>
    </div>
    <script>
    var MenuItems = document.getElementById("MenuItems");

    MenuItems.style.maxHeight = "0px";

    function menutoggle() {
      if (MenuItems.style.maxHeight == "0px") {
        MenuItems.style.maxHeight = "200px";
      } else {
        MenuItems.style.maxHeight = "0px";
      }
    }
  </script>

    <!-- <a href="https://codepen.io/AbubakerSaeed/full/eYOvKpY" class="second-version-link" target="_blank">CSS Modals (Modal v2)</a> -->

    <!-- <a href="https://abubakersaeed.netlify.app/designs/d7-modal" class="abs-site-link" rel="nofollow noreferrer" target="_blank">abs/designs/d7-modal</a> -->
    <script>
      var counter = 1;
      setInterval(function() {
        document.getElementById('radio' + counter).checked = true;
        counter++;
        if (counter > 4) {
          counter = 1;
        }
      }, 5000);
    </script>
  </div>

 `  
  {{-- <div class="small-container">
    <h2 class="title" id="Fprod">Featured Products</h2>    
    <div class="row"> --}}
    {{-- @foreach ($photos as $photo)
      <div class="col-4"> 
    <img src="{{ asset('storage/images/'.$photo->name)}}" alt="image">          
        <div class="rating">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star-o"></i>
        </div>
        <h4>{{$photo->name}}</h4>
        <p>$1500</p>
      </div>
      @endforeach
    </div>
    <form action="{{route('naturale.save')}}" method="post" enctype="multipart/form-data">
      @csrf
      <input type="file" name="pic">
      <input type="submit" name="upload" id="upload">
    </form>
  </div>
  </div> --}}
  <div class="offer">
    <div class="small-container">
      <div class="row">
        <div class="col-2">
          <img src="../IMG/pic15b.jpg" alt="" class="offer-img">
        </div>
        <div class="col-2">
          <p>Exclusively Available</p>
          <h1>Smart Brand 4</h1>
          <small>Lorem ipsum dolor sit amet consectetur adipisicing elit. ad
            aliquam quaerat cumque, beatae inventore doloremque, debitis dolores aspernatur
            modi mollitia quae quos.</small>
          <a href="#" class="btn">Purchase now &#8594;</a>
        </div>
      </div>
    </div>
  </div>
  <div class="testimonial"  id="Rev">
    <div class="small-container">
      <div class="row">
        <div class="col-3">
          <i class="fa fa-quote-left"></i>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci voluptas iusto reprehenderit dolorum deleniti non sed.</p>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-o"></i>
          </div>
          <img src="../IMG/pic14.jpg">
          <h3>Akinyene Thompson</h3>
        </div>

        <div class="col-3">
          <i class="fa fa-quote-left"></i>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci voluptas iusto reprehenderit dolorum deleniti non sed.</p>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-o"></i>
          </div>
          <img src="../IMG/pic14.jpg">
          <h3>Akinyene Thompson</h3>
        </div>

        <div class="col-3">
          <i class="fa fa-quote-left"></i>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci voluptas iusto reprehenderit dolorum deleniti non sed.</p>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-o"></i>
          </div>
          <img src="../IMG/pic14.jpg">
          <h3>Akinyene Thompson</h3>
        </div>

      </div>
    </div>
  </div>

  <!-- <div class="brands">
    <div class="small-contaniner">
      <div class="row">
        <div class="col-5">
          <img src="../IMG/pic15.jpg">
        </div>
        <div class="col-5">
          <img src="../IMG/pic15.jpg">
        </div>
        <div class="col-5">
          <img src="../IMG/pic15.jpg">
        </div>
        <div class="col-5">
          <img src="../IMG/pic20.jpg">
        </div>
      </div>
    </div>
  </div> -->

  <div class="footer">
    <div class="container">
      <div class="row">
        <div class="footer-col-1">
          <h3>Download Our App</h3>
          <p>Downoal for ios and Android</p>
          <div class="app-logo">
            <img src="../IMG/pic5.jpg" alt="">
            <img src="../IMG/pic5.jpg" alt="">
          </div>
        </div>
        <div class="footer-col-2">
          <!-- <img src="../IMG/pic23.jpg"> -->
          <!-- <p>Downoal for ios and Android Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt nesciunt quis deleniti illo corporis vitae praesentium! Minus porro quidem velit sint, voluptatum rem nostrum excepturi, totam rerum reprehenderit facilis dolores!</p>-
    -->
        </div>
        <div class="footer-col-3">
          <h3>Useful Links</h3>
          <ul>
            <li>Coupons</li>
            <li>Blog Post</li>
            <li>Return Policy</li>
            <li>Join Affiliate</li>
          </ul>
        </div>
        <div class="footer-col-4">
          <h3>Follow us</h3>
          <ul>
            <li>Facebook</li>
            <li>Twitter</li>
            <li>Instagram</li>
            <li>Tik Tok</li>
          </ul>
        </div>
      </div>
      <hr>
      <p class="copyright">Copyright 2020 - Kush Enterprise</p>
    </div>
  </div>

</body>

</html>