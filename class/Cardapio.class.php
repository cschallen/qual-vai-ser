<?php
class Cardapio {
    private $idCardapio;
    private $dia;
    private $descricao;
    private $estabelecimento;

    public function __construct($dia, $descricao, $estabelecimento) {
        $this->idCardapio = NULL;
        $this->dia = $dia;
        $this->descricao = $descricao;
        $this->estabelecimento = $estabelecimento;

        if($dia == NULL || $dia == ""){
            throw new Exception("O campo DIA não pode estar vazio");
        }
        if($descricao == NULL || $descricao == ""){
          $this->descricao = "Nenhum cardapio cadastrado.";
        }
        if($estabelecimento == NULL || $estabelecimento == ""){
            throw new Exception("O campo ESTABELECIMENTO não pode estar vazio");
        }
    }

    function getIdCardapio() {
        return $this->idCardapio;
    }

    function getDia() {
        return $this->dia;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function getEstabelecimento() {
        return $this->estabelecimento;
    }

    function setIdCardapio($idCardapio) {
        if($idCardapio == NULL){
            throw new Exception("O campo ID CARDAPIO não pode estar vazio");
        } else {
            $this->idCardapio = $idCardapio;
        }
    }

    function setDia($dia) {
        if($dia == NULL){
            throw new Exception("O campo DIA não pode estar vazio");
        } else {
            $this->dia = $dia;
        }
    }

    function setDescricao($descricao) {
        if($descricao == NULL){
            throw new Exception("O campo DESCRICAO não pode estar vazio");
        } else {
            $this->descricao = $descricao;
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
