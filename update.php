<?php include "inc/header.php"; ?>
<section>
  <div class="container">
    <div class="row">
      <div class="col-lg-6 offset-3">

        <h1 class="mb-3">Update User Info</h1>

          <?php

            if(isset($_GET['id'])){
            $userID = $_GET['id'];

            $all_users_sql = "SELECT * FROM users WHERE u_id = '$userID'";
            $all_users_res = mysqli_query($db,$all_users_sql);
            $serial = 0;
              while ($row = mysqli_fetch_array($all_users_res)) {
               $u_id        = $row['u_id'];         
               $u_name      = $row['u_name'];
               $u_mail      = $row['u_mail'];
               $u_phone     = $row['u_phone'];
               $father_name = $row['father_name'];
               $mother_name = $row['mother_name'];
               $address     = $row['address'];
               $u_status    = $row['u_status'];
               ?>
              <form action="" method="POST" class="needs-validation" novalidate>

                <input type="hidden" name="updateUserID" value="<?php echo $u_id; ?>">
                    <div class="mb-3">
                      <label for="name">Full Name</label>
                      <input type="text" id="name" name="name" class="form-control" value="<?php echo $u_name; ?>" required>
                      <div class="invalid-feedback">
                        Please write a name.
                      </div>
                    </div>
                    <div class="mb-3">
                      <label for="email">Email</label>
                      <input type="text" id="email" name="email" class="form-control" value="<?php echo $u_mail; ?>" required>
                      <div class="invalid-feedback">
                        Please give an email.
                      </div>
                    </div>
                    <div class="mb-3">
                      <label for="phone">Phone</label>
                      <input type="number" id="phone" name="phone" class="form-control" value="<?php echo $u_phone; ?>" required>
                      <div class="invalid-feedback">
                        Please write phone number.
                      </div>
                    </div>
                    <div class="mb-3">
                      <label for="phone">Father Name</label>
                      <input type="text" id="father_name" name="father_name" class="form-control" value="<?php echo $father_name; ?>" required>
                      <div class="invalid-feedback">
                        Please write father name.
                      </div>
                    </div>
                    <div class="mb-3">
                      <label for="phone">Mother Name</label>
                      <input type="text" id="mother_name" name="mother_name" class="form-control" value="<?php echo $mother_name; ?>" required>
                      <div class="invalid-feedback">
                        Please write mother name.
                      </div>
                    </div>
                    <div class="mb-3">
                      <label for="phone">Address</label>
                      <input type="text" id="address" name="address" class="form-control" value="<?php echo $address; ?>" required>
                      <div class="invalid-feedback">
                        Please write address.
                      </div>
                    </div>
                    <div class="mb-3">
                      <label for="status">Acount Status</label>
                      <select class="form-control" name="u_status">
                        <option value="1">Please select user status</option>
                        <option value="1" <?php if ($u_status == 1){
                          echo 'selected'; } ?>>Active</option>
                        <option value="0" <?php if ($u_status == 0){
                          echo 'selected'; } ?>>Inactive</option>
                      </select>
                    </div>
                    <div class="my-4">
                      <input type="submit" name="dataUpdate" class="btn btn-primary" value="Update">
                    </div>
              </form>
               <?php

          if(isset($_POST['dataUpdate'])){
          $name        = mysqli_real_escape_string($db, $_POST['name']) ;
          $email       = mysqli_real_escape_string($db, $_POST['email']) ;
          $phone       = mysqli_real_escape_string($db, $_POST['phone']) ;
          $father_name = mysqli_real_escape_string($db, $_POST['father_name']) ;
          $mother_name = mysqli_real_escape_string($db, $_POST['mother_name']) ;
          $address     = mysqli_real_escape_string($db, $_POST['address']) ;
          $u_status    = mysqli_real_escape_string($db, $_POST['u_status']) ;

                $update_user_sql = "UPDATE users SET u_name='$name',  u_mail='$email',  u_phone='$phone', father_name='$father_name', mother_name='$mother_name', address='$address', u_status='$u_status'  WHERE u_id= '$userID'";
                $update_user_res = mysqli_query($db,$update_user_sql);

                if($update_user_res){
                    header("Location: index.php");
                  }
                  else{
                    die("MySQL Error. " . mysqli_error($db));
                  }

                     }

              }
            }
            ?>
      </div>
    </div>
  </div>
</section>
<?php include "inc/footer.php"; ?>