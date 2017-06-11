<?php
include_once "Conexao.class.php";
include_once "Avaliacao.class.php";
include_once "EstabelecimentoDAO.class.php";

class AvaliacaoDAO{
    private $con;

    public function __construct(){
        $this->con = Conexao::obterConexao();
    }

    public function obterNota($estabelecimento){
        $colecao = array();
        $comando = "SELECT  id_avaliacao, nota, id_estabelecimento
        FROM Avaliacao
        WHERE id_estabelecimento = $estabelecimento";

        $estabelecimentoDAO = new EstabelecimentoDAO();

        $conn = pg_connect("host=localhost port=5432 dbname=qual-vai-ser user=postgres password=postgres");
    		$sql = pg_query($conn, $comando);

				while( $linha = pg_fetch_array($sql) ) {
            $avaliacao = new Avaliacao($linha['nota'], $linha['id_estabelecimento']);
						$avaliacao->setIdAvaliacao($linha['id_avaliacao']);
						$notas[] = $avaliacao;
				}

		return $notas;

    }

    public function salvar($nota, $idEstabelecimento){
  			$comando = "INSERT INTO Avaliacao(nota, id_estabelecimento) VALUES ('$nota','$idEstabelecimento')";

        $conn = pg_connect("host=localhost port=5432 dbname=qual-vai-ser user=postgres password=postgres");
        $sql = pg_query($conn, $comando);
  			return true;
  		}

}

?>
