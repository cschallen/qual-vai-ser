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
        if($nome == NULL || $nome == ""){
            throw new Exception("O campo NOME não pode estar vazio");
        }
        if($cpf == NULL || $cpf == ""){
            throw new Exception("O campo CPF não pode estar vazio");
        }
        if($email == NULL || $email == ""){
            throw new Exception("O campo EMAIL não pode estar vazio");
        }
        if($senha == NULL || $senha == ""){
            throw new Exception("O campo SENHA não pode estar vazio");
        }
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
        if($idDonoEstabelecimento == NULL){
            throw new Exception("O campo ID DONO ESTABELECIMENTO não pode estar vazio");
        } else {
            $this->idDonoEstabelecimento = $idDonoEstabelecimento;
        }
    }

    function setNome($nome) {
        if($nome == NULL){
            throw new Exception("O campo NOME não pode estar vazio");
        } else {
            $this->nome = $nome;
        }
    }

    function setCpf($cpf) {
        if($cpf == NULL){
            throw new Exception("O campo CPF não pode estar vazio");
        } else {
            $this->cpf = $cpf;
        }
    }

    function setEmail($email) {
        if($email == NULL){
            throw new Exception("O campo EMAIL não pode estar vazio");
        } else {
            $this->email = $email;
        }
    }

    function setSenha($senha){
        if($senha == NULL){
            throw new Exception("O campo SENHA não pode estar vazio");
        } else {
            $this->senha = $senha;
        }
    }
}
?>
