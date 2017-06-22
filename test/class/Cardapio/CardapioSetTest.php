<?php

use PHPUnit\Framework\TestCase as PHPUnit;

require_once './class/Cardapio.class.php';

class CardapioSetTest extends PHPUnit{

    public function testSetIdCardapio_Sucesso(){
        $cardapio = new Cardapio(1, "descricao legal", 1);
        $cardapio->setIdCardapio(2);
        $this->assertEquals(2, $cardapio->getIdCardapio());
    }

    /**
    * @expectedException Exception
    * @expectedExceptionMessage O campo ID CARDAPIO não pode estar vazio
    */
    public function testSetIdCardapio_Null(){
        $cardapio = new Cardapio(1, "descricao legal", 1);
        $cardapio->setIdCardapio(NULL);
    }

    /**
    * @expectedException Exception
    * @expectedExceptionMessage O campo ID CARDAPIO não pode estar vazio
    */
    public function testSetIdCardapio_Vazio(){
        $cardapio = new Cardapio(1, "descricao legal", 1);
        $cardapio->setIdCardapio("");
    }

    public function testSetDia_Sucesso(){
        $cardapio = new Cardapio(1, "descricao legal", 1);
        $cardapio->setDia(2);
        $this->assertEquals(2, $cardapio->getDia());
    }

    /**
    * @expectedException Exception
    * @expectedExceptionMessage O campo DIA não pode estar vazio
    */
    public function testSetDia_Null(){
        $cardapio = new Cardapio(1, "descricao legal", 1);
        $cardapio->setDia(NULL);
    }

    /**
    * @expectedException Exception
    * @expectedExceptionMessage O campo DIA não pode estar vazio
    */
    public function testSetDia_Vazio(){
        $cardapio = new Cardapio(1, "descricao legal", 1);
        $cardapio->setDia("");
    }

    public function testSetDescricao_Sucesso(){
        $cardapio = new Cardapio(1, "descricao legal", 1);
        $cardapio->setDescricao("as visoes da raven o futuro vejo sim");
        $this->assertEquals("as visoes da raven o futuro vejo sim", $cardapio->getDescricao());
    }

    /**
    * @expectedException Exception
    * @expectedExceptionMessage O campo DESCRICAO não pode estar vazio
    */
    public function testSetDescricao_Null(){
        $cardapio = new Cardapio(1, "descricao legal", 1);
        $cardapio->setDescricao(NULL);
    }

    /**
    * @expectedException Exception
    * @expectedExceptionMessage O campo DESCRICAO não pode estar vazio
    */
    public function testSetDescricao_Vazio(){
        $cardapio = new Cardapio(1, "descricao legal", 1);
        $cardapio->setDescricao("");
    }

    public function testSetEstabelecimento_Sucesso(){
        $cardapio = new Cardapio(1, "descricao legal", 1);
        $cardapio->setEstabelecimento(2);
        $this->assertEquals(2, $cardapio->getEstabelecimento());
    }

    /**
    * @expectedException Exception
    * @expectedExceptionMessage O campo ESTABELECIMENTO não pode estar vazio
    */
    public function testSetEstabelecimento_Null(){
        $cardapio = new Cardapio(1, "descricao legal", 1);
        $cardapio->setEstabelecimento(NULL);
    }

    /**
    * @expectedException Exception
    * @expectedExceptionMessage O campo ESTABELECIMENTO não pode estar vazio
    */
    public function testSetEstabelecimento_Vazio(){
        $cardapio = new Cardapio(1, "descricao legal", 1);
        $cardapio->setEstabelecimento("");
    }
}
?>
