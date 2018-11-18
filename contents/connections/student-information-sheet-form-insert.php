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
//Additional Info
$address=$_POST["address"];
$phone=$_POST["phone"];
$bday=$_POST["bday"];
$mobile=$_POST["mobile"];
$age=$_POST["age"];
$email=$_POST["email"];
$gender=$_POST["gender"];
$civilstatus=$_POST["civilstatus"];
$spouse=$_POST["spouse"];
$religion=$_POST["religion"];
$fathername=$_POST["fathername"];
$mothername=$_POST["mothername"];
$fatherage=$_POST["fatherage"];
$motherage=$_POST["motherage"];
$fathermobile=$_POST["fathermobile"];
$mothermobile=$_POST["mothermobile"];
$fathereducation=$_POST["fathereducation"];
$mothereducation=$_POST["mothereducation"];
$fatheroccupation=$_POST["fatheroccupation"];
$motheroccupation=$_POST["motheroccupation"];
$guardiansname=$_POST["guardiansname"];
$guardiansrelationship=$_POST["guardiansrelationship"];
$guardiansaddress=$_POST["guardiansaddress"];
$guardiansmobilenumber=$_POST["guardiansmobilenumber"];
$siblingname=$_POST["siblingname"];
$siblingname1=$_POST["siblingname1"];
$siblingname2=$_POST["siblingname2"];
$siblingname3=$_POST["siblingname3"];
$siblingname4=$_POST["siblingname4"];
$siblingname5=$_POST["siblingname5"];
$siblingname6=$_POST["siblingname6"];
$siblingschool=$_POST["siblingschool"];
$siblingschool1=$_POST["siblingschool1"];
$siblingschool2=$_POST["siblingschool2"];
$siblingschool3=$_POST["siblingschool3"];
$siblingschool4=$_POST["siblingschool4"];
$siblingschool5=$_POST["siblingschool5"];
$siblingschool6=$_POST["siblingschool6"];
$siblingage=$_POST["siblingage"];
$siblingage1=$_POST["siblingage1"];
$siblingage2=$_POST["siblingage2"];
$siblingage3=$_POST["siblingage3"];
$siblingage4=$_POST["siblingage4"];
$siblingage5=$_POST["siblingage5"];
$siblingage6=$_POST["siblingage6"];
$siblingcontact=$_POST["siblingcontact"];
$siblingcontact1=$_POST["siblingcontact1"];
$siblingcontact2=$_POST["siblingcontact2"];
$siblingcontact3=$_POST["siblingcontact3"];
$siblingcontact4=$_POST["siblingcontact4"];
$siblingcontact5=$_POST["siblingcontact5"];
$siblingcontact6=$_POST["siblingcontact6"];
$elemschool=$_POST["elemschool"];
$elemyeargraduated=$_POST["elemyeargraduated"];
$elemhonor=$_POST["elemhonor"];
$hsschool=$_POST["hsschool"];
$hsyeargraduated=$_POST["hsyeargraduated"];
$hshonor=$_POST["hshonor"];
$collegeschool=$_POST["collegeschool"];
$collegeyeargraduated=$_POST["collegeyeargraduated"];
$collegehonor=$_POST["collegehonor"];
$otherschool=$_POST["otherschool"];
$otheryeargraduated=$_POST["otheryeargraduated"];
$otherhonor=$_POST["otherhonor"];
$dateToday = date("Y-m-d");

$month = date("F");
$year = date("Y");
$reason = "Filled Student Information Sheet";
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
    echo "<script type='text/javascript'>alert ('Sorry, file already exists.'); 
    window.location.href='../guidance/index.php';</script>";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "<script type='text/javascript'>alert ('Sorry, your file was not uploaded.'); 
    window.location.href='../guidance/index.php';</script>";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
       
    } else {
        echo "<script type='text/javascript'>alert ('Sorry, there was an error uploading your file..'); 
        window.location.href='../guidance/index.php';</script>";
       }
}



$sql = "SELECT * FROM student_record WHERE sr_code='$srcode' && lname='$lname'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    if($row = $result->fetch_assoc()) {

        $sql2 = "UPDATE student_record SET image='$student_image',sr_code='$srcode',fname='$fname',mname='$mname',lname='$lname',year_level='$yearlevel',program='$program',department='$department',address='$address',phone='$phone',bday='$bday',mobile='$mobile',age='$age',email='$email',gender='$gender',civilstatus='$civilstatus',spouse='$spouse',religion='$religion',fathername='$fathername',mothername='$mothername',fatherage='$fatherage',motherage='$motherage',fathermobile='$fathermobile',mothermobile='$mothermobile',fathereducation='$fathereducation',mothereducation='$mothereducation',guardiansname='$guardiansname',guardainsrelationship='$guardiansrelationship',guardainsaddress='$guardiansaddress',guardiansmobilenumber='$guardiansmobilenumber',siblingname='$siblingname',siblingname1='$siblingname1',siblingname2='$siblingname2',siblingname3='$siblingname3',siblingname4='$siblingname4',siblingname5='$siblingname5',siblingname6='$siblingname6',siblingschool='$siblingschool',siblingschool1='$siblingschool1',siblingschool2='$siblingschool2',siblingschool3='$siblingschool3',siblingschool4='$siblingschool4',siblingschool5='$siblingschool5',siblingschool6='$siblingschool6',siblingage='$siblingage',siblingage1='$siblingage1',siblingage2='$siblingage2',siblingage3='$siblingage3',siblingage4='$siblingage4',siblingage5='$siblingage5',siblingage6='$siblingage6',siblingcontact='$siblingcontact',siblingcontact1='$siblingcontact1',siblingcontact2='$siblingcontact2',siblingcontact3='$siblingcontact3',siblingcontact4='$siblingcontact4',siblingcontact5='$siblingcontact5',siblingcontact6='$siblingcontact6',elemschool='$elemschool',elemyeargraduated='$elemyeargraduated',elemhonor='$elemhonor',hsschool='$hsschool',hsyeargraduated='$hsyeargraduated',hshonor='$hshonor',collegeschool='$collegeschool',collegeyeargraduated='$collegeyeargraduated',collegehonor='$collegehonor',otherschool='$otherschool',otheryeargraduated='$otheryeargraduated',otherhonor='$otherhonor',fatheroccupation='$fatheroccupation',motheroccupation='$motheroccupation' , SIS_date_updated='$dateToday' WHERE sr_code='$srcode' && lname='$lname'";

        if ($conn->query($sql2) === TRUE) {
            $reason1 = "Update Student Information Sheet";

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
//edit here
            $sql5 = "INSERT INTO graph_data (fname,mname,lname,sr_code,year_level,program,department,gender,graph_date,reason,services,graph_month,graph_year,quarter,school_year,other_index) VALUES ('$fname','$mname','$lname', '$srcode', '$yearlevel','$program', '$department','$gender', '$dateToday', '$reason1', '$services', '$month', '$year','$quarter','$school_year','0')";

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
            echo "<script type='text/javascript'>
            alert ('Eror Updating Data!'); 
            window.location.href='../guidance/index.php';</script>";
        }
    }
} else {
    $sql3 = "INSERT INTO student_record (image,sr_code, fname,mname,lname, year_level, program, department, address, phone, bday, mobile, age, email, gender, civilstatus, spouse, religion, fathername, mothername, fatherage, motherage, fathermobile, mothermobile, fathereducation, mothereducation, guardiansname, guardainsrelationship, guardainsaddress, guardiansmobilenumber, siblingname, siblingname1, siblingname2, siblingname3, siblingname4, siblingname5, siblingname6, siblingschool, siblingschool1, siblingschool2, siblingschool3, siblingschool4, siblingschool5, siblingschool6, siblingage, siblingage1, siblingage2, siblingage3, siblingage4, siblingage5, siblingage6, siblingcontact, siblingcontact1, siblingcontact2, siblingcontact3, siblingcontact4, siblingcontact5, siblingcontact6, elemschool, elemyeargraduated, elemhonor, hsschool, hsyeargraduated, hshonor, collegeschool, collegeyeargraduated, collegehonor, otherschool, otheryeargraduated, otherhonor, fatheroccupation, motheroccupation, SIS_date_filled) VALUES ('$student_image','$srcode','$fname','$mname','$lname', '$yearlevel', '$program', '$department', '$address', '$phone', '$bday', '$mobile', '$age', '$email', '$gender', '$civilstatus', '$spouse', '$religion', '$fathername', '$mothername', '$fatherage', '$motherage', '$fathermobile', '$mothermobile', '$fathereducation', '$mothereducation', '$guardiansname', '$guardiansrelationship', '$guardiansaddress', '$guardiansmobilenumber', '$siblingname', '$siblingname1', '$siblingname2', '$siblingname3', '$siblingname4', '$siblingname5', '$siblingname6', '$siblingschool', '$siblingschool1', '$siblingschool2', '$siblingschool3', '$siblingschool4', '$siblingschool5', '$siblingschool6', '$siblingage', '$siblingage1', '$siblingage2', '$siblingage3', '$siblingage4', '$siblingage5', '$siblingage6', '$siblingcontact', '$siblingcontact1', '$siblingcontact2', '$siblingcontact3', '$siblingcontact4', '$siblingcontact5', '$siblingcontact6', '$elemschool', '$elemyeargraduated', '$elemhonor', '$hsschool', '$hsyeargraduated', '$hshonor', '$collegeschool', '$collegeyeargraduated', '$collegehonor', '$otherschool', '$otheryeargraduated', '$otherhonor', '$fatheroccupation', '$motheroccupation',  '$dateToday')";

    if ($conn->query($sql3) === TRUE) {
        
        $sql4 = "INSERT INTO guidance_log (fname,mname,lname,sr_code,year_level,program,department,gender) VALUES ('$fname','$mname','$lname', '$srcode', '$yearlevel','$program', '$department', '$gender')";

        if ($conn->query($sql4) === TRUE) {

            $reason1 = "Update Student Information Sheet";
            
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

            $sql6 = "INSERT INTO graph_data (fname,mname,lname,sr_code,year_level,program,department,gender,graph_date,reason,services,graph_month,graph_year,quarter,school_year,other_index) VALUES ('$fname','$mname','$lname', '$srcode', '$yearlevel','$program', '$department', '$gender', '$dateToday', '$reason', '$services', '$month', '$year','$quarter','$school_year','0')";

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
            echo "<script type='text/javascript'>
            alert ('Eror Inserting Data!'); 
            window.location.href='../guidance/index.php';</script>";
        }

    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }


}

?>