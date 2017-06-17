<?php
  require_once "class/Estabelecimento.class.php";
  require_once "class/EstabelecimentoDAO.class.php";
  require_once "class/AvaliacaoDAO.class.php";

$estabelecimentoDAO = new EstabelecimentoDAO();

$todosEstabelecimentos = $estabelecimentoDAO->obterTodosDist();
foreach ($todosEstabelecimentos as $estabelecimento) {
   echo '<div class="jumbotron">';
   echo '<div class = "container">';
  //  echo "<p class = 'descEstabelecimento'> " . $estabelecimento->getIdEstabelecimento();
   echo "<h1 class ='nomeEstabelecimento'> " . $estabelecimento->getNome() . "</h1>";
   echo "<p class ='descEstabelecimento'>Descricao: " . $estabelecimento->getDescricao() . "</p>";
   echo "<p class ='endEstabelecimento'>Endereço: " . $estabelecimento->getRua() . "</p>";
   echo "<p class ='avaliacaoMedia'>Avaliação média: " . $estabelecimento->ObterNotaMedia($estabelecimento->getIdEstabelecimento()) . "/5</p>";
   echo '<form id ="avaliarLocal" action="avaliaEstabelecimento.php" method="post">
           <legend>Avaliar Local:</legend>
           <div class="form-check form-check-inline">
            <label class="form-check-label">
              <input class="form-check-input" type="radio" name="nota" id="inlineRadio1" value="1_'. $estabelecimento->getIdEstabelecimento() .'"> 1
            </label>
          </div>
          <div class="form-check form-check-inline">
            <label class="form-check-label">
              <input class="form-check-input" type="radio" name="nota" id="inlineRadio2" value="2_'. $estabelecimento->getIdEstabelecimento() .'"> 2
            </label>
          </div>
          <div class="form-check form-check-inline disabled">
            <label class="form-check-label">
              <input class="form-check-input" type="radio" name="nota" id="inlineRadio3" value="3_'. $estabelecimento->getIdEstabelecimento() .'"> 3
            </label>
          </div>
          <div class="form-check form-check-inline disabled">
            <label class="form-check-label">
              <input class="form-check-input" type="radio" name="nota" id="inlineRadio4" value="4_'. $estabelecimento->getIdEstabelecimento() .'"> 4
            </label>
          </div>
          <div class="form-check form-check-inline disabled">
            <label class="form-check-label">
              <input class="form-check-input" type="radio" name="nota" id="inlineRadio5" value="5_'. $estabelecimento->getIdEstabelecimento() .'"> 5
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

?>
