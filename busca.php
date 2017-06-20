<?php
  require_once "class/Conexao.class.php";
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
<div id="top" class="starter_container3 bg">
<div class="follow-container">
            <div class="col-md-12">
                <div class="page-header">
                   <h2 style="padding-top:120px">ESTABELECIMENTOS</h2>
                </div>

<?php
$busca = $_POST['busca'];
$sql = pg_query("SELECT * FROM estabelecimentos WHERE nome LIKE '%".$busca."%'");
$row = pg_num_rows($sql);
if($row > 0){
	while($linha = pg_fetch_array($sql)){
		$nome = $linha['nome'];
		$rua = $linha['rua'];
		
		echo @$nome;
		echo @$rua;
	}
}
else {
	echo "Nenhum registro encontrado!";
}
?>
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
