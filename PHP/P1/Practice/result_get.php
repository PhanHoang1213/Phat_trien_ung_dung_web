<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    Result Get: <br>
    Name: <?php
            echo $get_name = $_GET["name"];
            ?> <br>
    Email: <?php echo $get_email = $_GET["email"] ?> <br>
</body>

</html>