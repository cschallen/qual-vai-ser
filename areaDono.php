<?php
session_start();
require_once "class/Estabelecimento.class.php";
require_once "class/EstabelecimentoDAO.class.php";
require_once "class/CardapioDAO.class.php";
require_once "class/AvaliacaoDAO.class.php";

$estabelecimentoDAO = new EstabelecimentoDAO();

$todosEstabelecimentos = $estabelecimentoDAO->obterTodosDistAprovado(); ?>
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
    <script type="text/javascript" src="js/jquery-1.10.2.min.js"> </script>
    <script type="text/javascript" src="js/bootstrap.min.js" ></script>
    <script type="text/javascript" src="js/jquery-1.10.2.js"></script>
    <script type="text/javascript" src="js/jquery.mixitup.min.js" ></script>
    <script type="text/javascript" src="js/main.js" ></script>
</head>
<script>
(function( $ ) {
    $(document).ready(function () {

        $('.cep').mask('00000-000');
        $('.cpf').mask('000.000.000-00');
    });
})(jQuery);

</script>

<body>
    <?php if (isset($_SESSION['id_dono'])){
    				if($_SESSION['tipo'] == 0){
          			include_once('headerAdmin.php');
    				}else {
    					include_once('headerDonoEstabelecimento.php');
   		 		}
    		 }else{
            	include_once('header.php');
          }
    ?>

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
                            <th>Ação</th>
                        </tr>
                    </thead>
                    <?php foreach ($todosEstabelecimentos as $estabelecimento) {
                        if ($_SESSION ['id_dono'] == $estabelecimento->getIdDonoEstabelecimento()){?>
                          <tbody>
                              <tr>
                                  <td><?php echo $estabelecimento->getIdEstabelecimento(); ?></td>
                                  <td><?php echo $estabelecimento->getNome(); ?></td>
                              </td>
                              <td>
                                <button type="button" class="btn btn-xs btn-warning" data-toggle="modal" data-target="#exampleModal" data-whatever="<?php echo $estabelecimento->getIdEstabelecimento(); ?>"
                                                                                                                                     data-whateverdescricao="<?php echo $estabelecimento->getDescricao();?>"
                                                                                                                                     data-whateverdomingo="<?php echo $estabelecimentoDAO->obterCardapios(1,$estabelecimento->getIdEstabelecimento()); ?>"
                                                                                                                                     data-whateversegunda="<?php echo $estabelecimentoDAO->obterCardapios(2,$estabelecimento->getIdEstabelecimento()); ?>"
                                                                                                                                     data-whateverterca="<?php echo $estabelecimentoDAO->obterCardapios(3,$estabelecimento->getIdEstabelecimento()); ?>"
                                                                                                                                     data-whateverquarta="<?php echo $estabelecimentoDAO->obterCardapios(4,$estabelecimento->getIdEstabelecimento()); ?>"
                                                                                                                                     data-whateverquinta="<?php echo $estabelecimentoDAO->obterCardapios(5,$estabelecimento->getIdEstabelecimento()); ?>"
                                                                                                                                     data-whateversexta="<?php echo $estabelecimentoDAO->obterCardapios(6,$estabelecimento->getIdEstabelecimento()); ?>"
                                                                                                                                     data-whateversabado="<?php echo $estabelecimentoDAO->obterCardapios(7,$estabelecimento->getIdEstabelecimento()); ?>">Editar Estabelecimento</button>
                                  <a href="alteraStatus.php?id=<?php echo $estabelecimento->getIdEstabelecimento(); ?>/Reprovado" class="btn btn-xs btn-danger" role="button">Excluir Estabelecimento</a>
                              </td>
                          </tr>
                      <?php }} ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Inicio Modal editar -->
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="exampleModalLabel">Editar Estabelecimento</h4>
			  </div>
			  <div class="modal-body">
				<form method="POST" action="editaEstabelecimento.php" enctype="multipart/form-data">
				  <div class="form-group">
					<label for="recipient-name" class="control-label">Descrição:</label>
					<input name="descricao"  type="text" class="form-control" id="descricao">
				  </div>
				  <div class="form-group">
					<label for="message-text" class="control-label">Cardápio de Domingo:</label>
					<textarea name="domingo" class="form-control" id="domingo"></textarea>
				  </div>
				  <div class="form-group">
					<label for="message-text" class="control-label">Cardápio de Segunda:</label>
					<textarea name="segunda" class="form-control" id="segunda"></textarea>
				  </div>
				  <div class="form-group">
					<label for="message-text" class="control-label">Cardápio de Terca:</label>
					<textarea name="terca" class="form-control" id="terca"></textarea>
				  </div>
				  <div class="form-group">
					<label for="message-text" class="control-label">Cardápio de Quarta:</label>
					<textarea name="quarta" class="form-control" id="quarta"></textarea>
				  </div>
				  <div class="form-group">
					<label for="message-text" class="control-label">Cardápio de Quinta:</label>
					<textarea name="quinta" class="form-control" id="quinta"></textarea>
				  </div>
				  <div class="form-group">
					<label for="message-text" class="control-label">Cardápio de Sexta:</label>
					<textarea name="sexta" class="form-control" id="sexta"></textarea>
					<label for="message-text" class="control-label">Cardápio de sabado:</label>
					<textarea name="sabado" class="form-control" id="sabado"></textarea>
				  </div>
				<input name="id" type="hidden" class="form-control" id="id-curso" value="">

				<button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
				<button type="submit" class="btn btn-success">Editar</button>

				</form>
			  </div>

			</div>
		  </div>
		</div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<script type="text/javascript">
		$('#exampleModal').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Button that triggered the modal
		  var recipient = button.data('whatever') // Extract info from data-* attributes
		  var descricao = button.data('whateverdescricao')
		  var domingo = button.data('whateverdomingo')
		  var segunda = button.data('whateversegunda')
		  var terca = button.data('whateverterca')
		  var quarta = button.data('whateverquarta')
		  var quinta = button.data('whateverquinta')
		  var sexta = button.data('whateversexta')
		  var sabado = button.data('whateversabado')
		  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
		  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
		  var modal = $(this)
		  modal.find('.modal-title').text('Editar Estabelecimento')
		  modal.find('#id-curso').val(recipient)
		  modal.find('#descricao').val(descricao)
		  modal.find('#domingo').val(domingo)
		  modal.find('#segunda').val(segunda)
		  modal.find('#terca').val(terca)
		  modal.find('#quarta').val(quarta)
		  modal.find('#quinta').val(quinta)
		  modal.find('#sexta').val(sexta)
		  modal.find('#sabado').val(sabado)

		})
	</script>

    <section class="social_connect">
        <div class="text-content container">

        </div>
    </section>

    <script type="text/javascript">
    </script>
</body>
</html>
