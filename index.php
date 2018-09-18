<!DOCTYPE html>
<html lang="en">
<head>
  <title>Student Service Management Information System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/index.css">
</head>
<body style="background: rgba(245,245,245,1);">

<nav class="navbar navbar-expand-sm" >
  <!-- Brand/logo -->
  <a class="navbar-brand" href="#">
    <img src="images/logo.png" alt="logo" width="50px">
  </a>
  
</nav>
<div class="container" style="position:absolute; margin: -1% 0 0 5%">
<img src="images/logo.png" style="width:400px; height:~400px;">
</div>

<!-- Buttons Menu -->

<!-- Guidance -->
<div class="container">

<div class="form-row text-center">
<div class="col-12"><button type="button" class="btn btn-danger custom" data-toggle="modal" data-target="#guidance"> <img src="images/user.png" alt="logo" width="50px;">Guidance</img></button></div> 
</div>
</div>


<!-- OSD -->
<div class="container">

<div class="form-row text-center">
<div class="col-12"><button type="button" class="btn btn-danger custom" data-toggle="modal" data-target="#osd"> <img src="images/user.png" alt="logo" width="50px;">OSD</img></button></div> 
</div>
</div>


<!-- SOA -->
<div class="container">
<div class="form-row text-center">
<div class="col-12"><button type="button" class="btn btn-danger custom" data-toggle="modal" data-target="#soa"> <img src="images/user.png" alt="logo" width="50px;">SOA</img></button></div> 
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
             <form>
               <div class="form-group"><input type="email" class="form-control" placeholder="Enter Username"></div>
               <div class="form-group"><input type="password" class="form-control" placeholder="Password"></div>
                 <a href="contents/guidance-index.php"><button type="button" class="btn btn-success">Login</button></a></form><!-- button type= "submit" button instead of "button" -->
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
             <form>
               <div class="form-group"><input type="email" class="form-control" placeholder="Enter Username"></div>
               <div class="form-group"><input type="password" class="form-control" placeholder="Password"></div>
               <a href="index.php"><button type="button" class="btn btn-success">Login</button></a></form><!-- button type= "submit" button instead of "button" -->
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
             <form>
               <div class="form-group"><input type="email" class="form-control" placeholder="Enter Username"></div>
               <div class="form-group"><input type="password" class="form-control" placeholder="Password"></div>

               <a href="index.php"><button type="button" class="btn btn-success">Login</button></a></form><!-- button type= "submit" button instead of "button" -->
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

