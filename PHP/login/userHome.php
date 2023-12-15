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
        echo 'Bạn đã đăng ký với tên là ' . $_SESSION['userId'] . "<br>";
        echo "Click vào đây để <a href='userLogout.php'>Logout</a>";
    }
    ?>
    <ul>
        <li>
            <div>MENU</div>
        </li>
        <?php
            if(!isset($_SESSION['userId'])){
                echo "<li><a href='./loginForm.php'>Đăng nhập</a></li>";
            }
        ?>
        <li><a href="">Xem chuyến bay</a></li>
        <li><a href="">Mua vé</a></li>
        <li><a href="">Thêm chuyến bay</a></li>
    </ul>
</body>

</html>