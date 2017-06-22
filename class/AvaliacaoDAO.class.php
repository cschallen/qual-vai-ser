<?php
include_once "Conexao.class.php";
include_once "Avaliacao.class.php";
include_once "EstabelecimentoDAO.class.php";

class AvaliacaoDAO{
    private $con;

    public function __construct(){
        $this->con = Conexao::obterConexao();
    }


    function buscaCpf($idEstabelecimento) {

        $colecao = array();
        $comando = "SELECT  cpf
                    FROM Avaliacao
                    WHERE id_estabelecimento = $idEstabelecimento";

        $estabelecimentoDAO = new EstabelecimentoDAO();

        $conn = pg_connect("host=localhost port=5432 dbname=qual-vai-ser user=postgres password=postgres");
        $sql = pg_query($conn, $comando);

        while( $linha = pg_fetch_array($sql) ) {
            $cpf = $linha['cpf'];
            $cpfs[] = $cpf;
        }

    return $cpfs;
    }

    public function obterNota($estabelecimento){
        $colecao = array();
        $comando = "SELECT id_avaliacao, nota, id_estabelecimento, cpf
        FROM Avaliacao
        WHERE id_estabelecimento = $estabelecimento";

        $estabelecimentoDAO = new EstabelecimentoDAO();

        $conn = pg_connect("host=localhost port=5432 dbname=qual-vai-ser user=postgres password=postgres");
    		$sql = pg_query($conn, $comando);
        if (pg_num_rows($sql) > 0) {
      			while( $linha = pg_fetch_array($sql) ) {
                $avaliacao = new Avaliacao($linha['nota'], $linha['id_estabelecimento'], $linha['cpf']);
      					$avaliacao->setIdAvaliacao($linha['id_avaliacao']);
      					$notas[] = $avaliacao;
      			}


        		return $notas;
        }
        return false;
    }

    public function salvar($nota, $idEstabelecimento, $cpf){
  			$comando = "INSERT INTO Avaliacao(nota, id_estabelecimento, cpf) VALUES ('$nota','$idEstabelecimento', '$cpf')";

        $conn = pg_connect("host=localhost port=5432 dbname=qual-vai-ser user=postgres password=postgres");
        $sql = pg_query($conn, $comando);
  			return true;
  		}

}

?>
