<?php
   require_once "class/Estabelecimento.class.php";
   require_once "class/EstabelecimentoDAO.class.php";
   require_once "class/Conexao.class.php";

    $estabelecimentoDAO = new EstabelecimentoDAO();
    $idEstabelecimento = $_GET['id'];

    $posicao = strpos($idEstabelecimento, '/');
    $status = substr($idEstabelecimento, $posicao+1);
    $idEstab = strstr($idEstabelecimento, "/".$status, true);



    $teste = $estabelecimentoDAO->editaSituacao($idEstab, $status);

    header("location: areaAdmin.php");

?>
