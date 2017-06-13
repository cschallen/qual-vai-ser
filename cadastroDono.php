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
            $('#cpf').mask('000.000.000-00');
        });
    })(jQuery);

    </script>

    <?php include('header.php'); ?>

    <div id="top" class="starter_container2 bg">
        <div class="follow-container" style="display: flex; justify-content: center;">
            <div class="col-md-11 col-md-offset-3" style="margin: 0; display: flex; justify-content: center;">
                <form name="contatoForm" style="padding-top:120px" action="cadastroDono.php" method="post">
                    <h2 style="color:white;padding-right:5px;">CADASTRO DE DONO DE ESTABELECIMENTO</h2>
                    <div class="col-md-5" style="width: 100%;">
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
                        <label>CPF:</label>
                        <span style="color: white" ng-show=" contatoForm.cpf.$touched &&  contatoForm.cpf.$invalid">Campo obrigatorio.</span>
                        <input type="text" name="cpf" id="cpf" ng-model="cpf" class="form-control" required>
                        <br>

                        <label style="color: white; margin-right: 2px;">*</label>
                        <label>E-mail:</label>
                        <span style="color: white" ng-show=" contatoForm.email.$touched &&  contatoForm.email.$invalid">Campo obrigatorio.</span>
                        <input type="email" name="email" id="email" ng-model="email" class="form-control" required>
                        <br>

                        <label style="color: white; margin-right: 2px;">*</label>
                        <label>Login:</label>
                        <span style="color: white" ng-show=" contatoForm.login.$touched &&  contatoForm.login.$invalid">Campo obrigatorio.</span>
                        <input type="text" name="login" id="login" ng-model="login" class="form-control" required>
                        <br>

                        <label style="color: white; margin-right: 2px;">*</label>
                        <label>Senha:</label>
                        <span style="color: white" ng-show=" contatoForm.senha.$touched &&  contatoForm.senha.$invalid">Campo obrigatorio.</span>
                        <input type="password" name="senha" id="senha" ng-model="senha" class="form-control" required>
                        <br>
                        <hr>
                        <div class="col-md-6" >
                            <button ng-disabled="contatoForm.nome.$invalid || contatoForm.endereco.$invalid || contatoForm.cep.$invalid || contatoForm.cpf.$invalid || contatoForm.email.$invalid || contatoForm.login.$invalid || contatoForm.senha.$invalid" type="submit" id="submit" name="submit" class="text-center btn-block form-btn">CADASTRAR</button>
                        </div>
                        <div class="col-md-6">
                            <a href="login.php">
                                <input type="button" class="text-center btn-block form-btn" value="VOLTAR PARA LOGIN" />
                            </a>
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
require_once "class/DonoEstabelecimento.class.php";
require_once "class/DonoEstabelecimentoDAO.class.php";

$con = new Conexao();
$con = $con->obterConexao();
$obDAO  = new DonoEstabelecimentoDAO();
$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$cep = $_POST['cep'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$ob = new DonoEstabelecimento($nome, $endereco, $cep, $cpf, $email, $senha);
$stmt = $con->prepare($obDAO->salvar($ob));

?>

</html>
