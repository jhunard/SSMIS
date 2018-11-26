<?php


$target_dir = "../admin/images/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$image = basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        
        $uploadOk = 1;
    } else {

        $uploadOk = 0;
    }
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "<script type='text/javascript'>
    alert ('Account Failed to Register!'); 
    window.location.href='../admin/register.php';</script>";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
       include 'conn.php';
       
      $user=$_POST["name"];

      $oldpass = md5($_POST["oldpass"]);
      $newpass = md5($_POST["password"]);
      $retypepass = md5($_POST["retypepass"]);

      if($newpass != $retypepass){
        echo "<script type='text/javascript'>
        alert ('Password not match!'); 
        window.location.href='../admin/index.php';</script>";
      }

            $sql = "SELECT * FROM user_info WHERE username='$user' && password='$oldpass'";
            $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {

                      $sql = "UPDATE user_info SET password='$newpass',img = '$image' WHERE username = '$user' && password='$oldpass'";

                        if ($conn->query($sql) === TRUE) {
                          echo "<script type='text/javascript'>
                          alert ('Password Updated!'); 
                          window.location.href='../admin/index.php';</script>";
                            } else {
                          echo "<script type='text/javascript'>
                        alert ('Error in Changing Password'); 
                        window.location.href='../admin/index.php';</script>";
                            }  

                      }
                    } else {
                        echo "<script type='text/javascript'>
                        alert ('Old Password not match!'); 
                        window.location.href='../admin/index.php';</script>";
                    }

    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

$conn->close();
?>