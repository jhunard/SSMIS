<?php
include 'conn.php';

$fname=$_POST["rcfName"];
$mname=$_POST["rcmName"];
$lname=$_POST["rclName"];
$srcode=$_POST["rcsrCode"];
$yearlevel=$_POST["rcyearlevel"];
$program=$_POST["rcprogram"];
$department=$_POST["rcdepartment"];
$gender=$_POST["rcgender"];
$date=$_POST["rcdate"];
$reason=$_POST["rcreason"];
$month = date("F");
$year = date("Y");
$services = "Referral Counseling";

$sql = "SELECT * FROM student_record WHERE sr_code='$srcode' && fname='$fname'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    if($row = $result->fetch_assoc()) {

        $sql2 = "UPDATE student_record SET RC_date_filled='$date', RC_reason='$reason' WHERE sr_code='$srcode' && fname='$fname'";

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
            $sql6 = "INSERT INTO graph_data (fname,mname,lname,sr_code,year_level,program,department,gendergraph_date,reason,services,graph_month,graph_year,quarter,school_year,other_index) VALUES ('$fname','$mname','$lname', '$srcode', '$yearlevel','$program', '$department','$gender', '$date', '$reason', '$services', '$month', '$year','$quarter','$school_year','0')";

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
    $sql3 = "INSERT INTO student_record (fname,mname,lname,sr_code,year_level,program,department,rcgender,RC_date_filled,RC_reason) VALUES ('$fname','$mname','$lname', '$srcode', '$yearlevel','$program', '$department', '$gender', '$date','$reason')";

    if ($conn->query($sql3) === TRUE) {
        
        $sql4 = "INSERT INTO guidance_log (fname,mname,lname,sr_code,year_level,program,department,gender) VALUES ('$fname','$mname','$lname', '$srcode', '$yearlevel','$program', '$department', '$gender')";

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
            $sql5 = "INSERT INTO graph_data (fname,mname,lname,sr_code,year_level,program,department,gender,graph_date,reason,services,graph_month,graph_year,quarter,school_year,other_index) VALUES ('$fname','$mname','$lname', '$srcode', '$yearlevel','$program', '$department', '$gender', '$date', '$reason', '$services', '$month', '$year','$quarter','$school_year','0')";
            
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