<html>
<head>
	
</head>
<body>
	<h1> SOMATÓRIO </h1>
	<?php
		//recebendo cada números e somando-os também
		$soma = 0;
		for ($cont = 1; $cont <= 30; $cont++) {
			$num = $_GET["numero$cont"];
			$soma += $num;
		}
		
		//mostrando a soma
		echo "<p> O somatorio e $soma </p>";
	?>
</body>
</html>