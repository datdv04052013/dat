<?php
$con = new mysqli('34.230.84.57', 'root', '', 'musicshop');

// Check connection
if (mysqli_connect_errno()) {
  echo "ket noi that bai " . mysqli_connect_error();
  exit();
}
?>
