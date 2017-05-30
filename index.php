<head>
	<meta charset="utf-8">
	<title>Qual vai ser?</title>
	<link rel="stylesheet" href="/stylesheets/home.css">
	<link rel="stylesheet" href="/stylesheets/novo_restaurante.css">
</head>

<div class="header">

</div>

<div class="center">
	<?php
	$busca = $_GET['busca'];
	$conn = pg_connect("host=localhost port=5432 dbname=qual-vai-ser user=postgres password=postgres");
	$sql = "SELECT nome, rua , cep FROM estabelecimento WHERE nome ILIKE '$busca' ORDER BY nome ASC";
	$res = pg_query($conn, $sql);
	if (pg_num_rows($res) > 0) {
		$row = pg_fetch_array($res);
		echo "Teste1";
		echo "<br />Nome: ".$row["nome"]."<br />Rua: ".$row["rua"]."<br />Cep: ".$row["cep"];
	} else if ($conn) {
		$sql = "SELECT nome, rua, cep FROM estabelecimento ORDER BY nome ASC";
		$res = pg_query($conn, $sql);
		if(pg_num_rows($res) > 0) {
			while($row = pg_fetch_array($res)) {
				echo "<br />Nome: ".$row["nome"]."<br />Rua: ".$row["rua"]."<br />Cep: ".$row["cep"];
			}
		} else {
			echo "Nenhum registro encontrado no banco de dados!!";
		}
		pg_close($conn);
	} else {
		echo "Falha na conexão com o PostgreSQL!!";
	}
	?>



	<a href="/novo_restaurante.php">Adicionar novo restaurante</a>
</div>

<div class="footer">

</div>
