<?php
$con = new mysqli('54.158.22.38', 'ec2-user', '123@123a', 'musicshop');

// Check connection
if (mysqli_connect_errno()) {
  echo "ket noi that bai " . mysqli_connect_error();
  exit();
}
?>
