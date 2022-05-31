<?php
$userID = $_GET['UID'];

	include('connection.php');

	$sql ="SELECT * FROM tbladministrator where id = '$userID'";
	$result=mysqli_query($link,$sql) OR die(mysqli_error());

	$num = mysqli_num_rows($result);

	$i = 0;

	while($rowfindmember=mysqli_fetch_array($result))
	{
		$autoid = $rowfindmember["id"];
		$fname = $rowfindmember["fname"];
		$mname = $rowfindmember["mname"];
		$lname = $rowfindmember["lname"];
		$gender = $rowfindmember["gender"];
		$phone = $rowfindmember["phone"];
		$level = $rowfindmember["level"];
		$email = $rowfindmember["email"];
		$user = $rowfindmember["user"];
		$pass = $rowfindmember["pass"];
		$i++;

	}

?>


<?php
include 'menu.php';
?>
 <main id="main" class="main">
   <section class="section">
      <div class="row">
        

        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Update Client</h5>
              <!-- Custom Styled Validation -->
              <form class="row g-3 needs-validation" novalidate method="post" action="action/update_user.php" enctype="multipart/form-data">
                <div class="col-md-4">
                  <label for="validationCustom01" class="form-label">First name</label>
                  <input type="text" class="form-control" id="fname" name="fname"   value="<?php echo $fname; ?>">
                </div>
                <div class="col-md-4">
                  <label for="validationCustom01" class="form-label">Middle name</label>
                  <input type="text" class="form-control" id="mname" name="mname"  value="<?php echo $mname; ?>">
                </div>
                <div class="col-md-4">
                  <label for="validationCustom01" class="form-label">Last name</label>
                  <input type="text" class="form-control" id="lname" name="lname"   value="<?php echo $lname; ?>">
                </div>


                <div class="col-md-4">
                  <label for="validationCustom01" class="form-label">Gender</label>
                  <select class="form-select" id="gender" name="gender" value="<?php echo $gender; ?>">
                    <option value="<?php echo $gender; ?>"><?php echo $gender; ?></option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                  </select>
                </div>
                <div class="col-md-4">
                  <label for="validationCustom01" class="form-label">Phone #</label>
                  <input type="text" class="form-control" id="contact" name="contact"  value="<?php echo $phone; ?>">
                </div>
                
                <div class="col-md-4">
                  <label for="validationCustomUsername" class="form-label">Email</label>
                  <div class="input-group has-validation">
                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="inputGroupPrepend" value="<?php echo $email; ?>">
                  </div>
                </div>
                
                 <div class="col-md-4">
                  <label for="validationCustom01" class="form-label">Level</label>
                  <select class="form-select" id="level" name="level" >
                    <option value="<?php echo $level; ?>"><?php echo $level; ?></option>
                    <option value="Admin">Admin</option>
                    <option value="Data">Data Clerck</option>
                    <option value="Other">Other</option>
                  </select>
                </div>

                <div class="col-md-4">
                  <label for="validationCustomUsername" class="form-label">Username</label>
                  <div class="input-group has-validation">
                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                    <input type="text" class="form-control" id="user" name="user" aria-describedby="inputGroupPrepend" value="<?php echo $user; ?>">
                  </div>
                </div>
                <div class="col-md-4">
                  <label for="validationCustom01" class="form-label">Password</label>
                  <input type="password" class="form-control" id="password" name="password"  value="<?php echo $pass; ?>">
                </div>

                <div class="col-6">
                	<div class="form-actions"><label for="validationCustom01" class="form-label">Update details</label><br/>
								<button type="submit" onclick="return confirmUpdate()" class="btn btn-primary">Save Changes</button>
								<input type="hidden" name="hid" value="<?php echo $autoid; ?>">
							  </div>
                </div>
              </form><!-- End Custom Styled Validation -->

            </div>
          </div>

        </div>
      </div>
    </section>
</main>
  <!-- ======= Footer ======= -->
 <?php
include 'footer.php';
 ?>