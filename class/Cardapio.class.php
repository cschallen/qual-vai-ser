<?php
class Cardapio {
    private $idCardapio;
	private $dia;
    private $descricao;
    private $idEstabelecimento;

    public function __construct($dia, $descricao, $idEstabelecimento) {
        $this->idCardapio = NULL;
        $this->dia = $dia;
		$this->descricao = $descricao;
        $this->idEstabelecimento = $idEstabelecimento;
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

    function getIdEstabelecimento() {
        return $this->idEstabelecimento;
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

    function setIdEstabelecimento($idEstabelecimento) {
        $this->idEstabelecimento = $idEstabelecimento;
    }
}
