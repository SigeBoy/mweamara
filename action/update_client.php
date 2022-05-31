<?php
$autoid = $_POST['hid'];
$fname = $_POST['fname'];
$mname = $_POST['mname'];
$lname = $_POST['lname'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$contact = $_POST['contact'];
$cost = $_POST['cost'];
$ib = $_POST['ib'];
$gb = $_POST['gb'];
$geo = $_POST['geo'];
include('../connection.php');

$sql = "UPDATE tbl_client SET  fname='$fname', mname='$mname', lname='$lname', age='$age', gender='$gender', contact ='$contact', cost_center='$cost', geo_center='$geo', i_borrowe='$ib', g_borrower='$gb' WHERE id='$autoid'";

if(mysqli_query($link,$sql))
{
	header('location:../view_client.php');
}
else
{
	die('Unable to update record: ' .mysqli_error());
}
?>