<?php

use PHPUnit\Framework\TestCase as PHPUnit;

require_once './class/Cardapio.class.php';

class CardapioSetTest extends PHPUnit{

    public function testSetIdCardapio(){
        $cardapio = new Cardapio(1, "descricao legal", 1);
        $this->assertEquals(1, $cardapio->getDia());
    }

    public function testSetDia(){
        $cardapio = new Cardapio(1, "descricao legal", 1);
        $this->assertEquals(1, $cardapio->getDia());
    }

    public function testSetDescricao(){
        $cardapio = new Cardapio(1, "descricao legal", 1);
        $this->assertEquals("descricao legal", $cardapio->getDescricao());
    }

    public function testSetEstabelecimento(){
        $cardapio = new Cardapio(1, "descricao legal", 1);
        $this->assertEquals(1, $cardapio->getEstabelecimento());
    }
}
?>
