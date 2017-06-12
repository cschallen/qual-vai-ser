<?php
include_once "Avaliacao.class.php";
include_once "AvaliacaoDAO.class.php";
class Estabelecimento {

    private $idEstabelecimento;
    private $descricao;
    private $rua;
    private $cep;
    private $cnpj;
    private $nome;
    private $idDono;

    public function __construct($nome, $descricao, $rua, $cep, $cnpj, $idDono) {
        $this->idEstabelecimento = NULL;
        $this->descricao = $descricao;
        $this->rua = $rua;
        $this->cep = $cep;
        $this->cnpj = $cnpj;
        $this->nome = $nome;
        $this->idDono = $idDono;
    }

    function ObterNotaMedia($id) {
        $avaliacaoDAO = new AvaliacaoDAO();
        $array = $avaliacaoDAO->obterNota($id);
        $notas = 0;
        foreach ($array as $nota) {
          $notas  = $notas + $nota->getNota();
        }
        $notaMedia = $notas/count($array);
        return number_format($notaMedia, 1);
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

    function getIdDono() {
        return $this->idDono;
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

    function setIdDono($idDono) {
        $this->idDono = $idDono;
    }

}
?>
