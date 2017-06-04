<?php
include_once "Conexao.class.php";
include_once "Avaliacao.class.php";
include_once "EstabelecimentoDAO.class.php";

class AvaliacaoDAO{
    private $con;

    public function __construct(){
        $this->con = Conexao::obterConexao();
    }

    public function obterEstabelecimentos($estabelecimento){  
        $colecao = array();
        $comando = "SELECT  idAvaliacao, nota
        FROM Avaliacao
        WHERE idEstabelecimento = $estabelecimento";
        
        $estabelecimentoDAO = new EstabelecimentoDAO();

				foreach ($this->con->query($comando) as $linha){ 
						$estabObj = $EstabelecimentoDAO->obter($estabelecimento);

                        $obj = new Avaliacao($nota, $estabelecimento); 
						$obj->setIdAvaliacao($linha['idavaliacao']);
						$colecao[] = $obj;
				}				
		return $colecao;

    }

}
