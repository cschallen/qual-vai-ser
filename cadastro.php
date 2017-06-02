<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
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

<body>

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
                    <label> Nome: </label>
                    <input type="text" name="nome" id="nome" required="required" class="form-control" />
                    <br>
                    <label>Endereço:</label>
                    <input type="text" name="endereco" id="endereco" required="required" class="form-control"/>
                    <br>
                    <label>CEP:</label>
                    <input type="text" name="cep" id="cep" required="required" class="form-control"/>
                    <br>
                    <label>CNPJ:</label>
                    <input type="text" name="cnpj" id="cnpj" required="required" class="form-control"  />
                    <br>
                    <label>Descrição:</label>
                    <textarea rows="6" cols="60" name="descricao" id="descricao" required="required" class="form-control" ></textarea>
                    <br>
                    <label>Cardápio:</label>
                    <textarea rows="6" cols="60" type="text" name="cardapio" id="cardapio" required="required" class="form-control" ></textarea>            
                </form>   
                <hr>
                <button type="submit" id="submit" name="submit" class="text-center form-btn form-btn">CADASTRAR</button>                 
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