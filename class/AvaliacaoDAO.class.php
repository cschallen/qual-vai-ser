<?php
require "Conexao.class.php";
require "Avaliacao.class.php";
class AvaliacaoDAO{
    private $con;

    public function __construct(){
        $this->con = Conexao::obterConexao();
    }

    public function obter($id){   //obtém uma linha da tabela e retorna um obj equivalente. Retorna só um pois id não se repete
        $notas = array();; //se não encontrar o livro, pelo menos retorna o null
        $comando = "SELECT  nota
        FROM nota
        WHERE idEstabelecimento = $id";
        foreach ($this->con->query($comando) as $linha){
            $nota = new Nota($linha['nota']);
            $notas[] = $nota;
        }

        return $notas;

    }

    //Insere nova linha ou atualiza linha existente
    public function salvar($obj){
        if($obj instanceof Nota){ //se for uma instancia da classe livro, faz tudo que tem que fazer
            //se nao vem com id é novo, se tem id é pra atualizar
            $nota = $obj->getNota();
            $idEstabelecimento = $obj->getIdEstabelecimento;

            if($idEstabelecimento == NULL){ //se o id do estabelecimento retornando vier nulo, faz o insert se nao update
                $comando = "INSERT INTO Nota(nota) VALUES ('$nota')";
            }

            return $this->con->exec($comando); //nao pode trocar id, se trocar ele se perde
        }
    }

}
