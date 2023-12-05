<?php
require "./connect.php";
mysqli_set_charset($conn, 'UTF8');
$sql = "SELECT * FROM flights";
$result = $conn->query($sql);
print_r($result);
$conn->close();