<?php
class person{
    var $name;

    function __construct($name){
        $this->name = $name;
    }

    function __destruct(){
        echo "bye  ".$this->name."\n";
    }
}

$person1 = new person("zhangsan");
$person1 = NULL;
$person2 = new person("lisi");
$person3 = new person("wangwu");
?>
