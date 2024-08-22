<html>
<head>

</head>
<body>
	<h1>ESCOLHA DO GÊNERO</h1>
	<?php
		//Entrada de Dados - recebimento da opção do gênero
		$genero = $_GET["genero"];
		
		/*Processamento e Saída - decisão de executar um ou 
			outro comando "echo"*/
		switch ($genero) {
			case "m":
				echo "<p> Foi escolhido o gênero masculino.
						</p>";
				break;
			case "f":
				echo "<p> Foi escolhido o gênero feminino.
						</p>";
				break;
		}
			?>
</body>
</html>