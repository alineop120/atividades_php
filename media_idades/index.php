<html>
<head>
	
</head>
<body>
	<h1> MÉDIA DA IDADE DE 10 PESSOAS </h1>
	<form action="calcular_media.php" method="get">
	    <?php
			for ($cont = 1; $cont <= 10; $cont++) {
		?>
			<p>
				Informe <?php echo $cont;?>ª idade:  
				<input type="text" name="idade<?php echo $cont;?>">
			</p>
		<?php
			}
		?>
		<p>
			<input type="submit" value="Calcular Média das Idades">
		</p>
	</form>
</body>
</html>