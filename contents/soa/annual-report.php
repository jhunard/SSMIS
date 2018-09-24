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
  <title>Annual Report</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/navbar.css">
   <script src="js/search.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-sm justify-content-between" >
  <!-- Brand/logo -->
  <a class="navbar-brand" href="guidance-index.php">
    <img src="images/logo.png" alt="logo" style="width:50px;">
  </a>
  <form class="form-inline">
    <input class="form-control mr-sm-2" type="text"  size="30" placeholder="Search SR-Code" onkeyup="showResult(this.value)">
    <div style="position:absolute;top:75%;width:19.25%;background-color:#8e8d8a;" id="livesearch">&nbsp;&nbsp;&nbsp;</div>
  </form>
  
</nav>
<!-- ENd NAV -->

<!-- SideNav slide-out button -->
<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
 <div class="col-12" style="color:white; font-size:33px; margin-bottom:5%;">
 <a href="guidance-index.php"> 
 <img src="images/<?php echo $img; ?>" alt="logo" width="50px;" style="margin-right:5%; margin-top:-5%;border-radius:50%;">
 <?php echo $user;?></a></div> 

  <a href="student-information.php">Student Information Sheet</a>
  <a href="offenses-index.php">Student's Offense</a>
  <a href="reports-index.php">Report</a>
  <a href="settings-index.php">Settings</a>
  <a href="../connections/logout.php">Log Out</a>
</div>

<div id="main">
  <button class="openbtn" onclick="openNav()"style="color:black;">☰</button>  
</div>
<!-- ENd sideNAV -->
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<div class="container">
   <div class="form-row">
      <div class="col-4"><h1>Annual Report</h1></div>
      <div class="col-3"><h4>Services</h4>
      <select name="services" style="width:80%;">  
      <?php
      include '../connections/conn.php';

            $sql = "SELECT * FROM services";
            $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo " <option value='".$row["services"]."'>".$row["services"]."</option>";
                      }
                    } else {
                        echo "0 results";
                    }
$conn->close();
?>
  </select>
      
    </div> 

      <div class="col-4"><h4>Academic Year</h4>
        <span>
       <select name="year">
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
    <div class="col-1" style="margin-top:2.3%; margin-left:-8%;"><button type="submit" class="btn btn-success ">Show</button></div>
   </div>
</form>


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
          <th>Service Type</th>
         <th>Reason</th>
      </tr>
    </thead>
    <tbody>
    <?php
      include '../connections/conn.php';

      if(empty($_POST["month"]) && empty($_POST["services"])){
       $querryhere = "SELECT * FROM graph_data Order By name";
       $lastyear= date("y") + 1;
       $graph_year= date("y")."-".$lastyear;
       $graph_services= 'Student Informartion Sheet';
      }else{
         $graph_year=$_POST["year"];
        $graph_services=$_POST["services"];
        $querryhere = "SELECT * FROM graph_data WHERE school_year='$graph_year' && services='$graph_services' Order By name";
      }
     
      
      


            $sql=$querryhere;
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {
                  echo "<tr>
                  <td><a href='student-record.php?sr-code=".$row["sr_code"]."'>".$row["sr_code"]."</a></td>
                  <td><a href='student-record.php?sr-code=".$row["sr_code"]."'>".$row["name"]."</a></td>
                  <td><a href='student-record.php?sr-code=".$row["sr_code"]."'>".$row["year_level"]."</a></td>
                  <td><a href='student-record.php?sr-code=".$row["sr_code"]."'>".$row["program"]."</a></td>
                  <td><a href='student-record.php?sr-code=".$row["sr_code"]."'>".$row["department"]."</a></td>
                  <td><a href='student-record.php?sr-code=".$row["sr_code"]."'>".$row["graph_date"]."</a></td>
                  <td><a href='student-record.php?sr-code=".$row["sr_code"]."'>".$row["services"]."</a></td>
                  <td><a href='student-record.php?sr-code=".$row["sr_code"]."'>".$row["reason"]."</a></td>
                  </tr>";
                }
              } else {
                echo "<tr>
                <td style='text-align:center;'>-</td>
                <td style='text-align:center;'>-</td>
                <td style='text-align:center;'>-</td>
                <td style='text-align:center;'>-</td>
                <td style='text-align:center;'>-</td>
                <td style='text-align:center;'>-</td>
                <td style='text-align:center;'>-</td>
                <td style='text-align:center;'>-</td>
                </tr>";
              }
$conn->close();
?>
     
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
        <h4 class="col-11 modal-title text-center">School Year :<?php echo $graph_year;?> Reports</h4>
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
