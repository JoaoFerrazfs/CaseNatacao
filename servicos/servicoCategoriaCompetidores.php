<?php

function defineCategoriaCompetidor(string $nome, string $idade) : ?string
{

    $categorias = [];
    $categorias[] = 'Infantil';
    $categorias[] = 'Adolecentes';
    $categorias[] = 'Adultos';
    $categorias[] = 'Idosos';


    if(validaNome($nome)&& validaIdade($idade)){
        removerMensagemErro();

        if ($idade <= 6 && $idade <= 12) {
            for ($i = 0; $i <= 3; $i++) {
                
               setarMensagemSucesso("O nadador " . $nome . " compete na categoria Infantil");            
               return null;
                
            }
        } else if ($idade >= 12 && $idade < 18) {
            for ($i = 0; $i <= 3; $i++) {
               setarMensagemSucesso("O nadador " . $nome . " compete na categoria Adolecente");           
               return null;
            }
        } else {
            for ($i = 0; $i <= 3; $i++) {
               setarMensagemSucesso("O nadador " . $nome . " compete na categoria Adulto") ;            
                return null;
            }
        }
    }
    else
    {
        removerMensagemSucesso();
        return obterMensagemErro();
    }
}
