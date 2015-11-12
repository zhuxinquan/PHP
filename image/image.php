<?php
    $im = imagecreatetruecolor(100, 100);
    $red = imagecolorallocate($im, 255, 0, 0);
    $blue = imagecolorallocate($im, 0, 255, 255);
    imagefill($im, 20 , 20, $red);
    //imagesetpixel($im, 25, 25, $blue);
    imageline($im, 25, 25, 50, 50, $blue);
    imagefilledellipse($im, 50, 50, 30, 60, $blue);
    imagearc($im, 75, 75, 30, 20,  360-45,45, $blue);
    header('Content-type:image/png');
    imagepng($im);
    imagedestroy($im);
?>