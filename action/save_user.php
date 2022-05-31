<?php	
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$mname = $_POST['mname'];
$gender = $_POST['gender'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$level = $_POST['level'];
$user = $_POST['user'];
$password = $_POST['password'];
$pass = $_POST['pass'];

include('../connection.php');
   
if ($password == $pass) {
   
            // insert file details into database
           $sql = "INSERT INTO  tbladministrator (id, fname, mname, lname,gender,phone,user,pass,email,level) 
               VALUES ('','$fname','$mname','$lname','$gender','$contact','$user','$password','$email','$level')";
                    mysqli_query($link, $sql);
                    header('location:../view_user.php');
        }
        else
        {

              session_start();
              $_SESSION['msg'] = '<h5 style="color:red">Password do not match!</h5>';
              header("Location: ../add_user.php"); 
        }
        
?>












<!--  -->