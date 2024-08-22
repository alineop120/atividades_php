<html lang=pt-br>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<header>
	<h1>Triângulo</h1>
	</header>
	<?php
		//Variaveis
		$lad1 = $_GET["valor1"];
		$lad2 = $_GET["valor2"];
		$lad3 = $_GET["valor3"];
		
		if (($lad1 + $lad2 >= $lad3) and ($lad2 + $lad3 >= $lad1) and ($lad3 + $lad1 >= $lad2)) 
		{
			//Informando que é um triângulo
			echo "<p> Os valores formam um triângulo </p>";
			//Identificar o tipo do triângulo
			if (($lad1 == $lad2) and ($lad2 == $lad3)) {
				//Informar que é ESCALERO
				echo "<p> Os valores formam um triângulo do tipo escalero </p>";
			} 
			elseif (($lad1 == $lad2) or ($lad2 == $lad3) or ($lad3 == $lad1)) {
				//Informar que é EQUILÁTERO
				echo "<p> Os valores formam um triângulo do tipo equilátero </p>";
			} 
			else {
				//Informar que é ISÓSCELES
				echo "<p> Os valores formam um triângulo do tipo isósceles </p>";
			}
		} 
		else 
		{
			//Informando que não é um triângulo
			echo "<p> Os valores não formam um triângulo </p>";
		}
		
			
		
		
	?>
</body>
</html>