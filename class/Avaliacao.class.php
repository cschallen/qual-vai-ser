<?php
require "Estabelecimento.class.php";

class Avaliacao {
    private $idAvaliacao;
    private $nota;
    private $idEstabelecimento;

    public function __construct($idAvaliacao, $nota, $idEstabelecimento) {
        $this->idAvaliacao = NULL;
        $this->nota = $nota;
        $this->idEstabelecimento = $idEstabelecimento;
    }
    function getIdAvaliacao() {
        return $this->idAvaliacao;
    }

    function getNota() {
        return $this->nota;
    }

    function getIdEstabelecimento() {
        return $this->idEstabelecimento;
    }

    function setIdAvaliacao($idAvaliacao) {
        $this->idAvaliacao = $idAvaliacao;
    }

    function setNota($nota) {
        $this->nota = $nota;
    }

    function setIdEstabelecimento($idEstabelecimento) {
        $this->idEstabelecimento = $idEstabelecimento;
    }
}
