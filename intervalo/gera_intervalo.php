<html>
<head>
	
</head>
<body>
	<h1> INTERVALO </h1>
	<p>
		<?php
			//Variaveis
			$num1 = $_GET["valor_inicial"];
			$num2 = $_GET["valor_final"];
			
			//Processamento com os números ímpares
			for ($cont = $num1; $cont < $num2; $cont++) {
				$resto = $cont % 2;
				if ($resto == 1) {
					echo " $cont ";
				}
			}
		?>
	</p>
</body>
</html>