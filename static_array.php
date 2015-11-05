<?php
	function f1(){
		static $a = array(1,2,3);
		print_r($a);
		echo "<br/>";
		static $a = array(); 		//静态变量会在整个执行过程中最先初始化后再执行其他的代码（也包括初始化前的代码）
		static $a = array(4,5,6);
		print_r($a);
	}

	function f2(){
		static $a = array(7,8,9);
		print_r($a);
		static $a = array();
		$a[] = 1; 			//默认初始化数组索引值下标递增不用制定索引值
		$a[] = 2;
		$a[] = 3;
		print_r($a);
	}

	f1();
	f2();
	echo "<br/>";
	f1();
?>