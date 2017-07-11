<?php session_start() ?>
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

      $('#cpf_dono').mask('000.000.000-00');
    });
  })(jQuery);

  </script>


  <?php if (isset($_SESSION['id_dono'])){
    include_once('headerDonoEstabelecimento.php');
  }else{
    include_once('header.php');
  }
  ?>

  <div id="top2" class="starter_container2 bg">
    <div class="follow-container" style="display: flex; justify-content: center;">
      <div class="col-md-11 col-md-offset-3" style="margin: 0; display: flex; justify-content: center;">
        <form name="cadastroDonoForm" style="padding-top:120px" action="cadastroDono.php" method="post">
          <h2 style="color:white;padding-right:5px;">CADASTRO DE DONO DE ESTABELECIMENTO</h2>

          <div class="col-md-5" style="width: 100%;">
            <hr>
            <label style="color: white; margin-right: 2px;">*</label>
            <label> Nome: </label>
            <span style="color: white" ng-show=" cadastroDonoForm.nome_dono.$touched &&  cadastroDonoForm.nome_dono.$invalid">Campo obrigatorio.</span>
            <input type="text" id="nome_dono" name="nome_dono" ng-model="nome_dono" class="form-control" required>
            <br>

            <label style="color: white; margin-right: 2px;">*</label>
            <label>CPF:</label>
            <span style="color: white" ng-show=" cadastroDonoForm.cpf_dono.$touched && cadastroDonoForm.cpf_dono.$invalid">Campo obrigatorio.</span>
            <input type="text" id="cpf_dono" name="cpf_dono" ng-model="cpf_dono" class="form-control" required>
            <br>

            <label style="color: white; margin-right: 2px;">*</label>
            <label>E-mail:</label>
            <span style="color: white" ng-show=" cadastroDonoForm.email_dono.$touched &&  cadastroDonoForm.email_dono.$invalid">Campo obrigatorio.</span>
            <input type="email_dono" name="email_dono" ng-model="email_dono" class="form-control" required>
            <br>

            <label style="color: white; margin-right: 2px;">*</label>
            <label>Senha:</label>
            <span style="color: white" ng-show=" cadastroDonoForm.senha_dono.$touched &&  cadastroDonoForm.senha_dono.$invalid">Campo obrigatorio.</span>
            <input type="password" name="senha_dono" ng-model="senha_dono" class="form-control" required>
            <br>
            <hr>
            <div class="col-md-6" >
              <button ng-disabled="cadastroDonoForm.nome_dono.$invalid || cadastroDonoForm.cpf_dono.$invalid || cadastroDonoForm.email_dono.$invalid || cadastroDonoForm.senha_dono.$invalid" type="submit" name="submit_form" class="text-center btn-block form-btn">CADASTRAR</button>
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


</body>
</html>

<?php
require_once "class/DonoEstabelecimento.class.php";
require_once "class/DonoEstabelecimentoDAO.class.php";

$con = new Conexao();
$con = $con->obterConexao();
$nome = $_POST['nome_dono'];
$email = $_POST['email_dono'];
$cpf = $_POST['cpf_dono'];
$senha = $_POST['senha_dono'];

$obj = new DonoEstabelecimento($nome, $cpf, $email, $senha);

$objDAO  = new DonoEstabelecimentoDAO();

if ($objDAO->salvar($obj) > 0) {
  ?>
  <script type="text/javascript" >alert("Cadastrado com sucesso!");</script>
  <?php
}

?>
<script type="text/javascript" src="js/jquery-1.10.2.min.js"> </script>
<script type="text/javascript" src="js/bootstrap.min.js" ></script>
<script type="text/javascript" src="js/jquery-1.10.2.js"></script>
<script type="text/javascript" src="js/jquery.mixitup.min.js" ></script>
<script type="text/javascript" src="js/main.js" ></script>
