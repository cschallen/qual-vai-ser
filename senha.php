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


    <div id="top" class="starter_container3 bg">
        <div class="follow-container">
            <div class="col-md-11 col-md-offset-1">
                <form name="contatoForm" style="padding-top:120px" action="cadastro.php" method="post">                                 

                <?php
                require_once "class/DonoEstabelecimentoDAO.class.php";
                $obDAO = new DonoEstabelecimentoDAO();
                @$idDono = $_GET['idDono'];
                @$login = $_POST['login'];
                @$senha = $_POST['senha'];
                DonoEstabelecimentoDAO::conectar();
                $ob->login($idDono,$login,$senha);
                ?>

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
