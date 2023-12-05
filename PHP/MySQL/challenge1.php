<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>

<body>

    <?php
    require "./connect.php";
    mysqli_set_charset($conn, 'UTF8');
    $sql = "SELECT * FROM flights";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo "<table class='table table-striped table-bordered' style='width:500px; margin:auto' >";
        echo "<tr>
                <th>ID</th>;
                <th>Origin</th>
                <th>Destination</th>
                <th>Duration</th>
            </tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["id"] . "</td><td>" . $row["origin"] . "</td><td>" . $row["destination"] . "</td><td>" . $row["duration"] . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "No flight in database";
    }
    $conn->close();
    ?>
</body>

</html>