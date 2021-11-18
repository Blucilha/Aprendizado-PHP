<?php
	//	SESSÕES
	session_start();
	$_SESSION['vnome'] = 'Bruce';
	$_SESSION['vidade'] = 27;
	$_SESSION['vlog'] = 's';

	if (isset($_SESSION['situacao_trabalhista'])) {
		echo $_SESSION['situacao_trabalhista'];
	}
?>

<html>
	<head>
		<title>Page 1</title>
	</head>
	<body>
		<h1>Página 1</h1>
		<a href="aula_19_pg1.php" target="_self">Página 2</a>
	</body>
</html>