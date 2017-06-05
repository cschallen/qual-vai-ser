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

    <?php include('header.php'); ?>

    <div id="top" class="starter_container3 bg">
        <div class="follow_container2">
            <div class="col-md-4 col-md-offset-3">
                <h2 style="color:white">LOGIN</h2>
                <hr>
                <form name="contatoForm">
                    <input class="form-control" type="text" name="usuario" placeholder="Usuário" ng-required="true"/>
                    <br>
                    <input class="form-control" type="password" name="senha" placeholder="Senha" ng-required="true" />
                </form>
                <hr>
                <button type="submit" class="text-center form-btn btn-success btn-block form-btn">ACESSAR</button>
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
