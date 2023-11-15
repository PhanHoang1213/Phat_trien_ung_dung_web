<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $CNTT = 18;
    $CNTTCLC = 22;
    $KHDL = 18;
    $DC = 17;
    $MT = 15;
    $math = $_GET['math'];
    $physical = $_GET['physical'];
    $chemistry = $_GET['chemistry'];
    $total = $math + $physical + $chemistry;
    if ($total >= $CNTT) echo "Bạn đã trúng tuyển CNTT <br>";
    if ($total >= $CNTTCLC) echo "Bạn đã trúng tuyển CNTT CLC <br>";
    if ($total >= $KHDL) echo "Bạn đã trúng tuyển KHDL <br>";
    if ($total >= $DC) echo "Bạn đã trúng tuyển Địa chất <br>";
    if ($total >= $MT) echo "Bạn đã trúng tuyển Môi trường";
    ?>
</body>

</html>