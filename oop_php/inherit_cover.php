<meta charset="utf-8">
<?php
class person {
    protected $name;
    protected $sex;
    protected $age;

    function __construct($name = "", $sex = "男", $age = 18){
        $this->name = $name;
        $this->sex = $sex;
        $this->age = $age;
    }

    function say(){
        echo "my name is :".$this->name.", sex is :".$this->sex.", age is :".$this->age.".<br>";
    }
}

class student extends person{
    private $school;

    function __construct($name = "", $sex = "男", $age = 18, $school = ""){
        parent::__construct($name, $sex, $age);
        $this->school = $school;
    }

    function study(){
        echo $this->name."in ".$this->school."study<br>";
    }

    function say(){
        parent::say();
        echo "in ".$this->school." school study<br>";
    }
}

$student = new student("zhangsan","男", 20, "edu");
$student->say();
?>
