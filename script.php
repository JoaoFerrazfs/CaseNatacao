
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