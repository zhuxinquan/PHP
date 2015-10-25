<?php
$lamp = array("a"=>"linux", "b"=>"apache");

function myfun2($value, $key, $p){
    echo "$key $p $value\n";
}

array_walk($lamp, "myfun2", "has the value");

function myfun(&$value, $key){
    $value = "web";
}

array_walk($lamp, "myfun");
print_r($lamp);
?>
