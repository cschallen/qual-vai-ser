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
		$comando = "SELECT  nome, descricao, rua, cep, lat, lng, cnpj, status
		FROM estabelecimento
		WHERE id_estabelecimento = $id";

		//fazendo a conexao manualmente, n consegui arrumar isso
		$conn = pg_connect("host=localhost port=5432 dbname=qual-vai-ser user=postgres password=postgres");
		$sql = pg_query($conn, $comando);

		while( $linha = pg_fetch_array($sql) ) {
			$estabelecimento = new Estabelecimento($linha['nome'], $linha['descricao'], $linha['rua'], $linha['cep'], $linha['lat'], $linha['lng'], $linha['cnpj'], $linha['status']);
			$estabelecimento->setIdEstabelecimento($id);
		}

		return $estabelecimento;
	}

	public function obterIdEstabelcimento($cnpj){

		$comando = "SELECT  id_estabelecimento
		FROM estabelecimento
		WHERE cnpj = '$cnpj'";

		//fazendo a conexao manualmente, n consegui arrumar isso
		$conn = pg_connect("host=localhost port=5432 dbname=qual-vai-ser user=postgres password=postgres");
		$sql = pg_query($conn, $comando);

		if (pg_num_rows($sql) == 1) {
			$idEstabelecimento = pg_fetch_assoc($sql);
			return $idEstabelecimento['id_estabelecimento'];
		} else {
			return false;
		}
	}

	public function obterTodosDist(){
		$estabelecimentos = array();
		$comando = "SELECT id_estabelecimento, nome, descricao, rua, cep, lat, lng, cnpj, id_dono_estabelecimento, status,
		111.045 * DEGREES(ACOS(COS(RADIANS(latpoint))
		* COS(RADIANS(lat))
		* COS(RADIANS(longpoint) - RADIANS(lng))
		+ SIN(RADIANS(latpoint))
		* SIN(RADIANS(lat)))) AS distance_in_km
		FROM estabelecimento
		JOIN (SELECT -30.0819396 AS latpoint, -51.2223043 AS longpoint) AS p ON 1=1
		WHERE status = 'Aprovado'
		ORDER BY distance_in_km LIMIT 15";
		//		fazendo a conexao manualmente, n consegui arrumar isso
		$conn = pg_connect("host=localhost port=5432 dbname=qual-vai-ser user=postgres password=postgres");
		$sql = pg_query($conn, $comando);




		while( $linha = pg_fetch_array($sql) ) {
			$estabelecimento = new Estabelecimento($linha['nome'], $linha['descricao'], $linha['rua'], $linha['cep'], $linha['lat'], $linha['lng'], $linha['cnpj'], $linha['id_dono_estabelecimento'], $linha['status']);
			$estabelecimento->setIdEstabelecimento($linha['id_estabelecimento']);
			$estabelecimentos[] = $estabelecimento;
		}



		return $estabelecimentos;
	}

	public function obterTodos(){
		$estabelecimentos = array();

		$comando = "SELECT id_estabelecimento, nome, descricao, rua, cep, lat, lng, cnpj, id_dono_estabelecimento, status
		FROM estabelecimento";

		//fazendo a conexao manualmente, n consegui arrumar isso
		$conn = pg_connect("host=localhost port=5432 dbname=qual-vai-ser user=postgres password=postgres");
		$sql = pg_query($conn, $comando);



		while( $linha = pg_fetch_array($sql) ) {
			$estabelecimento = new Estabelecimento($linha['nome'], $linha['descricao'], $linha['rua'], $linha['cep'], $linha['lat'], $linha['lng'], $linha['cnpj'], $linha['id_dono_estabelecimento'], $linha['status']);
			$estabelecimento->setIdEstabelecimento($linha['id_estabelecimento']);
			$estabelecimentos[] = $estabelecimento;
		}
		return $estabelecimentos;
	}



	public function obterTodosBusca($busca){
		$estabelecimentos = array();

		$comando = "SELECT DISTINCT e.id_estabelecimento, e.nome, e.descricao, e.rua, e.cep, e.lat, e.lng, e.cnpj, e.id_dono_estabelecimento, status FROM cardapio c, estabelecimento e
		WHERE c.id_estabelecimento = e.id_estabelecimento AND c.descricao ILIKE '%".$busca."%' OR e.nome ILIKE '%".$busca."%'";
		//fazendo a conexao manualmente, n consegui arrumar isso
		$conn = pg_connect("host=localhost port=5432 dbname=qual-vai-ser user=postgres password=postgres");
		$sql = pg_query($conn, $comando);

		while( $linha = pg_fetch_array($sql) ) {
			$estabelecimento = new Estabelecimento($linha['nome'], $linha['descricao'], $linha['rua'], $linha['cep'], $linha['lat'], $linha['lng'], $linha['cnpj'], $linha['id_dono_estabelecimento'], $linha['status']);
			$estabelecimento->setIdEstabelecimento($linha['id_estabelecimento']);
			$estabelecimentos[] = $estabelecimento;
		}
		return $estabelecimentos;
	}

	public function excluir($id){
		$comando = "DELETE FROM estabelecimento WHERE id_estabelecimento = $id";
		return $this->con->exec($comando);
	}

	public function salvar($obj){
		if($obj instanceof Estabelecimento){
			$idEstabelecimento = $obj->getIdEstabelecimento();
			$descricao = $obj->getDescricao();
			$rua = $obj->getRua();
			$cnpj = $obj->getCnpj();
			$cep = $obj->getCep();
			$lat = $obj->getLat();
			$lng = $obj->getLng();
			$nome = $obj->getNome();
			$idDonoEstabelecimento = $obj->getIdDonoEstabelecimento();
			$status = $obj->getStatus();

			if($idEstabelecimento == NULL){
				$comando = "INSERT INTO estabelecimento(nome, descricao, rua, cep, lat, lng, cnpj, id_dono_estabelecimento, status)
				VALUES ('$nome','$descricao','$rua','$cep','$lat','$lng','$cnpj','$idDonoEstabelecimento', 'Pendente')";
			} else {
				$comando = "UPDATE estabelecimento
				SET nome = $nome, descricao = $descricao, rua = $rua, cep = $cep, lat = $lat, lng = $lng, cnpj = $cnpj, id_dono_estabelecimento = $idDonoEstabelecimento, status = $status
				WHERE id_estabelecimento = $idEstabelecimento";
			}
			return $this->con->exec($comando);
		}
	}

	//	public function statusEstabelecimento($status, $idEstabelecimento){
	//		$comando = "UPDATE estabelecimento SET $status = 'Aprovado' WHERE id_estabelecimento = $idEstabelecimento";
	//		return $this->con->exec($comando);
	//	}


}

?>
