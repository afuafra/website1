<form method="post">
  <input type="text" Username="afu">
  <input type="text" Password="1234">
  //The Name Attribute will be put into the _GET inside of php 
  <input type="submit" value="Submit">
 </form>
  
<?php
$var = $_GET("someName");
echo ($var);
?>