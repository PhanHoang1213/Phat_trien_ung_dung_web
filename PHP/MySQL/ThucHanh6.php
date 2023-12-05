<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <title>Document</title>
    </head>

    <body>
        <div style="max-width: 500px;margin: auto; overflow:hidden;" class="w3-card-4 w3-round w3-margin-top">
            <div class="w3-container w3-blue" bis_skin_checked="1">
                <h2>Add New Flight</h2>
            </div>
            <form action="" method="get" class="w3-container">
                <br>
                <p>
                    <label class="w3-text-grey">Origin</label>
                    <input name="origin" class="w3-input w3-border w3-round" type="text" required="" autofocus>
                </p>
                <p>
                    <label class="w3-text-grey">Destination</label>
                    <input name="destination" class="w3-input w3-border w3-round" type="text" required="">
                </p>
                <p>
                    <label class="w3-text-grey">Duration</label>
                    <input name="duration" class="w3-input w3-border w3-round" type="number">
                </p>

                <input type="submit" value="Submit" class="w3-btn w3-right w3-round w3-blue w3-margin-bottom">
            </form>
        </div>
        <?php
        if (isset($_GET['origin']) && isset($_GET['destination'])) {
            $origin = $_GET['origin'];
            $destination = $_GET['destination'];
            $duration = $_GET['duration'];
            require './connect.php';
            $sql = "INSERT INTO flights (origin, destination, duration) VALUES ('$origin', '$destination', $duration)";
            if ($conn->query($sql) === TRUE) {
                echo "<h3 style='text-align:center;'>New flight created successfully</h3>";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            $conn->close();
        }
        ?>
    </body>

    </html>
</body>

</html>