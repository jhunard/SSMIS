<?php
include 'conn.php';
//School Info
$fname=$_POST["fname"];
$mname=$_POST["mname"];
$lname=$_POST["lname"];
$yearlevel=$_POST["yearlevel"];
$srcode=$_POST["srcode"];
$department=$_POST["department"];
$program=$_POST["program"];
$address=$_POST["address"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$status=$_POST["status"];
$spouse=$_POST["spouse"];
$date = date("Y-m-d");
$month = date("F");
$year = date("Y");
$reason = "Update Student Information Sheet";
$services = "Student Information Sheet";




$target_dir = "../guidance/images/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$student_image = basename($_FILES["fileToUpload"]["name"]);
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


$sql = "SELECT * FROM student_record WHERE sr_code='$srcode' && lname='$lname'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    if($row = $result->fetch_assoc()) {

        $sql2 = "UPDATE student_record SET image = '$student_image', sr_code='$srcode',fname='$fname',mname='$mname',lname='$lname',year_level='$yearlevel',program='$program',department='$department',address='$address',phone='$phone',email='$email',civilstatus='$status',spouse='$spouse', SIS_date_updated='$date' WHERE sr_code='$srcode' && lname='$lname'";

        if ($conn->query($sql2) === TRUE) {
           
            $sql5 = "INSERT INTO graph_data (fname,mname,lname,sr_code,year_level,program,department,graph_date,reason,services,graph_month,graph_year,other_index) VALUES ('$fname','$mname','$lname', '$srcode', '$yearlevel','$program', '$department', '$date', '$reason', '$services', '$month', '$year','0')";

            if ($conn->query($sql5) === TRUE) {
                echo "<script type='text/javascript'>
                alert ('Data Insert Sucessfully!'); 
                window.location.href='../guidance/index.php';</script>";
            } else {
                echo "<script type='text/javascript'>
                alert ('Eror Inserting Data!'); 
                window.location.href='../guidance/index.php';</script>";
            }

        } else {

        }

        
    }
} else {
    $sql3 = "INSERT INTO student_record (image, sr_code, fname,mname,lname, year_level, program, department, address, phone, email, civilstatus, spouse , SIS_date_filled ) VALUES ('$student_image','$srcode', '$fname','$mname','$lname', '$yearlevel', '$program', '$department', '$address', '$phone','$email','$status', '$spouse', '$date')";

    if ($conn->query($sql3) === TRUE) {
        
        $sql4 = "INSERT INTO guidance_log (fname,mname,lname,sr_code,year_level,program,department) VALUES ('$fname','$mname','$lname', '$srcode', '$yearlevel','$program', '$department')";

        if ($conn->query($sql4) === TRUE) {

            $sql6 = "INSERT INTO graph_data (fname,mname,lname,sr_code,year_level,program,department,graph_date,reason,services,graph_month,graph_year,other_index) VALUES ('$fname','$mname','$lname', '$srcode', '$yearlevel','$program', '$department', '$date', '$reason', '$services', '$month', '$year','0')";

            if ($conn->query($sql6) === TRUE) {
                echo "<script type='text/javascript'>
                alert ('Data Insert Sucessfully!'); 
                window.location.href='../guidance/index.php';</script>";
            } else {
                echo "<script type='text/javascript'>
                alert ('Eror Inserting Data!'); 
                window.location.href='../guidance/index.php';</script>";
            }
    
        } else {
        }

    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }


}

?>