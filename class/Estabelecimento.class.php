<?php
class Estabelecimento {

    private $idEstabelecimento;
    private $descricao;
    private $rua;
    private $cep;
    private $cnpj;
    private $nome;
    private $cardapio;

    public function __construct($descricao, $rua, $cep, $cnpj, $nome, $cardapio) {
        $this->idEstabelecimento = NULL;
        $this->descricao = $descricao;
        $this->rua = $rua;
        $this->cep = $cep;
        $this->cnpj = $cnpj;
        $this->nome = $nome;
        $this->cardapio = $cardapio;
    }

    function getIdEstabelecimento() {
        return $this->idEstabelecimento;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function getRua() {
        return $this->rua;
    }

    function getCep() {
        return $this->cep;
    }

    function getCnpj() {
        return $this->cnpj;
    }

    function getNome() {
        return $this->nome;
    }

    function getCardapio() {
        return $this->cardapio;
    }

    function setIdEstabelecimento($idEstabelecimento) {
        $this->idEstabelecimento = $idEstabelecimento;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    function setRua($rua) {
        $this->rua = $rua;
    }

    function setCep($cep) {
        $this->cep = $cep;
    }

    function setCnpj($cnpj) {
        $this->cnpj = $cnpj;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setCardapio($cardapio) {
        $this->cardapio = $cardapio;
    }

}
?>
