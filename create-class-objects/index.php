<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Criando Classes e Objetos em PHP</title>
</head>
<body>
	<?php
		require_once 'Caneta.php';

		$c1 = new Caneta;
		$c1 -> modelo = "BIC Cristal";
		$c1 -> cor = "azul";
		$c1 -> ponta = 0.8;
		$c1 -> carga = 80;
		$c1 -> tampada = false;
		$c1 -> tampar();
		
		print_r($c1);
		$c1->rabiscar();

		$c2 = new Caneta;
		$c2 -> cor = "Vermelho";
		$c2 -> ponta = 0.5;
		$c2 -> carga = 90;
		$c2 -> tampada = true;

		var_dump($c2);
	?>
</body>
</html>