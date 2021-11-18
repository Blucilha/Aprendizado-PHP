<?php
    declare(strict_types=1);

    $pdo = require 'connect.php';
    $sql = 'update produtos set descricao = ? where id = ?';

    try {
        $update = $pdo -> prepare($sql);
        $update -> bindParam(1, $_GET['descricao']);
        $update -> bindParam(2, $_GET['id']);
        $update -> execute();
    } catch (Exception $e) {
        echo $e -> getMessage();
        die();
    }

    echo $update -> rowCount();
