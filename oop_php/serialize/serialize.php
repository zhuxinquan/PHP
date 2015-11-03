<meta charset="utf-8">
<?php
function __autoload($className){
    include("class_".ucfirst($className).".php");
}
//require "class_Person.php";
$person = new Person("zhangsan", "nan", 20);
$person_string = serialize($person);
file_put_contents("file.txt", $person_string);
?>
