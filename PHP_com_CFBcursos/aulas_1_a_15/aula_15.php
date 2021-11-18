<?php
	//	FUNÇÃO DATA E HORA
	
	$dia = date('d');
	$mes = date('m');
	$ano = date('Y');
	
	$data = date('d/m/Y');
	echo $data.'<hr/>';
	
	$hora = date('H : i : s');
	
	echo $dia.'/'.$mes.'/'.$ano.' - '.$hora;
?>