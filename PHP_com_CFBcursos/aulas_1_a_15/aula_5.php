<?php
	//	IF ELSE
	$nota1 = 50;
	if($nota1 >= 70) {
		echo 'Aluno aprovado!<hr/><br/>';
	} else if($nota1 >= 50) {
		echo 'Aluno em recuperação!<hr/><br/>';
	}
	else {
		echo 'Aluno reprovado!<hr/><br/>';
	}
	
	if (($nota1 >= 40)&&($nota1 <= 60)) {
		echo 'Aluno na faixa de corte!<br/>';
	} else {
		echo 'Aluno fora da faixa de corte!<br/>';
	}
?>