<?php
$conn = new mysqli("localhost","root","","skincare_db");
if($conn->connect_error){
  die("DB Error");
}
?>
