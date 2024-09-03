<html>
<head>
</head>
<body>
	<h1>QTD DE HOMENS E MULHERES</h1>
	<?php
		$contM = 0;
		$contF = 0;
		for ($cont=1; $cont <= 5; $cont++) {
			$genero = $_GET["genero$cont"];
			if ($genero == "m"){
				$contM += 1;
			}
			else {
				$contF += 1;
			}
		}
		
		echo "<p> A qtd de homens é $contM e de mulheres é $contF </p>";
	?>
</body>
</html>