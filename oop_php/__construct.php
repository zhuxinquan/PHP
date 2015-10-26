<?php
class Person{
    var $name;
    var $sex;
    var $age;

    function __construct($name = "", $sex = "男", $age = 1){
        $this->name = $name;
        $this->sex = $sex;
        $this->age = $age;
    }

    function say(){
        echo "my name is :".$this->name." ,sex is :".$this->sex.", age is :".$this->age.".\n";
    }

    function run(){
        echo $this->$name."is run.\n";
    }
}

$person1 = new person("zhangsan", "男", 20);
$person2 = new person("lisi", "女");
$person3 = new person("wangwu");
$person4 = new person("zhaoliu");

$person1->say();
$person2->say();
$person3->say();
$person4->say();
?>
