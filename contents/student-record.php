<!DOCTYPE html>
<html lang="en">
<head>
  <title>Student Record</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/navbar.css">
<style>
  span {
    display: inline-block;
    height: auto;
    margin: 6px;
    padding: 1%;
    background-color: #eee;
  }
  </style>
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
<!-- ENd NAV -->


<!-- Content -->

<div class="container">   
<div class="row" style="font-size:18px;">
  <div class="col-8">Marie Lois P. Datinguinoo</div>
  <div class="col-4">4th Year</div>
</div>   
</div>

 <div class="container">   
<div class="row" style="font-size:18px;">
  <div class="col-8">15-02031</div>
  <div class="col-4">CICS</div>
</div>   
</div>

<div class="container">   
<div class="row " style="font-size:18px;">
  <div class="col-12">Information Technology</div>
</div>   
</div>

<!-- BORDERSS -->
<div class="container">   
<div class="row" style="font-size:18px; margin-top:3%;">
  <span class="rounded col-11">
     <div style="margin-left:3%;"><b> Student Information Sheet</b><br>
      Date Filled: August 5,2016<br>
      Date Updated:August 6,2017
        <div class="col-1 float-right"><a href="student-record-view.php"style="font-size:18px;text-decoration: none;">View</a></div></div> </span>
</div>   
</div>

<div class="container">   
<div class="row" style="font-size:18px; margin-top:3%;">
  <span class="rounded col-11">
     <div style="margin-left:3%;"><b>Request For Good Moral</b><br>
      Date Filled: January 5,2017<br>
      Reason: Scholarship
        <div class="col-1 float-right"><a href="student-record-view.php"style="font-size:18px;text-decoration: none;">View</a></div></div> </span>
</div>   
</div>

<div class="container">   
<div class="row" style="font-size:18px; margin-top:3%;">
  <span class="rounded col-11">
     <div style="margin-left:3%;"><b>Referral Counseling</b><br>
      Date Filled: February 5,2018<br>
      Reason: Not wearing Proper Uniform
        <div class="col-1 float-right"><a href="student-record-view.php"style="font-size:18px;text-decoration: none;">View</a></div></div> </span>
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

