<meta charset="utf-8">
<?php
class Person{
    private $name;
    private $sex;
    private $age;

    function __construct($name = "", $sex = "", $age = ""){
        $this->name = $name;
        $this->sex = $sex;
        $this->age = $age;
    }

    function say(){
        echo "my name is :".$this->name."sex is : ".$this->sex."age is : ".$this->age."<br>";
    }
}
?>
