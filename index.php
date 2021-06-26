<?php
include "servicos/servicoMensagemSessao.php";
include "servicos/servicoValidacao.php";
include "servicos/servicoCategoriaCompetidores.php";

?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Case de Natação</title>
	<meta name="Joao Pedro" content="">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale-1">
</head>

<body>
	<form class="natacao" method="post" action="script.php" style="width: 100px ; margin:250px 200px; ">
		<fieldset>

			<?php
			$mensagemDeSucesso = obterMensagemSucesso();
			if (!empty($mensagemDeSucesso)) {
				echo $mensagemDeSucesso;
			}

			$mensagemDeErro = obterMensagemErro();
			if (!empty($mensagemDeErro)) {
				echo $mensagemDeErro;
			}

			?>
			<input type="text" name="nome" placeholder="nome" style="display: block;">
			<input type="text" name="idade" placeholder="idade" style="display: block;">
			<input type="submit" name="postar" value="submeter" style="display: block;">

		</fieldset>

	</form>

</body>
</html>