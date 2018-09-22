<?php
include 'conn.php';

$name=$_POST["otherName"];
$srcode=$_POST["othersrCode"];
$yearlevel=$_POST["otheryearlevel"];
$program=$_POST["otherprogram"];
$department=$_POST["otherdepartment"];
$date=$_POST["otherdate"];
$reason=$_POST["otherreason"];
$month = date("F");
$year = date("Y");
$services = "other";

$sql = "SELECT * FROM student_record WHERE sr_code='$srcode' && name='$name'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    if($row = $result->fetch_assoc()) {

        $sql2 = "UPDATE student_record SET more_services_date='$date', others='$reason' WHERE sr_code='$srcode' && name='$name'";

        if ($conn->query($sql2) === TRUE) {
            $sql6 = "INSERT INTO graph_data (name,sr_code,year_level,program,department,graph_date,reason,services,graph_month,graph_year) VALUES ('$name', '$srcode', '$yearlevel','$program', '$department', '$date', '$reason', '$services', '$month', '$year')";

            if ($conn->query($sql6) === TRUE) {
                echo "<script type='text/javascript'>
                alert ('Data Insert Sucessfully!'); 
                window.location.href='../guidance/services-index.php';</script>";
            } else {
                echo "<script type='text/javascript'>
                alert ('Eror Inserting Data!'); 
                window.location.href='../guidance/services-index.php';</script>";
            }
        } else {
            echo "<script type='text/javascript'>
            alert ('Eror Updating Data!'); 
            window.location.href='../guidance/services-index.php';</script>";
        }
    }
} else {
    $sql3 = "INSERT INTO student_record (name,sr_code,year_level,program,department,more_services_date,others) VALUES ('$name', '$srcode', '$yearlevel','$program', '$department', '$date','$reason')";

    if ($conn->query($sql3) === TRUE) {
        
        $sql4 = "INSERT INTO guidance_log (name,sr_code,year_level,program,department) VALUES ('$name', '$srcode', '$yearlevel','$program', '$department')";

        if ($conn->query($sql4) === TRUE) {
            $sql5 = "INSERT INTO graph_data (name,sr_code,year_level,program,department,graph_date,reason,services,graph_month,graph_year) VALUES ('$name', '$srcode', '$yearlevel','$program', '$department', '$date', '$reason', '$services', '$month', '$year')";

            if ($conn->query($sql5) === TRUE) {
                echo "<script type='text/javascript'>
                alert ('Data Insert Sucessfully!'); 
                window.location.href='../guidance/services-index.php';</script>";
            } else {
                echo "<script type='text/javascript'>
                alert ('Eror Inserting Data!'); 
                window.location.href='../guidance/services-index.php';</script>";
            }
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