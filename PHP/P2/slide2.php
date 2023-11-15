<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $T = True;
    $F = False;
    echo "T = $T <br>";
    echo "F = $F <br>";
    $check1 = 10 > 5;
    $check2 = 20 < 10;
    $check3 = $check1 && $check2;
    $check4 = $check1 || $check2;
    echo "check1 = $check1 <br>";
    echo "check2 = $check2 <br>";
    echo "check3 = $check3 <br>";
    echo "check4 = $check4";
    ?>
</body>

</html>