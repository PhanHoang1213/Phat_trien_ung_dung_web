<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
    <h1>Search Flight</h1>
    <form action="" method="get" name="register">
        Origin <input type="text" name="origin"><br>
        Destination <input type="text" name="destination"> <br>
        <input type="submit" value="Search"> <br>
    </form>
</body>
<?php
if(isset($_GET['origin'])){
    $origin = $_GET['origin'];
    $destination = $_GET['destination'];
    require './connect.php';
    mysqli_set_charset($conn, 'UTF8');
    $sql = "SELECT * FROM flights WHERE origin = '$origin' and destination='$destination'";
    $result = $conn->query($sql);
    require './4-displayFlight.php';
    $conn->close();
}
?>
</html>