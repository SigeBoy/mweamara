<?php
$id = $_GET['delID'];

include('../connection.php');

$sql = "DELETE FROM tbl_client WHERE id=$id";
if(mysqli_query($link,$sql))
{
	header('location:../view_client.php');
}
else
{
	die('Could not delete record:' .mysqli_error());
}
?>