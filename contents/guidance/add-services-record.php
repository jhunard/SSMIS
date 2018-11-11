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

<style>

.card{ box-shadow: 0 19px 38px rgba(0,0,0,0.30), 0 15px 12px rgba(0,0,0,0.22);}
</style>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Guidance | Add Services</title>
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


                  


                    <div class="col-md-6 offset-md-3" style="margin-top:50px;">
                        
                            <section class="card">
                              <div class="card-header bg-dark">
                                <strong class="card-title text-warning">Services</strong>
                            </div>


                                <ul class="list-group list-group-flush">
            <?php
            include '../connections/conn.php';

            $sql = "SELECT * FROM services WHERE status = '0'";
            $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        if(empty($row["status"])){
                          $status = " ";
                        }else{
                          $status = "checked";
                        }
                        $count += 1;
                        echo "<li class='list-group-item'>
                       ".$row["services"]."
                    </li>";
                      }
                    } else {
                        echo "0 results";
                    }
$conn->close();
?>
                                  </ul>
                                  <div style="margin-top:20px; margin-bottom:20px;" class="text-center"> 
                                    
                                    <button type="button" data-toggle="modal" data-target="#services" type="button" class="btn btn-sm btn-success " style="padding:10px;">Add Service</button>

                                    <button type="button"button type="button" class="btn btn-sm btn-primary " style="padding:10px;" data-toggle="modal" data-target="#enable" >Enable Services</button>

                                    <button type="button" class="btn btn-sm btn-dark " style="padding:10px;" data-toggle="modal" data-target="#disable" >Disable Services</button>

                                    <button type="button" data-toggle="modal" data-target="#delete" class="btn btn-sm btn-danger " style="padding:10px;">Delete Service</button>
                                    
                                        </div>
                                        

                            </section>
                        
                    </div>




              

               </div> <!-- row -->
            </div><!-- .animated -->
        </div><!-- .content -->
             </div> <!-- row -->
            </div><!-- .animated -->
        </div><!-- .content -->

        <div class="clearfix"></div>

     
    </div><!-- /#right-panel -->

    <!-- Services-->
<div class="modal fade modal "tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true" id="services">
  <div class="modal-dialog" style="position: absolute;top:5%;right:0;bottom:0;left:0;">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header" style="background-color:#343a40!important; color:#ffc107!important;">
        <h4 class="col-11 modal-title text-center">All Services</h4>
      </div>
           <!-- Modal body -->
      <div class="modal-body">
      <?php
      include '../connections/conn.php';

            $sql = "SELECT * FROM services WHERE 1";
            $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        if(empty($row["status"])){
                          $status = " ";
                        }else{
                          $status = "checked";
                        }
                        echo $row["id"].". &nbsp;".$row["services"]."<br>";
                      }
                    } else {
                        echo "0 results";
                    }
$conn->close();
?>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#add-services" data-dismiss="modal">Add Services</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
      </div>

    </div>
  </div>
</div>

<!--Enable -->
<div class="modal fade modal "tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true" id="enable">
  <div class="modal-dialog">
    <div class="modal-content">
  <form  action="../connections/enable.php" method="POST" enctype="multipart/form-data">
      <!-- Modal Header -->
      <div class="modal-header" style="background-color:#343a40!important; color:#ffc107!important;">
        <h4 class="col-11 modal-title text-center">List of Disabled Services</h4>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <?php
      include '../connections/conn.php';

            $sql = "SELECT * FROM services WHERE status = '1'";
            $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        if(empty($row["status"])){
                          $status = " ";
                        }else{
                          $status = "checked";
                        }
                        $count += 1;
                        echo "<input type='radio' name='disable' value='".$row["services"]."'>&nbsp;".$row["services"]."<br>";
                      }
                    } else {
                        echo "0 results";
                    }
$conn->close();
?>
   </div>

      <!-- Modal footer -->
      <div class="modal-footer">
       <button type="submit" name="submit" class="btn btn-sm btn-primary " style="padding:10px;">Enable Services</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal" style="padding:10px;">Cancel</button>
      </div>
  </form>
    </div>
  </div>
</div>


<!--Enable -->
<div class="modal fade modal "tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true" id="disable">
  <div class="modal-dialog">
    <div class="modal-content">
  <form  action="../connections/disable.php" method="POST" enctype="multipart/form-data">
      <!-- Modal Header -->
      <div class="modal-header" style="background-color:#343a40!important; color:#ffc107!important;">
        <h4 class="col-11 modal-title text-center">List of Enabled Services</h4>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <?php
      include '../connections/conn.php';

            $sql = "SELECT * FROM services WHERE status = '0' AND id != 1";
            $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        if(empty($row["status"])){
                          $status = " ";
                        }else{
                          $status = "checked";
                        }
                        $count += 1;
                        echo "<input type='radio' name='disable' value='".$row["services"]."'>&nbsp;".$row["services"]."<br>";
                      }
                    } else {
                        echo "0 results";
                    }
$conn->close();
?>
   </div>

      <!-- Modal footer -->
      <div class="modal-footer">
       <button type="submit" name="submit" class="btn btn-sm btn-dark "  style="padding:10px;">Disable Services</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal"  style="padding:10px;">Cancel</button>
      </div>
  </form>
    </div>
  </div>
</div>


<!-- Add Services-->
<div class="modal fade modal "tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true" id="add-services">
  <div class="modal-dialog modal-dialog-centered" role="dialog" style="position: absolute;top:-20%;right:0;bottom: 0;left:5%;">
    <div class="modal-content" >

      <!-- Modal Header -->
      <div class="modal-header" style="background-color:#343a40!important; color:#ffc107!important;">
        <h4 class="col-11 modal-title text-center">Add Services</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
        <form action="../connections/services-add.php" method="POST" >
      <!-- Modal body -->
      <div class="modal-body">
        <a style="font-size:22px;">Services: &nbsp; 
        <input type="text" name="service" style=" border:0;outline:0;background:transparent; border-bottom:1px solid black;"></a><br>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="submit" class="btn btn-success"  style="padding:10px;" >Add Services</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal"  style="padding:10px;">Cancel</button>
      </div>
        </form>
    </div>
  </div>
</div>
<!--Delete-->
<div class="modal fade modal "tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true" id="delete">
  <div class="modal-dialog">
    <div class="modal-content">
  <form  action="../connections/delete.php" method="POST" enctype="multipart/form-data">
      <!-- Modal Header -->
      <div class="modal-header" style="background-color:#343a40!important; color:#ffc107!important;">
        <h4 class="col-11 modal-title text-center">List of Services</h4>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <?php
      include '../connections/conn.php';

            $sql = "SELECT * FROM services WHERE 1";
            $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        if(empty($row["status"])){
                          $status = " ";
                        }else{
                          $status = "checked";
                        }
                        $count += 1;
                        echo "<input type='radio' name='disable' value='".$row["services"]."'>&nbsp;".$row["services"]."<br>";
                      }
                    } else {
                        echo "0 results";
                    }
$conn->close();
?>
   </div>

      <!-- Modal footer -->
      <div class="modal-footer">
       <button type="submit" name="submit" class="btn btn-sm btn-warning"  style="padding:10px;">Delete Services</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal"  style="padding:10px;">Cancel</button>
      </div>
  </form>
    </div>
  </div>
</div>

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
