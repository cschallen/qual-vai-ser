<?php
require_once "class/DonoEstabelecimento.class.php";
require_once "class/DonoEstabelecimentoDAO.class.php";

if(isset($_POST['submit'])){
    $con = new Conexao();
    $con = $con->obterConexao();

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $senha = $_POST['senha'];

    $obj = new DonoEstabelecimento($nome, $cpf, $email, $senha);
    $objDAO  = new DonoEstabelecimentoDAO();

    if($con->prepare($objDAO->salvar($obj))){
        $message = "Cadastro realizado com sucesso!";
    } else {
        $message = "Opa! Houve uma falha e não conseguimos realizar o seu cadastro! Tente novamente mais tarde.";
    }
}
?>


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

    <div class="starter_container2 bg">
        <div class="follow-container" style="display: flex; justify-content: center;">
            <div class="col-md-11 col-md-offset-3" style="margin: 0; display: flex; justify-content: center;">
                <form name="form_dono" style="padding-top:120px" action="cadastroDono.php" method="post">
                    <h2 style="color:white;padding-right:5px;">CADASTRO DE DONO DE ESTABELECIMENTO</h2>

                    <span ng-show="">Salvo com sucesso!</span>
                    <div class="col-md-5" style="width: 100%;">
                        <hr>
                        <label style="color: white; margin-right: 2px;">*</label>
                        <label> Nome: </label>
                        <span style="color: white" ng-show=" form_dono.nome.$touched &&  form_dono.nome.$invalid">Campo obrigatorio.</span>
                        <input type="text" name="nome" ng-model="nome" class="form-control" required>
                        <br>

                        <label style="color: white; margin-right: 2px;">*</label>
                        <label>CPF:</label>
                        <span style="color: white" ng-show=" form_dono.cpf.$touched &&  form_dono.cpf.$invalid">Campo obrigatorio.</span>
                        <input type="text" name="cpf" ng-model="cpf" class="form-control" required>
                        <br>

                        <label style="color: white; margin-right: 2px;">*</label>
                        <label>E-mail:</label>
                        <span style="color: white" ng-show=" form_dono.email.$touched &&  form_dono.email.$invalid">Campo obrigatorio.</span>
                        <input type="email" name="email" ng-model="email" class="form-control" required>
                        <br>

                        <label style="color: white; margin-right: 2px;">*</label>
                        <label>Senha:</label>
                        <span style="color: white" ng-show=" form_dono.senha.$touched &&  form_dono.senha.$invalid">Campo obrigatorio.</span>
                        <input type="password" name="senha" ng-model="senha" class="form-control" required>
                        <br>
                        <hr>
                        <div class="col-md-6" >
                            <button ng-disabled="form_dono.nome.$invalid || form_dono.cpf.$invalid || form_dono.email.$invalid || form_dono.senha.$invalid" type="submit" id="submit" name="submit" class="text-center btn-block form-btn">CADASTRAR</button>
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
</html>
