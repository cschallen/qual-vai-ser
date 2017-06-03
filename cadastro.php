<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css" media="screen" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style-portfolio.css">
    <link rel="stylesheet" href="css/picto-foundry-food.css" />
    <link rel="stylesheet" href="css/jquery-ui.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link rel="icon" href="favicon-1.ico" type="image/x-icon">
</head>

<body ng-app="">

    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Qual vai ser?</a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav main-nav  clear navbar-right ">
                        <li><a class="navactive color_animation" href="index.php">INÍCIO</a></li>
                        <li><a class="color_animation" href="index.php#about">SOBRE NÓS</a></li>
                        <li><a class="color_animation" href="locais.php">LOCAIS</a></li>
                        <li><a class="color_animation" href="cadastro.php">CADASTRE SEU ESTABELECIMENTO</a></li>
                        <li><a class="color_animation" href="login.php">LOGIN</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <div id="top" class="starter_container2 bg">
        <div class="follow-container">
            <div class="col-md-6 col-md-offset-3">
                <form name="contatoForm" style="padding-top:120px">
                    <h2 style="color:white">CADASTRO DE ESTABELECIMENTO</h2>
                    <hr>
                    <label style="color: white; margin-right: 2px;">*</label>
                    <label> Nome: </label>
                    <span style="color: white" ng-show=" contatoForm.nome.$touched &&  contatoForm.nome.$invalid">Campo obrigatorio.</span>
                    <input type="text" name="nome" id="nome" ng-model="nome" class="form-control" required>
                    <br>
                    <label style="color: white; margin-right: 2px;">*</label>
                    <label>Endereço:</label>
                    <span style="color: white" ng-show=" contatoForm.endereco.$touched &&  contatoForm.endereco.$invalid">Campo obrigatorio.</span>
                    <input type="text" name="endereco" id="endereco" ng-model="endereco" class="form-control" required>
                    <br>
                    <label style="color: white; margin-right: 2px;">*</label>
                    <label>CEP:</label>
                    <span style="color: white" ng-show=" contatoForm.cep.$touched &&  contatoForm.cep.$invalid">Campo obrigatorio.</span>
                    <input type="text" name="cep" id="cep" ng-model="cep" class="form-control" required>
                    <br>
                    <label style="color: white; margin-right: 2px;">*</label>
                    <label>CNPJ:</label>
                    <span style="color: white" ng-show=" contatoForm.cnpj.$touched &&  contatoForm.cnpj.$invalid">Campo obrigatorio.</span>
                    <input type="text" name="cnpj" id="cnpj" ng-model="required" class="form-control" required>
                    <br>
                    <label style="color: white; margin-right: 2px;">*</label>
                    <label>Descrição:</label>
                    <span style="color: white" ng-show=" contatoForm.descricao.$touched &&  contatoForm.descricao.$invalid">Campo obrigatorio.</span>
                    <textarea rows="6" cols="60" name="descricao" id="descricao" ng-model="descricao" class="form-control" required></textarea>
                    <br>
                    <label style="color: white; margin-right: 2px;">*</label>
                    <label>Cardápio:</label>
                    <span style="color: white" ng-show=" contatoForm.cardapio.$touched &&  contatoForm.cardapio.$invalid">Campo obrigatorio.</span>
                    <textarea rows="6" cols="60" type="text" name="cardapio" id="cardapio" ng-model="cardapio" class="form-control" required></textarea>
                    <button ng-disabled="contatoForm.nome.$invalid || contatoForm.endereco.$invalid || contatoForm.cep.$invalid || contatoForm.cnpj.$invalid || contatoForm.descricao.$invalid || contatoForm.cardapio.$invalid" type="submit" id="submit" name="submit" class="text-center form-btn">CADASTRAR</button>
                </form>
                <hr>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="js/jquery-1.10.2.min.js"> </script>
    <script type="text/javascript" src="js/bootstrap.min.js" ></script>
    <script type="text/javascript" src="js/jquery-1.10.2.js"></script>
    <script type="text/javascript" src="js/jquery.mixitup.min.js" ></script>
    <script type="text/javascript" src="js/main.js" ></script>

</body>

<?php
include "Estabelecimento.class.php";
include "EstabelecimentoDAO.class.php";

$ob  = new Estabelecimento();
$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$rua = $_POST['rua'];
$cep = $_POST['cep'];
$cnpj = $_POST['cnpj'];
$cardapio = $_POST['cardapio'];

$stmt = $con->prepare($ob->salvar($descricao, $rua, $cep, $cnpj, $nome, $cardapio));

?>



</html>
