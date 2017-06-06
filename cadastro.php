<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
    <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.js"></script>
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


    <script>

    (function( $ ) {
        $(document).ready(function () {

            $('#cep').mask('00000-000');
            $('#cnpj').mask('00.000.000/0000-00');
        });
    })(jQuery);

    </script>
    
    <?php include('header.php'); ?>

    <div id="top" class="starter_container2 bg">
        <div class="follow-container">
            <div class="col-md-11 col-md-offset-1">

                <form name="contatoForm" style="padding-top:120px" action="cadastro.php" method="post">
                    <h2 style="color:white">CADASTRO DE ESTABELECIMENTO</h2>
                    <hr>
                    <div class="row">
                        <div class="col-md-5" >
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
                        </div>
                        <div class="col-md-6">
                            <label style="color: white; margin-right: 2px;">*</label>
                            <label>Descrição:</label>
                            <span style="color: white" ng-show=" contatoForm.descricao.$touched &&  contatoForm.descricao.$invalid">Campo obrigatorio.</span>
                            <textarea rows="4" cols="60" name="descricao" id="descricao" ng-model="descricao" class="form-control" required></textarea>
                            <br>
                            <label style="color: white; margin-right: 2px;">*</label>
                            <label>Cardápio:</label>
                            <span style="color: white" ng-show=" contatoForm.cardapio.$touched &&  contatoForm.cardapio.$invalid">Campo obrigatorio.</span>
                            <textarea rows="4" cols="60" type="text" name="cardapio" id="cardapio" ng-model="cardapio" class="form-control" required></textarea>
                            <hr>
                            <button ng-disabled="contatoForm.nome.$invalid || contatoForm.endereco.$invalid || contatoForm.cep.$invalid || contatoForm.cnpj.$invalid || contatoForm.descricao.$invalid || contatoForm.cardapio.$invalid" type="submit" id="submit" name="submit" class="text-center btn-block form-btn">CADASTRAR</button>
                        </div>
                    </div>
                </form>
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
require_once "class/Estabelecimento.class.php";
require_once "class/EstabelecimentoDAO.class.php";

$con = new Conexao();
$con = $con->obterConexao();
$obDAO  = new EstabelecimentoDAO();
$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$endereco = $_POST['endereco'];
$cep = $_POST['cep'];
$cnpj = $_POST['cnpj'];
$cardapio = $_POST['cardapio'];

try{
    $ob = new Estabelecimento($nome, $descricao, $endereco, $cep, $cnpj, $cardapio);
    $stmt = $con->prepare($obDAO->salvar($ob));
    $html = ShowDialog("Sucesso", "Cadastro realizado com sucesso.", "cadastro.php");
    echo $html;
}
catch(\Exception $e){
    $errorMessage = $e->getMessage();
}



?>

</html>
