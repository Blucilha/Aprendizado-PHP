<?php

    declare(strict_types=1);

    $pdo = require 'connect.php';
    $sql = 'select id, descricao from produtos';

    echo "<h3>Lista de produtos</h3>";

    foreach($pdo -> query($sql) as $key) {
        echo $key['id'] . ". " . $key['descricao'] . "<br/>";
    }