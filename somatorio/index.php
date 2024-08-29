<html>
<head>
	
</head>
<body>
	<h1> SOMATÓRIO </h1>
	<form action="somar.php" method="get">
	    <?php
			for ($cont = 1; $cont <= 30; $cont++) {
		?>
			<p>
				Valor <?php echo $cont;?>:  
				<input type="text" name="numero<?php echo $cont;?>">
			</p>
		<?php
			}
		?>
		<p>
			<input type="submit" value="Somar">
		</p>
	</form>
</body>
</html>