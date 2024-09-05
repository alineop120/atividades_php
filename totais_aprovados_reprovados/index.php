<html>
<head>
</head>
<body>
	<h1> TOTAIS DE APROVADOS E REPROVADOS </h1>
	<form action="contar_totais.php" method="get">
		<?php
			for ($cont=1; $cont <= 5; $cont++) {
		?>
				<p>
					<?php echo "$cont";?>º aluno <br>

					<input type="radio" name="genero<?php echo "$cont";?>" value="m"  checked> 
					Masculino <br>
					<input type="radio" name="genero<?php echo "$cont";?>" value="f"> 
					Feminino <br>

					<?php
						for ($contnotas=1; $contnotas <= 4; $contnotas++) {
					?>
							Nota <?php echo "$contnotas";?>: 
							<input type="text" name="nota<?php echo "$cont$contnotas";?>"> <br>
					
					<?php
						}
					?>
		<?php
			}
		?>	
		<p>
			<input type="submit" value="Calcular">
		</p>
	</form>
</body>
</html>