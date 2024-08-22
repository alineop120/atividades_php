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
		$num1 = $_GET["num1"];
		$num2 = $_GET["num2"];
		
		//Processamento - cálculo da soma
		$soma = $num1 + $num2;
		$subt = $num1 - $num2;
		$mult = $num1 * $num2;
		$divi = $num1 / $num2;
		$pote = pow($num1,$num2);
		$raiz1 = sqrt($num1);
		$raiz2 = sqrt($num2);
		
		//Saída de Dados
		echo "<ul>
				<li>A soma é $soma </li>
				<li> A subtração é $subt </li>
				<li> A multiplicação é $mult </li>
				<li> A divisão é $divi </li>
				<li> A potência é $pote </li>
				<li> A raiz quadrada do valor 1 é $raiz1 </li>
				<li> A raiz quadrada do valor 2 é $raiz2 </li>
			 </ul>";
	?>
</body>
</html>