<html lang=pt-br>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CALCULADORA</title>
</head>
<body>
	<h1>Resultado dos valores</h1>
	<?php
		//Entrada de Dados - leitura dos números
		$operacao = $_GET["operacao"];
		$num1 = $_GET["num1"];
		$num2 = $_GET["num2"];
		
		//Processamento - cálculo das operações
		if ($operacao == "1") {
			$soma = $num1 + $num2;
			echo"<p>A soma é $soma </p>";
			
		}
		else if ($operacao == "2") {
			$subt = $num1 - $num2;
			echo"<p>A subtração é $subt </p>";
		}
		else if ($operacao == "3") {		
			$mult = $num1 * $num2;
			echo"<p>A multiplicação é $mult</p>";
		}
		else if ($operador == "4") {
			$divi = $num1 / $num2;
			echo"<p>A divisão é $divi</p>";
		}
		else if ($operador == "5") {
			$pote = pow($num1,$num2);
			echo"<p>A potência é $pote</p>";
		}
		else {
			$raiz1 = sqrt($num1);
			$raiz2 = sqrt($num2);
			echo"<p>
					A raiz quadrada do valor 1 é $raiz1 <br>
					A raiz quadrada do valor 2 é $raiz2
				</p>";	
		}
	?>
</body>
</html>