
<?php include "inc/db.php"  ?>
 <?php  
   if (isset($_GET['edit'])) {
   $id =$_GET['edit'];
  $query = "SELECT * FROM customer WHERE id=$id";                         
  $select_id = mysqli_query($db,$query);     
  while ($row = mysqli_fetch_assoc($select_id)) {
   $id = $row['id'];
   $fname = $row['first_name'];
   $lname = $row['last_name'];
   $town = $row['town_name'];
   $gender = $row['gender_name'];
       ?><?php }}?>  <?php 

     /////UPDATE QUERY

   if (isset($_POST['update'])) 
   	{$fname = $_POST['first_name'];
     $fname = $_POST['last_name'];
     $town = $_POST['town_name'];
     $gender = $_POST['gender_name'];
    $query ="UPDATE customer SET first_name='{$fname}',last_name='{$lname}',town_name='{$town}',gender_name='{$gender}' WHERE id={$id} ";
         $update_query = mysqli_query($db,$query);
         if ($update_query) {
          die("QUERY FAILED.mysqli_error($connection)");}   }
                ?>
