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
        $this->codCliente = $codCliente;
	    $this->login = $login;
        $this->senha = $senha; 
        $consulta = "SELECT idDono, login, senha FROM DonoEstabelecimento WHERE login='$login' AND senha='$senha'";
	    $r = mysql_query($consulta) or die(mysql_error());
	    if (login != '$login' and senha !='$senha'){
	    	echo "Usuario ou senha errados.<br>";
	    	echo "<a href=login.php>Clique aqui para voltar</a>";
    	}
	    while($linha = mysql_fetch_assoc($r)){
            $idDono = $linha['idDono'];
    	    if(mysql_num_rows($r)!=1){
	 	        echo "Usuario ou senha errados.<br>";
		        echo "<a href=login.php>Clique aqui para voltar</a>";
	        }
	        else{
		        session_start();
		        session_name('secreta');
	        	$_SESSION['validacao']=1;
	        	$_SESSION['login']=$login;
		        header("Location: secreta.php?idDono=$idDono");
	        }
        }
    }


}

?>