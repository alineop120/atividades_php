<html lang=pt-br>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CÁLCULO DA MÉDIA</title>
</head>
<body>
	<h1>Resultado da média do aluno:</h1>
	<?php
		//Entrada de dados - leitura das notas
		$nota1 = $_GET["nota1"];
		$nota2 = $_GET["nota2"];
		$nota3 = $_GET["nota3"];
		$nota4 = $_GET["nota4"];
		
		//Processamento
		// - Cálculo da média aritmética
		$mediaA = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
		
		// - Cálculo da média ponderada
		$mediaP = ($nota1 + $nota2*2 + $nota3*3 + $nota4*4) / 10;
		
		//Saída de Dados - exibição da média final do aluno
		echo "<p> A média aritmética do aluno foi $mediaA </p>";
		echo "<p> A média ponderada do aluno foi $mediaP </p>";
	?>
</body>
</html>