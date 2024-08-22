<html lang=pt-br>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<header>
	<h1>EQUAÇÃO DO 2° GRAU</h1>
	</header>
	<?php
		//Entrada de Dados
		$a = $_GET["a"];
		$b = $_GET["b"];
		$c = $_GET["c"];
		
		//Processamento de Dados
		if ($a == 0) {
			echo "<p> Os valores informados não formam uma equação do 2° </p>";
		}
		else {
			echo "<p> Os valores informados formam uma equação do 2° </p>";

			//Cálculo da delta
			$delta = pow($b,2) - 4 * $a * $c;
			
			if ($delta > 0) {
				$x1 = (-($b) + sqrt($delta)) / 2 * $a;
				$x2 = (-($b) - sqrt($delta)) / 2 * $a;
				echo "<p> Existem duas respostas: $x1 e $x2 </p>";
			}
			else if ($delta == 0) {
				$x = (-($b)) / 2 * $a;
				echo "<p> Existe uma resposta: $x </p>";
			} 
			else {
				echo "<p> Não existem raízes reais possíveis </p>";
			}
		}
	?>
</body>
</html>