<?php
$autoid = $_POST['hid'];
$fname = $_POST['fname'];
$mname = $_POST['mname'];
$lname = $_POST['lname'];
$gender = $_POST['gender'];
$level = $_POST['level'];
$contact = $_POST['contact'];
$user = $_POST['user'];
$pass = $_POST['pass'];
$email = $_POST['email'];
include('../connection.php');

$sql = "UPDATE tbladministrator SET  fname='$fname', mname='$mname', lname='$lname', phone='$contact', gender='$gender', user ='$user', email='$email', level='$level' WHERE id='$autoid'";

if(mysqli_query($link,$sql))
{
	header('location:../view_user.php');
}
else
{
	die('Unable to update record: ' .mysqli_error());
}
?>