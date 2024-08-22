<html lang=pt-br>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<header>
	<h1>Abono Salarial</h1>
	</header>
	<form action="calcular_abono.php" method="get">
		<p>
			Salário:
			<input type="text" name="salario" required>
		</p>
		<p>
			Gênero:
			<br>
			<input type="radio" name="genero" value="m" checked> Masculino
			<br>
			<input type="radio" name="genero" value="f"> Feminino
		</p>
		<p>
			Idade:
			<input type="text" name="idade" required> 
		</p>

		<p>
			<input type="submit" value="Calcular">
		</p>
	</form>
</body>
</html>