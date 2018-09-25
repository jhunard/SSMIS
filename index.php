<!DOCTYPE html>
<html lang="en">
<head>
  <title>Student Service Management Information System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/index.css">
</head>
<body>

<nav class="navbar navbar-expand-sm" >
  <!-- Brand/logo -->
  <a class="navbar-brand" href="#">
    <img src="images/logo.png" alt="logo" width="50px">
  </a>
  
</nav>
<div class="container">
<div class="text-center" style="margin-top:-10%;">
<img src="images/logo.jpg" style="width:300px;">
</div>
</div>
<!-- Buttons Menu -->

<!-- Guidance -->
<div class="container">
  <div class="col-12"><hr></div>
</div>
<div class="container">

<div class="form-row text-center">
<div class="col-4"><button type="button" class="btn btn-danger custom" data-toggle="modal" data-target="#guidance"> <img src="images/user.png" alt="logo" width="50px;">Guidance</button></div>
<div class="col-4"><button type="button" class="btn btn-danger custom" data-toggle="modal" data-target="#osd"> <img src="images/user.png" alt="logo" width="50px;">OSD</button></div>  
<div class="col-4"><button type="button" class="btn btn-danger custom" data-toggle="modal" data-target="#soa"> <img src="images/user.png" alt="logo" width="50px;">SOA</button></div> 

</div>
</div>





<!-- Modal -->
 <div id="guidance" class="modal fade text-center">
  <div class="modal-dialog modal-lg">
    <div class="col-lg-8 col-sm-8 col-12 main-section">
      <div class="modal-content">
          <div class="col-lg-12 col-sm-12 col-12 user-img"><img src="images/userlogin.png"></div>
          <div class="col-lg-12 col-sm-12 col-12 user-name"><h1>Guidance Login</h1><button type="button" class="close" data-dismiss="modal">&times;</button></div>
            <div class="col-lg-12 col-sm-12 col-12 form-input">
             <form action="contents/connections/login_con.php" method="post">
               <div class="form-group"><input type="text" class="form-control" name="username" placeholder="Enter Username"></div>
               <div class="form-group"><input type="password" class="form-control" name="password" placeholder="Password"></div>
               <input type="submit" class="btn btn-success" name="Login" value="Login">
              </form>
             </form>
            </div>
             <div class="col-lg-12 col-sm-12 col-12 link-part"><a href="#" target="_blank">Forgot Password?</a></div>
       </div>
    </div>
  </div>
</div>
</div>


<!-- OSD modal -->
<div id="osd" class="modal fade text-center">
  <div class="modal-dialog modal-lg">
    <div class="col-lg-8 col-sm-8 col-12 main-section">
      <div class="modal-content">
          <div class="col-lg-12 col-sm-12 col-12 user-img"><img src="images/userlogin.png"></div>
          <div class="col-lg-12 col-sm-12 col-12 user-name"><h1>OSD Login</h1><button type="button" class="close" data-dismiss="modal">&times;</button></div>
            <div class="col-lg-12 col-sm-12 col-12 form-input">
             <form action="contents/connections/login_con.php" method="post">
               <div class="form-group"><input type="text" class="form-control" name="username" placeholder="Enter Username"></div>
               <div class="form-group"><input type="password" class="form-control" name="password" placeholder="Password"></div>
               <input type="submit" class="btn btn-success" name="Login" value="Login">
             </form>
            </div>
             <div class="col-lg-12 col-sm-12 col-12 link-part"><a href="#" target="_blank">Forgot Password?</a></div>
       </div>
    </div>
  </div>
</div>
</div>

<!-- SOA Login -->
<div id="soa" class="modal fade text-center">
  <div class="modal-dialog modal-lg">
    <div class="col-lg-8 col-sm-8 col-12 main-section">
      <div class="modal-content">
          <div class="col-lg-12 col-sm-12 col-12 user-img"><img src="images/userlogin.png"></div>
          <div class="col-lg-12 col-sm-12 col-12 user-name"><h1>SOA Login</h1><button type="button" class="close" data-dismiss="modal">&times;</button></div>
            <div class="col-lg-12 col-sm-12 col-12 form-input">
             <form action="contents/connections/login_con.php" method="post">
               <div class="form-group"><input type="text" class="form-control" name="username" placeholder="Enter Username"></div>
               <div class="form-group"><input type="password" class="form-control" name="password" placeholder="Password"></div>
               <input type="submit" class="btn btn-success" name="Login" value="Login">
            </div>
             <div class="col-lg-12 col-sm-12 col-12 link-part"><a href="#" target="_blank">Forgot Password?</a></div>
       </div>
    </div>
  </div>
</div>
</div>


<!-- Javascript -->
<script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>

</html>

