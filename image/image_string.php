<?php
    $im = imagecreate(150, 150);
    $bg = imagecolorallocate($im, 255, 255, 255);
    $black = imagecolorallocate($im, 0, 0, 0);
    $string = "hello php";
    imagestring($im, 3, 28, 60,  $string, $black);
    imagestringup($im, 3, 50, 100,  $string, $black);
    for($i = 0, $j = strlen($string); $i < strlen($string); $i++, $j--){
        imagechar($im, 3, 10*($i + 1), 10*($i + 2), $string[$i], $black);
        imagecharup($im, 3, 10*($i + 1), 10*($j + 2), $string[$i], $black);   
    }
    header('content-type:image/png');
    imagepng($im);
    imagedestroy($im);
?>