<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Case de Natação</title>
	<meta name="Joao Pedro" content="">
	<meta name="description"content="">
	<meta name="viewport" content="width=device-width, initial-scale-1">
</head>

<body>
	<form class="natacao" method="post" action="script.php" style="width: 100px ; margin:250px 200px; " >
				<fieldset>
	
				<?php  
					$mensagemDeErro = isset($_SESSION['mensagem-de-erro-nome']) ? $_SESSION['mensagem-de-erro-nome'] :'';
					if (!empty($mensagemDeErro)) 
					{
					echo $mensagemDeErro;
					}

				?>				
				<input type="text" name="nome" placeholder="nome" style="display: block;">



				<?php  
					$mensagemDeErro = isset($_SESSION['mensagem-de-erro-idade']) ? $_SESSION['mensagem-de-erro-idade'] :'';
					if (!empty($mensagemDeErro)) 
					{
					echo $mensagemDeErro;
					}

				?>			

				<input type="text" name="idade" placeholder="idade" style="display: block;">


				
					
				<input type="submit" name="postar" value="submeter" style="display: block;">



				
		</fieldset>

		<?php
        					$mensagemDeSucesso = isset($_SESSION['mensagem-de-sucesso']) ? $_SESSION['mensagem-de-sucesso'] :'';
        					if (!empty($mensagemDeErro))
        					{
        					echo $mensagemDeSucesso;
        					}

        				?>
		

	</form>

</body>





</html>