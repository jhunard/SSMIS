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
$code=$_GET["code"];

include '../connections/conn.php';

$sql = "SELECT * FROM student_record WHERE sr_code='$code' ";
$result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          $mname = $row["mname"];
          $lname = $row["lname"];
          $fname = $row["fname"];
          $yearlevel = $row["year_level"];
          $program = $row["program"];
          $department = $row["department"];
          $gender = $row["gender"];
          $name = $lname . ", " . $fname ." ". $mname[0] .".";
          $srcode = $row["sr_code"];
            
          }
        }
        else {
         echo "<script type='text/javascript'>
       alert ('Id No. ".$code." is not exist!'); 
       window.location.href='index.php';</script>";
        }
?>


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>OSD</title>
   
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
                            <li><i class="menu-icon fa fa-user"></i><a href="user-account.php">User Account</a></li>
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

 <div class="col col-md-12">
                        <div class="card">
                            <div class="card-header text-center">
                                <strong class="card-title"><?php echo $name;?> Offense Record</strong>
                            </div>
                            <div class="card-body" >
                                <table id="bootstrap-data-table" class="table table-striped table-bordered " width="100%">
                                <div class="float-right">
                                      <div class="" style="margin-right:20px">
                                        <button data-toggle="modal" data-target="#addoffense" type="button" class="btn btn-sm btn-success">Add Offense</button>
                                      </div>   
                                    </div>
                                 <thead>
                                        <tr>
                                          <th >No.</th>
                                          <th style="font-size:14px; min-width:70px;">ID Number</th>
                                          <th style="font-size:14px; min-width:70px;">Name</th>
                                             <th style="font-size:14px; min-width:70px;">Gender</th>  
                                          <th style="font-size:14px; min-width:70px;">Year Level</th>
                                           <th style="font-size:14px; min-width:70px;">Program</th>
                                           <th style="font-size:14px; min-width:70px;">Department</th> 
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

                                              $sql = "SELECT * FROM student_offenses WHERE sr_code = '$code' ORDER BY date_started DESC ";
                                              $result = $conn->query($sql);

                                                  if ($result->num_rows > 0) {
                                                      // output data of each row
                                                      while($row = $result->fetch_assoc()) {
                                                        $mname = $row["mname"];
                                                        $name = $row["lname"] . ", " .  $row["fname"] ." ". $mname[0] .".";
                                                        $count += 1;
                                                          if(empty($row["date_ended"])){
                                                            $ended = "-";
                                                          }else{
                                                            $ended= $row["date_ended"];
                                                          }
                                                          echo "<tr>
                                                          <td>".$count."</td>
                                                          <td>".$row["sr_code"]."</td>
                                                          <td>".$name."</a></td>
                                                           <td>".$row["gender"]."</td>
                                                          <td>".$row["year_level"]."</td>
                                                          <td>".$row["program"]."</td>
                                                          <td>".$row["department"]."</td>
                                                          <td>".$row["date_started"]."</td>
                                                          <td>".$ended."</a></td>
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
                </div></div>
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


        <div class="clearfix"></div>

     
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

<!-- Student Information Sheet Modal -->
<div class="modal fade modal "tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true" id="addoffense">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header" style="background-color:#343a40!important; color:#ffc107!important;">
        <h4 class="col-11 modal-title text-center">Add Offense</h4>
      </div>

      <!-- Modal body -->
      <form action="../connections/offenseupload.php" method="POST">
      <div class="modal-body">
      <div class="form-group">
      <input type="text" name="srcode" value="<?php echo $srcode; ?>" hidden>
      <input type="text" name="fname" value="<?php echo $fname; ?>" hidden>
      <input type="text" name="mname" value="<?php echo $mname; ?>" hidden>
      <input type="text" name="lname" value="<?php echo $lname; ?>" hidden>
      <input type="text" name="yearlevel" value="<?php echo $yearlevel; ?>" hidden>
      <input type="text" name="program" value="<?php echo $program; ?>" hidden>
      <input type="text" name="department" value="<?php echo $department; ?>" hidden>
       <input type="text" name="gender" value="<?php echo $gender; ?>" hidden>
      <input type="text" name="status" value="On Going" hidden>
      <input type="text" class="form-control" id="add" name="offense" placeholder="Add Offense" required>
            </div>
            <style>input[type="date"].disabled::-webkit-calendar-picker-indicator {display: none;}</style>
           <div class="row form-group">
            <div class="col-12 col-md-4"><label for="date" class=" form-control-label"><strong>Date Started:</strong></label></div> 
             <div class="col-12 col-md-6"><input type="date" name="date" class="form-control form-control-sm disabled" id="date" required></div>
            </div>
      <div class="row form-group">
        <div class="col-12 col-md-4"><label for="offensetype" class=" form-control-label"><strong>Type of Offense:</strong></label></div> 
           <div class="col-12 col-md-4"> <select name="offensetype" class="form-control form-control-sm "required>
        
                <option value="Minor">Minor</option>
                <option value="Major">Major</option>
               </select> </div>

                 </div>

      <!-- Modal footer -->
      <div class="modal-footer">
          <button type="submit" class="btn btn-success" >Add</button>
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


        jQuery(document).ready( function($) {
 
    // Disable scroll when focused on a number input.
    $('form').on('focus', 'input[type=number]', function(e) {
        $(this).on('wheel', function(e) {
            e.preventDefault();
        });
    });
 
    // Restore scroll on number inputs.
    $('form').on('blur', 'input[type=number]', function(e) {
        $(this).off('wheel');
    });
 
    // Disable up and down keys.
    $('form').on('keydown', 'input[type=number]', function(e) {
        if ( e.which == 38 || e.which == 40 )
            e.preventDefault();
    });  
      
});

  </script>
</body>
</html>

