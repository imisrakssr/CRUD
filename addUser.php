<?php include "inc/header.php"; ?>
<section>
  <div class="container">
    <div class="row">
      <div class="col-lg-6 offset-3">

        <h1 class="mb-3">Add New User</h1>

        <form action="" method="POST" class="needs-validation" novalidate>
          <div class="mb-3">
            <label for="name">Full Name</label>
            <input type="text" id="name" name="name" class="form-control" required>
            <div class="invalid-feedback">
              Please write a name.
            </div>
          </div>
          <div class="mb-3">
            <label for="email">Email</label>
            <input type="text" id="email" name="email" class="form-control" required>
            <div class="invalid-feedback">
              Please give an email.
            </div>
          </div>
          <div class="mb-3">
            <label for="phone">Phone</label>
            <input type="number" id="phone" name="phone" class="form-control" required>
            <div class="invalid-feedback">
              Please write phone number.
            </div>
          </div>
          <div class="mb-3">
            <label for="phone">Father Name</label>
            <input type="text" id="father_name" name="father_name" class="form-control" required>
            <div class="invalid-feedback">
              Please write father name.
            </div>
          </div>
          <div class="mb-3">
            <label for="phone">Mother Name</label>
            <input type="text" id="mother_name" name="mother_name" class="form-control" required>
            <div class="invalid-feedback">
              Please write mother name.
            </div>
          </div>
          <div class="mb-3">
            <label for="phone">Address</label>
            <input type="text" id="address" name="address" class="form-control" required>
            <div class="invalid-feedback">
              Please write address.
            </div>
          </div>
          <div class="mb-3">
            <label for="status">Acount Status</label>
            <select class="form-control" name="u_status">
              <option value="1">Please select user status</option>
              <option value="1">Active</option>
              <option value="0">Inactive</option>
            </select>
          </div>
          <div class="my-4">
            <input type="submit" name="dataSubmit" class="btn btn-primary" value="Submit">
          </div>
          </div>
          
          <?php
          if(isset($_POST['dataSubmit'])){
          $name        = mysqli_real_escape_string($db, $_POST['name']) ;
          $email       = mysqli_real_escape_string($db, $_POST['email']) ;
          $phone       = mysqli_real_escape_string($db, $_POST['phone']) ;
          $father_name = mysqli_real_escape_string($db, $_POST['father_name']) ;
          $mother_name = mysqli_real_escape_string($db, $_POST['mother_name']) ;
          $address     = mysqli_real_escape_string($db, $_POST['address']) ;
          $u_status    = mysqli_real_escape_string($db, $_POST['u_status']) ;

          $add_user_sql = "INSERT INTO users (u_name,  u_mail,  u_phone, join_date, father_name, mother_name, address, u_status) VALUES ('$name','$email','$phone',now(),'$father_name','$mother_name','$address','$u_status')";
          $add_user_res = mysqli_query($db,$add_user_sql);

          if($add_user_res){
            header("Location: index.php");
          }
          else{
            die("MySQL Error. " . mysqli_error($db));
          }
          
          }
          ?>
        </form>
      </div>
    </div>
  </div>
</section>
<?php include "inc/footer.php"; ?>