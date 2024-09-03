<html>
<head>
	
</head>
<body>
	<h1> TABELA DINÂMICA </h1>
	<table border="1">
		<?php
			$num = $_GET["num_linhas"];
			for ($cont = 1; $cont <= $num; $cont++) 
			{
		?>
				<tr>
					<td>
						Estou contando
					</td>
					<td>
						<?php echo $cont; ?>
					</td>
				</tr>
		<?php
			}
		?>
	</table>
</body>
</html>