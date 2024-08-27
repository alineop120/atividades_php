<html>
<head>
	
</head>
<body>
	<h1> CONTADOR </h1>
	<h2> Usando o WHILE </h2>
	<?php
		//Valor Inicializado
		$cont = 1;
		while ($cont <= 10) {
			echo "<p> Estou contando $cont vezes</p>";
			$cont = $cont + 1;
		}	
    ?>
	<h2> Usando o DO..WHILE </h2>
	<?php
		$cont = 1;
		Do {
			echo "<p> Estou contando $cont vezes </p>";
			$cont += 1;
		}while($cont <= 10);
	?>
	<h2> Usando o FOR </h2>
	<?php
		for ($cont = 1; $cont <= 10; $cont++) {
			echo "<p> Estou contando $cont vezes </p>";
		}
	?>
</body>
</html>