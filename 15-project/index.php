<!DOCTYPE html>
<html>
<head>
	<title>Projeto Final em PHP (Parte 2))</title>
	<style>
		body{
			font-family: sans-serif;
		}
		h1{
			color:#55AAFFFF;
			text-shadow: 1px 1px 4px black;
		}
	</style>
</head>
<body>
	<h1>Projeto Final em PHP (Parte 2)</h1>
	<pre>
		<?php
		require_once 'Video.php';
		require_once 'Gafanhoto.php';
		require_once 'Visualizacao.php';

		$v[0] = new Video("Curso PHP");
		$v[1] = new Video("Curso POO");
		print_r($v[0]);
		$v[1]->play();
		$v[0]->like();

		$g[0] = new Gafanhoto("Maria", 22, "F", "Mariazinha");
		$g[1] = new Gafanhoto("Fábio", 34, "M", "Fabinho");
		print_r($g[0]);
		print_r($g[1]);
		$g[0]->ganharExp(3);

		$vis[0] = new Visualizacao($g[0], $v[0]);
		$vis[1] = new Visualizacao($g[1], $v[0]);
		$vis[1]->avaliarPorc(80);

		print_r($vis);



		?>
	</pre>
</body>
</html>