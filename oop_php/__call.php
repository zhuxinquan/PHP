<meta charset="utf-8">
<?php
class TestClass{
    function printHello(){
        echo "hello<br>";
    }

    function __call($functionName, $args){
        echo "你所调用的方法".$functionName."(参数：";
        print_r($args);
        echo ")不存在！<br>\n";
    }
}

$obj = new TestClass();
$obj->myfun("one", 2, "three");
$obj->otherfun(8, 9);
$obj->printHello();
?>
