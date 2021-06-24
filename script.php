
<?php

session_start();
$categorias = [];

$categorias[] ='Infantil';
$categorias[] = 'Adolecentes';
$categorias[] = 'Adultos';
$categorias[] = 'Idosos';
//print_r($categorias);

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if(empty($nome))
{
	$_SESSION['mensagem-de-erro-nome'] = 'Informe um nome válido';
	header('Location: index.php');
	return;
}


else if(strlen($nome) < 3)
{	
	$_SESSION['mensagem-de-erro-nome'] = 'O nome deve ter pelo menos 3 caracteres';
	header('Location: index.php');
	return;
}

else if(strlen($nome) >40) 
{
	$_SESSION['mensagem-de-erro-nome'] = 'O nome deve ter pelo máximo 40 caracteres';
	header('Location: index.php');
	return;
}

else if(!is_numeric($idade))
{
	$_SESSION['mensagem-de-erro-idade'] = 'Digite um numero';
	header('Location: index.php');
	return;
}



if($idade <=6 && $idade <=12)
{
	for($i = 0; $i <=3; $i++)
	{
		$_SESSION['mensagem-de-sucesso'] = "O nadador ".$nome. " compete na categoria Infantil";
        	header('Location: index.php');
        	return;
		
	}
}

else if ($idade >=12 && $idade <18)
{
	for($i = 0; $i <=3; $i++)
	{
		$_SESSION['mensagem-de-sucesso'] = "O nadador ".$nome. " compete na categoria Adolecente";
                	header('Location: index.php');
                	return;
		
	}
}
else
{
	for($i = 0; $i <=3; $i++)
	{
		$_SESSION['mensagem-de-sucesso'] = "O nadador ".$nome. " compete na categoria Adulto";
                        	header('Location: index.php');
                        	return;
		
	}
}





?>