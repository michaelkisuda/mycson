
<?php include "inc/db.php"  ?>
<script >
  function validateForm() {
  var firstname =  document.getElementById('firstname').value;
   var fieldLength = document.getElementById('firstname').value.length;
  if (firstname == "" ){
      document.querySelector('.status').innerHTML = "FirstName cannot be empty";
      return false;
  } else if (fieldLength <= 3) {
     return false;


  }
   else
    {
        var str = document.getElementById('firstname').value;
        str = str.substring(0, str.length - 1);
        document.getElementById('firstname').value = str;
    }

      
  var lastname =  document.getElementById('lastname').value;
  if (lastname == "") {
      document.querySelector('.status').innerHTML = "LastName cannot be empty";
      return false;
  }
  var city=  document.getElementById('city').value;
  if (city == "") {
      document.querySelector('.status').innerHTML = "city cannot be empty";
      return false;
  }
  document.querySelector('.status').innerHTML = "Sent...";
}
 </script>



