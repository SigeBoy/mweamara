<?php
include 'menu.php';
?>
 <main id="main" class="main">
   <section class="section">
      <div class="row">
        

        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Add New User</h5>
              <!-- Custom Styled Validation -->
              <form class="row g-3 needs-validation" novalidate method="post" action="action/save_user.php" enctype="multipart/form-data">

                <?php
              if(isset($_SESSION['msg']))
              {
                
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
              }
              
              if(isset($_SESSION['require']))
              {
                echo $_SESSION['require'];
                unset($_SESSION['require']);
              }
            ?>
                <div class="col-md-4">
                  <label for="validationCustom01" class="form-label">First name</label>
                  <input type="text" class="form-control" id="fname" name="fname"  required>
                </div>
                <div class="col-md-4">
                  <label for="validationCustom01" class="form-label">Middle name</label>
                  <input type="text" class="form-control" id="mname" name="mname"  required>
                </div>
                <div class="col-md-4">
                  <label for="validationCustom01" class="form-label">Last name</label>
                  <input type="text" class="form-control" id="lname" name="lname"  required>
                </div>


                <div class="col-md-4">
                  <label for="validationCustom01" class="form-label">Gender</label>
                  <select class="form-select" id="gender" name="gender" required>
                    <option selected disabled value="">..Select gender..</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                  </select>
                </div>
            
                <div class="col-md-4">
                  <label for="validationCustom01" class="form-label">Phone #</label>
                  <input type="text" class="form-control" id="contact" name="contact"  required>
                </div>
                
                <div class="col-md-4">
                  <label for="validationCustomUsername" class="form-label">Email</label>
                  <div class="input-group has-validation">
                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="inputGroupPrepend" required>
                  </div>
                </div>


                 <div class="col-md-3">
                  <label for="validationCustom01" class="form-label">Level</label>
                  <select class="form-select" id="level" name="level" required>
                    <option selected disabled value="">..Select level..</option>
                    <option value="Admin">Admin</option>
                    <option value="Data">Data Clerck</option>
                    <option value="Other">Other</option>
                  </select>
                </div>

                <div class="col-md-3">
                  <label for="validationCustomUsername" class="form-label">Username</label>
                  <div class="input-group has-validation">
                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                    <input type="text" class="form-control" id="user" name="user" aria-describedby="inputGroupPrepend" required>
                  </div>
                </div>
                <div class="col-md-3">
                  <label for="validationCustom01" class="form-label">Password</label>
                  <input type="password" class="form-control" id="password" name="password"  required>
                </div>
                <div class="col-md-3">
                  <label for="validationCustom01" class="form-label">Confirm Password</label>
                  <input type="Password" class="form-control" id="pass" name="pass"  required>
                </div>
                
                <div class="col-12">
                  <button class="btn btn-primary" type="submit">Submit form</button>
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