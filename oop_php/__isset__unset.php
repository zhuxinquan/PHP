<?php
class Person{
    private $name;

    function __construct($name = ""){
        $this->name = $name;
    }

    private function __isset($propertyName){
        return isset($this->$propertyName);
    }

    private function __unset($propertyName){
        unset($this->$propertyName);
    }
    
    public function say(){
        echo "my name is ".$this->name."\n";
    }
}

$person1 = new Person("zhagsan");

var_dump(isset($person1->name));
unset($person1->name);
var_dump(isset($person1->name));
?>
