<?php
      include '../connections/conn.php';
      session_start();
      $user = $_SESSION['user'];
      if (empty($user)){
        session_destroy();
        session_unset();
        echo "<script type='text/javascript'>
            alert ('Please Login First Before You Access our Dashboard! -Administration'); 
            window.location.href='../../index.php';</script>";
          }else{
         
            
        }
      $oldpass=md5($_POST["oldpass"]);
      $newpass=md5($_POST["newpass"]);
      $retypepass=md5($_POST["retypepass"]);

      if($newpass != $retypepass){
        echo "<script type='text/javascript'>
        alert ('Password not match!'); 
        window.location.href='../guidance/user-account.php';</script>";
      }

            $sql = "SELECT * FROM user_info WHERE username='$user' && password='$oldpass'";
            $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {

                      $sql = "UPDATE user_info SET password='$newpass' WHERE username = '$user'";

                        if ($conn->query($sql) === TRUE) {
                          echo "<script type='text/javascript'>
                          alert ('Password Updated!'); 
                          window.location.href='../guidance/user-account.php';</script>";
                            } else {
                          echo "<script type='text/javascript'>
                        alert ('Error in Changing Password'); 
                        window.location.href='../guidance/user-account.php';</script>";
                            }  

                      }
                    } else {
                        echo "<script type='text/javascript'>
                        alert ('Old Password not match!'); 
                        window.location.href='../guidance/user-account.php';</script>";
                    }
$conn->close();
?>