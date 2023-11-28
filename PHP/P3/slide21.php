<?php
function display_img_list($imageList)
{
    echo "Nguyễn Văn Hoàng <br>";
    foreach ($imageList as $item) {
        echo "<img src = 'images/$item' width =150px height=150px alt='$item'>";
    }
}
$items = array('img1.png', 'img2.png');
display_img_list($items);
