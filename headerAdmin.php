<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="row">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">Qual vai ser?</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav main-nav  clear navbar-right ">
                    <li><a class="navactive color_animation" href="areaAdmin.php">INÍCIO</a></li>
                    <li><a class="color_animation" href="#about">SOBRE NÓS</a></li>
                    <li><a class="color_animation" href="locais.php">LOCAIS</a></li>
                    <li><div class="dropdown">
                          <button class="btn btn-basic btn-lg dropdown-toggle" type="button" data-toggle="dropdown">Olá, <?php echo ($_SESSION['nome']); ?>
                          <span class="caret"></span></button>
                          <ul class="dropdown-menu">
                            <li class="dropdown-header">Sua área</li>
                            <li><a href="#">ACEITAR INCLUSÃO DE RESTAURANTES</a></li>
                            <li><a href="#">VER RESTAURANTES ATIVOS</a></li>
                            <li><a href="logout.php">SAIR</a></li>
                          </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
