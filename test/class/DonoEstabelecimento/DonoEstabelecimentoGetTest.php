<?php

use PHPUnit\Framework\TestCase as PHPUnit;

require_once './class/DonoEstabelecimento.class.php';

class DonoEstabelecimentoGetTest extends PHPUnit{

    public function testGetNomeTest(){
        $dono = new DonoEstabelecimento("Fulano", "214.521.845-52", "fulano@fulano.com", "senhadofulano");
        $this->assertEquals("Fulano", $dono->getNome());
    }

    public function testGetCpfTest(){
        $dono = new DonoEstabelecimento("Fulano", "214.521.845-52", "fulano@fulano.com", "senhadofulano");
        $this->assertEquals("214.521.845-52", $dono->getCpf());
    }

    public function testGetEmailTest(){
        $dono = new DonoEstabelecimento("Fulano", "214.521.845-52", "fulano@fulano.com", "senhadofulano");
        $this->assertEquals("fulano@fulano.com", $dono->getEmail());
    }
    
    public function testGetSenhaTest(){
        $dono = new DonoEstabelecimento("Fulano", "214.521.845-52", "fulano@fulano.com", "senhadofulano");
        $this->assertEquals("senhadofulano", $dono->getSenha());
    }
}
?>
