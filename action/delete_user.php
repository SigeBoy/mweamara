<?php
$id = $_GET['delID'];

include('../connection.php');

$sql = "DELETE FROM tbladministrator WHERE id=$id";
if(mysqli_query($link,$sql))
{
	header('location:../view_user.php');
}
else
{
	die('Could not delete record:' .mysqli_error());
}
?>