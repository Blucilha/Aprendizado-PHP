<?php
    declare(strict_types=1);

    function usuario(array $infor) : bool
    {
        if (
            empty($infor['nome'])
            || empty($infor['codigo'])
            || empty($infor['idade'])
        ){
            throw new Exception("Usuário inválido!");
        }
        return true;
    }

    $pessoa = [
        'nome' => 'Bruce',
        'idade' => 0,
        'codigo' => 13
    ];

    try {
        $result = usuario($pessoa);
    } catch (Exception $e) {
        echo $e -> getMessage();
    } finally {
        echo "Status da operação: 0" . (int)$result . ".\n"; // cast
        die(); // equivale ao exit();
    }

    echo "\nExecutando...";