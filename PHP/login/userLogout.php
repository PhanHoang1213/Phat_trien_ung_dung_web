<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    session_start();
    if (isset($_SESSION['userId'])) {
        unset($_SESSION['userId']);
    }
    ?>
    <a href="./userHome.php">Home</a>
</body>

</html>