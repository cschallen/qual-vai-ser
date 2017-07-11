<?php

use PHPUnit\Framework\TestCase as PHPUnit;

require_once './class/Cardapio.class.php';

class CardapioConstructorTest extends PHPUnit{

     /**
    * @expectedException Exception
    * @expectedExceptionMessage O campo DIA não pode estar vazio
    */
    public function testConstrutorDia_Null(){
        new Cardapio(null, "uma descricao de local", 1);
    }

     /**
    * @expectedException Exception
    * @expectedExceptionMessage O campo DIA não pode estar vazio
    */
    public function testConstrutorDia_Vazio(){
        new Cardapio("", "uma descricao de local", 1);
    }

     /**
    * @expectedException Exception
    * @expectedExceptionMessage O campo ESTABELECIMENTO não pode estar vazio
    */
    public function testConstrutorEstabelecimento_Null(){
        new Cardapio(1, "uma descricao de local", null);
    }

     /**
    * @expectedException Exception
    * @expectedExceptionMessage O campo ESTABELECIMENTO não pode estar vazio
    */
    public function testConstrutorEstabelecimento_Vazio(){
        new Cardapio(1, "uma descricao de local", "");
    }

}

?>
