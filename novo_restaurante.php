<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/stylesheets/novo_restaurante.css">
</head>

<div class="header">
    <a href="/index.php">Voltar</a>
</div>

<div class="center">
    <div class="container">
        <p class="title-form">Cadastre seu restaurante:</p>
        <form action="novo_restaurante.php" method="post" class="form">
            <div class="form-div-components">

                <div class="form-div">
                    <div class="form-inputs">
                        <label for="nome"> Nome: </label>
                        <input type="text" name="nome" placeholder="Ex: Bar do Zé">
                    </div>

                    <div class="form-inputs">
                        <label for="rua">Endereço: </label>
                        <input type="text" name="rua" placeholder="Ex: Av. Ipiranga, 6681">
                    </div>
                </div>

                <div class="form-div">
                    <div class="form-inputs">
                        <label for="cep">Cep: </label>
                        <input type="text" name="cep" placeholder="Ex: 00.000.000">
                    </div>
                    <div class="form-inputs">
                        <label for="cnpj">Cnpj: </label>
                        <input type="text" name="cnpj" placeholder="Ex: 00.000.000/0000-00">
                    </div>
                </div>
            </div>
            <div class="form-div-components">

                <div class="form-div-description">
                    <label for="descricao">Descrição: </label>
                    <textarea rows="6" cols="30" name="descricao" placeholder="Digite aqui a descrição do seu restaurante..."></textarea>
                </div>

                <div class="form-div-description">
                    <label for="cardapio">Cardapio: </label>
                    <textarea rows="6" cols="30" name="cardapio" placeholder="Digite aqui seu cardápio..."></textarea>
                </div>
            </div>

            <div class="form-button">
                <button type="submit" class="button" name="button">Cadastrar</button>
            </div>
        </form>
    </div>
</div>

<div class="footer">

</div>

<?php
$con = new PDO("pgsql:host=localhost port=5432 dbname=qual-vai-ser user=postgres password=postgres");

if (!$con) {
    echo "An error occurred.\n";
    exit;
}

$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$rua = $_POST['rua'];
$cep = $_POST['cep'];
$cnpj = $_POST['cnpj'];
$cardapio = $_POST['cardapio'];

$stmt = $con->prepare('INSERT INTO Estabelecimento(descricao, rua, cep, cnpj, nome, cardapio) VALUES(:descricao, :rua, :cep, :cnpj, :nome, :cardapio)');
$stmt->execute(array(':nome' => $nome, ':descricao' => $descricao, ':rua' => $rua, ':cep' => $cep, ':cnpj' => $cnpj, ':cardapio' => $cardapio));
?>
