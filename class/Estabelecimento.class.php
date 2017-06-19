<?php
include_once "Avaliacao.class.php";
include_once "AvaliacaoDAO.class.php";
class Estabelecimento {

    private $idEstabelecimento;
    private $descricao;
    private $rua;
    private $cep;
    private $lat;
    private $lng;
    private $cnpj;
    private $nome;
    private $idDonoEstabelecimento;

    public function __construct($nome, $descricao, $rua, $cep, $lat, $lng, $cnpj, $idDonoEstabelecimento) {
        $this->idEstabelecimento = NULL;
        $this->descricao = $descricao;
        $this->rua = $rua;
        $this->cep = $cep;
        $this->lat = $lat;
        $this->lng = $lng;
        $this->cnpj = $cnpj;
        $this->nome = $nome;
        $this->idDonoEstabelecimento = $idDonoEstabelecimento;
    }

    function ObterNotaMedia($id) {
        $avaliacaoDAO = new AvaliacaoDAO();
        $array = $avaliacaoDAO->obterNota($id);
        if ($array){
          $notas = 0;
          foreach ($array as $nota) {
              $notas  = $notas + $nota->getNota();
          }
          $notaMedia = $notas/count($array);
          return number_format($notaMedia, 1);
        } else{
          return false;
        }

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

    function getLat() {
        return $this->lat;
    }

    function getLng() {
        return $this->lng;
    }

    function getCnpj() {
        return $this->cnpj;
    }

    function getNome() {
        return $this->nome;
    }

    function getIdDonoEstabelecimento() {
        return $this->idDonoEstabelecimento;
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

    function setLat($lat) {
        $this->lat = $lat;
    }

    function setLng($lng) {
        $this->lng = $lng;
    }

    function setCnpj($cnpj) {
        $this->cnpj = $cnpj;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setIdDonoEstabelecimento($idDonoEstabelecimento) {
        $this->idDonoEstabelecimento = $idDonoEstabelecimento;
    }

}
?>
