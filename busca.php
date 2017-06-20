<?php
require_once "class/Conexao.class.php";
require_once "class/EstabelecimentoDAO.class.php";
require_once "class/Estabelecimento.class.php";
require_once "class/CardapioDAO.class.php";
require_once "class/AvaliacaoDAO.class.php";



                $busca = $_POST['busca'];
					 $estabelecimentoDAO = new EstabelecimentoDAO();
					 $todosEstabelecimentos = $estabelecimentoDAO->obterTodosBusca($busca);                
                	
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Locais</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css" media="screen" type="text/css">
    <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.js"></script>
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
</head>

<body>
    <?php include('header.php'); ?>
    <div id="top" class=" bg">
        <div class="follow-container">
            <div style="background-color: white !important;"  class="col-md-12">



                         <div class="container theme-showcase" role="main">
        <div class="page-header">
            <h1 class="border-none">Estabelecimentos</h1>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nome do Estabelecimento</th>
                            <th>Endereço</th>
                            <th>Avaliação Média</th>
                            <th>Ação</th>
                        </tr>
                    </thead>
                    <?php foreach ($todosEstabelecimentos as $estabelecimento) {  ?>
                        <tbody>
                            <tr>
                                <td><?php echo $estabelecimento->getIdEstabelecimento(); ?></td>
                                <td><?php echo $estabelecimento->getNome(); ?></td>
                                <td><?php echo $estabelecimento->getRua(); ?></td>
                                <td><?php if ($estabelecimento->ObterNotaMedia($estabelecimento->getIdEstabelecimento())){
                                    echo $estabelecimento->ObterNotaMedia($estabelecimento->getIdEstabelecimento()) . " / 5";;
                                }else {
                                    echo "Sem avaliação";
                                }
                                ?>
                            </td>
                            <td>
                                <button type="button" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#myModal<?php echo $estabelecimento->getIdEstabelecimento(); ?>">Mais informações</button>
                                <button type="button" class="btn btn-xs btn-success" data-toggle="modal" data-target="#myModalAvaliar<?php echo $estabelecimento->getIdEstabelecimento(); ?>">Avaliar Local</button>
                            </td>
                        </tr>
                        <!-- Inicio Modal -->
                        <div class="modal fade" id="myModalAvaliar<?php echo $estabelecimento->getIdEstabelecimento(); ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title text-center" id="myModalLabel">Avaliar Local</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form method="POST" action="avaliaEstabelecimento.php" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label for="recipient-cpf" class="control-label">Digite um CPF válido:</label>
                                                <input name="cpf" type="text" class="cpf form-control">
                                            </div>
                                            <label for="recipient-nota" class="control-label">Dê uma nota:</label>
                                            <div class="btn-group" data-toggle="buttons">
                                                <label class="btn btn-primary">
                                                    <input type="radio" name="nota" id="option1" value="1_<?php echo $estabelecimento->getIdEstabelecimento()?>" autocomplete="off"> 1
                                                </label>
                                                <label class="btn btn-primary">
                                                    <input type="radio" name="nota" id="option2" value="2_<?php echo $estabelecimento->getIdEstabelecimento()?>" autocomplete="off"> 2
                                                </label>
                                                <label class="btn btn-primary">
                                                    <input type="radio" name="nota" id="option3" value="3_<?php echo $estabelecimento->getIdEstabelecimento()?>" autocomplete="off"> 3
                                                </label>
                                                <label class="btn btn-primary">
                                                    <input type="radio" name="nota" id="option4" value="4_<?php echo $estabelecimento->getIdEstabelecimento()?>" autocomplete="off"> 4
                                                </label>
                                                <label class="btn btn-primary">
                                                    <input type="radio" name="nota" id="option5" value="5_<?php echo $estabelecimento->getIdEstabelecimento()?>" autocomplete="off"> 5
                                                </label>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-success">Avaliar</button>
                                                <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Fim Modal -->
                        <!-- Inicio Modal -->
                        <div class="modal fade" id="myModal<?php echo $estabelecimento->getIdEstabelecimento(); ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h2 class="modal-title text-center" id="myModalLabel"><?php echo $estabelecimento->getNome();?></h2>
                                    </div>
                                    <div class="modal-body">
                                        <p><?php echo "<b>Descrição:</b> " . $estabelecimento->getDescricao(); ?></p>
                                        <?php $idEstb = $estabelecimento->getIdEstabelecimento(); ?>
                                        <?php $obDAO = new CardapioDAO(); ?>
                                        <?php $cardapio = $obDAO->obterCardapioEstabelecimento($idEstb); ?>
                                        <?php foreach ($cardapio as $c) {  ?>
                                            <hr>
                                            <?php $dia = $c->getDia();

                                            switch ($dia) {
                                                case 1:
                                                $diaText = "Domingo";
                                                break;
                                                case 2:
                                                $diaText = "Segunda";
                                                break;
                                                case 3:
                                                $diaText = "Terça";
                                                break;
                                                case 4:
                                                $diaText = "Quarta";
                                                break;
                                                case 5:
                                                $diaText = "Quinta";
                                                break;
                                                case 6:
                                                $diaText = "Sexta";
                                                break;
                                                case 7:
                                                $diaText = "Sabado";
                                                break;
                                            }
                                            echo "<b>" . $diaText . "</b>" . ": " . $c->getDescricao();
                                            ?><br><?php


                                        } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Fim Modal -->
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
            </div>
        </div>
    </div>

    <section class="social_connect">
        <div class="text-content container">

        </div>
    </section>
    <script type="text/javascript" src="js/jquery-1.10.2.min.js"> </script>
    <script type="text/javascript" src="js/bootstrap.min.js" ></script>
    <script type="text/javascript" src="js/jquery-1.10.2.js"></script>
    <script type="text/javascript" src="js/jquery.mixitup.min.js" ></script>
    <script type="text/javascript" src="js/main.js" ></script>

    <script type="text/javascript">
    </script>
</body>
</html>
