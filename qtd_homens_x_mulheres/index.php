<html>
<head>
</head>
<body>
	<h1>QTD DE HOMENS E MULHERES</h1>
	<form action="quantidades.php" method="get">
		<?php
			for ($cont=1; $cont <= 5; $cont++) {
		?>
		<p>
			1ª pessoa:
			<br>
			<input type="radio" name="genero<?php echo "$cont";?>" value="m"  checked> Masculino <br>
			<input type="radio" name="genero<?php echo "$cont";?>" value="f"> Feminino
		</p>
		<?php
			}
		?>
		<p>
			<input type="submit" value="Contar">
		</p>
	</form>
</body>
</html>