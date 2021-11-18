<?php
	//	SESSÕES
	session_start();
    $_SESSION['situacao_trabalhista'] = "Em busca do primeiro emprego em desenvolvimento.";
	echo "Bem vindo ".$_SESSION['vnome'].".<br/>";
	echo "Hoje você tem ".$_SESSION['vidade']." anos, daqui a alguns dias terá 28 anos.<br/>";
    echo $_SESSION['situacao_trabalhista'];
?>

<html>
	<head>
		<title>Page 3</title>
	</head>
	<body>
		<h1>Página 3</h1>
		<a href="aula_19.php" target="_self" >Sair</a>
	</body>
</html>