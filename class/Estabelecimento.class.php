<?php
class Estabelecimento {
  private $idEstabelecimento;
  private $descricao;
  private $rua;
  private $cep;
  private $cnpj;
  private $nome;
  private $idDono;

  public function __construct($descricao, $rua, $cep, $cnpj, $nome) {
    $this->idEstabelecimento = NULL;
    $this->descricao = $descricao;
    $this->rua = $rua;
    $this->cep = $cep;
    $this->cnpj = $cnpj;
    $this->nome = $nome;
    $this->idDono = NULL;
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

  function getId_dono() {
    return $this->id_dono;
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
