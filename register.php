<?php
$serverName ="localhost";
$userName = "root";
$password = "";
$dbName = "user_registration";

// create connection

$conn = new mysqli($serverName,$userName,$password , $dbName);
// check connection
// if($conn -> connect_error ){
//     die("Connection failed " .$conn->connect_error);

// }

// retrieve dat from forms

$username = $_POST['userName'];
$firstName = $_POST['fName'];
$UpassWord = $_POST['passcode'];

//prepare SQ statement
 $sql = "INSERT INTO Users (userName ,fName ,passcode) VALUES('$username' , '$firstName' , '$UpassWord')";

 // execute the sql stateent
 if($conn->query($sql)==TRUE){
    echo" Registration successfull!";
 } else{
    echo "Error " . $sql ."<br>";
 }
$conn->close();
?>..
