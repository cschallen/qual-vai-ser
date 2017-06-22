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
            throw new Exception("O campo DESCRICAO não pode estar vazio");
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
        $this->idCardapio = $idCardapio;
    }

    function setDia($dia) {
        $this->dia = $dia;
    }

	function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    function setEstabelecimento($estabelecimento) {
        $this->estabelecimento = $estabelecimento;
    }
}
