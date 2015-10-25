<?php
$input = array("linux", "apache", "mysql", "php");
array_splice($input, -1, 1, array("web", "www", "123"));        //最后的元素将被传入的数组取代，多余的将连接在其后面
print_r($input);
?>
