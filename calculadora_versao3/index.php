<html lang=pt-br>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CALCULADORA 3.0</title>
</head>
<body>
	<header>
	<h1>Informe os valores</h1>
	</header>
	<form action="resultado.php" method="get">
		<p>
			Valor 1:
			<input type="text" name="num1" required> <br>
			Valor 2:
			<input type="text" name="num2" required>
		</p>
		<p>
			Escolha a operação: <br>
			<select name="operacao">
				<option value="1"> Adição </option>
				<option value="2"> Subtração </option>
				<option value="3"> Multiplicação </option>
				<option value="4"> Divisão </option>
				<option value="5"> Potência </option>
				<option value="6"> Raiz Quadrada </option>
			</select>
		</p>
		<p>
			<input type="submit" value="Calcular">
		</p>
	</form>
</body>
</html>