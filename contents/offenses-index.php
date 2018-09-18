<!DOCTYPE html>
<html lang="en">
<head>
  <title>Student Offenses</title>
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
      <div class="col-12"><h1>Student Offenses</h1></div>
   </div>
</div>
<br>
<!-- table -->

<div class="container">      
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>SR-Code</th>
        <th>Name</th>
        <th>Year Level</th>
         <th>Program</th>
         <th>Department</th>
         <th>Date</th>
         <th>Type of Violation</th>
         <th>Violation</th>
         <th>Status</th>
      </tr>
    </thead>
    <tbody>
      <tr onclick="window.location='services-index.php';">
        <td>15-02031</td>
        <td>Datinguinoo,Marie Lois P.</td>
        <td>4th</td>
        <td>Information Technology</td>
        <td>CICS</td>
        <td>August 24, 2018</td>
        <td>Minor</td>
        <td>Wearing Flat Shoes</td>
        <td style="color:#28a745;">on-going</td>

      </tr>
     <tr onclick="window.location='#';">
         <td>15-01234</td>
        <td>Doe, John F.</td>
        <td>4th</td>
        <td>Information Technology</td>
        <td>CICS</td>
         <td>August 30, 2018</td>
        <td>Minor</td>
        <td>Haircut</td>
        <td style="color:#28a745;">on-going</td>
      </tr>
      <tr onclick="window.location='#';">
        <td>15-99999</td>
        <td>Dooley, July R.</td>
        <td>4th</td>
        <td>Information Technology</td>
        <td>CICS</td>
        <td>September 18, 2018</td>
        <td>Minor</td>
        <td>Wearing Flat Shoes</td>
        <td style="color:#28a745;">on-going</td>
      </tr>
    </tbody>
  </table>
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

