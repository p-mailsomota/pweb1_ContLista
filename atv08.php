<!DOCTYPE html>
<html>
<head>
	<title>Exercício 8</title>
</head>
<body>
	<form>
		Digite um valor: <input type="number" name="value"><br><br>
	</form>
</body>
</html>

<?php

	if (!empty($_GET['value'])) {

		$value = $_GET['value'];
		$soma = 0;

		for ($i=0; $i <= $value ; $i++) { 
			$soma += $i;
			echo "O valor da soma até $value é =  $soma <br>";
		}
	}
	

?>