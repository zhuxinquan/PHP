<meta charset="utf-8">
<?php
function __autoload($className){
    include("class_".ucfirst($className).".php");
}

$person_string = file_get_contents("file.txt");
$person = unserialize($person_string;
$person->say();
?>
