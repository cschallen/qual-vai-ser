<?php
require_once "Conexao.class.php";
require_once "Estabelecimento.class.php";

class EstabelecimentoDAO{
	private $con;

	public function __construct(){
		$this->con = Conexao::obterConexao();
	}

	public function obter($id){
		$establecimento = NULL;
		$comando = "SELECT  nome, descricao, rua, cep, cnpj
		FROM estabelecimento
		WHERE id_estabelecimento = $id";

		//fazendo a conexao manualmente, n consegui arrumar isso
		$conn = pg_connect("host=localhost port=5432 dbname=qual-vai-ser user=postgres password=postgres");
		$sql = pg_query($conn, $comando);

		while( $linha = pg_fetch_array($sql) ) {
			$estabelecimento = new Estabelecimento($linha['nome'], $linha['descricao'], $linha['rua'], $linha['cep'], $linha['cnpj']);
			$estabelecimento->setIdEstabelecimento($id);
		}

		return $estabelecimento;
	}

	public function obterTodos(){
		$estabelecimentos = array();

		$comando = "SELECT id_estabelecimento, nome, descricao, rua, cep, cnpj, id_dono_estabelecimento
		FROM Estabelecimento";

		//fazendo a conexao manualmente, n consegui arrumar isso
		$conn = pg_connect("host=localhost port=5432 dbname=qual-vai-ser user=postgres password=postgres");
		$sql = pg_query($conn, $comando);

		while( $linha = pg_fetch_array($sql) ) {
			$estabelecimento = new Estabelecimento($linha['nome'], $linha['descricao'], $linha['rua'], $linha['cep'], $linha['cnpj'], $linha ['id_dono_estabelecimento']);
			$estabelecimento->setIdEstabelecimento($linha['id_estabelecimento']);
			$estabelecimentos[] = $estabelecimento;
		}
		return $estabelecimentos;
	}

	public function excluir($id){
		$comando = "DELETE FROM Estabelecimento WHERE id_estabelecimento = $id";
		return $this->con->exec($comando);
	}

	public function salvar($obj){
		if($obj instanceof Estabelecimento){
			$idEstabelecimento = $obj->getIdEstabelecimento();
			$descricao = $obj->getDescricao();
			$rua = $obj->getRua();
			$cnpj = $obj->getCnpj();
			$cep = $obj->getCep();
			$nome = $obj->getNome();
			$idDonoEstabelecimento = $obj->getIdDonoEstabelecimento();

			if($idEstabelecimento == NULL){
				$comando = "INSERT INTO Estabelecimento(Nome, Descricao, Rua, Cep, Cnpj, id_dono_estabelecimento) VALUES ('$nome','$descricao','$rua','$cep','$cnpj', '$idDonoEstabelecimento')";
			} else {
				$comando = "UPDATE Estabelecimento
				SET Nome = '$nome', Descricao = $descricao, rua = $rua, Cep = $cep, cnpj = $cnpj, id_dono_estabelecimento = $idDonoEstabelecimento
				WHERE id_estabelecimento = $idEstabelecimento";
			}
			return $this->con->exec($comando);
		}
	}

}

?>
