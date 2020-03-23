    <?php include "inc/db.php"  ?>
    <?php session_start();?>
    <?php 
    // initialize variables
     $update = true;
    ?>
    <div class="container">
  <div class="col-xs-12">
    <div class="text-center"><h3>EDIT CUSTOMER ACCOUNT</h3></div>
    <form action="read.php" method="post"  >

      <div class="form-group">
        <label for="id"> ID</label>
        <input type="text" class="form-control" name="id" value="<?php if(isset($id)) echo $id ?>">
      </div>

      <div class="form-group">
        <label for="username">FIRSTNAME</label>
        <input type="text" class="form-control" name="firstname" value="<?php if(isset($fname)) echo $fname; ?>">
      </div>


      <div class="form-group">
        <label for="username">LASTNAME</label>
        <input type="text" class="form-control" name="lastname" value="<?php if(isset($lname)) echo $lname; ?>">
      </div>


      <div class="form-group">
        <label for="username">GENDER</label>

        <input type="text"  class="form-control" name="gender" id="gender"  value="<?php if(isset($gender)) echo $gender; ?>">
        
    </div>
       
      <div class="form-group">
        <label for="username">TOWN</label>
        <input type="text" class="form-control" name="city" value="<?php if(isset($town))echo $town; ?>">
      </div>

<?php if ($update == true): ?>
  <button class="btn" type="submit" name="update" value="update" style="background: #556B2F;" >update</button>
<?php else: ?>
  <button class="btn" type="submit" name="save" >Save</button>
<?php endif ?>
    
    </form >
        </div>
     </div>


