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
        echo "my name is : ".$this->name.","." sex is : ".$this->sex.","." age is : ".$this->age."\n";
    }

    function __sleep(){
        $arr = array("age");
        return ($arr);
    }

    function __wakeup(){
        $this->sex = 'nan';
        $this->age = 10;
    }
}
$person1 = new Person("zhangsan", "nan", 20);
$person_string = serialize($person1);
echo $person_string."\n";

$person2 = unserialize($person_string);
$person2->say();

?>
