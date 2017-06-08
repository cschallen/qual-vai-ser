<?php
include_once "Conexao.class.php";
include_once "Cardapio.class.php";
include_once "EstabelecimentoDAO.class.php";

class CardapioDAO{
    private $con;

    public function __construct(){
        $this->con = Conexao::obterConexao();
    }

    public function obterCardapioEstabelecimento($estabelecimento){
				$colecao = array();
				$comando = "SELECT dia, descricao 
								FROM Cardapio
								WHERE id_estabelecimento = $estabelecimento ";

				$estabelecimentoDAO = new EstabelecimentoDAO();

				foreach ($this->con->query($comando) as $linha){
					
						$estabelecimentoObj = $estabelecimentoDAO->obter($estabelecimento);

						$obj = new Cardapio($linha['dia'], $linha['descricao'], $estabelecimentoObj);
						$obj->setIdCardapio($linha['id_cardapio']);
						$colecao[] = $obj;
				}				
				return $colecao;
	}

}

?>
