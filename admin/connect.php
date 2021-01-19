<?php
$con = new mysqli('34.200.32.20', 'datdv', '', 'musicshop');

// Check connection
if (mysqli_connect_errno()) {
  echo "ket noi that bai " . mysqli_connect_error();
  exit();
}
?>