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
echo myclass::getcount()."<br/>";
myclass::$count = 0;
$myc2 = new myclass();
echo myclass::getcount()."<br/>";
myclass::$count = 5; 				//静态变量可多次复制，但退出函数时值不会销毁
$myc3 = new myclass();

echo myclass::getcount()."<br/>";
echo $myc3->getcount()."<br/>";
?>
