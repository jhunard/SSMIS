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

<?php
    $idNumber = $_POST["idNumber"];

      include '../connections/conn.php';

      $sql2 = "SELECT * FROM student_record WHERE sr_code ='$idNumber'";
      $result2 = $conn->query($sql2);

          if ($result2->num_rows > 0) {
              // output data of each row
              while($row2 = $result2->fetch_assoc()) {
                  $db_srcode = $row2["sr_code"];
                    if($idNumber == $db_srcode ){
                        $fname = $row2["fname"];
                        $mname = $row2["mname"];
                        $lname = $row2["lname"];
                        $yearlevel = $row2["year_level"];
                        $program = $row2["program"];
                        $department = $row2["department"];
                         $gender = $row2["gender"];
                    }
                }
              } else {
                echo "<script type='text/javascript'>
                alert ('Your ". $idNumber ." has no matches in database kindly create the student information first to proceed!'); 
                window.location.href='../guidance/student-information-sheet-form.php';</script>";
              }

?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Services</title>
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
                            <!--<li><i class="menu-icon fa fa-user"></i><a href="user-account.php">User Account</a></li>-->
                            <!--<li><i class="menu-icon fa fa-sign-in"></i><a href="register.php">Register</a></li>-->
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
          <style>.navbar-brand { max-height: 50px; width: 100%;}.navbar-brand img{ max-height: 45px; max-width:150px;} </style>
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
        <!-- /#header -->
     
      <div class="content">
         <div class="animated fadeIn">
            <form action="../connections/other-services-insert.php" method="post" class="form" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-lg-6 offset-md-3">
                            <div class="card">
                                <div class="card-header"></div>
                                <div class="card-body">
                                    <!-- Student info -->
                                    <div id="student-info">
                                      <div class="card-body">
                                            <div class="card-title">
                                                <h3 class="text-center">Add Services</h3>
                                            </div>
                                            <hr>
                                            <style>
                                                .border-remove{
                                                    border:none;
                                                }
                                            </style>
                                        
                                            <div class="form-group"><label for="full-name" class=" form-control-label"><strong>Full Name:</strong></label>
                                                <div class="input-group">
                                                   
                                                   <div> <input type="text" id="fname" name="otherfName" placeholder="Last Name" class=" col col-md-11 border-remove" value="<?php echo $fname;?>" readonly> </div>
                                                          
                                                  
                                                   <div> <input type="text" id="mname" name="othermName" placeholder="Last Name" class=" col col-md-11 border-remove" value="<?php echo $mname;?>" readonly></div>
                                                    
                                                    <div><input type="text" id="lname" name="otherlName" placeholder="Last Name" class=" col col-md-11 border-remove" value="<?php echo $lname;?>" readonly></div>
                                                </div>
                                            </div><br>

                                              <div class="row form-group">
                                               <div class="col-12 col-md-3"><label for="sr_code" class=" form-control-label"><strong>ID Number:</strong></label></div>
                                               <div class="col-12 col-md-3"><input class='border-remove col-md-10' type="text" name="othersrCode" value="<?php echo $db_srcode;?>" readonly> </div>
                                                 <div class="col-12 col-md-2"><label for="year_level" class=" form-control-label"><strong>Year Level:</strong></label></div>  
                                                  <div class="col-12 col-md-3"><input class='border-remove ' type="text" name="otheryearlevel" value="<?php echo $yearlevel;?>" readonly> </div>  
                                                </div>
                                                  
                                              <div class="form-group"><label for="program" class=" form-control-label"><strong>Program:</strong></label> <input class='border-remove  col-md-10' type="text" name="otherprogram" value="<?php echo $program;?>" readonly></div>
                                              <div class="form-group"> <label for="department" class=" form-control-label"><strong>Department:</strong></label><input class='border-remove  col-md-8' type="text" name="otherdepartment" value="<?php echo $department;?>" readonly> </div>
                                               <div class="form-group"> <label for="gender" class=" form-control-label"><strong>Gender:</strong></label><input class='border-remove  col-md-8' type="text" name="othergender" value="<?php echo $gender;?>" readonly> </div><br>
                                            <hr>

                                             <a style="font-size:18px;"><strong>Date:</strong> <input type="date" style='border:none;text-align:center;' name='otherdate' style="font-size:14px;" required></a><br><br>
                                                 <strong>Service Type :</strong>&nbsp; <select class="col-md-4" name="services">  
                                                    <?php
                                                    include '../connections/conn.php';

                                                          $sql = "SELECT * FROM services WHERE services != 'Student Information Sheet'";
                                                          $result = $conn->query($sql);

                                                              if ($result->num_rows > 0) {
                                                                  // output data of each row
                                                                  while($row = $result->fetch_assoc()) {
                                                                      if (empty($row['status'])){
                                                                        $status = '';
                                                                      }else{
                                                                        $status = 'disabled';
                                                                      }
                                                                      echo " <option value='".$row["services"]."'".$status.">".$row["services"]."</option>";
                                                                    }
                                                                  } else {
                                                                      echo "0 results";
                                                                  }
                                              $conn->close();
                                              ?>
                                           </select><br><br>
                                                  <a style="font-size:18px;"><strong>Reason:</strong> <input type="text"name='otherreason' style=" border:0;outline: 0;background: transparent; border-bottom: 1px solid black;" <required></a>

                                               <button type="submit" name="Add" type="button" class="btn btn-sm btn-success col col-md-4 offset-md-4" style="padding:10px; margin-top:20px;">Add</button>
   
                                          </div>
                                      </div>
                            </div> <!-- .card-body -->
                          </div> <!--/.card-->
                        </div><!--/.col-->

                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


        <div class="clearfix"></div>

     
    </div><!-- /#right-panel -->
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

