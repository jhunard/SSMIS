<!DOCTYPE html>
<html lang="en">
<head>
  <title>Reports</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/navbar.css">
</head>
<body style="background: rgba(245,245,245,1);">

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

<!-- Buttons Menu -->

<!-- Guidance -->
<div class="container">

<div class="form-row text-center">
<div class="col-12"><a href="monthly-report.php"><button type="button" class="btn btn-danger custom">Monthly Report</button></a></div>
</div>
</div>


<!-- OSD -->
<div class="container">

<div class="form-row text-center">
<div class="col-12"><a href="quarterly-report.php"><button type="button" class="btn btn-danger custom">Quarterly Report</button></a></div>
</div>
</div>


<!-- SOA -->
<div class="container">
<div class="form-row text-center">
<div class="col-12"><a href="annual-report.php"><button type="button" class="btn btn-danger custom">Annual Report</button></a></div>
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


<!-- Javascript -->
<script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script> 
  <script src="js/bootstrap.bundle.min.js"></script>

</body>

</html>

