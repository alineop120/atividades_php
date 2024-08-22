<html lang=pt-br>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<header>
	<h1>Abono Salarial</h1>
	</header>
	<?php
		$idade = $_GET["idade"];
		$genero = $_GET["genero"];
		$salario = $_GET["salario"];
		
		switch ($genero)
		{
			case "m":
				if ($idade >= 30)
				{
					$salario_final = $salario + 100;
				}
				else 
				{
					$salario_final = $salario + 50;
				}
			break;
			case "f":
				if ($idade >= 25)
				{
					$salario_final = $salario + 100;
				}
				else 
				{
					$salario_final = $salario + 50;
				}
			break;
		}
		
		echo "O salario final é $salario_final";
	?>
</body>
</html>