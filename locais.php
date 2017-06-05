<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <title>Locais</title>
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/locais.css">
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
                <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">Qual vai ser?</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav main-nav  clear navbar-right ">
                            <li><a class="navactive color_animation" href="index.php">INÍCIO</a></li>
                            <li><a class="color_animation" href="index.php#about">SOBRE NÓS</a></li>
                            <li><a class="color_animation" href="locais.php">LOCAIS</a></li>
                            <li><a class="color_animation" href="cadastro.php">CADASTRE SEU ESTABELECIMENTO</a></li>
                            <li><a class="color_animation" href="login.php">LOGIN</a></li>

                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div>
            </div><!-- /.container-fluid -->
        </nav>

        <?php
        require_once "class/Estabelecimento.class.php";
        require_once "class/EstabelecimentoDAO.class.php";
        require_once "class/AvaliacaoDAO.class.php";

        $estabelecimentoDAO = new EstabelecimentoDAO();
        $avaliacaoDAO = new AvaliacaoDAO();


           $todosEstabelecimentos = $estabelecimentoDAO->obterTodos();
           foreach ($todosEstabelecimentos as $estabelecimento) {
             //  echo "id: " . $estabelecimento->getIdEstabelecimento();
             echo '<div class="jumbotron">';
             echo '<div class = "container">';
             echo "<h1 class = 'nomeEstabelecimento'> " . $estabelecimento->getNome() . "</h1>";
             echo "<p>Descricao: " . $estabelecimento->getDescricao() . "</p>";
             echo "<p>Rua: " . $estabelecimento->getRua() . "</p>";
             echo "<p>CEP: " . $estabelecimento->getCep() . "</p>";
             echo "<p>CNPJ: " . $estabelecimento->getCnpj() . "</p>";
             echo "<p>Cardápio: " . $estabelecimento->getCardapio() . "</p>";
             echo '</div>';
             echo "</div>";
           }
           ?>




        <!-- ============ Social Section  ============= -->

        <section class="social_connect">
            <div class="text-content container">

            </div>
        </section>


        <!-- ============ Footer Section  ============= -->


        <script type="text/javascript" src="js/jquery-1.10.2.min.js"> </script>
        <script type="text/javascript" src="js/bootstrap.min.js" ></script>
        <script type="text/javascript" src="js/jquery-1.10.2.js"></script>
        <script type="text/javascript" src="js/jquery.mixitup.min.js" ></script>
        <script type="text/javascript" src="js/main.js" ></script>

    </body>
</html>
