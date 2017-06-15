
<?php

  require_once "class/Estabelecimento.class.php";
  require_once "class/EstabelecimentoDAO.class.php";
  require_once "class/AvaliacaoDAO.class.php";

  if (isset($_POST['nota'])) {
    $cpf = $_POST['$cpf'];
    LIST ($nota, $id_estabelecimento) = explode("_", $_POST['nota']);

    if ((validaCPF($cpf)) and (comparaCpf($cpf, $id_estabelecimento))){

      $avaliacaoDAO = new AvaliacaoDAO();
      $avaliacaoDAO->salvar($nota, $id_estabelecimento, $cpf);
      echo "<script>alert('Votou com sucesso');window.location='locais.php'</script>";
    }else{
      echo "<script>alert('CPF inválido);window.location='locais.php'</script>";
    }

  }

  $estabelecimentoDAO = new EstabelecimentoDAO();

  $todosEstabelecimentos = $estabelecimentoDAO->obterTodos();
  foreach ($todosEstabelecimentos as $estabelecimento) {
     echo '<div class="jumbotron">';
     echo '<div class = "container">';
    //  echo "<p class = 'descEstabelecimento'> " . $estabelecimento->getIdEstabelecimento();
     echo "<h1 class ='nomeEstabelecimento'> " . $estabelecimento->getNome() . "</h1>";
     echo "<p class ='descEstabelecimento'>Descricao: " . $estabelecimento->getDescricao() . "</p>";
     echo "<p class ='endEstabelecimento'>Endereço: " . $estabelecimento->getRua() . "</p>";
     echo "<p class ='avaliacaoMedia'>Avaliação média: " . $estabelecimento->ObterNotaMedia($estabelecimento->getIdEstabelecimento()) . "/5</p>";
     echo '<form id ="avaliarLocal" action="locais.php" method="post">
             <legend>Avaliar Local:</legend>
             <div class="form-check form-check-inline">
              <label class="form-check-label">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="1_" '. $estabelecimento->getIdEstabelecimento() .'"> 1
              </label>
            </div>
            <div class="form-check form-check-inline">
              <label class="form-check-label">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="1_" '. $estabelecimento->getIdEstabelecimento() .'"> 2
              </label>
            </div>
            <div class="form-check form-check-inline disabled">
              <label class="form-check-label">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="1_" '. $estabelecimento->getIdEstabelecimento() .'"> 3
              </label>
            </div>
            <div class="form-check form-check-inline disabled">
              <label class="form-check-label">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="4_" '. $estabelecimento->getIdEstabelecimento() .'"> 4
              </label>
            </div>
            <div class="form-check form-check-inline disabled">
              <label class="form-check-label">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio5" value="5_" '. $estabelecimento->getIdEstabelecimento() .'"> 5
              </label>
            </div>
            <label>*</label>
            <label>Digite o cpf para votar:</label>
            <input name="cpf" type="text" id="cpf" class="cpf"/>
            <br>

             <button type="submit" class="" name="avaliar">Avaliar</button>
             </form>"';
     echo "</div>";
     echo "</div>";
  }

  function validaCPF($cpf = null) {
    // Verifica se um número foi informado
    if(empty($cpf)) {
        return false;
    }
    // Elimina possivel mascara
    $cpf = ereg_replace('[^0-9]', '', $cpf);
    $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);

    // Verifica se o numero de digitos informados é igual a 11
    if (strlen($cpf) != 11) {
        return false;
    }
    // Verifica se nenhuma das sequências invalidas abaixo
    // foi digitada. Caso afirmativo, retorna falso
    else if ($cpf == '00000000000' ||
        $cpf == '11111111111' ||
        $cpf == '22222222222' ||
        $cpf == '33333333333' ||
        $cpf == '44444444444' ||
        $cpf == '55555555555' ||
        $cpf == '66666666666' ||
        $cpf == '77777777777' ||
        $cpf == '88888888888' ||
        $cpf == '99999999999') {
        return false;
     // Calcula os digitos verificadores para verificar se o
     // CPF é válido
     } else {

        for ($t = 9; $t < 11; $t++) {

            for ($d = 0, $c = 0; $c < $t; $c++) {
                $d += $cpf{$c} * (($t + 1) - $c);
            }
            $d = ((10 * $d) % 11) % 10;
            if ($cpf{$c} != $d) {
                return false;
            }
        }

        return true;
    }
}

  function comparaCpf($cpf, $id){

    $avaliacaoDAO = new avaliacaoDAO();

    $listaCpf = $avaliacaoDAO->buscaCpf($id);
    var_dump ($listaCpf);
    if (!(empty($listaCpf))){
      foreach ($listaCpf as $key) {
          if ($cpf == $key){
            return false;
          }
      }
    }else {
      if (validaCPF($cpf)){
          return true;
      } else{
         return false;
        }
    }

  }
?>
