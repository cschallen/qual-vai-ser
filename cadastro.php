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
                            <li><a class="color_animation" href="cadastro.php">CADASTRE SEU ESTABELECIMENTO</a></li>
                            <li><a class="color_animation" href="#">LOGIN</a></li>
                         
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div>
            </div><!-- /.container-fluid -->
        </nav>
         
        <section  id="reservation"  class="description_content">
            <div class="text-content container"> 
                <div class="inner contact">
						<h3>CADASTRO DE ESTABELECIMENTO:</h3>
                    <!-- Form Area -->
                    <div class="contact-form">
                        <!-- Form -->
                        <form id="contact-us" method="post" action="reserve.php">
                            <!-- Left Inputs -->
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-xs-12">
                                        <div class="row">
                                           
                                                <!-- Name -->
                                                <input type="text" name="first_name" id="first_name" required="required" class="form" placeholder="Nome do estabelecimento" />
                                                <input type="text" name="last_name" id="last_name" required="required" class="form" placeholder="Endereço" />
                                                <input type="text" name="state" id="state" required="required" class="form" placeholder="CEP" />
                                                <input type="text" name="datepicker" id="datepicker" required="required" class="form" placeholder="CNPJ" />
                                          

                                         
                                                <!-- Name -->
                                                <textarea rows="10" cols="60" name="phone" id="phone" required="required" class="form" placeholder="Descrição"></textarea>
                                                        
                                        
                                               
                                                <textarea rows="10" cols="60" type="text" name="guest" id="guest" required="required" class="form" placeholder="Cardápio"></textarea>
												 <!-- Send Button -->
                                                <button type="submit" id="submit" name="submit" class="text-center form-btn form-btn">Cadastrar</button> 


                                        
                                               
                                            
                                            
                                        </div>
                                    </div>                                                                 
                                </div>
                            </div>
                            <!-- Clear -->
                            <div class="clear"></div>
                        </form>
                    </div><!-- End Contact Form Area -->
                </div><!-- End Inner -->
            </div>
        </section>
     

        


        <script type="text/javascript" src="js/jquery-1.10.2.min.js"> </script>
        <script type="text/javascript" src="js/bootstrap.min.js" ></script>
        <script type="text/javascript" src="js/jquery-1.10.2.js"></script>     
        <script type="text/javascript" src="js/jquery.mixitup.min.js" ></script>
        <script type="text/javascript" src="js/main.js" ></script>

    </body>
</html>