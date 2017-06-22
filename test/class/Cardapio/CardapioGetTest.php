<?php

use PHPUnit\Framework\TestCase as PHPUnit;

require_once './class/Cardapio.class.php';

class CardapioGetTest extends PHPUnit{

    public function testGetIdEstabelecimento(){
        $cardapio = new Cardapio(1, "descricao legal", 1);
        $this->assertEquals(1, $cardapio->getEstabelecimento());
    }

    public function testGetDia(){
        $cardapio = new Cardapio(1, "descricao legal", 1);
        $this->assertEquals(1, $cardapio->getDia());
    }

    public function testGetDescricao(){
        $cardapio = new Cardapio(1, "descricao legal", 1);
        $this->assertEquals("descricao legal", $cardapio->getDescricao());
    }

    public function testGetEstabelecimento(){
        $cardapio = new Cardapio(1, "descricao legal", 1);
        $this->assertEquals(1, $cardapio->getEstabelecimento());
    }
}
?>
