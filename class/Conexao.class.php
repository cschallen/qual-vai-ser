<?php

class Conexao {
	public static function obterConexao(){
		$con = new PDO("pgsql:host=localhost port=5432 dbname=qual-vai-ser user=postgres password=postgres");
		echo "AAAAAAAAa";
		return $con;
	}
}

?>
