<!DOCTYPE html>
<style>
  *{
    margin: 0;
    padding: 0;
    list-style-type: none;
    text-decoration: none;
  }
  .sidebar{
    position: fixed;
    left: -250px;
    width: 250px;
    height: 100%;
    background: #042331;
    transition: all .3s ease;
  }
  .sidebar header{
    font-size: 22px;
    color: white;
    text-align: center;
    line-height: 70px;
    background: #063146;
    user-select: none;
  }
  .sidebar ul a{
    display: block;
    height: 100%;
    width: 100%;
    line-height: 65px;
    font-size: 20px;
    color: white;
    padding-left: 40px;
    box-sizing: border-box;
    border-top: 1px solid rgba(255, 255, 255, .1); 
    border-bottom: 1px solid black;
    transition: .4s;
  }

  ul li:hover a{
    padding-left: 50px;
  }

  .sidebar ul a i{
    margin-right: 16px;
  }
#check{
  display: none;
}
label #btn,label #cancel{
 position: absolute;
 cursor: pointer;
 background: #042331;
 border-radius: 3px;
}

label #btn{
  left: 40px;
  top: 25px;
  font-size: 35px;
  color: white;
  padding: 6px 12px;
}

label #cancel{
  z-index: 1111;
  left: -195px;
  top: 17px;
  font-size: 30px;
  color: #0a5275;
  padding: 4px 9px;
  transition: all .5s;
}
#check:checked ~ .sidebar{
  left: 0;
}
#check:checked ~ label #btn{
  left: 250px;
  opacity: 0;
  pointer-events: none;
}
#check:checked ~ label #cancel{
  left: 195px;
}
section{
  background: url();
}
    .small-container {
    max-width: 1080px;
    margin: auto;
    padding-left: 25px;
    padding-right: 25px;
  }
  .w-5{
    display: none;
  }
/* 
  img{
    max-width: 200px;
    max-width: 300px;
  } */
</style>
<head>
  <meta charset="utf-8">
  <title>NATURALE</title>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>

<body>
  
<input type="checkbox" id="check">
<label for="check">
  <i class="fas fa-bars" id="btn"></i>
  <i class="fas fa-times" id="cancel"></i>
</label>
<div class="sidebar">
  <header>Side Bar</header>
  <ul>
    <li><a href="/naturale"><i class="fas fa-home"></i>HOME</a></li>
    <li><a href="/users"><i class="fas fa-qrcode"></i>USERS</a></li>
    <li><a href="/products"><i class="fas fa-stream"></i>PRODUCTS</a></li>   
    {{-- <li><a href="#">ANALYSIS</a></li> --}}
  </ul>
</div>