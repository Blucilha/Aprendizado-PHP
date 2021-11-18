<?php
	//	LAÇO FOR
	$tamanho = 10;
	$arr = array($tamanho);
	
	for ($i = 0; $i < $tamanho; $i++) {
		echo "Indice: $i<br/>";
	}
	
	echo "<br/>------------------------------------<br/>";
	
	for ($i = 0; $i < $tamanho; $i++) {
		$arr[$i] = $i + 1;
	}
	
	for ($i = 0; $i < $tamanho; $i++) {
		echo "Valor da posição $i: $arr[$i]<br/>";
	}
?>
