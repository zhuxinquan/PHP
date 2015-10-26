<?php
class Person{
    private $name;
    private $sex;
    private $age;

    function __construct($name = "", $sex = "man", $age = 1){
        $this->name = $name;
        $this->sex = $sex;
        $this->age = $age;
    }

    private function __set($propertyName, $propertyValue){
        if($propertyName == "sex"){
            if(!($propertyValue == "man" || $propertyValue == "woman")){
                return;
            }
        }
        if($propertyName == "age"){
            if($propertyValue > 150 || $propertyValue < 0){
                return;
            }
        }
        $this->$propertyName = $propertyValue;
    }

    public function say(){
        echo "my name is ".$this->name.", sex is ".$this->sex.",age is ".$this->age."\n";
    }
}

$person1 = new Person("zhangsan", "man", 20);
$person1->say();

$person1->name = "lisi";
$person1->sex = "woman";
$person1->age = 80;
$person1->say();

$person1->sex = "baomi";
$person1->age = 800;
$person1->say();
?>
