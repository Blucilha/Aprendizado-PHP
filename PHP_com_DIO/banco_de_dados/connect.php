<?php
    // CONEXÃO DO BANCO DE DADOS

    $dsn = 'mysql:dbname=teste_db;host=localhost';
    $user = 'root';
    $password = '12345678';

    $pdo = null;

    try {
        $pdo = new PDO($dsn, $user, $password);
    } catch (Exception $e) {
        $e -> getMessage();
        die();
    }

    return $pdo;
