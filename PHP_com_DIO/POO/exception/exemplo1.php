<?php
    declare(strict_types=1);

    function usuario(array $infor) : bool
    {
        if (
            empty($infor['nome'])
            || empty($infor['codigo'])
            || empty($infor['idade'])
        ){
            return false;
        }
        return true;
    }

    $pessoa = [
        'nome' => 'Bruce',
        'idade' => 27,
        'codigo' => 13
    ];

    $result = usuario($pessoa);

    if (!$result) {
        echo 'Usuário inválido';
        return false;
    } else {
        echo 'Usuário válido';
    }

    PHP_EOL;

    echo "Executando...";