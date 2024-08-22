<html>
<head>
</head>
<body>
	<h1>PESO IDEAL</h1>
	<?php
		//Entrada de Dados
		$genero = $_GET["genero"];
		$h = $_GET["altura"];
		
		//Processamento
		if ($genero == "m") {
			$peso_ideal = 72.7 * $h - 58;
		} 
		else {
			$peso_ideal = 62.1 * $h - 44.7;  
		}
		
		//Saída de dados
		echo "<p> Seu peso ideal é $peso_ideal </p>";
	?>
</body>
</html>