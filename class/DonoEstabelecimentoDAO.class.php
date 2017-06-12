<?php

require_once "Conexao.class.php";
require_once "DonoEstabelecimento.class.php";

class DonoEstabelecimentoDAO{
    private $con;

    public function __construct(){
        $this->con = Conexao::obterConexao();
    }

    public function salvar($obj){
        if($obj instanceof DonoEstabelecimento){
            $idDono = $obj->getIdDono();
            $nome = $obj->getNome();
            $endereco = $obj->getEndereco();
            $cpf = $obj->getCpf();
            $cep = $obj->getCep();
            $email = $obj->getEmail();
            $login = $obj->getLogin();
            $senha = $obj->getSenha();

            if($idDono == NULL){
                $comando = "INSERT INTO DonoEstabelecimento(Nome, Endereco, cpf, Cep, Email, Login, Senha)
                VALUES ('$nome','$endereco','$cpf','$cep','$email', '$login', '$senha')";
            } else {
                $comando = "UPDATE DonoEstabelecimento
                SET nome = '$nome', endereco = '$endereco', cpf = '$cpf', cep = '$cep', email = '$email', login = '$login', senha = '$senha'
                WHERE id_dono = $idDono";
            }
            return $this->con->exec($comando);
        }
    }

    public function excluir($id){
        $comando = "DELETE FROM DonoEstabelecimento WHERE id_dono = $id";
        return $this->con->exec($comando);
    }

    public function obterTodos(){
        $donos = array();

        $comando = "SELECT nome, endereco, cpf, cep, email, login, senha
        FROM DonoEstabelecimento";

        //fazendo a conexao manualmente, n consegui arrumar isso
        $conn = pg_connect("host=localhost port=5432 dbname=qual-vai-ser user=postgres password=postgres");
        $sql = pg_query($conn, $comando);

        while( $linha = pg_fetch_array($sql) ) {
            $estabelecimento = new Estabelecimento($linha['nome'], $linha['descricao'], $linha['rua'], $linha['cep'], $linha['cnpj'], $linha['cardapio']);
            $estabelecimento->setIdEstabelecimento($linha['id_estabelecimento']);
            $estabelecimentos[] = $estabelecimento;
        }
        return $estabelecimentos;
    }








}

?>
