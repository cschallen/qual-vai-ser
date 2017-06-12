<?php
class DonoEstabelecimento {

    private $idDono;
    private $nome;
    private $endereco;
    private $cep;
    private $cpf;
    private $email;
    private $login;
    private $senha;

    public function __construct($nome, $endereco, $cep, $cpf, $email, $login, $senha) {

    }

    function getIdDono() {
        return $this->idEstabelecimento;
    }

    function getNome() {
        return $this->nome;
    }

    function getEndereco() {
        return $this->endereco;
    }

    function getCep() {
        return $this->cep;
    }

    function getCpf() {
        return $this->cpf;
    }

    function getEmail() {
        return $this->email;
    }

    function getLogin() {
        return $this->login;
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

    function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    function setCep($cep) {
        $this->cep = $cep;
    }

    function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setLogin($login) {
        $this->login = $login;
    }

    function setSenha($senha){
        $this->senha = $senha;
    }
}
?>
