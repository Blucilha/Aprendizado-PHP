<?php

function setar_message_sucesso(string $message) : void
{
    unset($_SESSION['messagem_error']);
    $_SESSION['messagem_sucesso'] = $message;
}

function dar_categoria(string $nome, string $idade) : void
{
    $categorias = ['criança', 'adolescente', 'adulto', 'idoso'];

    if (verificar_idade($idade) && verificar_nome($nome)) {
        if ($idade < 12) {
            foreach($categorias as $categoria){
                if ($categoria === "criança") {
                    setar_message_sucesso($nome." está na categoria ".$categoria); 
                }
            }
            
        } else if ($idade >= 12 AND $idade < 18) {
            foreach($categorias as $categoria){
                if ($categoria === "adolescente") {
                    setar_message_sucesso($nome." está na categoria ".$categoria); 
                }
            }
            
        } else if ($idade >= 18 AND $idade < 60) {
            foreach($categorias as $categoria){
                if ($categoria === "adulto") {
                    setar_message_sucesso($nome." está na categoria ".$categoria); 
                }
            }
            
        } else {
            foreach($categorias as $categoria){
                if ($categoria === "idoso") {
                    setar_message_sucesso($nome." está na categoria ".$categoria); 
                }
            }
        }
    }
}