<?php
$con = new mysqli('34.200.32.20', 'musicshop_user'@'%', '123@123a', 'musicshop');

// Check connection
if (mysqli_connect_errno()) {
  echo "ket noi that bai " . mysqli_connect_error();
  exit();
}
?>