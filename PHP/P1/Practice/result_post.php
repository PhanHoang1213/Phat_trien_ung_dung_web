<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    Result Post: <br>
    Name: <?php
            echo $post_name = $_POST["name"];
            ?> <br>
    Email: <?php echo $post_email = $_POST["email"] ?>
</body>

</html>