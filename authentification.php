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

$username = $_POST['userName'];
$firstName = $_POST['fName'];
$UpassWord = $_POST['passcode'];

//prepare SQ statement
 $sql = "SELECT * FROM users WHERE userName = '$userName' AND passcode = '$UpassWord' ;

 // execute the sql stateent


 $conn->close();

