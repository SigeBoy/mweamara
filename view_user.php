<?php
include 'menu.php';
?>

  <main id="main" class="main">

    <div class="card">
                <div class="card-body">
                  <h5 class="card-title">List Of Users  <span>| M.W.E.A</span></h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">SN</th>
                        <th scope="col">Name</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Contact</th>
                        <th scope="col">Email</th>
                        <th scope="col">Status</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      include('connection.php');
                      $i=1;
                      $sql = "SELECT id, fname, mname, lname, gender, phone, email,level FROM tbladministrator WHERE 1 ";
                      $result = mysqli_query($link,$sql) or die(mysqli_error());
                      while ($row=mysqli_fetch_array($result)) {
                      
                      ?>
                      <tr>
                       <td><?php echo $i; ?></td>
                       <td><?php echo $row['fname'].' '.$row['mname'].' '.$row['lname']; ?></td>
                        <td><?php echo $row['gender'];?></td>
                         <td><?php echo $row['phone'];?></td>
                          <td><?php echo $row['email'];?></td>
                           <td><span class="btn btn-warning"><?php echo $row['level'];?></span></td>
                          <td><a class="btn btn-info" onclick="return confirmDel()" href="edit_user.php?UID=<?php echo $row['id'];?>"> <i class="bi bi-pen"></i></a></td>
                           <td><a class="btn btn-danger" onclick="return confirmDel()" href="action/delete_user.php?delID=<?php echo $row['id'];?>"> <i class="bi bi-trash"></i></a></td>
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