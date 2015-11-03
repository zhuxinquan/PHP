<meta charset="utf-8">
<?php
include("abstract_class_Person.php");
class chinese extends Person{
    function say(){
        echo $this->name." is ".$this->country." 人 "."讲汉语\n";
    }

    function eat(){
        echo $this->name."使用\n";
    }
}

class Americans extends Person{
    function say(){
        echo $this->name." is ".$this->country." 人 "."讲英语\n";
    }

    function eat(){
        echo $this->name." 用刀叉\n";
    }
}

$chineseMan = new chinese("zhu", "china");
$americans = new Americans("al", "Americans");

$chineseMan->say();
$chineseMan->eat();

$americans->say();
$americans->eat();
?>
