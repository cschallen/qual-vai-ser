<head>
    <meta charset="utf-8">
</head>
<!--  CRIAR DEPOIS O CARDAPIO JUNTO COM O RESTAURANTE -->


<form action="novo_restaurante.php" method="post">
  <label for="nome"> Nome: </label>
  <input type="text" name="nome"><br>
  <label for="descricao">Descrição: </label>
  <input type="text" name="descricao" ><br>
  <label for="rua">Rua: </label>
  <input type="text" name="rua" ><br>
  <label for="cep">Cep: </label>
  <input type="text" name="cep" ><br>
  <label for="cnpj">Cnpj: </label>
  <input type="text" name="cnpj" ><br>
  <button type="submit" name="button">Cadastrar</button>
</form>
<?php
$con = new PDO("pgsql:host=localhost port=5432 dbname=qual-vai-ser user=postgres password=postgres");

if (!$con) {
  echo "An error occurred.\n";
  exit;
}
?>


<?php

$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$rua = $_POST['rua'];
$cep = $_POST['cep'];
$cnpj = $_POST['cnpj'];

$stmt = $con->prepare('INSERT INTO Estabelecimento(descricao, rua, cep, cnpj, nome, id_dono) VALUES(:descricao, :rua, :cep, :cnpj, :nome, :id_dono)');
$stmt->execute(array(':nome' => $nome, ':descricao' => $descricao, ':rua' => $rua, ':cep' => $cep, ':cnpj' => $cnpj, ':id_dono' => 1));
?>
