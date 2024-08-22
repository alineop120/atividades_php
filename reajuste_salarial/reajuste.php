<html lang=pt-br>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<h1>REAJUSTE SALARIAL</h1>
	<?php
		//Entrada de Dados - leitura do salário
		$salario = $_GET["salario"];
		
		//Processamento - cálculo do reajuste salarial
		$reajus = $salario + ($salario * 0.1); 
		
		//Saída de Dados - exibição do salário reajustudo
		echo "<p> O salário reajustado é $reajus </p>";
	?>
</body>
</html>