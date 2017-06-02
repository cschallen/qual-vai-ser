<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <title>Locais</title>
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
                            <li><a class="navactive color_animation" href="index.html">INÍCIO</a></li>
                            <li><a class="color_animation" href="index.html#about">SOBRE NÓS</a></li>
                            <li><a class="color_animation" href="locais.php">LOCAIS</a></li>
                            <li><a class="color_animation" href="cadastro.php">CADASTRE SEU ESTABELECIMENTO</a></li>
                            <li><a class="color_animation" href="login.php">LOGIN OU CADASTRO</a></li>
                         
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div>
            </div><!-- /.container-fluid -->
        </nav>
         
        <?php
	$busca = $_GET['busca'];
	$conn = pg_connect("host=localhost port=5432 dbname=qual-vai-ser user=postgres password=postgres");
	$sql = "SELECT nome, rua , cep FROM estabelecimento WHERE nome ILIKE '$busca' ORDER BY nome ASC";
	$res = pg_query($conn, $sql);
	if (pg_num_rows($res) > 0) {
		$row = pg_fetch_array($res);
		echo "Teste1";
		echo "<br />Nome: ".$row["nome"]."<br />Rua: ".$row["rua"]."<br />Cep: ".$row["cep"];
	} else if ($conn) {
		$sql = "SELECT nome, rua, cep FROM estabelecimento ORDER BY nome ASC";
		$res = pg_query($conn, $sql);
		if(pg_num_rows($res) > 0) {
			while($row = pg_fetch_array($res)) {
				echo "<br />Nome: ".$row["nome"]."<br />Rua: ".$row["rua"]."<br />Cep: ".$row["cep"];
			}
		} else {
			echo "Nenhum registro encontrado no banco de dados!!";
		}
		pg_close($conn);
	} else {
		echo "Falha na conexão com o PostgreSQL!!";
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