<?php
	//	Arrays ou vetores
	
	$arr = array(3);
	
	$arr[0] = "Bruce";
	$arr[1] = "Nascimento";
	$arr[2] = "Dias";
	
	echo "$arr[2]<br/>";
	
	//	Array com índice
	
	$who = array('nome' => 'Bruce', 'meio' => 'Nascimento', 'final' => 'Dias');
	echo 'Nome completo: '.$who['nome'].' '.$who['meio'].' '.$who['final'].'<br/>';
	
	//	Tabela ou matriz
	
	$mat = array(
		array('Bruce', 27),
		array('Morga', 27)
	);
	
	echo $mat[0][0].' gosta de '.$mat[1][0].'<br/>';
?>