<?php include "inc/db.php"  ?>
<?php include "inc/delete.php" ; ?>
<div class="container">
<?php $results = mysqli_query($db, "SELECT * FROM customer"); ?>   
<table id="table" style="background-color:#151719;color:#556B2F; " class="table table-bordered table-hover"class="table table-striped" cellspacing="0" width="100%">
  <thead>
    <tr>
       <a class="btn btn"  type="submit" name="update" href="create.php" style="background: #556B2F;">create account</a>
    </tr>
    <tr>
      <th style="background: #151719;"  class="th-sm">id
      </th>
      <th style="background: #151719;"class="th-sm">firstName
      </th>
      <th style="background: #151719;" class="th-sm">lastName
      </th>
      <th style="background: #151719;" class="th-sm">city 
      </th>
      <th style="background: #151719;" class="th-sm">Gender
      </th>
    </tr>
  </thead>
  <?php while ($row = mysqli_fetch_array($results)) { ?>
    <tr>
      <td><?php echo $row['id']; ?></td>
      <td><?php echo $row['first_name']; ?></td>
      <td><?php echo $row['last_name']; ?></td>
      <td><?php echo $row['town_name']; ?></td>
       <td><?php echo $row['gender_name']; ?></td>
      <td>
        <a href="update.php?edit=<?php echo $row['id']; ?>" class="btn btn-info" >Edit</a>
      </td>
      <td>
        <a href="read.php?del=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
      </td>
    </tr>
  <?php } ?>
  
  <tfoot>
    <tr>
      <th  class="th-sm">id
      </th>
      <th class="th-sm">firstName
      </th>
      <th  class="th-sm">lastName
      </th>
      <th   class="th-sm">city 
      </th>
      <th class="th-sm">Gender
      </th>
    </tr>
  </tfoot>
</table>
  </div>

