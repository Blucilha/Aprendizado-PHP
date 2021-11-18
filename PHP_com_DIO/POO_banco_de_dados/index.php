<?php

    require 'Produto.php';

    $produto = new Produto();

    switch ($_GET['operacao']) {
        case 'lista':
            echo "<h3>Produtos</h3>";

            foreach ($produto -> listar() as $key) {
                echo "<hr/>ID: ". $key['id'] . "<br/>Descrição: " . $key['descricao'] ."<hr/>";
            }
            break;
        
        case 'insere':
            $status = $produto -> inserir("Deck de Mayakashi");

            if (!$status) {
                echo "Operação não realizada!";
                return false;
            }
            echo "Produto inserido com sucesso!";
            break;

        case 'atualiza':
            $status = $produto -> atualizar("Deck de machina", 2);

            if (!$status) {
                echo "Operação não realizada!";
                return false;
            }
            echo "Produto atualizado com sucesso!";
            break;

        case 'deleta':
            $status = $produto -> deletar(3);

            if (!$status) {
                echo "Operação não realizada!";
                return false;
            }
            echo "Produto deletado com sucesso!";
            break;
        default:
            echo "Operação não listada, favor escolha uma opção válida...";
            break;
    }