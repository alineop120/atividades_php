<html lang=pt-br>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<h1>SALÁRIO COM COMISSÃO</h1>
	<?php
		//Entrada de Dados - leitura do salário
		$salario = $_GET["salario"];
		$total_vendas = $_GET["total_vendas"];
		
		//Processamento - cálculo da comissão
		$comissao = $salario + ($total_vendas * 0.15); 
		
		//Saída de Dados - exibição do salário reajustudo
		echo "<p> O salário final é $comissao </p>";
	?>
</body>
</html>