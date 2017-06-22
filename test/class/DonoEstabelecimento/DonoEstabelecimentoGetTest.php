<?php

use PHPUnit\Framework\TestCase as PHPUnit;

require_once './class/DonoEstabelecimento.class.php';

class DonoEstabelecimentoGetTest extends PHPUnit{

    public function testGetNome(){
        $dono = new DonoEstabelecimento("Fulano", "214.521.845-52", "fulano@fulano.com", "senhadofulano");
        $this->assertEquals("Fulano", $dono->getNome());
    }

    public function testGetCpf(){
        $dono = new DonoEstabelecimento("Fulano", "214.521.845-52", "fulano@fulano.com", "senhadofulano");
        $this->assertEquals("214.521.845-52", $dono->getCpf());
    }

    public function testGetEmail(){
        $dono = new DonoEstabelecimento("Fulano", "214.521.845-52", "fulano@fulano.com", "senhadofulano");
        $this->assertEquals("fulano@fulano.com", $dono->getEmail());
    }

    public function testGetSenha(){
        $dono = new DonoEstabelecimento("Fulano", "214.521.845-52", "fulano@fulano.com", "senhadofulano");
        $this->assertEquals("senhadofulano", $dono->getSenha());
    }
}
?>
