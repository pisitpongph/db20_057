<?php
$servername = "localhost";
$username = "db20_060";
$password = "db20_060";
$dbname = "db20_060";
$conn = new mysqli($servername,$username,$password);
if($conn->connect_error){
    die("Connection failed:" .$conn->connect_error);
}
if(!$conn->select_db($dbname)){
    die("connection failed:".$conn->connect_error);
}

?>