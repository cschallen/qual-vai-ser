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
        <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.css" rel="stylesheet">
        <link href="css/star-rating.css" media="all" rel="stylesheet" type="text/css" />
    </head>

    <body>

        <?php include('header.php'); ?>
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
             echo "<p>Endereço: " . $estabelecimento->getRua() . "</p>";
             echo "<p>CEP: " . $estabelecimento->getCep() . "</p>";
             echo "<p>CNPJ: " . $estabelecimento->getCnpj() . "</p>";
             echo "<p>Cardápio: " . $estabelecimento->getCardapio() . "</p>";
             echo "<p>Avaliação média: " . $estabelecimento->ObterNotaMedia($estabelecimento->getIdEstabelecimento()) . "/5</p>";
             echo '</div>';
             echo "</div>";
        }
       ?>

        <section class="social_connect">
            <div class="text-content container">

            </div>
        </section>

        <script type="text/javascript" src="js/jquery-1.10.2.min.js"> </script>
        <script type="text/javascript" src="js/bootstrap.min.js" ></script>
        <script type="text/javascript" src="js/jquery-1.10.2.js"></script>
        <script type="text/javascript" src="js/jquery.mixitup.min.js" ></script>
        <script type="text/javascript" src="js/main.js" ></script>

    </body>
</html>
