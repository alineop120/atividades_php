<html>
<head>
</head>
<body>
	<h1> MÉDIA DAS NOTAS DAS MULHURES E DOS HOMENS</h1>
	<?php
	    //Contadores
		$soma_notas_mulheres = 0;
		$contf = 0;
		$soma_notas_homens = 0;
		$contm = 0;
		
		//Recebendo as notas das mulheres
		for ($cont = 1; $cont <= 5; $cont++) {
			
			$nota = $_GET["nota$cont"];
			$genero = $_GET["genero$cont"];
			
			if ($genero == "f"){
				$soma_notas_mulheres += $nota;
				$contf += 1;
			} 
			else {
				$soma_notas_homens += $nota;
				$contm += 1;
			}
		}
		
		//Calculando as medias das mulheres e homens
		$media_notas_mulheres = $soma_notas_mulheres / $contf;
		$media_notas_homens = $soma_notas_homens / $contm;
		
		//Mostrando o resultado das médias
		echo "<p> A média das notas das mulheres é $media_notas_mulheres </p>";
		echo "<p> A média das notas dos homens é $media_notas_homens </p>";
	?>
</body>
</html>