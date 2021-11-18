<?php
	//	LAÇO WHILE
	$conta = 0;
	$tam = 10;
	$arr = array();
	
	while($conta < $tam) {
		array_push($arr, $conta);
		print "Number $arr[$conta]<br/>";
		$conta += 1;
	}
	
?>
