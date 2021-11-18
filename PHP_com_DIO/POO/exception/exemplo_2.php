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
        'idade' => 27,
        'codigo' => 13
    ];

    $result = usuario($pessoa);

    PHP_EOL;

    echo "Executando...";