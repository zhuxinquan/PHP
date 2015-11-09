<?php
	$str = "lamp";
	$number = 789;

	printf("%s book . page is %u <br>", $str, $number);
	printf("%0.3f <br>", $number);
	$format = "the %2\$s book contains %1\$d pages.that's a nice %2\$s full of %1\$d pages<br>";
	printf( $format, $number, $str);
?>