<?php
declare(strict_types=1);
function validaNome(string $nome) : bool
{
    if (empty($nome)) {
        $_SESSION['mensagem-de-erro-nome'] = 'Informe um nome válido';
        return false;
    } else if (strlen($nome) < 3) {
        $_SESSION['mensagem-de-erro-nome'] = 'O nome deve ter pelo menos 3 caracteres';
       return false;
    } else if (strlen($nome) > 40) {
        $_SESSION['mensagem-de-erro-nome'] = 'O nome deve ter pelo máximo 40 caracteres';
        return false;
    }
    return true;
}

function validaIdade(string $idade) : bool

{
    if (!is_numeric($idade)) {
        $_SESSION['mensagem-de-erro-idade'] = 'Digite um numero';        
        return false;
    }
    return true;
}
