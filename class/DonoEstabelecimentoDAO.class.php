<?php

require_once "Conexao.class.php";
require_once "DonoEstabelecimento.class.php";

class DonoEstabelecimentoDAO{
    private $con;

	public function __construct(){
		$this->con = Conexao::obterConexao();
	}

    public function incluir($obj){

    }

    public function login($idDono,$login, $senha){
       
    }


}

?>