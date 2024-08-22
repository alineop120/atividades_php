<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <header>
        <h1>Número Par ou Ímpar</h1>
    </header>
    <?php
		//Entrada de Dados
		$num = $_GET["num"];
		
		//Processamento e Saída de Dados
		$resto = $num % 2;
		if ($resto == 0) {
			echo "<p>O número $num é par</p>";
		}
		else {
			echo "<p>O número $num é ímpar</p>";
		}
	?>
</body>
</html>