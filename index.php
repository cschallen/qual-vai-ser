<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Qual vai ser?</title>
		<link rel="stylesheet" href="/stylesheets/home.css">
	</head>
	<body>

		<?php
		$con = pg_connect("qual-vai-ser");

		if (!$con) {
  		echo "An error occurred.\n";
  		exit;
		}
		?>


		<h1 class="red-text">Hello, World!</h1>
		<a href="/novo_restaurante.php">Adicionar novo restaurante</a>
	</body>
</html>
