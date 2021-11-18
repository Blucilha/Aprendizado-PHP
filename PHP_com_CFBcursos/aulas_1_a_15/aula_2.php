<?php
	//	Variáveis
	$nome="Blucilhã";
	$idade=27;
	$qtdEmpregos=5.5;
	$soma=0;
	
	echo "Nome: $nome.<br/>";
	$nome="Blucilhã do Nascimento Dias";
	echo "Nome completo: $nome.<br/>";
	echo "Nome: ".$nome."<br/>";
	
	$soma=10+20;
	echo "Soma é igual a $soma.<br/>";
	
	//	Constantes
	define("Animal", "cachorro");
	define("version", PHP_VERSION);
	define("diretorio", __DIR__);
	define("Sistema", PHP_OS);
	// 	Essa forma de imprimir é reservada para constantes
	echo "O meu pet é um ".Animal.".<br/>";
	echo __FILE__."<br/>";
	echo "Versão do PHP: ".version."<br/>";
	echo "Nome da pasta: ".diretorio."<br/>";
	echo "Versão do sistema: ".Sistema."<br/>";
?>