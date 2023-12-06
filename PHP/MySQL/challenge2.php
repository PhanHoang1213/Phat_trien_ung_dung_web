<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>

<body>
    <div style="max-width: 400px;margin: auto; overflow:hidden;" class="w3-card-4 w3-round w3-margin-top">
        <div class="w3-container w3-blue" bis_skin_checked="1">
            <h3>Search Flight</h3>
        </div>
        <form action="" method="get" class="w3-container">

            <br>
            <p>
                <label class="w3-text-grey">Toán</label>
                <select name="origin" id="" class="w3-input w3-border w3-round">
                    <?php
                    require './connect.php';
                    $sql = "SELECT DISTINCT origin FROM flights";
                    $result = $conn->query($sql);
                    while ($row = $result->fetch_assoc()) {
                        echo "
                            <option value=\"{$row['origin']}\">{$row['origin']}</option>
                        ";
                    }
                    $conn->close();
                    ?>
                </select>
            </p>
            <p>
                <label class="w3-text-grey">Lý</label>
                <select name="destination" id="" class="w3-input w3-border w3-round">
                    <?php
                    require './connect.php';
                    $sql = "SELECT DISTINCT destination FROM flights";
                    $result = $conn->query($sql);
                    while ($row = $result->fetch_assoc()) {
                        echo "
                            <option value=\"{$row['destination']}\">{$row['destination']}</option>
                        ";
                    }
                    $conn->close();
                    ?>
                </select>
            </p>
            <input type="submit" value="Submit" class="w3-btn w3-right w3-round w3-blue w3-margin-bottom">
        </form>
    </div>
    <?php
    if (isset($_GET['origin'])) {
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
</body>

</html>