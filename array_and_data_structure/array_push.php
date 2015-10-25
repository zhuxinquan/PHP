<?php
$lamp = array("web");
echo array_push($lamp, "linux");
print_r($lamp);

echo array_push($lamp,"apache", "mysql", "php");
print_r($lamp);

$lamp = array("a"=>"linux", "b"=>"apache");
echo array_push($lamp, "mysql", "php");
print_r($lamp);

$lamp["web"] = "www";
print_r($lamp);

array_push($lamp, "hello");
print_r($lamp);
?>
