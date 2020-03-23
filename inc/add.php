
 <?php 
  // initialize variables
  $firstname = "";
  $lastname = "";
  $gender = "";
  $city = "";
  $id = 0;
  $update = false;
  if (isset($_POST['create'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $gender = $_POST['gender'];
    $city = $_POST['city'];
    mysqli_query($db, "INSERT INTO customer (first_name,last_name,town_name,gender_name) VALUES ('$firstname', '$lastname','$city',$gender)"); 
    $_SESSION['message'] = "customer account saved"; 
    header('location: read.php');mysqli_query($db, "INSERT INTO customer (first_name,last_name,town_name,gender_name) VALUES ('$firstname', '$lastname','$city','$gender')"); 
    $_SESSION['message'] = "customer account saved"; 
    header('location: create.php');
  } ?>
  <?php if (isset($_SESSION['message'])): ?>
  <div class="msg">
    <?php 
      echo $_SESSION['message']; 
      unset($_SESSION['message']);?>
  </div>
<?php endif ?>
   
    <div class="container">
    <div class="col-xs-12">
  	 <div class="text-center"><h3>CUSTOMER REGISTRATION FORM</h3></div>
  	 <form action="" method="post" POST="create.php">
      <div class="form-group">
        <label for="username">FIRSTNAME</label>
        <input type="text" class="form-control" name="firstname" id="firstname"></div>
      <div class="form-group">
        <label for="username">LASTNAME</label>
        <input type="text" class="form-control" name="lastname" id="lastname">
      </div>
      <div class="form-group">
        <label for="username">GENDER</label>
        <select class="form-control" name="gender" id="gender" >
        <option></option>
        <option>male</option>
        <option>female</option>
      </select>
      </div>
       
      <div class="form-group">
        <label for="username">TOWN</label>
        <input type="text" class="form-control" name="city" id="city">
      </div>
  		 <input class="btn btn-primary"  onclick="validateForm();" type="submit" name="create" value="
       CREATE" >
  		</form >
        </div>
        <div class="status"></div>
      </div>
      <?php include "inc/validation.php"  ?>