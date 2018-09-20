<!DOCTYPE html>
<html lang="en">
<head>
  <title>Quarterly Report</title>
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
      <div class="col-4"><h1>Quarterly Report</h1></div>
      <div class="col-3"><h4>Services</h4>
      <select style="width:80%;"><option value="services">Services</option>
  
      <option value="sis">Student Informartion Sheet</option>
      <option value="counseling">Referral Counseling</option>
      <option value="good-moral">Request for Good Moral</option></select>
      
    </div>


      <div class="col-2"><h4>Quarter/Sem</h4>
       <select style="width:80%;"><option value="first">First</option>
      <option value="second">Second</option>
      <option value="summer">Summer</option>
     </select>
    </div>


      <div class="col-2"><h4>Year</h4>
        <span>
      <select name="birth_year">
        <?php 
          $year = date('Y');
          $min = $year - 10;
          $max = $year;
          for( $i=$max; $i>=$min; $i-- ) {
            echo '<option value='.$i.'>'.$i.'</option>';
          }
        ?>
      </select>
    </span></div>
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
            label: ' (First Semester) ',
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
