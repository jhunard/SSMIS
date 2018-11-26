<?php
$target_dir = "../guidance/images/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$image = basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$position = $_POST["position"];
$department = $_POST["department"];
$program = $_POST["program"];
$user = $_POST["name"];
$pass = md5($_POST["password"]);
$repass =md5( $_POST["re-type"]);
if ($pass != $repass){
    echo "<script type='text/javascript'>
    alert ('Password unmatched!'); 
    window.location.href='../guidance/settings-index.php';</script>";
}else{
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
    window.location.href='../guidance/register.php';</script>";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
       include 'conn.php';
        $sql = "INSERT INTO user_info (username, password, position,img,department,program)
        VALUES ('$user', '$pass', '$position','$image','$department','$program')";

                if ($conn->query($sql) === TRUE) {
                    echo "<script type='text/javascript'>
                    alert ('Account Succesfully Registered!'); 
                    window.location.href='../admin/register.php';</script>";
                    } else {
                        echo "<script type='text/javascript'>
                        alert ('Account Failed to Register!'); 
                        window.location.href='../admin/register.php';</script>";
                    }

    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
}
?>
