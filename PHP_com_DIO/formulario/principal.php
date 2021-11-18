<?php
session_start();
include "./services/mensagem_status.inc";
include "./services/validacao.inc";

$nome = $_POST['nome'];
$idade = $_POST['idade'];

dar_categoria($nome, $idade);

header("location: page.php");