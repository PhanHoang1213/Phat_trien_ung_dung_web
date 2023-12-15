<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <label for="">User Name:</label>
        <input type="text" name="txtUsername">
        <label for="">Password</label>
        <input type="password" name="txtPassword">
        <input type="submit" name="dangnhap" value="Login">
    </form>
    <?php
    require './2-login.php';    ?>
</body>

</html>