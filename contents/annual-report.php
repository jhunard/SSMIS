<!DOCTYPE html>
<html lang="en">
<head>
  <title>Annual Report</title>
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
   <div class="form-row">
      <div class="col-4"><h1>Annual Report</h1></div>
      <div class="col-3"><h4>Services</h4>
      <select style="width:80%;"><option value="services">Services</option>
  
      <option value="sis">Student Informartion Sheet</option>
      <option value="counseling">Referral Counseling</option>
      <option value="good-moral">Request for Good Moral</option></select>
      
    </div> 

      <div class="col-4"><h4>Academic Year</h4>
        <span>
       <select ><option value="18-19">2018-2019</option>
      <option value="18-19">2018-2019</option>
      <option value="17-18">2017-2018</option>
      <option value="16-17">2016-2017</option>
      <option value="15-16">2015-2016</option>
      <option value="14-15">2014-2015</option>
      <option value="13-14">2013-2014</option>
      <option value="12-13">2012-2013</option>
      <option value="11-12">2011-2012</option>
      <option value="10-11">2010-2011</option>
      <option value="09-10">2009-2010</option>
      <option value="08-09">2008-2009</option></select></div>
    <div class="col-1" style="margin-top:2.3%; margin-left:-8%;"><button type="button" class="btn btn-success ">Show</button></div>
   </div>
      


<!-- table -->

<div class="container" style="margin-top:2%;">      
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>SR-Code</th>
        <th>Name</th>
        <th>Year Level</th>
         <th>Program</th>
         <th>Department</th>
          <th>Date</th>
         <th>Reason</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>15-02031</td>
        <td>Datinguinoo,Marie Lois P.</td>
        <td>4th</td>
        <td>Information Technology</td>
        <td>CICS</td>
        <td>August 5</td>
        <td>Wearing Flat Shoes</td>

      </tr>
     <tr onclick="window.location='#';">
         <td>15-01234</td>
        <td>Doe, John F.</td>
        <td>4th</td>
        <td>Information Technology</td>
        <td>CICS</td>
        <td>August 21</td>
        <td>Haircut</td>
      </tr>
     
    </tbody>
  </table>
</div>


<div class="container" >
       <a href="#"> <button type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#graph ">Graph</button></a></div>

<div class="modal fade modal "tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true" id="graph">
   <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header" style="background-color:#dc3545; color:white;">
        <h4 class="col-11 modal-title text-center">Monthly Reports</h4>
        <button type="button" class="close" data-dismiss="modal" >&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
       <div class="col-md-12">
    <canvas id="myChart" ></canvas>
    </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
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








<!-- Javascript -->
<script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script> 
  <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/mdb.min.js"></script>
     <script src="js/mdb.js"></script>

<script>
var ctx = document.getElementById("myChart").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["Not Wearing Proper Uniform", "Wearing Flat Shoes", "For OJT", "Not Wearing ID" ],
        datasets: [{
            label: ' (2018-2019) ',
            data: [121, 90, 236, 45,],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
           
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
</script>




</body>

</html>
