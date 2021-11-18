<?php
	//	PASSAR VALORES PELA URL
	
	$texto = "Aula 18 é:";
	$nome = "Bruce";
	echo "<a href=aula_18_pg1.php?tx=".urlencode($texto).
		"&no=".urlencode($nome).
		" target=_self>Abre aula_18_pg1</a>";
?>