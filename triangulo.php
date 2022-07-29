<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Triângulo Retângulo</title>
</head>
<style>
	/* Coloquei o style dentro do mesmo arquivo php para facilitar o envio, e a visualização dos dados*/
	body{
		font-family: Arial;
	}
    .tbl{
		display: table;
		margin-top: 16px;
		border-collapse: collapse;

	}
	.tr {
		display: table-row;
	}
	.tdw, .tdb {
		display: table-cell;
		width: 32px;
		height: 32px;
		text-align: center;
		vertical-align: middle;
		border: 1px solid #000000;
		background-color: #ffffff;
	}
	.tdb {
		background-color: #000000;
		color: #ffffff;
	}
</style>
<body>
	<p>Insira o número de linhas que deseja para o triângulo.</p>
	<form method="POST">
		<input type=text name=linhas>
		<input type=submit value="Criar Triângulo">
	</form>
	<div class="tbl">

	<?php
		//transferi o índice linhas  enviada via POST para uma variável $lt
		$lt = $_POST['linhas'];
		//usei o laço for para correr pelas quantidades de linhas que vão se igualando à
		//quantidade de colunas, imprimindo a última coluna com fundo preto e as demais 
		//brancas somente com o contorno e a primeira coluna sempre tem o número da linha

		for ($l=1; $l<=$lt; $l++) {
			echo "<div class='tr'>";
			for ($c=1; $c<=$l ; $c++) { 
				echo "<div class='".($c==$l?'tdb':'tdw')."'>".($c==1?$l:"&nbsp;")."</div>";
			}
			echo "</div>";
		}
	?>

	</div>
    
</body>
</html>