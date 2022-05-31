<?php
include 'menu.php';
?>

  <main id="main" class="main">

    <div class="card">
                <div class="card-body">
                  <h5 class="card-title">List Of Clints  <span>| M.W.E.A</span></h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">SN</th>
                        <th scope="col">Name</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Contact</th>
                        <th scope="col">C.C</th>
                        <th scope="col">G.C</th>
                         <th scope="col">IB</th>
                        <th scope="col">GB</th>
                        <th scope="col">PDF</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      include('connection.php');
                      $i=1;
                      $sql = "SELECT id, email, fname, mname, lname, gender, age, contact, cost_center, geo_center, i_borrowe, g_borrower, pdf FROM tbl_client WHERE 1 ";
                      $result = mysqli_query($link,$sql) or die(mysqli_error());
                      while ($row=mysqli_fetch_array($result)) {
                      
                      ?>
                      <tr>
                       <td><?php echo $i; ?></td>
                       <td><?php echo $row['fname'].' '.$row['mname'].' '.$row['lname']; ?></td>
                        <td><?php echo $row['gender'];?></td>
                         <td><?php echo $row['contact'];?></td>
                          <td><?php echo $row['cost_center'];?></td>
                          <td><?php echo $row['geo_center'];?></td>
                          <td><?php echo $row['i_borrowe'];?></td>
                           <td><?php echo $row['g_borrower'];?></td>
                            <td><a class="btn btn-success" href="action/uploads/<?php echo $row['pdf']; ?>" target="_blank">  <i class="bi bi-card-list"></i></a></td>
                          <td><a class="btn btn-info" onclick="return confirmDel()" href="edit_client.php?UID=<?php echo $row['id'];?>"> <i class="bi bi-pen"></i></a></td>
                           <td><a class="btn btn-danger" onclick="return confirmDel()" href="action/delete_client.php?delID=<?php echo $row['id'];?>"> <i class="bi bi-trash"></i></a></td>
                      </tr>
                     <?php
                     $i++;
                   }
                     ?>
                     
                    </tbody>
                  </table>

                </div>

              </div>
  </main> 
  
  
  
  <!-- ======= Footer ======= -->
  <?php
include 'footer.php';
 ?>