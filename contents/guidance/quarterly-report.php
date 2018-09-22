<?php
//for getting Student information Sheet number of student
      include '../connections/conn.php';

  $sql="SELECT * FROM graph_data WHERE services='sis' ORDER BY id ASC";

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

  $sql1="SELECT * FROM graph_data WHERE services='rc' ORDER BY id ASC";

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

  $sql2="SELECT * FROM graph_data WHERE services='rgm' ORDER BY id ASC";

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

  $sql3="SELECT * FROM graph_data WHERE services='other' ORDER BY id ASC";

if ($result3=mysqli_query($conn,$sql3))
  {
  // Return the number of rows in result set
  $rowcount3=mysqli_num_rows($result3);
  $others = $rowcount3;
  // Free result set
  mysqli_free_result($result3);
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
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<div class="container">
   <div class="form-row">
      <div class="col-4"><h1>Monthly Report</h1></div>
      <div class="col-3"><h4>Services</h4>
      <select name="services" style="width:80%;">  
      <option value="sis">Student Informartion Sheet</option>
      <option value="rc">Referral Counseling</option>
      <option value="rgm">Request for Good Moral</option>
      <option value="other">Others</option>
      </select>
      
    </div>


      <div class="col-2"><h4>Quarter/Sem</h4>
       <select name='year' style="width:80%;">
      <option value="first">First</option>
      <option value="second">Second</option>
      <option value="summer">Summer</option>
     </select>
    </div>


      <div class="col-2"><h4>Year</h4>
        <span>
      <select name="year">
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
         <th>Reason</th>
      </tr>
    </thead>
    <tbody>
    <?php
      include '../connections/conn.php';

      if(empty($_POST["month"]) && empty($_POST["year"]) && empty($_POST["services"])){
       $querryhere = "SELECT * FROM graph_data";
      }else{
        $graph_month=$_POST["month"];
        $graph_year=$_POST["year"];
        $graph_services=$_POST["services"];
        $querryhere = "SELECT * FROM graph_data WHERE graph_month='$graph_month' && graph_year='$graph_year' && services='$graph_services'";
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
                      </tr>";
                    }
$conn->close();
?>
     
    </tbody>
  </table>
</div>

<!-- Graph Button -->
<div class="container" >
       <a href="#"> <button type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#graph ">Graph</button></a></div>


<!-- Modal graph -->
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