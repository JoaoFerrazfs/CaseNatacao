<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Case de Natação</title>
</head>
<body style="background-image: url(https://www.publicdomainpictures.net/pictures/100000/velka/blue-water-background-14048696914el.jpg) ;">

	<form class="natacao" method="POST" style="text-align: center; width: 800px; margin:250px 800px; background-color:whitesmoke ;" >

		<fieldset> 
			<legend style="text-align: left;" >Busca Catergorias
				<input type="text" name="nome" placeholder="nome">
				<input type="text" name="idade" placeholder="idade">		
				
				<input type="submit" name="postar" value="submeter" >
			</legend>
		<fieldset>

	</form>

</body>




<?php

$categorias = [];

$categorias[] ='Infantil';
$categorias[] = 'Adolecentes';
$categorias[] = 'Adultos';
$categorias[] = 'Idosos';
//print_r($categorias);

$nome = $_POST['nome'];
$idade = $_POST['idade'];

//var_dump($nome);
//var_dump($idade);

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

</html>