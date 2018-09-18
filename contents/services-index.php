<!DOCTYPE html>
<html lang="en">
<head>
  <title>Services</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/navbar.css">
</head>
<body>
<nav class="navbar navbar-expand-sm justify-content-between" >
  <!-- Brand/logo -->
  <a class="navbar-brand" href="#">
    <img src="images/logo.png" alt="logo" style="width:50px;">
  </a>
  <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
  </form>
  
</nav>
<!-- ENd NAV -->

<!-- SideNav slide-out button -->
<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
 <div class="col-12" style="color:white; font-size:33px; margin-bottom:5%;"><a href="guidance-index.php"> <img src="images/userlogin.png" alt="logo" width="50px;" style="margin-right:5%; margin-top:-5%;">Guidance</img></a></div> 

<a href="student-information.php">Student Information Sheet</a>
  <a href="offenses-index.php">Student's Offense</a>
  <a href="reports-index.php">Report</a>
  <a href="settings-index.php">Settings</a>
  <a href="../index.php">Log Out</a>
</div>

<div id="main">
  <button class="openbtn" onclick="openNav()"style="color:black;">☰</button>  
</div>
<!-- ENd sideNAV -->

<div class="container">
   <div class="form-row text-center">
      <div class="col-12"><h1>Services</h1></div>
   </div>
</div>


<!-- Menu -->
<div class="container">
   <div class="form-row text-left">
      <div class="col-12"><a href="#modal" data-toggle="modal" data-target="#sis"style="font-size:22px; color:#000 !important;text-decoration: none;" >Student Information Sheet</div>
   </div>
</div>  
        
<div class="container" style="margin-top:10px;">
   <div class="form-row text-left">
      <div class="col-12"><a href="#modal" data-toggle="modal" data-target="#counseling" style="font-size:22px; color:#000 !important;text-decoration: none;">Referral Counseling</div><br>
   </div>
</div> 

<div class="container"style="margin-top:10px;">
   <div class="form-row text-left">
     <div class="col-12"><a href="#modal" data-toggle="modal" data-target="#goodmoral" style="font-size:22px; color:#000 !important;text-decoration: none;">Request for Good Moral</div><br>
   </div>
</div>  

<div class="container"style="margin-top:10px;">
   <div class="form-row text-left" data-toggle="modal" data-target="#add-services">
      <div class="col-12"><a href="#" style="font-size:22px; color:#000 !important;text-decoration: none;">More Services</div>
   </div>
</div>  

<!-- Modal -->
<!-- Student Information Sheet Modal -->
<div class="modal fade modal "tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true" id="sis">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header" style="background-color:#dc3545; color:white;">
        <h4 class="col-11 modal-title text-center">Student Information Sheet</h4>
        <button type="button" class="close" data-dismiss="modal" >&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>


<!-- Referral Counseling-->
<div class="modal fade modal "tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true" id="counseling">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header" style="background-color:#dc3545; color:white;">
        <h4 class="col-11 modal-title text-center">Referral Counseling</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
  <a style="font-size:18px;"> Marie Lois P. Datinguinoo 4th</a><br>
   <a style="font-size:18px;">15-02031</a><br>
   <a style="font-size:18px;">Information Technology, CICS</a><br><br><br>
   <a style="font-size:18px;">Date: <input type="date" style="font-size:14px;"></a><br>
    <a style="font-size:18px;">Reason: <input type="text" style=" border:0;outline: 0;background: transparent; border-bottom: 1px solid black;"></a>

      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-success">Add</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
         
      </div>

    </div>
  </div>
</div>

<!-- Request for Good Moral-->
<div class="modal fade modal "tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true" id="goodmoral">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header" style="background-color:#dc3545; color:white;">
        <h4 class="col-11 modal-title text-center">Request for Good Moral</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
  <a style="font-size:18px;"> Marie Lois P. Datinguinoo 4th</a><br>
   <a style="font-size:18px;">15-02031</a><br>
   <a style="font-size:18px;">Information Technology, CICS</a><br><br><br>
   <a style="font-size:18px;">Date: <input type="date" style="font-size:14px;"></a><br>
    <a style="font-size:18px;">Reason: <input type="text" style=" border:0;outline: 0;background: transparent; border-bottom: 1px solid black;"></a>

      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-success">Add</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
         
      </div>

    </div>
  </div>
</div>

<!-- Add Services-->
<div class="modal fade modal "tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true" id="add-services">
  <div class="modal-dialog modal-dialog-centered" role="dialog" style="position: absolute;top:-20%;right:0;bottom: 0;left:5%;">
    <div class="modal-content" >

      <!-- Modal Header -->
      <div class="modal-header" style="background-color:#dc3545; color:white;">
        <h4 class="col-11 modal-title text-center">Add Services</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <a style="font-size:22px;">Services: &nbsp; <input type="text" style=" border:0;outline:0;background:transparent; border-bottom:1px solid black;"></a><br>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#add-services" >Add</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
         
      </div>

    </div>
  </div>
</div>





<script>
function openNav() {
    document.getElementById("mySidebar").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
    document.getElementById("mySidebar").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
}
</script>

<script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script> 
  <script src="js/bootstrap.bundle.min.js"></script>

</body>

</html>

