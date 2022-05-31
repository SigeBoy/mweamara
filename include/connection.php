<?php require_once("config.php");
$connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
// Test if connection occured
if(mysqli_connect_errno()){
	die("Connection to the database failed : " . mysqli_connect_error());
}
?>