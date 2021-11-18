<?php

function setar_message_error(string $message) : void
{
    unset($_SESSION['messagem_sucesso']);
    $_SESSION["messagem_error"] = $message;
}

function verificar_nome(string $nome) : bool
{
    if (!is_string($nome)) {
        setar_message_error("O nome deve ser letras.");
        return false;
    } else if (strlen($nome) < 5) {
        setar_message_error("Nome deve ter no mínimo 4 caracteres");
        return false;
    } else if (strlen($nome) > 31) {
        setar_message_error("Nome deve ter no máximo 30 caracteres");
        return false;
    } else if (empty($nome)) {
        setar_message_error("Nome não pode ser vazio");
        return false;
    }
    return true;
}

function verificar_idade(string $idade) : bool
{   
    if (!is_numeric($idade)) {
        setar_message_error("Idade deve ser número.");
        return false;
    }
    else if ($idade > 140) {
        setar_message_error("Idade maior do que a espectativa de vida.");
        return false;
    } else if (empty($idade)) {
        setar_message_error("Idade não pode ser vazio");
        return false;
    } else if ($idade <= 0) {
        setar_message_error("Idade deve ser maior do que zero.");
        return false;
    }
    return true;
}