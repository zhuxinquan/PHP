<meta charset="utf-8">
<?php
/*function __autoload($className){
    include("class_".ucfirst($className).".php");
}*/
class Circle implements Shape{
    private $radius;

    function __construct($sides = ""){
        $this->radius = $sides["radius"];
    }

    function area(){
        return pi() * $this->radius * $this->radius;
    }

    function perimeter(){
        return 2 * pi() * $this->radius;
    }
}
?>
