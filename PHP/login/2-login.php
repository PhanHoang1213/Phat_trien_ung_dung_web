<?php
header('Content-Type: text/html; charset=UTF-8');
if (isset($_POST['dangnhap'])) {
    require './connect.php';
    $userId = $_POST['txtUsername'];
    $password = $_POST['txtPassword'];
    $sql = "SELECT userId, password FROM users WHERE userId = '$userId'";
    $result = $conn->query($sql);
    if ($result->num_rows == 0) {
        echo "Tên đăng nhập không tồn tại. Vui lòng kiểm tra lại. <a href='javascript:history.go(-1)'>Trở lại</a>";
        exit;
    }
    $row = $result->fetch_assoc();
    if ($password != $row['password']) {
        echo "Mật khẩu không đúng. Vui lòng nhập lại. <a href='javascript:history.go(-1)'>Trở lại</a>";
        exit;
    }
    session_start();
    $_SESSION['userId'] = $userId;
    echo "Xin chào " . $userId . ". Bạn đã đăng nhập thành công. <a href='userHome.php'>Về trang chủ</a>";
}
