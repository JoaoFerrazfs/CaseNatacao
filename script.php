
<?php

$categorias = [];

$categorias[] ='Infantil';
$categorias[] = 'Adolecentes';
$categorias[] = 'Adultos';
$categorias[] = 'Idosos';
//print_r($categorias);

$nome = $_POST['nome'];
$idade = $_POST['idade'];





 if (empty($nome && $idade))

 {
 		echo"Digite as informações";
 }
 else{

 if (isset($_POST['postar'])){
    
 

if ($idade >=6 && $idade <=12)
{
	for($i = 0; $i <=3; $i++)
	{
		if ($categorias[$i] == 'Infantil')
			echo "O nadador " .$nome. " compete na categoria infantil";	
		
	}
}

else if ($idade >=12 && $idade <18)
{
	for($i = 0; $i <=3; $i++)
	{
		if ($categorias[$i] == 'Adolecentes')
			echo "O nadador " .$nome. " compete na categoria Adolecentes";	
		
	}
}
else
{
	for($i = 0; $i <=3; $i++)
	{
		if ($categorias[$i] == 'Adultos')
			echo "O nadador " .$nome. " compete na categoria Adulto";	
		
	}
}

}

}

?>