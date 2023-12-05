<?php
require './connect.php';
$sql = "INSERT INTO flights (origin, destination, duration) VALUES ('Hà Nội', 'Paris','4000')";
if ($conn->query($sql)===TRUE){
    echo "New flight created successfully";
} else{
    echo "Error: ".$sql."<br>".$conn->error;
}
$conn->close();