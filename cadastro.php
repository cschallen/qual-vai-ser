<?php
session_start();
require_once "class/Estabelecimento.class.php";
require_once "class/EstabelecimentoDAO.class.php";
require_once "class/CardapioDAO.class.php";

if(isset($_POST['submit'])){

  $con = new Conexao();
  $con = $con->obterConexao();
  $idDono = $_SESSION['id_dono'];
  $nome = $_POST['nome'];
  $descricao = $_POST['descricao'];
  $endereco = $_POST['endereco'];
  $cep = $_POST['cep'];
  $cnpj = $_POST['cnpj'];
  $statusEst = 'Pendente';
  $request_url = "http://maps.googleapis.com/maps/api/geocode/xml?address=".$cep;
  $xml = simplexml_load_file($request_url) or die("url not loading");
  $status = $xml->status;

  if ($status=="OK") {
    $lat = $xml->result->geometry->location->lat;
    $lng = $xml->result->geometry->location->lng;
  }else{
    $lat = 0;
    $lng = 0;
  }

  $objt = new Estabelecimento($nome, $descricao, $endereco, $cep, $lat, $lng, $cnpj, $idDono, $statusEst);
  $obDAO  = new EstabelecimentoDAO();

  if($con->prepare($obDAO->salvar($objt))){
    $passou = true;
  } else {
    $success = "Opa! Houve uma falha e não conseguimos realizar o seu cadastro! Tente novamente mais tarde.";
    $passou = false;
  }

if ($passou){
  $idEstabelecimento = $obDAO->obterIdEstabelcimento($_POST['cnpj']);
  $cardapioDAO = new CardapioDAO();

  if (isset($_POST['cardapio_dom'])){
    $cardapioDAO->salvar(1 ,$_POST['cardapio_dom'], $idEstabelecimento);
  }

  if (isset($_POST['cardapio_seg'])){
    $cardapioDAO->salvar(2, $_POST['cardapio_seg'], $idEstabelecimento);
  }

  if (isset($_POST['cardapio_ter'])){
    $cardapioDAO->salvar(3, $_POST['cardapio_ter'], $idEstabelecimento);
  }

  if (isset($_POST['cardapio_qua'])){
    $cardapioDAO->salvar(4, $_POST['cardapio_qua'], $idEstabelecimento);
  }

  if (isset($_POST['cardapio_qui'])){
    $cardapioDAO->salvar(5, $_POST['cardapio_qui'], $idEstabelecimento);
  }

  if (isset($_POST['cardapio_sex'])){
    $cardapioDAO->salvar(6, $_POST['cardapio_sex'], $idEstabelecimento);
  }

  if (isset($_POST['cardapio_sab'])){
    $cardapioDAO->salvar(7, $_POST['cardapio_sab'], $idEstabelecimento);
 }

 $success = "Cadastro realizado com sucesso!";

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
      $('#cnpj').mask('00.000.000/0000-00');
    });
  })(jQuery);

  </script>

  <?php
  include_once('headerDonoEstabelecimento.php');

  ?>

  <script>
  $('#nav-1').on('click', function(){
    $('.')
  });
  </script>

  <div id="top" class="starter_container2 bg">
    <div class="follow-container">
      <div class="col-md-11">


        <form name="contatoForm" style="padding-top:120px" action="cadastro.php" method="post">
          <h2 style="color:white">CADASTRO DE ESTABELECIMENTO</h2>
          <?php
          if (isset($success)){ echo "<div style='margin-top: 17px;'>" . "-->  " . $success . "</div>";}
          ?>
          <hr>

          <div class="form">
            <form name="contatoForm" style="padding-top:120px" action="cadastro.php" method="post">
              <div class="container1">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item active">
                    <a style="text-decoration: none" class="nav-link navactive" data-toggle="tab" href="#part1" role="tab">Passo 1</a>
                  </li>
                  <li class="nav-item">
                    <a style="text-decoration: none" class="nav-link" data-toggle="tab" href="#part2" role="tab">Passo 2</a>
                  </li>
                </ul>
              </div>

              <div class="container2">
                <div class="yellow tab-content" style="width: 90% !important; height: 90% !important;">
                  <div class="bbb tab-pane active" id="part1" role="tabpanel">

                    <label style="color: red; margin-right: 2px;">*</label>
                    <label> Nome: </label>
                    <span style="color: red" ng-show=" contatoForm.nome.$touched &&  contatoForm.nome.$invalid">Campo obrigatorio.</span>
                    <input type="text" name="nome" id="nome" ng-model="nome" class="form-control" required>
                    <br>
                    <label style="color: red; margin-right: 2px;">*</label>
                    <label>Endereço:</label>
                    <span style="color: red" ng-show=" contatoForm.endereco.$touched &&  contatoForm.endereco.$invalid">Campo obrigatorio.</span>
                    <input type="text" name="endereco" id="endereco" ng-model="endereco" class="form-control" required>
                    <br>
                    <label style="color: red; margin-right: 2px;">*</label>
                    <label>CEP:</label>
                    <span style="color: red" ng-show=" contatoForm.cep.$touched &&  contatoForm.cep.$invalid">Campo obrigatorio.</span>
                    <input type="text" name="cep" id="cep" ng-model="cep" class="form-control" required>
                    <br>
                    <label style="color: red; margin-right: 2px;">*</label>
                    <label>CNPJ:</label>
                    <span style="color: red" ng-show=" contatoForm.cnpj.$touched &&  contatoForm.cnpj.$invalid">Campo obrigatorio.</span>
                    <input type="text" name="cnpj" id="cnpj" ng-model="required" class="form-control" required>
                    <br>
                    <label style="color: red; margin-right: 2px;">*</label>
                    <label>Descrição:</label>
                    <span style="color: red" ng-show=" contatoForm.descricao.$touched &&  contatoForm.descricao.$invalid">Campo obrigatorio.</span>
                    <textarea rows="4" cols="60" name="descricao" id="descricao" ng-model="descricao" class="form-control" required></textarea>
                    <br>

                  </div>

                  <div class="tab-pane form-group" id="part2" role="tabpanel">
                    <div class="aaa">
                      <div class="red">
                        <label style="color: red; margin-right: 2px;">*</label>
                        <label>Cardápio Segunda</label>
                        <span style="color: red" ng-show=" contatoForm.cardapio.$touched &&  contatoForm.cardapio.$invalid">Campo obrigatorio.</span>
                        <textarea style="width: 96%;" rows="3" cols="30" type="text" name="cardapio_seg" id="cardapio_seg" ng-model="cardapio_seg" class="form-control" required></textarea>
                        <label>Cardápio Terça</label>
                        <!-- <span style="color: red" ng-show=" contatoForm.cardapio.$touched &&  contatoForm.cardapio.$invalid">Campo obrigatorio.</span> -->
                        <textarea style="width: 96%;" rows="3" cols="30" type="text" name="cardapio_ter" id="cardapio_ter" ng-model="cardapio_ter" class="form-control"></textarea>

                        <label>Cardápio Quarta</label>
                        <!-- <span style="color: red" ng-show=" contatoForm.cardapio.$touched &&  contatoForm.cardapio.$invalid">Campo obrigatorio.</span> -->
                        <textarea style="width: 96%;" rows="3" cols="30" type="text" name="cardapio_qua" id="cardapio_qua" ng-model="cardapio_qua" class="form-control"></textarea>
                        <label>Cardápio Quinta</label>
                        <!-- <span style="color: red" ng-show=" contatoForm.cardapio.$touched &&  contatoForm.cardapio.$invalid">Campo obrigatorio.</span> -->
                        <textarea style="width: 96%;" rows="3" cols="30" type="text" name="cardapio_qui" id="cardapio_qui" ng-model="cardapio_qui" class="form-control"></textarea>

                      </div>

                      <div class="blue">
                        <label>Cardápio Sexta</label>
                        <!-- <span style="color: red" ng-show=" contatoForm.cardapio.$touched &&  contatoForm.cardapio.$invalid">Campo obrigatorio.</span> -->
                        <textarea style="width: 96%;" rows="3" cols="30" type="text" name="cardapio_sex" id="cardapio_sex" ng-model="cardapio_sex" class="form-control"></textarea>

                        <label>Cardápio Sábado</label>
                        <!-- <span style="color: red" ng-show=" contatoForm.cardapio.$touched &&  contatoForm.cardapio.$invalid">Campo obrigatorio.</span> -->
                        <textarea style="width: 96%;" rows="3" cols="30" type="text" name="cardapio_sab" id="cardapio_sab" ng-model="cardapio_sab" class="form-control"></textarea>

                        <label>Cardápio Domingo</label>
                        <!-- <span style="color: red" ng-show=" contatoForm.cardapio.$touched &&  contatoForm.cardapio.$invalid">Campo obrigatorio.</span> -->
                        <textarea style="width: 96%;" rows="3" cols="30" type="text" name="cardapio_dom" id="cardapio_dom" ng-model="cardapio_dom" class="form-control"></textarea>

                        <hr>
                        <button ng-disabled="contatoForm.cardapio_seg.$invalid || contatoForm.nome.$invalid || contatoForm.endereco.$invalid || contatoForm.cep.$invalid || contatoForm.cnpj.$invalid || contatoForm.descricao.$invalid" type="submit" id="submit" name="submit" class="text-center btn-block form-btn">CADASTRAR</button>
                      </div>
                    </div>


                  </div>
                </div>
              </div>
            </form>
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
