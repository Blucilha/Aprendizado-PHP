<?php
	//	SESSÕES
	session_start();
    if($_SESSION['vlog'] == 's') {

	echo "Bem vindo ".$_SESSION['vnome'].".<br/>";
	echo "Hoje você tem ".$_SESSION['vidade']." anos, daqui a alguns dias terá 28 anos.<br/>";
?>

<html>
	<head>
		<title>Page 2</title>
	</head>
	<body>
		<h1>Página 2</h1>
		<a href="aula_19_pg2.php" target="_self">Página 2</a>
	</body>
</html>

<?php
    } else {
        echo "Acesso indevido...";
    }
?>