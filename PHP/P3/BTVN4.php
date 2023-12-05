<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Document</title>
</head>

<body>
    <div style="max-width: 500px;margin: auto; overflow:hidden;" class="w3-card-4 w3-round w3-margin-top">
        <div class="w3-container w3-blue" bis_skin_checked="1">
            <h2>Nhập điểm</h2>
        </div>
        <form action="" method="get" class="w3-container">
            <br>
            <p>
                <label class="w3-text-grey">Toán</label>
                <input name="math" class="w3-input w3-border w3-round" type="number" step="any" required="" autofocus>
            </p>
            <p>
                <label class="w3-text-grey">Lý</label>
                <input name="physical" class="w3-input w3-border w3-round" type="number" step="any" required="">
            </p>
            <p>
                <label class="w3-text-grey">Hoá</label>
                <input name="chemistry" class="w3-input w3-border w3-round" type="number" step="any" required="">
            </p>
            <p>
                <label class="w3-text-grey">Tiếng anh</label>
                <input name="english" class="w3-input w3-border w3-round" type="number" step="any" required="">
            </p>
            <p>
                <label class="w3-text-grey">Văn</label>
                <input name="literature" class="w3-input w3-border w3-round" type="number" step="any" required="">
            </p>
            <p>
                <label class="w3-text-grey">Sử</label>
                <input name="history" class="w3-input w3-border w3-round" type="number" step="any" required="">
            </p>
            <input type="submit" value="Submit" class="w3-btn w3-right w3-round w3-blue w3-margin-bottom">
        </form>
    </div>
    <?php
    function point($points){
        $score = round( array_sum($points) / count($points),2);
        return $score;
    }
    $math = $_GET['math'];
    $physical = $_GET['physical'];
    $chemistry = $_GET['chemistry'];
    $english = $_GET['english'];
    $literature = $_GET['literature'];
    $history = $_GET['history'];
    $points = array($math, $physical, $chemistry, $english, $literature, $history);
    $score = point($points);
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
    echo "<h2 style=\"text-align: center;\">$score-$rating</h2>";
    ?>
</body>

</html>