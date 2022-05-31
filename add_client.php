<?php
include 'menu.php';
?>
 <main id="main" class="main">
   <section class="section">
      <div class="row">
        

        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Add New Client</h5>
              <!-- Custom Styled Validation -->
              <form class="row g-3 needs-validation" novalidate method="post" action="action/save_client.php" enctype="multipart/form-data">
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
                  <label for="validationCustom01" class="form-label">Age</label>
                  <input type="text" class="form-control" id="age" name="age"  required>
                </div>
                <div class="col-md-4">
                  <label for="validationCustom01" class="form-label">Contact</label>
                  <input type="text" class="form-control" id="contact" name="contact"  required>
                </div>
                
                <!-- <div class="col-md-4">
                  <label for="validationCustomUsername" class="form-label">Username</label>
                  <div class="input-group has-validation">
                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                    <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                    <div class="invalid-feedback">
                      Please choose a username.
                    </div>
                  </div>
                </div> -->
                
                
                <div class="col-md-4">
                  <label for="validationCustom04" class="form-label">Cost center</label>
                  <select class="form-select" id="cost" name="cost" >
                    <option selected disabled value="">Choose...</option>
                    <option value="MWEA">MWEA</option>
                    <option value="MICRO-CREDIT">MICRO-CREDIT</option>
                    <option value="LCCB">LCCB</option>
                    <option>...</option>
                  </select>
                </div>
                <div class="col-md-4">
                  <label for="validationCustom04" class="form-label">Individual borrower</label>
                  <select class="form-select" id="ib" name="ib" >
                    <option selected disabled value="">Choose...</option>
                    <option>...</option>
                  </select>
                </div>
                <div class="col-md-4">
                  <label for="validationCustom04" class="form-label">Group borrower</label>
                  <select class="form-select" id="gb" name="gb" >
                    <option selected disabled value="">Choose...</option>
                    <option>...</option>
                  </select>
                </div>
                <div class="col-md-6">
                  <label for="validationCustom01" class="form-label">Geographical center</label>
                  <input type="text" class="form-control" id="geo" name="geo"  required>
                </div>

                <div class="col-6">
                 <label for="validationCustom01" class="form-label">Upload PDF</label>
                  <input type="file" class="form-control" id="file" name="file"  required>
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