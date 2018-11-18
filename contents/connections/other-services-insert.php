<?php
include 'conn.php';

$fname=$_POST["otherfName"];
$mname=$_POST["othermName"];
$lname=$_POST["otherlName"];
$srcode=$_POST["othersrCode"];
$yearlevel=$_POST["otheryearlevel"];
$program=$_POST["otherprogram"];
$department=$_POST["otherdepartment"];
$gender=$_POST["othergender"];
$date=$_POST["otherdate"];
$reason=$_POST["otherreason"];
$month = date("F");
$year = date("Y");
$day = $date[8].$date[9];
$services = $_POST["services"];

$sql = "SELECT * FROM student_record WHERE sr_code='$srcode' && fname='$fname'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    if($row = $result->fetch_assoc()) {

        $sql2 = "UPDATE student_record SET more_services_date='$date', others='$reason' WHERE sr_code='$srcode' && fname='$fname'";

        if ($conn->query($sql2) === TRUE) {

            
            $lastyear= date("y") + 1;
            $school_year= date("y")."-".$lastyear;

            $now_month = date("F");
            $month_list = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
            if($now_month == $month_list[0]){
                $quarter="second";
            }
            if($now_month == $month_list[1]){
                $quarter="second";
            }
            if($now_month == $month_list[2]){
                $quarter="second";
            }
            if($now_month == $month_list[3]){
                $quarter="second";
            }
            if($now_month == $month_list[4]){
                $quarter="second";
            }
            if($now_month == $month_list[5]){
                $quarter="summer";
            }
            if($now_month == $month_list[6]){
                $quarter="summer";
            }
            if($now_month == $month_list[7]){
                $quarter="first";
            }
            if($now_month == $month_list[8]){
                $quarter="first";
            }
            if($now_month == $month_list[9]){
                $quarter="first";
            }
            if($now_month == $month_list[10]){
                $quarter="first";
            }
            if($now_month == $month_list[11]){
                $quarter="first";
            }
            
            $sql6 = "INSERT INTO graph_data (graph_day,fname,mname,lname,sr_code,year_level,program,department,gender,graph_date,reason,services,graph_month,graph_year,quarter,school_year,other_index) 
                VALUES ('$day','$fname','$mname','$lname', '$srcode', '$yearlevel','$program', '$department', '$gender', '$date', '$reason', '$services', '$month', '$year','$quarter','$school_year','1')";

            if ($conn->query($sql6) === TRUE) {
                echo "<script type='text/javascript'>
                alert ('Data Insert Sucessfully!'); 
                window.location.href='../guidance/services-add.php';</script>";
            } else {
                echo "<script type='text/javascript'>
                alert ('Error Inserting Data!'); 
                window.location.href='../guidance/services-add.php';</script>";
            }
        } else {
            echo "<script type='text/javascript'>
            alert ('Error Updating Data!'); 
            window.location.href='../guidance/services-add.php';</script>";
        }
    }
} else {
    $sql3 = "INSERT INTO student_record (fname,mname,lname,sr_code,year_level,program,department,gender,more_services_date,others)
     VALUES ('$fname','$mname','$lname', '$srcode', '$yearlevel','$program', '$department', '$gender', '$date','$reason')";

    if ($conn->query($sql3) === TRUE) {
        
        $sql4 = "INSERT INTO guidance_log (fname,mname,lname,sr_code,year_level,program,department,gender)
         VALUES ('$fname','$mname','$lname', '$srcode', '$yearlevel','$program', '$department', '$gender')";

        if ($conn->query($sql4) === TRUE) {

            
            $lastyear= date("y") + 1;
            $school_year= date("y")."-".$lastyear;

            $now_month = date("F");
            $month_list = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
            if($now_month == $month_list[0]){
                $quarter="second";
            }
            if($now_month == $month_list[1]){
                $quarter="second";
            }
            if($now_month == $month_list[2]){
                $quarter="second";
            }
            if($now_month == $month_list[3]){
                $quarter="second";
            }
            if($now_month == $month_list[4]){
                $quarter="second";
            }
            if($now_month == $month_list[5]){
                $quarter="summer";
            }
            if($now_month == $month_list[6]){
                $quarter="summer";
            }
            if($now_month == $month_list[7]){
                $quarter="first";
            }
            if($now_month == $month_list[8]){
                $quarter="first";
            }
            if($now_month == $month_list[9]){
                $quarter="first";
            }
            if($now_month == $month_list[10]){
                $quarter="first";
            }
            if($now_month == $month_list[11]){
                $quarter="first";
            }
            
            $sql5 = "INSERT INTO graph_data (graph_day,fname,mname,lname,sr_code,year_level,program,department,gender,graph_date,reason,services,graph_month,graph_year,other_index)
             VALUES ('$day','$fname','$mname','$lname', '$srcode', '$yearlevel','$program', '$department', '$gender', '$date', '$reason', '$services', '$month', '$year','1')";

            if ($conn->query($sql5) === TRUE) {
                echo "<script type='text/javascript'>
                alert ('Data Insert Sucessfully!'); 
                window.location.href='../services-add.php';</script>";
            } else {
                echo "<script type='text/javascript'>
                alert ('Error Inserting Data!'); 
                window.location.href='../guidance/services-add.php';</script>";
            }
        } else {
            echo "<script type='text/javascript'>
            alert ('Error Inserting Data!'); 
            window.location.href='../guidance/services-add.php';</script>";
        }

    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }


}

?>