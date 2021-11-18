<?php
	//	FUNÇÕES RECURSIVAS
	
	function somatorio($valor) {
		if ($valor == 0) {
			return 0;
		}
		
		return $valor + somatorio($valor - 1);
	}
	
	$soma = somatorio(5);
	
	echo "Somatorio é: $soma";
?>