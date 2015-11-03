<meta charset="utf-8">
<?php
abstract class Person{
    protected $name;
    protected $country;

    function __construct($name = "", $country = "china"){
        $this->name = $name;
        $this->country = $country;
    }

    abstract function say();

    abstract function eat();

    function run(){
        echo "使用两条腿走路\n";
    }
}
?>
