<?php
require_once "class/EstabelecimentoDAO.class.php";
require_once "class/Estabelecimento.class.php";
require_once "class/Conexao.class.php";

 $estabelecimentoDAO = new EstabelecimentoDAO();
 $todosEstabelecimentos = $estabelecimentoDAO->obterTodos();


   $conn = pg_connect("host=localhost port=5432 dbname=qual-vai-ser user=postgres password=postgres");
    
   $sql = pg_query($conn, $comando);
    
    $idEstabelecimento = pg_escape_string($_POST['id']);
   
    
    $posicao = strpos($idEstabelecimento, '/');
    $status = substr($idEstabelecimento, $posicao+1); 
    
    $idEstab = strstr($idEstabelecimento, "/".$status, true);
    
    echo $idEstab;
    
   $comando = "UPDATE estabelecimento SET status = '$status' WHERE id_estabelecimento = '$idEstab'";
   return $con->exec($comando);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Locais</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css" media="screen" type="text/css">
    <script src="https:cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.js"></script>
    <link href='http:fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <link href='http:fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style-portfolio.css">
    <link rel="stylesheet" href="css/picto-foundry-food.css" />
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link rel="icon" href="favicon-1.ico" type="image/x-icon">
    <link href="http:netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-theme.css">
</head>

<body>
	<?php include_once('headerLogado.php');?>
	<div id="top" class="starter_container4 bg">
        <div class="follow-container">
            <div class="col-md-11">
            	 <div style="padding-top:120px">
                    <h3 >GERÊNCIA DE ESTABELECIMENTOS</h3>
					<div class="form" style="width: 80%;margin:auto;justify-content:left;color:gray;opacity: 0.9;filter: Alpha(opacity=50);border-radius:10px">
                   		<form name="contatoForm"  action="areaAdmin.php" method="post">
                   			<div class="container1">
                            	<ul class="nav nav-tabs" role="tablist">
                              	  <li class="nav-item active">
                               	     <a style="text-decoration: none" class="nav-link navactive" data-toggle="tab" href="#part1" role="tab">Pendentes</a>
                               	  </li>
                                  <li class="nav-item">
                                     <a style="text-decoration: none" class="nav-link" data-toggle="tab" href="#part2" role="tab">Aprovados</a>
                                  </li>
                           		</ul>
                        	</div>
                        	<div class="container2">
                        		<div class="tab-content">
                               		<div class="tab-pane active" id="part1" role="tabpanel">
                               	 		<table class="table table-stripped">
											<thead>
												<tr>
													<th>#</th>
													<th>Nome do Estabelecimento</th>
													<th>Endereço</th>
													<th>Informações/Cardápio</th>
													<th>Ação</th>
												</tr>
											</thead>
											<?php foreach ($todosEstabelecimentos as $estabelecimento) {
												?>
											<tbody>
											 <tr>
												<td><?php echo $estabelecimento->getIdEstabelecimento(); ?></td>
												<td><?php echo $estabelecimento->getNome(); ?></td>
												<td><?php echo $estabelecimento->getRua(); ?></td>
												<td></td>
											
												<td>
													<button class="btn btn-success" >
														<a href="areaAdmin.php?id=<?php $estabelecimento->getIdEstabelecimento(); ?>/Aprovado" style="color:white">
															<span class="glyphicon glyphicon-ok-sign"></span> Aprovar
														</a>
													</button>
    											</td>
    											<td>
													<button class="btn btn-danger" >
														<a href="areaAdmin.php?id=<?php $estabelecimento->getIdEstabelecimento(); ?>/Reprovado" style="color:white">
															<span class="glyphicon glyphicon-remove-sign"></span> Reprovar
														</a>
													</button>
												
    											</td>
    											<?php } ?>
											 </tr>                                              
											</tbody>
								 		</table>
                               		</div>
                               		<div class="tab-pane form-group" id="part2" role="tabpanel">
                               	 		<table class="table">
											<thead>
												<tr>
													<th>#</th>
													<th>Nome do Estabelecimento</th>
													<th>Endereço</th>
													<th>Informações/Cardápio</th>
													<th>Ação</th>
												</tr>
											</thead>
											<?php foreach ($todosEstabelecimentos as $estabelecimento) { ?>
												
											<tbody>
												<tr>
													<td><?php echo $estabelecimento->getIdEstabelecimento(); ?></td>
													<td><?php echo $estabelecimento->getNome(); ?></td>
													<td><?php echo $estabelecimento->getRua(); ?></td>
													<td></td>
											<?php } ?>
    												<td>
													<button class="btn btn-danger" >
														<a href="areaAdmin.php?id=<?php $estabelecimento->getIdEstabelecimento(); ?>/Reprovado" style="color:white">
															<span class="glyphicon glyphicon-remove-sign"></span> Reprovar
														</a>
													</button>
    												</td>
												</tr>                                              
											</tbody>
								 		</table>
                               		</div>
                           		</div>
                        	</div>
                   		</form>
               		</div>
				 </div>
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
