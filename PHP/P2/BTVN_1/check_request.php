<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $gender = $_GET["gender"];
    $height = $_GET["height"];
    $weight = $_GET["weight"];
    if ($gender == "male") {
        if ($height > 1.6 && $weight > 50) {
            echo "Đạt yêu cầu vào công ty";
        } else {
            echo "KHông đạt yêu cầu vào công ty";
        }
    } else {
        if ($height > 1.5 && $weight > 40 && $weight < 70) {
            echo "Đạt yêu cầu vào công ty";
        } else {
            echo "Không đạt yêu cầu vào công ty";
        }
    }
    ?>
</body>

</html>