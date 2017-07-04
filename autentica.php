<?php
session_start();
// Verifica se houve POST e se o usuário ou a senha é(são) vazio(s)
if ((empty($_POST['email']) OR empty($_POST['senha']))) {
  $_SESSION['loginErro'] = "Voce esqueceu algum campo.";
  header("location: login.php");
}

$email = pg_escape_string ($_POST['email']);
$senha = pg_escape_string ($_POST['senha']);

$comando ="SELECT id_dono_estabelecimento, nome, tipo
FROM DonoEstabelecimento
WHERE email = '$email' and senha = '" . md5($senha) . "'";

//fazendo a conexao manualmente, n consegui arrumar isso
$conn = pg_connect("host=localhost port=5432 dbname=qual-vai-ser user=postgres password=postgres");
$sql = pg_query($conn, $comando);
if (pg_num_rows($sql) == 1) {
  $resultado = pg_fetch_assoc($sql);
  $_SESSION ['id_dono'] = $resultado['id_dono_estabelecimento'];
  $_SESSION['nome']= $resultado['nome'];
  $_SESSION['tipo']= $resultado['tipo'];
  if($_SESSION['tipo'] == 1){
    header("location: index.php");
  } else {
    header('location: areaAdmin.php');
  }
} else {
  $_SESSION['loginErro'] = "Email ou senha estão incorretos.";
  header("location: login.php");
}

?>
