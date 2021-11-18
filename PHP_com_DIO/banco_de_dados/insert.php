<?php
    declare(strict_types=1);

    $pdo = require 'connect.php';
    $sql = 'insert into produtos(descricao) values(?)';

    try{
        $insert = $pdo -> prepare($sql);
        $insert -> bindParam(1, $_GET['descricao']);
        $insert -> execute();
    } catch (Exception $e) {
        echo $e -> getMessage();
        die();
    }

    echo $insert -> rowCount();
