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
            <h3>Đăng ký chuyến bay</h3>
        </div>
        <form action="" method="get" class="w3-container">

            <br>
            <p>
                <label class="w3-text-grey">Họ tên</label>
                <input name="name" class="w3-input w3-border w3-round" type="text" required="" autofocus>
            </p>
            <p>
                <label class="w3-text-grey">Flight ID</label>
                <select name="flight_id" id="" class="w3-input w3-border w3-round">
                    <?php
                    require './connect.php';
                    $sql = "SELECT id FROM flights";
                    $result = $conn->query($sql);
                    while ($row = $result->fetch_assoc()) {
                        echo "
                            <option value=\"{$row['id']}\">{$row['id']}</option>
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
    if (isset($_GET['name'])) {
        $name = $_GET['name'];
        $flightID = $_GET['flight_id'];
        require './connect.php';
        $sql = "INSERT INTO passengers (name,flight_id) VALUES ('{$name}', {$flightID})";
        $conn->query($sql);
        if ($conn->query($sql) === TRUE) {
            echo "<h3 style='text-align:center'>Đăng ký thành công</h3>";
        } else {
            echo "<p style='color: red;'>Error: " . $conn->error . "</p>";
        }
        $conn->close();
    }
    ?>
</body>

</html>