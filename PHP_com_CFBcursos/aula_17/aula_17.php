<?php
	//	ISSET
	/*
		SERVE PARA INDICAR SE UMA VARIÁVEL EXISTE, PREENCHIDA, USADA, ETC.
		RETORNA UM BOOLEANO.
	*/
	
	$valor = null;
	if (isset($valor)) {
		echo 'Variavel não nula.';
	} else {
		echo 'Variavel nula.<hr/>';
	}
	
		if (isset($aula)) {
		echo 'Variavel não nula.';
	} else {
		echo 'Variavel nula.<hr/>';
	}
	
	$teste = 0;
	
	if (isset($teste)) {
		echo 'Variavel não nula.<hr/>';
	} else {
		echo 'Variavel nula.<hr/>';
	}
	
	if(isset($_POST['nome'])) {
		echo "Input nome está presente.";
	} else {
		echo "Input nome não está definido.";
	}
	
?>