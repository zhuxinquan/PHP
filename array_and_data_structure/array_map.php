<?php
	$a = array(0, 1, 2, 3, 4, 5, 6, 7);
	$b = array(2, 3, 2, 3, 6, 7, 8, 7);
	function myFun($var, $var1){
		if($var == $var1){
			return "same";
		}else{
			return "different";
		}
	}

	print_r(array_map("myFun", $a, $b));
?>