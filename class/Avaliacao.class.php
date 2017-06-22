<?php
class Avaliacao {
    private $idAvaliacao;
    private $nota;
    private $estabelecimento;
    private $cpf;

    public function __construct($nota, $estabelecimento, $cpf) {
        $this->idAvaliacao = NULL;
        $this->nota = $nota;
        $this->cpf = $cpf;
        $this->estabelecimento = $estabelecimento;
        if($nota == NULL || $nota == ""){
            throw new Exception("O campo NOTA não pode estar vazio");
        }
        if($cpf == NULL || $cpf == ""){
            throw new Exception("O campo CPF não pode estar vazio");
        }
        if($estabelecimento == NULL || $estabelecimento == ""){
            throw new Exception("O campo ESTABELECIMENTO não pode estar vazio");
        }
    }

    function getCpf(){
        return $this->cpf;
    }

    function getIdAvaliacao() {
        return $this->idAvaliacao;
    }

    function getNota() {
        return $this->nota;
    }

    function getEstabelecimento() {
        return $this->estabelecimento;
    }

    function setCpf($cpf){
        if($cpf == NULL){
            throw new Exception("O campo CPF não pode estar vazio");
        } else {
            $this->cpf = $cpf;
        }
    }

    function setIdAvaliacao($idAvaliacao) {
        if($idAvaliacao == NULL){
            throw new Exception("O campo ID AVALIACAO não pode estar vazio");
        } else {
            $this->idAvaliacao = $idAvaliacao;
        }
    }

    function setNota($nota) {
        if($nota == NULL){
            throw new Exception("O campo NOTA não pode estar vazio");
        } else {
            $this->nota = $nota;
        }
    }

    function setEstabelecimento($estabelecimento) {
        if($estabelecimento == NULL){
            throw new Exception("O campo ESTABELECIMENTO não pode estar vazio");
        } else {
            $this->estabelecimento = $estabelecimento;
        }
    }
}
