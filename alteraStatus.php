<?php
   require_once "class/Estabelecimento.class.php";
   require_once "class/EstabelecimentoDAO.class.php";
   require_once "class/Conexao.class.php";
    
    $con = new Conexao();
    $con = $con->obterConexao();

    $idEstabelecimento = $_GET['id'];
    
    $posicao = strpos($idEstabelecimento, '/');
    $status = substr($idEstabelecimento, $posicao+1); 
    
    $idEstab = strstr($idEstabelecimento, "/".$status, true);
    
    
    $comando = "UPDATE estabelecimento SET status = '$status' WHERE id_estabelecimento = '$idEstab'";
    return $con->exec($comando);
	$redireciona = "areaAdmin.php";
   	header("location:$redireciona");
?>
