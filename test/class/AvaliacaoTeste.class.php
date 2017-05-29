<?php

use PHPUnit\Framework\TestCase as PHPUnit;

require_once './class/Avaliacao.class.php';

class AvaliacaoTest extends PHPUnit{

    public function testType() {
        $avaliacao = new Avaliacao(1, 4, 3);
        $this->assertInternalType('int', $avaliacao->getNota());
    }

    public function testIdAvaliacao() {
        $avaliacao = new Avaliacao(1, 4, 3);
        $this->assertEquals(1, $avaliacao->getIdAvaliacao());
    }

    public function testIdEstabelecimento() {
        $avaliacao = new Avaliacao(1, 2, 1);
        $this->assertEquals(1, $avaliacao->getIdEstabelecimento());
    }

}
?>
