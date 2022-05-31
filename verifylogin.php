<?php
 //session_start();
$user = $_POST['user'];
$pwd = $_POST['password'];
$userid = $_GET['user'];

include 'connection.php';

$sql = "SELECT * FROM tbladministrator WHERE pass='$pwd' AND user='$user' AND id='$userid' ";
$result=mysqli_query($link,$sql) OR die(mysqli_error());
$row=mysqli_fetch_array($result);
$user = $row['user'];
$num = mysqli_num_rows($result);
echo $user;
if($num==1)
{
 session_start();
  $_SESSION['user'] = $user;
  header('location:home.php');
}
else
{
 session_start();
  $_SESSION['msg'] = '<h5 style="color:red">Invalid username or password!</h5>';
  header('location:home.php');
}
?>