<meta charset="utf-8">
<?php
class myclass{
    static $count;

    function __construct(){
        self::$count++;
    }

    static function getcount(){
        return self::$count;
    }
}

myclass::$count = 0;

$myc1 = new myclass();
$myc2 = new myclass();
$myc3 = new myclass();

echo myclass::getcount()."<br/>";
echo $myc3->getcount()."<br/>";
?>
