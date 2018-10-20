<?php
 session_start();
 $user = $_SESSION["user"];
 if (empty($user)){
   session_destroy();
   session_unset();
   echo "<script type='text/javascript'>
       alert ('Please Login First Before You Access our Dashboard! -Administration'); 
       window.location.href='../../index.php';</script>";
     }else{
      include '../connections/conn.php';

      $sql = "SELECT * FROM user_info WHERE username ='$user'";
      $result = $conn->query($sql);

          if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {
                  $img = $row["img"];
                }
              } else {
                  echo "0 results";
              }
       
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Monthly Report</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/navbar.css">
   <script src="js/search.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-sm justify-content-between" >
  <!-- Brand/logo -->
  <a class="navbar-brand" href="index.php">
    <img src="images/logo.png" alt="logo" style="width:70px;">
  </a>
  <form class="form-inline">
    <input class="form-control mr-sm-2" type="text"  size="30" placeholder="Search SR-Code" onkeyup="showResult(this.value)">
    <div style="position:absolute;top:75%;background-color:#8e8d8a;" id="livesearch">&nbsp;&nbsp;&nbsp;</div>
  </form>
  
</nav>
<!-- ENd NAV -->

<!-- SideNav slide-out button -->
<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
 <div class="col-12" style="color:white; font-size:33px; margin-bottom:5%;">
 <a href="index.php"> 
  <img src="images/<?php echo $img; ?>" alt="logo" width="50px" height="50px" style="margin-right:5%; margin-top:-5%;border-radius:50%;">
 <?php echo $user;?></a></div> 

  <a href="index.php">Student's Offense</a>
  <a href="#modal" data-toggle="modal" data-target="#add" >Add Offense</a>
  <a href="reports.php">Reports</a>
  <a href="settings-index.php">Settings</a>
  <a href="../connections/logout.php">Log Out</a>

</div>
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


 <!-- add-->
 <div class="modal fade modal "tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true" id="add">
  <div class="modal-dialog modal-dialog-centered" role="dialog" style="position: absolute;top:-20%;right:0;bottom: 0;left:5%;">
    <div class="modal-content" >

      <!-- Modal Header -->
      <div class="modal-header" style="background-color:#dc3545; color:white;">
        <h4 class="col-11 modal-title text-center">Insert SR-Code</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <form action='verify.php' method="GET">
      <input class='rc col-12 text-center' type="text" name="code" placeholder="Insert ID Number" style="margin-bottom:1em;"><br>

      <!-- Modal footer -->
      <div class="modal-footer">
      <input type='submit' class="btn btn-success">
      </form>
      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

  
   
  <?php
//for getting Student information Sheet number of student
      include '../connections/conn.php';

  $sql="SELECT * FROM graph_data WHERE services='Student Informartion Sheet' && graph_month='$graph_month' && graph_year='$graph_year' ORDER BY id ASC";

if ($result=mysqli_query($conn,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
  $sis = $rowcount;
  // Free result set
  mysqli_free_result($result);
  }
?>
<?php
//for getting Student information Sheet number of student
      include '../connections/conn.php';

  $sql1="SELECT * FROM graph_data WHERE services='Referral Counseling' && graph_month='$graph_month' && graph_year='$graph_year' ORDER BY id ASC";

if ($result1=mysqli_query($conn,$sql1))
  {
  // Return the number of rows in result set
  $rowcount1=mysqli_num_rows($result1);
  $rc = $rowcount1;
  // Free result set
  mysqli_free_result($result1);
  }
?>

<?php
//for getting Student information Sheet number of student
      include '../connections/conn.php';

  $sql2="SELECT * FROM graph_data WHERE services='Request for Good Moral' && graph_month='$graph_month' && graph_year='$graph_year' ORDER BY id ASC";

if ($result2=mysqli_query($conn,$sql2))
  {
  // Return the number of rows in result set
  $rowcount2=mysqli_num_rows($result2);
  $rgm = $rowcount2;
  // Free result set
  mysqli_free_result($result2);
  }
?>
<?php
//for getting Student information Sheet number of student
      include '../connections/conn.php';

  $sql3="SELECT * FROM graph_data WHERE other_index = '1' && graph_month='$graph_month' && graph_year='$graph_year' ORDER BY id ASC";

if ($result3=mysqli_query($conn,$sql3))
  {
  // Return the number of rows in result set
  $rowcount3=mysqli_num_rows($result3);
  $others = $rowcount3;
  // Free result set
  mysqli_free_result($result3);
  }
?>




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
        labels: ["Student Information Sheet", "Referral Counseling", "Request for Good Moral", "Other Services" ],
        datasets: [{
            label: ' ',
            data: [<?php echo $sis; ?>, <?php echo $rc; ?>,<?php echo $rgm; ?>, <?php echo $others; ?>,],
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
            borderWidth: 3
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
