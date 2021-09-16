<!DOCTYPE html>
<html>
<style>
  * {
    margin: 0;
    padding: 0;
    font-family: Century Gothic;
  }

  header {
    background-attachment: fixed;
    background-size: 100% 100%;
    background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(../IMG/P.jpg);
    height: 100vh;
    /* background-size:cover; */
    /* background-position: center; */
  }

  ul {
    float: right;
    list-style-type: none;
    margin-top: 25px;
  }

  ul li {
    display: inline-block;
  }

  ul li a {
    text-decoration: none;
    color: #fff;
    padding: 5px 20px;
    border: 1px solid #3DCE65;
    transition: 1.6s ease;
  }

  ul li a:hover {
    background-color: #3DCE65;
    color: #fff;
  }

  ul li.active a {
    background-color: #3DCE65;
    color: #fff;
  }

  .main {
    max-width: 1200px;
    margin: auto
  }

  .title {
    position: absolute;
    top: 40%;
    left: 50%;
    transform: translate(-50%, -50%);
  }

  .title {
    color: white;
    font-size: 30px;
  }

  .button {
    position: absolute;
    top: 54%;
    left: 50%;
    transform: translate(-50%, -50%);
  }

  .btn {
    border: 1px solid #3DCE65;
    padding: 10px 30px;
    color: #fff;
    text-decoration: none;
    transition: 1.6s ease;
    font-weight: 400;
  }

  .btn:hover {
    background-color: #3DCE65;
    color: #fff;
  }
</style>

<head>
  <title>RESORT</title>
</head>

<body>
  <header>
    <!-- <div class="main">
    <ul>
      <li class="active"><a href="#">HOME</a><li></li>
        <li><a href="#">PHOTOS</a><li></li>
          <li><a href="#">CONTACT</a><li></li>
        </ul>
        </div> -->
    <div class="title">
      <h1>Na<span style="color: #3DCE65;">t</span>ures Cho<span style="color: #3DCE65;">i</span>ce</h1>
    </div>
    <div class="button">
      <a href="login" class="btn">Login</a>
      <a href="signup" class="btn">Sign up</a>
      <br><br><br>
      <a href="home" class="btn" style="margin-left:30px">Visit our Page</a>
    </div>
  </header>
  <!-- well this project is about natural products 
          Sign up and Login redirects to Web page where
          we will have a description of the business
          and the products which they offer with the 
          prices . Users can upload photos of thier choice .
          View photos should store all photos and display them. 
          current user logs in should see their most recent photo upload.
          Users can also delete thier own account.
         
         
          ADMIN should be able to add and remove users and products 
       -->
</body>
</html>