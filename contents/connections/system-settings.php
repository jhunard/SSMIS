<?php 
include "conn.php";

$target_dir = "../../images/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$system_image = basename($_FILES["fileToUpload"]["name"]);
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
// Check if file already exists
if (file_exists($target_file)) {
    
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
       
    } else {
        
    }
}

$sql = "INSERT INTO system_settings (picture)
VALUES ('$system_image')";

if ($conn->query($sql) === TRUE) {
    echo "<script type='text/javascript'>alert ('System Upload Successful'); 
    window.location.href='../guidance/index.php';</script>";
} else {
    echo "<script type='text/javascript'>alert ('Error: " . $sql . "<br>" . $conn->error."'); 
    window.location.href='../guidance/index.php';</script>";
}

$conn->close();
?>