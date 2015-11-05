<meta charset="utf-8">
<?php
class Rect implements Shape{
    private $width;
    private $height;

        /*function __autoload($className){
            include("class_".ucfirst($className).".php");
        }*/

    function __construct($sides = ""){
        $this->width = $sides["width"];
        $this->height = $sides["height"];
    }

    function area(){
        return $this->width * $this->height;
    }

    function perimeter(){
        return 2 * ($this->width + $this->height);
    }
}
?>
