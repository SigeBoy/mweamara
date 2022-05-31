<?php
$userID = $_GET['UID'];

	include('connection.php');

	$sql ="SELECT * FROM tbl_client where id = '$userID'";
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
		$contact = $rowfindmember["contact"];
		$age = $rowfindmember["age"];
		$i_borrowe = $rowfindmember["i_borrowe"];
		$g_borrower = $rowfindmember["g_borrower"];
		$cost_center = $rowfindmember["cost_center"];
		$geo_center = $rowfindmember["geo_center"];
		$pdf = $rowfindmember["pdf"];
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
              <form class="row g-3 needs-validation" novalidate method="post" action="action/update_client.php" enctype="multipart/form-data">
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
                  <label for="validationCustom01" class="form-label">Age</label>
                  <input type="text" class="form-control" id="age" name="age"   value="<?php echo $age; ?>">
                </div>
                <div class="col-md-4">
                  <label for="validationCustom01" class="form-label">Contact</label>
                  <input type="text" class="form-control" id="contact" name="contact"   value="<?php echo $contact; ?>">
                </div>
                
                <div class="col-md-4">
                  <label for="validationCustom04" class="form-label">Cost center</label>
                  <select class="form-select" id="cost" name="cost" value="<?php echo $cost_center; ?>" >
                    <option  value="<?php echo $cost_center; ?>"><?php echo $cost_center; ?></option>
                    <option value="MWEA">MWEA</option>
                    <option value="MICRO-CREDIT">MICRO-CREDIT</option>
                    <option value="LCCB">LCCB</option>
                    <option>...</option>
                  </select>
                </div>
                <div class="col-md-4">
                  <label for="validationCustom04" class="form-label">Individual borrower</label>
                  <select class="form-select" id="ib" name="ib" value="<?php echo $i_borrowe; ?>" >
                    <option value="<?php echo $i_borrowe; ?>"><?php echo $i_borrowe; ?></option>
                    <option value="test">Test</option>
                  </select>
                </div>
                <div class="col-md-4">
                  <label for="validationCustom04" class="form-label">Group borrower</label>
                  <select class="form-select" id="gb" name="gb" value="<?php echo $g_borrower; ?>" >
                    <option value="<?php echo $g_borrower; ?>"><?php echo $g_borrower; ?></option>
                    <option value="test">Test</option>
                  </select>
                </div>
                <div class="col-md-6">
                  <label for="validationCustom01" class="form-label">Geographical center</label>
                  <input type="text" class="form-control" id="geo" name="geo"  value="<?php echo $geo_center; ?>">
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