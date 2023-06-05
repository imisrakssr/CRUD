<?php include "inc/header.php"; ?>
<section>
  <div class="container">
    <div class="row">
      <div class="col-lg-12">

        <h1 class="mb-3">All Users Data</h1>

        <table id="usersData" class="table table-bordered table-striped">
          <thead class="table-dark text-center">
            <tr>
              <th scope="col">Sl no.</th>
              <th scope="col">Name</th>
              <th scope="col">Email</th>
              <th scope="col">Phone</th>
              <th scope="col">Join date</th>
              <th scope="col">Father name</th>
              <th scope="col">Mother name</th>
              <th scope="col">Address</th>
              <th scope="col">A/C Status</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php

            $all_users_sql = "SELECT * FROM users WHERE u_status=1 ORDER BY u_id DESC";
            $all_users_res = mysqli_query($db,$all_users_sql);
            $serial = 0;
              while ($row = mysqli_fetch_assoc($all_users_res)) {
               $u_id        = $row['u_id'];         
               $u_name      = $row['u_name'];
               $u_mail      = $row['u_mail'];
               $u_phone     = $row['u_phone'];
               $join_date   = $row['join_date'];
               $father_name = $row['father_name'];
               $mother_name = $row['mother_name'];
               $address     = $row['address'];
               $u_status    = $row['u_status'];
               $serial++;
               ?>

              <tr>
                <td><?php echo $serial; ?></td>
                <td><?php echo $u_name; ?></td>
                <td><?php echo $u_mail; ?></td>
                <td><?php echo $u_phone; ?></td>
                <td><?php echo $join_date; ?></td>
                <td><?php echo $father_name; ?></td>
                <td><?php echo $mother_name; ?></td>
                <td><?php echo $address; ?></td>
                <td>
                  <?php
                  if($u_status==1){
                    echo '<span class="badge bg-success">Active</span>';
                  }
                  else if ($u_status==0) {
                    echo '<span class="badge bg-danger">Inactive</span>';
                  }
                  ?>
                </td>
                <td>
                  <!-- update & delete button-->
                  <div class="btn btn-group">
                    <a href="update.php?id=<?php echo $u_id; ?>" class="btn btn-success btn-sm">Update</a>
                    <a href="" data-bs-toggle="modal" data-bs-target="#delete<?php echo $u_id; ?>" class="btn btn-danger btn-sm">Delete</a>
                  </div>
                </td>
              </tr>
              <!-- Modal -->
              <div class="modal fade" id="delete<?php echo $u_id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Do you want to delete this user?</h5>
                    </div>
                    <div class="modal-body">
                      <div class="btn btn-group">
                        <a href="index.php?delid=<?php echo $u_id; ?>" class="btn btn-danger">Yes</a> 
                      </div>
                      <button type="button" class="btn btn-success" data-bs-dismiss="modal" >No</button>
                    </div>
                  </div>
                </div>
              </div>

            <?php
              }

            ?>
 
          </tbody>
        </table>

        <?php 
        //soft delete user
        if(isset($_GET['delid'])){
          $deleteID = $_GET['delid'];

          $delete_sql = "UPDATE users SET u_status=0 WHERE u_id='$deleteID'";
          $delete_sql_res = mysqli_query($db,$delete_sql);

          if($delete_sql_res){
            header("Location: index.php");
          }
          else{
            die("MySQL Error. " . mysqli_error($db));
          }
        }


        ?>

      </div>
    </div>
  </div>
</section>
<?php include "inc/footer.php"; ?>