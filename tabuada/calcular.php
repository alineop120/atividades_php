<html>
<head>
	
</head>
<body>
	<h1> TABUADA </h1>
	<?php
		$num = $_GET["numero"];
		
		echo "<h2> Tabuada do $num</h2>";
		
		//recebendo o numero fazendo a multiplicação e mostrando o resultado
		for ($cont = 1; $cont <= 10; $cont++) {
			$mult = $cont * $num;
			echo "<p> $num x $cont = $mult </p>";
		}
	?>
</body>
</html>