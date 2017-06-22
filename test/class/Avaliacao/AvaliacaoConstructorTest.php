<?php

use PHPUnit\Framework\TestCase as PHPUnit;

require_once './class/Avaliacao.class.php';

class AvaliacaoConstructorTest extends PHPUnit{

    /**
    * @expectedException Exception
    * @expectedExceptionMessage O campo NOTA não pode estar vazio
    */
    public function testConstructorNota_Null(){
        new Avaliacao(NULL, 1, "000.000.000-00");
    }

    /**
    * @expectedException Exception
    * @expectedExceptionMessage O campo NOTA não pode estar vazio
    */
    public function testConstructorNota_Vazio(){
        new Avaliacao("", 1, "000.000.000-00");
    }

    /**
    * @expectedException Exception
    * @expectedExceptionMessage O campo ESTABELECIMENTO não pode estar vazio
    */
    public function testConstructorEstabelecimento_Null(){
        new Avaliacao(3, NULL, "000.000.000-00");
    }

    /**
    * @expectedException Exception
    * @expectedExceptionMessage O campo ESTABELECIMENTO não pode estar vazio
    */
    public function testConstructorEstabelecimento_Vazio(){
        new Avaliacao(3, "", "000.000.000-00");
    }

    /**
    * @expectedException Exception
    * @expectedExceptionMessage O campo CPF não pode estar vazio
    */
    public function testConstructorCPF_Null(){
        new Avaliacao(3, 1, NULL);
    }

    /**
    * @expectedException Exception
    * @expectedExceptionMessage O campo CPF não pode estar vazio
    */
    public function testConstructorCPF_Vazio(){
        new Avaliacao(3, 1, "");
    }
}
?>
