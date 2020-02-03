<!DOCTYPE html>
<html>
<head>
	<title>Polimorfismo Sobrecarga (Parte 2)</title>
	<style>
	body{
		font-family: sans-serif;
	}
	h1{
		color:#0073ADFF;
	}
	</style>
</head>
<body>
	<h1>Polimorfismo Sobrecarga (Parte 2)</h1>
	<p><strong>PHP não suporta Polimorfismo de Sobrecarga</strong></p>
	<?php
	require_once 'Mamifero.php';
	require_once 'Lobo.php';
	require_once 'Cachorro.php';

	$a = new Cachorro();

	$a->emitirSom();

	$a->reagirDono(true);

	$a->reagirFrase("Quieto!");

	$a->reagirHora(10,20);

	$a->reagirIdadePeso(2,10);


	?>

</body>
</html>