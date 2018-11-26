<?php
include 'conn.php';
session_start();
$user = $_POST["username"];
$pass = md5($_POST["password"]);


$sql = "SELECT * FROM user_info WHERE username='$user' && password='$pass'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $db_username=$row["username"];
        $db_password=$row["password"];
        $db_position=$row["position"];
        
        if($user === $db_username && $pass === $db_password){
            $position = $db_position;

            switch ($position) {
                case "administrator":
                echo "<script type='text/javascript'>
                alert ('Welcome ". $db_username ." were so happy to see you!'); 
                window.location.href='../admin/index.php';</script>";
                $_SESSION["user"]=$user;
            break;
                case "guidance":
                    echo "<script type='text/javascript'>
                    alert ('Welcome ". $db_username ." were so happy to see you!'); 
                    window.location.href='../guidance/index.php';</script>";
                    $_SESSION["user"]=$user;
                break;
                case "osd":
                    echo "<script type='text/javascript'>
                    alert ('Welcome ". $db_username ." were glad to serve you!'); 
                    window.location.href='../osd/index.php';</script>";
                    $_SESSION["user"]=$user;
                break;
                case "soa":
                    echo "<script type='text/javascript'>
                    alert ('Welcome ". $db_username ." were so happy to see you!'); 
                    window.location.href='../soa/index.php';</script>";
                    $_SESSION["user"]=$user;
                 break;
            default:
                echo "<script type='text/javascript'>
                alert ('Username and Password unmatched!'); 
                window.location.href='../../index.php';</script>";
}
        }
    }
} else {
    echo "<script type='text/javascript'>
    alert ('Username and Password unmatched!'); 
    window.location.href='../../index.php';</script>";
}
$conn->close();

?>