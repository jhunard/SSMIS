<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
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
<?php
 
      include '../connections/conn.php';

              $sql2 = "SELECT * FROM system_settings ORDER BY id ASC";
              $result2 = $conn->query($sql2);
        
                  if ($result2->num_rows > 0) {
                      // output data of each row
                      while($row2 = $result2->fetch_assoc()) {
                          $system_img = $row2["picture"];
                        }
                      } else {
                          echo "0 results";
                      }
      
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Guidance| Annual Report</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="css/cs-skin-elastic.css">
    <link rel="stylesheet" href="css/lib/datatable/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
    


</head>

<body>
     <aside id="left-panel" class="left-panel ">
        <nav class="navbar  navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                  
                    <li style="margin-top:50px"><a href="index.php"> <i class="menu-icon fa fa-home"></i>Home</a> </li>
                     <li> <a href="student-offense.php"> <i class="menu-icon fa fa-exclamation-circle"></i>Student's Offense </a>  </li>
                        <li> <a href="services-add.php"> <i class="menu-icon fa fa-gears"></i>Services </a>  </li>
                    
                    
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-file-text"></i>Reports</a>
                        <ul class="sub-menu children dropdown-menu">
                              <li><i class="menu-icon fa fa-file-text"></i><a href="monthly-report.php">Monthly Report</a></li>
                              <li><i class="menu-icon fa fa-file-text"></i><a href="quarterly-report.php">Quarterly Report</a></li>
                              <li><i class="menu-icon fa fa-file-text"></i><a href="annual-report.php">Annual Report</a></li>
                        </ul>
                    </li>
                 
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-gear"></i>Settings</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-plus-circle"></i><a href="services.php">Add Services</a></li>
                            <li><i class="menu-icon fa fa-user"></i><a href="user-account.php">User Account</a></li>
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="register.php">Register</a></li>
                        </ul>
                    </li>
                     <li> <a href=" ../connections/logout.php"> <i class="menu-icon fa fa-sign-out"></i>Log Out</a>  </li>

                    
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
    <!-- /#left-panel -->
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href=""><img src=  "../../images/<?php echo $system_img;?>" alt="Logo" width="150px"></a>
                    
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                    <div class="header-left">
                                    

                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/<?php echo $img; ?>" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                           

                            <a class="nav-link" href="../connections/logout.php"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>

                </div>
            </div>
        </header>
        <!-- /#header -->
     
 

        <div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                          <div class="card-header text-center">
                                <strong class="card-title">Annual Report</strong>
                            </div>
                            <div class="card-body">
                             <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                           
                               <div class="form-row d-flex justify-content-center">
                                 
                                  <div class="col-2"><h4>Services</h4>
                                  <select name="services" style="width:100%;">  
                                  <?php
                                  include '../connections/conn.php';

                                        $sql = "SELECT * FROM services WHERE services != 'Student Information Sheet'";
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


                                           <div class="col-2"><h4>Academic Year</h4>
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
                                                <option value="08-09">2008-2009</option></select>
                                            </div>
                                      <div class="col-1" style="  padding:15px;"><button type="submit" class="btn btn-success ">Show</button></div>
                                      </div>
                                        
                                  </form>

<!-- table -->

<div class="" style="margin-top:2%;">      
  <table id="bootstrap-data-table" class="table table-striped table-bordered">
  <?php
                                $services = $_POST["services"];
                                 $year = $_POST["year"];
                                if(empty($services) || empty( $year) ){
                                    echo "";
                                }else{
                                    echo "
                                    <span style='color:#235a81;'>Search >></span>
                                    <input class='col-md-3' style='border:none;text-align:center;cursor:pointer;font-weight:bolder;' type='text' name='servicesvalue' value='".$services."' readonly><span style='color:#235a81;'>>></span>
                                    <input class='col-md-1' style='border:none;text-align:center;cursor:pointer;font-weight:bolder;' type='text' name='yearvalue' value='".$year."' readonly><span style='color:#235a81;'>>> </span>
                                    <a href='graph-annual.php?servicesvalue=".$services."&yearvalue=".$year."'>Show Graph</a><br><br><br>
                                    ";
                                }
                                    
                                ?>

    <thead>
      <tr>
      <th>No.</th>
        <th style="font-size:15px; min-width:70px;">ID Number</th>
        <th  class="text-center"style="font-size:15px; min-width:70px;">Name</th>
        <th style="font-size:15px; min-width:80px;">Year Level</th>
         <th style="font-size:15px; min-width:70px;">Program</th>
         <th style="font-size:15px; min-width:70px;"style="font-size:14px; min-width:70px;">Department</th>
          <th style="font-size:15px; min-width:70px;">Date</th>
          <th style="font-size:15px; min-width:70px;">Type of Services</th>
         <th style="font-size:15px; min-width:70px;">Reason</th>
      </tr>
    </thead>
    <tbody>
    <?php
      include '../connections/conn.php';

      if(empty($_POST["month"]) && empty($_POST["year"]) && empty($_POST["services"])){
        $lastyear= date("y") + 1;
       $graph_year= date("y")."-".$lastyear;
        $graph_services= 'Student Informartion Sheet';
       $querryhere = "SELECT * FROM graph_data WHERE services != 'Student Information Sheet' Order By lname";
      }else{
        $graph_year=$_POST["year"];
        $graph_services=$_POST["services"];
        $querryhere = "SELECT * FROM graph_data WHERE school_year='$graph_year' && services='$graph_services' Order By lname ";
      }
     
            $sql=$querryhere;
            $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                      $mname = $row["mname"];
                      $name = $row["lname"] . ", " .  $row["fname"] ." ". $mname[0] .".";
                      $count += 1;
                        echo "<tr>
                        <td>".$count."</td>
                        <td><a href='student-record.php?sr-code=".$row["sr_code"]."'>".$row["sr_code"]."</a></td>
                        <td><a href='student-record.php?sr-code=".$row["sr_code"]."'>".$name."</a></td>
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
                      <td style='text-align:center;'>-</td>
                      </tr>";
                    }
$conn->close();
?>
     
    </tbody>
  </table>
               
                   </div>
                  </div>
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


        <div class="clearfix"></div>

     
    </div><!-- /#right-panel -->

    <!-- Right Panel -->
               
 	<script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="js/main.js"></script>

    <!-- Table Script -->
	 <script src="js/lib/data-table/datatables.min.js"></script>
    <script src="js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="js/lib/data-table/buttons.bootstrap.min.js"></script>
    <script src="js/lib/data-table/jszip.min.js"></script>
    <script src="js/lib/data-table/vfs_fonts.js"></script>
    <script src="js/lib/data-table/buttons.html5.min.js"></script>
    <script src="js/lib/data-table/buttons.print.min.js"></script>
    <script src="js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="js/init/datatables-init.js"></script>
  
  <script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
      } );
  </script>
</body>
</html>
