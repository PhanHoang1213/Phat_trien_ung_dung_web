<?php
$items = array('img1.png', 'img2.png');
echo "Nguyễn Văn Hoàng - 2121050421 <br>";
foreach ($items as $item) {
    echo "<img src = 'images/$item' width =150px height=150px alt='$item'>";
}
