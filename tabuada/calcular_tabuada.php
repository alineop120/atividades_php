<html>
<head>
	
</head>
<body>
	<h1> TABUADA </h1>
	<?php
		//recebendo cada idades e somando-as também
		$soma = 0;
		for ($cont = 1; $cont <= 10; $cont++) {
			$idade = $_GET["idade$cont"];
			$soma += $idade;
		}
		
		//calcular a média
		$media_idades = $soma / 10;
		
		//mostrando a soma
		echo "<p> A média das idades informadas e $media_idades </p>";
	?>
</body>
</html>