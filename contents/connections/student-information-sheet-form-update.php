<?php
include 'conn.php';
//School Info
$name=$_POST["name"];
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





$sql = "SELECT * FROM student_record WHERE sr_code='$srcode' && name='$name'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    if($row = $result->fetch_assoc()) {

        $sql2 = "UPDATE student_record SET sr_code='$srcode',name='$name',year_level='$yearlevel',program='$program',department='$department',address='$address',phone='$phone',email='$email',civilstatus='$status',spouse='$spouse', SIS_date_updated='$date' WHERE sr_code='$srcode' && name='$name'";

        if ($conn->query($sql2) === TRUE) {
            echo "<script type='text/javascript'>
            alert ('Data Updated Sucessfully!'); 
            window.location.href='../guidance/services-index.php';</script>";
        } else {
            echo "<script type='text/javascript'>
            alert ('Eror Updating Data!'); 
            window.location.href='../guidance/services-index.php';</script>";
        }
    }
} else {
    $sql3 = "INSERT INTO student_record (sr_code, name, year_level, program, department, address, phone, email, civilstatus, spouse , SIS_date_filled ) VALUES ('$srcode', '$name', '$yearlevel', '$program', '$department', '$address', '$phone','$email','$status', '$spouse', '$date')";

    if ($conn->query($sql3) === TRUE) {
        
        $sql4 = "INSERT INTO guidance_log (name,sr_code,year_level,program,department) VALUES ('$name', '$srcode', '$yearlevel','$program', '$department')";

        if ($conn->query($sql4) === TRUE) {
            echo "<script type='text/javascript'>
            alert ('Data Insert Sucessfully!'); 
            window.location.href='../guidance/services-index.php';</script>";
        } else {
            echo "<script type='text/javascript'>
            alert ('Eror Inserting Data!'); 
            window.location.href='../guidance/services-index.php';</script>";
        }

    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }


}

?>