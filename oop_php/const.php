<meta charset="utf-8">
<?php
class myclass{
    const CONSTANT = 'CONSTANT value';

    function showConstant(){
        echo self::CONSTANT."<br>";
    }

}
echo myclass::CONSTANT."<br>";
$class = new myclass();
$class->showConstant();
//echo $class.CONSTANT;         //出现警告，const不可使用对象属性进行访问
?>
