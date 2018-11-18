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

<style> .links a:hover{color: #ffc107!important;}
        .links a{font-size: 16px;}
       
</style>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SOA | User Account</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="css/cs-skin-elastic.css">
    <link rel="stylesheet" href="css/style.css">
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
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
            <form action="../connections/change_pass.php" method="post" class="form">
                    <div class="row">
                       <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header"></div>
                                <div class="card-body">
                                    <!-- Student info -->
                                    <div id="student-info">
                                        <div class="card-body">
                                            <div class="card-title">
                                                <h3 class="text-center">  User Account Settings</h3>
                                            </div>
                                            <hr>

                                    <div class="form-group"><label for="changepw" class=" form-control-label"><strong>Change Password:</strong> </label> </div>                         
                                                 

                                    <div class="row form-group">
                                          <div class="col-12 col-md-3"><label for="oldpass" class=" form-control-label">Old Password:</label></div>
                                        <div class="col-12 col-md-4"> <input type="password" name="oldpass" class="form-control "></div>
                                      </div>
                                     

                                <div class="row form-group">
                                          <div class="col-12 col-md-3"><label for="newpass" class=" form-control-label">New Password:</label></div>
                                       <div class="col-12 col-md-4"> <input type="password" name="newpass" class="form-control">  </div>
                                    </div>    


                                       <div class="row form-group">
                                        <div class="col-12 col-md-3"><label for="retypepass" class=" form-control-label">Retype Password:</label></div>
                                          <div class="col-12 col-md-4"><input type="password" name="retypepass" class="form-control"></div>
                                        </div>
                                        
                                      <button type="submit"  type="button" class="btn btn-sm btn-success " style="padding:10px; ">Change Password</button>
                                      </form>    
                                </div><!-- .card body -->
                            </div> <!-- .info -->

                        </div><!--/.cardbody-->
                        </div><!-- .card -->
                    </div><!-- .col -->

                 

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

  
  
     <!-- input restriction -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script><!-- input restriction -->
   
  
 


</body>
</html>
