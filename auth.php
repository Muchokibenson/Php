<?php
$serverName ="localhost";
$userName = "root";
$password = "";
$dbName = "user_registration";

// create connection
$conn = new mysqli($serverName,$userName,$password , $dbName);
// check connection
if($conn -> connect_error ){
    die("Connection failed " .$conn->connect_error);

}

// retrieve dat from forms

$username = $_POST['typeNameX'];

$UpassWord = $_POST['typePassWordX'];

//prepare SQ statement
 $sql = "SELECT * FROM users WHERE userName = '$username' AND passcode = '$UpassWord'";

header("Location:dashboard.html");
exit();


 $conn->close();
?>

