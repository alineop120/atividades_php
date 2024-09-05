<html>
<head>
</head>
<body>
	<h1> MÉDIA DAS NOTAS DAS MULHURES E DOS HOMENS</h1>
	<form action="calcular_media.php" method="get">
		<?php
			for ($cont=1; $cont <= 5; $cont++) {
		?>
		<p>
			<?php echo "$cont";?>ª pessoa
			Nota: <input type="text" name="nota<?php echo "$cont";?>"> <br>
			<input type="radio" name="genero<?php echo "$cont";?>" value="m"  checked> Masculino <br>
			<input type="radio" name="genero<?php echo "$cont";?>" value="f"> Feminino
		</p>
		<?php
			}
		?>
		<p>
			<input type="submit" value="Calcular">
		</p>
	</form>
</body>
</html>