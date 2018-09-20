<?php
include 'conn.php';

$name=$_POST["rcName"];
$srcode=$_POST["rcsrCode"];
$yearlevel=$_POST["rcyearlevel"];
$program=$_POST["rcprogram"];
$department=$_POST["rcdepartment"];
$date=$_POST["rcdate"];
$reason=$_POST["rcreason"];

$sql = "SELECT * FROM student_record WHERE sr_code='$srcode' && name='$name'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    if($row = $result->fetch_assoc()) {

        $sql2 = "UPDATE student_record SET RC_date_filled='$date', RC_reason='$reason' WHERE sr_code='$srcode' && name='$name'";

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
    $sql3 = "INSERT INTO student_record (name,sr_code,year_level,program,department,RC_date_filled,RC_reason) VALUES ('$name', '$srcode', '$yearlevel','$program', '$department', '$date','$reason')";

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