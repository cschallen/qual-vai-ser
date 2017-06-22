<?php

use PHPUnit\Framework\TestCase as PHPUnit;

require_once './class/Avaliacao.class.php';

class AvaliacaoGetTest extends PHPUnit{

    public function testGetCpf(){
        $avaliacao = new Avaliacao(3, 1, "214.521.845-52");
        $this->assertEquals("214.521.845-52", $avaliacao->getCpf());
    }

    public function testGetNota(){
        $avaliacao = new Avaliacao(3, 1, "214.521.845-52");
        $this->assertEquals(3, $avaliacao->getNota());
    }

    public function testGetEstabelecimento(){
        $avaliacao = new Avaliacao(3, 1, "214.521.845-52");
        $this->assertEquals(1, $avaliacao->getEstabelecimento());
    }
}
?>
