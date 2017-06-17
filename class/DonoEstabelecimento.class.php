<?php
class DonoEstabelecimento {

    private $idDonoEstabelecimento;
    private $nome;
    private $cpf;
    private $email;
    private $senha;

    public function __construct($nome, $cpf, $email, $senha) {
        $this->idDonoEstabelecimento = NULL;
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->email = $email;
        $this->senha = $senha;
    }

    function getIdDonoEstabelecimento() {
        return $this->idDonoEstabelecimento;
    }

    function getNome() {
        return $this->nome;
    }

    function getCpf() {
        return $this->cpf;
    }

    function getEmail() {
        return $this->email;
    }

    function getSenha() {
        return $this->senha;
    }

    function setIdDonoEstabelecimento($idDonoEstabelecimento) {
        $this->idDonoEstabelecimento = $idDonoEstabelecimento;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setSenha($senha){
        $this->senha = $senha;
    }
}
?>
