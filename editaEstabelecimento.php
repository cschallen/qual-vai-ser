<?php
   require_once "class/Estabelecimento.class.php";
   require_once "class/EstabelecimentoDAO.class.php";

    $estabelecimentoDAO = new EstabelecimentoDAO();
    $descricao = $_POST['descricao'];
    $dom = $_POST['domingo'];
    var_dump($dom);
    echo "<< dom <br>";
    $segunda = $_POST['segunda'];
    $terca = $_POST['terca'];
    $quarta= $_POST['quarta'];
    $quinta= $_POST['quinta'];
    $sexta = $_POST['sexta'];
    $sabado = $_POST['sabado'];
    $id_estabelecimento = $_POST['id'];

    $estabelecimentoDAO->editaDescricao($id_estabelecimento, $_POST['descricao']);
    $estabelecimentoDAO->editaCardapio($id_estabelecimento, 1, $_POST['domingo']);
    $estabelecimentoDAO->editaCardapio($id_estabelecimento, 2, $_POST['segunda']);
    $estabelecimentoDAO->editaCardapio($id_estabelecimento, 3, $_POST['terca']);
    $estabelecimentoDAO->editaCardapio($id_estabelecimento, 4, $_POST['quarta']);
    $estabelecimentoDAO->editaCardapio($id_estabelecimento, 5, $_POST['quinta']);
    $estabelecimentoDAO->editaCardapio($id_estabelecimento, 6, $_POST['sexta']);
    $estabelecimentoDAO->editaCardapio($id_estabelecimento, 7, $_POST['sabado']);

    // header("location: areaAdmin.php");

?>
