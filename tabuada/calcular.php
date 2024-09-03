<html>
<head>
	
</head>
<body>
	<h1> TABUADA </h1>
	<?php
		$num = $_GET["numero"];
		echo "<h2> Tabuado do $num </h2>";
	?>
	<table border="1">
		<tr>
			<td>
				<?php echo "Expressão";?>
			</td>
			<td>
				<?php echo "Resultado";?>
			</td>
		</tr>
		<?php
			for ($cont = 1; $cont <= 10; $cont++) 
			{
				$resultado = $cont * $num;
		?>
				<tr>
					<td>
						<?php echo "$num x $cont";?>
					</td>
					<td>
						<?php echo $resultado;?>
					</td>
				</tr>
		<?php
			}
		?>
	</table>
</body>
</html>