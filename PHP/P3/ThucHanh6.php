<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="get">
        <p>first Number:</p>
        <input type="number" name="firstNumber"> <br>
        <p>Second Number:</p>
        <input type="number" name=secondNumber> <br>
        <p></p>
        <input type="submit" name="plus" value="+">
        <input type="submit" name="minus" value="-">
        <input type="submit" name="multipl" value="*">
        <input type="submit" name="divide" value="/">
    </form>
    <?php
    if (isset($_GET['plus'])) {
        $result = $_GET['firstNumber'] + $_GET['secondNumber'];
        echo $result;
    } elseif (isset($_GET['minus'])) {
        $result = $_GET['firstNumber'] - $_GET['secondNumber'];
        echo $result
    } elseif (isset($_GET['multiply'])) {
        $result = $_GET['firstNumber'] * $_GET['secondNumber'];
        echo $resul;
    } elseif (isset($_GET['divde'])) {
        $result = $_GET['firstNuber'] / $_GET['secondNumber'];
        echo $result;
    }
    ?>
</body>

</html>