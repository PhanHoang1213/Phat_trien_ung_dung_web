<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $math = $_GET['math'];
    $physical = $_GET['physical'];
    $chemistry = $_GET['chemistry'];
    $english = $_GET['english'];
    $literature = $_GET['literature'];
    $history = $_GET['history'];
    $points = array($math, $physical, $chemistry, $english, $literature, $history);
    $score = array_sum($points) / count($points);
    if ($score < 5) {
        $rating = "Học sinh yếu";
    } else if ($score >= 5 && $score < 6.5) {
        $rating = "Học sinh trung bình";
    } else if ($score >= 6.5 && $score < 8) {
        $rating = "Học sinh khá";
    } else {
        $rating = "Học sinh giỏi";
    }
    foreach ($points as $point) {
        if ($point < 4) {
            $rating = "Học sinh yếu";
        }
        break;
    }
    echo $rating;
    ?>
</body>

</html>