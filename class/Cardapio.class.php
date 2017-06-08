<?php
class Cardapio {
    private $idCardapio;
	private $dia;
    private $descricao;
    private $estabelecimento;

    public function __construct($dia, $descricao, $estabelecimento) {
        $this->idCardapio = NULL;
        $this->dia = $nota;
		$this->descricao = $descricao;
        $this->estabelecimento = $estabelecimento;
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
