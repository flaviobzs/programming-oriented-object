<!DOCTYPE html>
<html>
<head>
	<title>Projeto Final em PHP (Parte 1)</title>
	<style>
		body{
			font-family: sans-serif;
		}
		h1{
			color:#AA557FFF;
			text-shadow: 1px 1px 4px black;
		}
	</style>
</head>
<body>
	<h1>Projeto Final em PHP (Parte 1)</h1>
	<pre>
		<?php
		require_once 'Video.php';
		require_once 'Gafanhoto.php';

		$v[0] = new Video("Curso PHP");
		$v[1] = new Video("Curso POO");

		$g[0] = new Gafanhoto("Maria", 22, "F", "Mariazinha");
		$g[1] = new Gafanhoto("Fábio", 34, "M", "Fabinho");

		print_r($v[0]);
		$v[1]->play();
		$v[0]->like();
		print_r($g[0]);
		print_r($g[1]);
		$g[0]->ganharExp(3);


		?>
	</pre>
</body>
</html>