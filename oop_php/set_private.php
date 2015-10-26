<?php
class Person{
    private $name;
    private $sex;
    private $age;

    function __construct($name = "", $sex = "man", $age = 18){
        $this->name = $name;
        $this->age = $age;
        $this->sex = $sex;
    }

    function run(){
        echo $this->name."在走路时".$this->left()."再".$this->right()."\n";
    }

    private function left(){
        return "left";
    }

    private function right(){
        return "right";
    }
}

$person1 = new Person("zhangsan");
$person1->run();
$person1->name = "lisi";
echo $person1->age;
$person->left();
?>
