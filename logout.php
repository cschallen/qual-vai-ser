<?php
  session_start();

  unset($_SESSION['id_dono'], $_SESSION['nome']);

  session_destroy();

  header('location: index.php');

?>
