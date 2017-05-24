<?php
require "Conexao.class.php";
require "Estabelicimento.class.php";
class EstabelecimentoDAO{
	private $con;

	public function __construct(){
		$this->con = Conexao::obterConexao();
	}

	public function obter($id){   //obtém uma linha da tabela e retorna um obj equivalente. Retorna só um pois id não se repete
		$establecimento = NULL; //se não encontrar o livro, pelo menos retorna o null
		$comando = "SELECT  nome, descricao, rua, cep, cnpj
		FROM estabelecimento
		WHERE idEstabelecimento = $id";
		foreach ($this->con->query($comando) as $linha) {     //metodo query retorna um resultset e pega uma linha de cada vez e guarda uma linha em um array
			$estabelecimento = new Estabelecimento($linha['nome'], $linha['descricao'], $linha['rua'], $linha['cep'], $linha['cnpj']);
			$estabelecimento->setIdEstabelecimento($id);
		}

		return $estabelecimento;

	}

	//obtem todos os livros e retorna uma coleção de objetos
	public function obterTodos(){
		$estabelecimentos = array();

		$comando = "SELECT idEstabelecimento, nome, descricao, rua, cep, cnpj
		FROM estabelecimento";

		foreach ($this->con->query($comando) as $linha){
			$estabelecimento = new Estabelecimento($linha['nome'], $linha['descricao'], $linha['rua'], $linha['cep'], $linha['cnpj']);
			$estabelecimento->setIdEstabelecimento($linha['idEstabelecimento']);
			$estabelecimento[] = $estabelecimento;
		}

		return $estabelecimentos;
	}

	//Exclui o livro de determinado id, retornando o numero de linhas afetadas
	public function excluir($id){
		$comando = "DELETE FROM Estabelecimento WHERE idEstabelecimento = $id";
		return $this->con->exec($comando);
	}

	//Insere nova linha ou atualiza linha existente
	public function salvar($obj){
		if($obj instanceof Estabelecimento){ //se for uma instancia da classe livro, faz tudo que tem que fazer
			//se nao vem com id é novo, se tem id é pra atualizar
			$idEstabelecimento = $obj->getIdEstabelecimento();
			$descricao = $obj->getDescricao();
			$rua = $obj->getRua();
			$cnpj = $obj->getCnpj();
			$cnpj = $obj->getCep();
			$nome = $obj->getNome();

			if($idEstabelecimento == NULL){ //se o id do estabelecimento retornando vier nulo, faz o insert se nao update
				$comando = "INSERT INTO Estabelecimento(Nome, Descricao, Rua, Cep, Cnpj) VALUES ('$nome','$descricao','$rua','$cep','$cnpj')";
			} else {
				$comando = "UPDATE Livro
				SET Titulo = '$titulo', Paginas = $paginas, Edicao = $edicao
				WHERE idLivro = $idLivro";
			}
			return $this->con->exec($comando); //nao pode trocar id, se trocar ele se perde
		}
	}

}

?>
