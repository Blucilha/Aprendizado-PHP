<?php
	//	FUNÇÕES
	function aula () {
		echo "Olá mundo<br/>";
		echo "<hr/>Testando função<hr/>";
	}
	
	aula();
	
	function soma ($n1, $n2) {
		$res = $n1 + $n2;
		echo "A soma de $n1 e $n2 é igual a $res<hr/>";
	}
	
	soma(3, 10);
	
		function soma2 ($n1, $n2) {
		$res = $n1 + $n2;
		return $res;
	}
	
	define("res", soma2(10,2));
	echo "O resultado da soma2 é ".res."<hr/>";
	
	$valores = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 100];
	
	function somatorio($acc, $cur) {
		$acc += $cur;
		return $acc;
	}
	
	$result = array_reduce($valores, "somatorio", 0);
	echo "Media " .$result/count($valores)."<hr/>";
?>
