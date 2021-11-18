<?php
    declare(strict_types=1);

    $pdo = require 'connect.php';
    $sql = 'delete from produtos where id = ?';

    try{
        $insert = $pdo -> prepare($sql);
        $insert -> bindParam(1, $_GET['id']);
        $insert -> execute();
    } catch (Exception $e) {
        echo $e -> getMessage();
        die();
    }

    echo $insert -> rowCount();
