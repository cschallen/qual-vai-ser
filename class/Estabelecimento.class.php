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
        if($nome == NULL || $nome == ""){
            throw new Exception("O campo NOME não pode estar vazio");
        }
        if($descricao == NULL || $descricao == ""){
            throw new Exception("O campo DESCRICAO não pode estar vazio");
        }
        if($rua == NULL || $rua == ""){
            throw new Exception("O campo RUA não pode estar vazio");
        }
        if($cep == NULL || $cep == ""){
            throw new Exception("O campo CEP não pode estar vazio");
        }
        if($cnpj == NULL || $cnpj == ""){
            throw new Exception("O campo CNPJ não pode estar vazio");
        }
        if($idDonoEstabelecimento == NULL || $idDonoEstabelecimento == ""){
            throw new Exception("O campo ID DONO não pode estar vazio");
        }
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
        if($idEstabelecimento == NULL){
            throw new Exception("O campo ID ESTABELECIMENTO não pode estar vazio");

        } else {
            $this->idEstabelecimento = $idEstabelecimento;
        }
    }

    function setDescricao($descricao) {
        if($descricao == NULL){
            throw new Exception("O campo DESCRICAO não pode estar vazio");
        } else {
            $this->descricao = $descricao;
        }
    }

    function setRua($rua) {
        if($rua == NULL){
            throw new Exception("O campo RUA não pode estar vazio");
        } else {
            $this->rua = $rua;
        }
    }

    function setCep($cep) {
        if($cep == NULL){
            throw new Exception("O campo CEP não pode estar vazio");
        } else {
            $this->cep = $cep;
        }
    }

    function setLat($lat) {
        if($lat == NULL){
            throw new Exception("O campo LAT não pode estar vazio");
        } else {
            $this->lat = $lat;
        }
    }

    function setLng($lng) {
        if($lng == NULL){
            throw new Exception("O campo LNG não pode estar vazio");
        } else {
            $this->lng = $lng;
        }
    }

    function setCnpj($cnpj) {
        if($cnpj == NULL){
            throw new Exception("O campo CNPJ não pode estar vazio");
        } else {
            $this->cnpj = $cnpj;
        }
    }

    function setNome($nome) {
        if($nome == NULL){
            throw new Exception("O campo NOME não pode estar vazio");
        } else {
            $this->nome = $nome;
        }
    }

    function setIdDonoEstabelecimento($idDonoEstabelecimento) {
        if($idDonoEstabelecimento == NULL){
            throw new Exception("O campo ID DONO ESTABELECIMENTO não pode estar vazio");
        } else {
            $this->idDonoEstabelecimento = $idDonoEstabelecimento;
        }
    }

}
?>
