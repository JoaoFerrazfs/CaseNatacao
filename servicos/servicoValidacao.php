<?php

function validaNome(string $nome) : bool{
    if (empty($nome)) {
        setarMensagemErro( "Informe um nome válido");
        return false;
    }

    if (strlen($nome) < 3) {
        setarMensagemErro("O nome deve ter pelo menos 3 caracteres");
       return false;
    }
    if (strlen($nome) > 40) {
       setarMensagemErro("O nome deve ter pelo máximo 40 caracteres");
        return false;
    }
    return true;
}

function validaIdade(string $idade) : bool

{
    if (!is_numeric($idade)) {
        setarMensagemErro("Digite um numero");        
        return false;
    }
    return true;
}
