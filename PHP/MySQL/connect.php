<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "mydb";

$conn = new mysqli($servername, $username, $password, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "<h4 style='text-align:center;'>Connected successfully</h4>";
