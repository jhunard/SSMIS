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
    <title>SOA</title>
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
    <!-- Left Panel -->
    <aside id="left-panel" class="left-panel ">
        <nav class="navbar  navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                  
                    <li style="margin-top:50px"><a href="index.php"> <i class="menu-icon fa fa-home"></i>Home</a> </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-gear"></i>Settings</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-user"></i><a href="user-account.php">User Account</a></li>
                            
                        </ul>
                    </li>
                     <li> <a href=""> <i class="menu-icon fa fa-sign-out"></i>Log Out</a>  </li>

                    
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
    <!-- /#left-panel -->
    <!-- Right Panel -->
     <div id="right-panel" class="right-panel">
        <!-- Header--><style>.navbar-brand { max-height: 50px; width: 100%;}.navbar-brand img{ max-height: 45px; max-width:150px;} </style>
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                <a class="navbar-brand" href=""><img src=  "../../images/<?php echo $system_img;?>" alt="Logo"></a>
                <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                    <div class="header-left">
                                    

                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="../guidance/images/<?php echo $img; ?>" alt="User Avatar">
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
                                <strong class="card-title">List of On Going Offenses</strong> </div>
                           
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">

                                        <!-- div class="float-right">
                       <div class="" style="margin-right:20px">
                        <button type="button" class="btn btn-sm btn-success" data-toggle="modal" 
                        data-target="#sendremarks">Send Remarks</button>
                                      
                       </div>   
                       </div>         		  -->
                  								 <thead>
                  							      <tr>
                  							        <th style="font-size:14px; min-width:50px;">No . </th>
                  							        <th style="font-size:14px; min-width:80px;">ID Number</th>
                  							        <th style="font-size:14px; min-width:100px;">Name</th>
                  							        <th style="font-size:14px; min-width:70px;">Year Level</th>
                  							         <th style="font-size:14px; min-width:70px;">Program</th>
                  							         <th style="font-size:14px; min-width:70px;">Department</th>
                                         <th style="font-size:14px; min-width:50x;">Gender</th>
                  							         <th style="font-size:14px; min-width:70px;">Date Started</th>
                  							         <th style="font-size:14px; min-width:70px;">Date Ended</th>
                  							         <th style="font-size:14px; min-width:70px;">Type of Violation</th>
                  							         <th style="font-size:14px; min-width:70px;">Violation</th>
                  							         <th style="font-size:14px; min-width:70px;">Status</th>
                  							      </tr>
                  							    </thead>
                  						<tbody>
                  							    <?php
                  						      include '../connections/conn.php';

                  						            $sql = "SELECT * FROM student_offenses WHERE status='On Going' ORDER BY date_started DESC ";
                  						            $result = $conn->query($sql);

                  						                if ($result->num_rows > 0) {
                  						                    // output data of each row
                  						                    while($row = $result->fetch_assoc()) {
                  						                      $mname = $row["mname"];
                  						                      $name = $row["lname"] . ", " .  $row["fname"] ." ". $mname[0] .".";
                  						                        $x = 0;
                  						                        $y += $x + 1;
                  						                        echo "<tr>
                  						                        <td>".$y."</td>
                  						                        <td >".$row["sr_code"]."</td>
                  						                        <td>".$name."</td>
                  						                        <td>".$row["year_level"]."</td>
                  						                        <td>".$row["program"]."</td>
                  						                        <td>".$row["department"]."</td>
                                                       <td>".$row["gender"]."</td>
                  						                        <td>".$row["date_started"]."</td>
                  						                        <td>".$row["date_ended"]."</td>
                  						                        <td>".$row["type_of_violation"]."</td>
                  						                        <td>".$row["violation"]."</td>
                  						                        <td>".$row["status"]."</td>
                  						                      </tr>";
                  						                      }
                  						                    } else {
                  						                        echo "<td style='text-align:center;'>-</td>
                  						                              <td style='text-align:center;'>-</td>
                  						                              <td style='text-align:center;'>-</td>
                  						                              <td style='text-align:center;'>-</td>
                  						                              <td style='text-align:center;'>-</td>
                                                             <td style='text-align:center;'>-</td>
                  						                              <td style='text-align:center;'>-</td>
                  						                              <td style='text-align:center;'>-</td>
                  						                              <td style='text-align:center;'>-</td>
                  						                              <td style='text-align:center;'>-</td>
                  						                              <td style='text-align:center;'>-</td>
                  						                              <td style='text-align:center;'>-</td>
                  						                              ";
                  																                        
                  										                    }
                  										$conn->close();
                  										?>
                                  </tbody>
                               </table>
                          </div>
                        </div>
                       </div> 

                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


        <div class="clearfix"></div>

     
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

      <!-- Add Services-->
<div class="modal fade modal "tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true" id="sendremarks">
  <div class="modal-dialog modal-dialog-centered" role="dialog" style="position: absolute;top:-20%;right:0;bottom: 0;left:5%;">
    <div class="modal-content" >

      <!-- Modal Header -->
      <div class="modal-header" style="background-color:#343a40!important; color:#ffc107!important;">
      <h4 class="col-11 modal-title text-center">Send Remarks</h4>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="GET">
      <input class='rc col-md-12' type="text" name="idNumber" placeholder="Enter ID No." required><br>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
      <input type='submit' class="btn btn-success" Value='Verify' data-toggle="modal" 
                        data-target="#send" data-dismiss="modal">
      </form>
      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

  <!-- Add Services-->
<div class="modal fade modal "tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true" id="send">
  <div class="modal-dialog modal-dialog-centered" role="dialog" style="position: absolute;top:-20%;right:0;bottom: 0;left:5%;">
    <div class="modal-content" >

      <!-- Modal Header -->
      <div class="modal-header" style="background-color:#343a40!important; color:#ffc107!important;">
      <h4 class="col-11 modal-title text-center">Select Offense Record</h4>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <form action='../connections/sendremarks.php' method="GET">
     <?php
      include '../connections/conn.php';
        $idNumber = $_GET["idNumber"];


            $sql = "SELECT * FROM student_offenses WHERE sr_code = '$idNumber'";
            $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        
                        echo "<input type='radio' name='disable' value='".$row["id"]."'>&nbsp;".$row["violation"]."<br>";
                      }
                    } else {
                        echo "0 results";
                    }
$conn->close();
?>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
      <input type='submit' class="btn btn-success" Value='Verify'>
      </form>
      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>


               
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
