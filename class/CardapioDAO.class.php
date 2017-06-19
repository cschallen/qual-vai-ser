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
        WHERE id_estabelecimento = $estabelecimento";

        $estabelecimentoDAO = new EstabelecimentoDAO();

        $conn = pg_connect("host=localhost port=5432 dbname=qual-vai-ser user=postgres password=postgres");
        $sql = pg_query($conn, $comando);

        while( $linha = pg_fetch_array($sql) ) {
            $cardapio = new Cardapio($linha['dia'], $linha['descricao']);
            $listaCardapio[] = $cardapio;

        }
        return $listaCardapio;
    }

    public function salvar($obj){
        if($obj instanceof Cardapio){
            $idCardapio = $obj->getIdCardapio();
            $dia = $obj->getDia();
            $descricao = $obj->getDescricao();
            $idEstabelecimento = $obj->getIdEstabelecimento();

            if($idCardapio == NULL){
                $comando = "INSERT INTO cardapio(dia, descricao, id_estabelecimento) VALUES ($dia, 'huehueuhe', $idEstabelecimento);";
            } else {
                $comando = "UPDATE Cardapio
                SET dia = '$dia', descricao = '$descricao', id_estabelecimento = '$id_estabelecimento'
                WHERE id_cardapio = '$idCardapio'";
            }
            return $this->con->exec($comando);
        }
    }

}

?>
