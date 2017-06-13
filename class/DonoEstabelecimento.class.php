<?php
class DonoEstabelecimento {

    private $idDono;
    private $nome;
    private $cpf;
    private $email;
    private $senha;

    public function __construct($nome, $cpf, $email, $senha) {
        $this->idDono = NULL;
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->email = $email;
        $this->senha = $senha;
    }

    function getIdDono() {
        return $this->idDono;
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

    function setIdDono($idDono) {
        $this->idDono = $idDono;
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
