
 <?php
 if (isset($_GET['del'])) {
   $id = $_GET['del'];
   $query ="DELETE FROM customer WHERE id={$id}";
   $delete_query = mysqli_query($db,$query);
   $_SESSION['message'] = "customer Account is deleted!"; header("location:read.php");         
   }?>
