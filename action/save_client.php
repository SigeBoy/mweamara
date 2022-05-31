<?php	
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$mname = $_POST['mname'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$contact = $_POST['contact'];
$ib = $_POST['ib'];
$cost = $_POST['cost'];
$gb = $_POST['gb'];
$geo = $_POST['geo'];
$filename = $_FILES['file']['name'];
include('../connection.php');
    //upload file
    if($filename != '')
    {
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        $allowed = ['pdf', 'txt', 'doc', 'docx', 'png', 'jpg', 'jpeg',  'gif'];
    
        //check if file type is valid
        if (in_array($ext, $allowed))
        {
            // get last record id
            $sql = 'select max(id) as id from tbl_client';
            $result = mysqli_query($link, $sql);
            if (count($result) > 0)
            {
                $row = mysqli_fetch_array($result);
                $filename = ($row['id']+1) . '-' . $filename;
            }
            else
                $filename = '1' . '-' . $filename;

            //set target directory
            $path = 'uploads/';
                
            $created = @date('Y-m-d H:i:s');
            move_uploaded_file($_FILES['file']['tmp_name'],($path . $filename)); 
            // insert file details into database
           $sql = "INSERT INTO  tbl_client (id, fname, mname, lname,gender,age,contact,cost_center,geo_center,i_borrowe,g_borrower,pdf) 
               VALUES ('','$fname','$mname','$lname','$gender','$age','$contact','$cost','$geo','$ib','$gb','$filename')";
            mysqli_query($link, $sql);
            header('location:../view_client.php');
        }
        
    }
    else
        header("Location: index.php");
	//, dept
//
?>












<!--  -->