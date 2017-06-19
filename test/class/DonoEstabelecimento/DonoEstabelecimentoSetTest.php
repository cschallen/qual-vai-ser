<?php

use PHPUnit\Framework\TestCase as PHPUnit;

require_once './class/DonoEstabelecimento.class.php';

class DonoEstabelecimentoSetTest extends PHPUnit{

    public function testSetNome_Sucesso(){
        $dono = new DonoEstabelecimento("Fulano", "Rua X", "91541-150", "214.521.845-52", "fulano@fulano.com", "fulaninho", "senhadofulano");
        $dono->setNome("Beltrano");

        $this->assertEquals("Beltrano", $dono->getNome());
    }

     /**
    * @expectedException Exception
    * @expectedExceptionMessage O campo NOME não pode estar vazio
    */
    public function testSetNome_SemValor(){
        $dono = new DonoEstabelecimento("Fulano", "Rua X", "91541-150", "214.521.845-52", "fulano@fulano.com", "fulaninho", "senhadofulano");
        $dono->setNome("");
    }

     /**
    * @expectedException Exception
    * @expectedExceptionMessage O campo NOME não pode estar vazio
    */
    public function testSetNome_Null(){
        $dono = new DonoEstabelecimento("Fulano", "Rua X", "91541-150", "214.521.845-52", "fulano@fulano.com", "fulaninho", "senhadofulano");
        $dono->setNome(null);
    }

    public function testSetCPF_Sucesso(){
        $dono = new DonoEstabelecimento("Fulano","214.521.845-52", "fulano@fulano.com", "senhadofulano");
        $dono->setCPF("339.514.851-45");

        $this->assertEquals("339.514.851-45", $dono->getCPF());
    }

    /**
    * @expectedException Exception
    * @expectedExceptionMessage O campo CPF não pode estar vazio
    */
    public function testSetCPF_SemValor(){
        $dono = new DonoEstabelecimento("Fulano","214.521.845-52", "fulano@fulano.com", "senhadofulano");
        $dono->setCPF("");
    }

    /**
    * @expectedException Exception
    * @expectedExceptionMessage O campo CPF não pode estar vazio
    */
    public function testSetCPFNull(){
       $dono = new DonoEstabelecimento("Fulano","214.521.845-52", "fulano@fulano.com", "senhadofulano");
        $dono->setCPF(null);
    }

    public function testSetEmail_Sucesso(){
        $dono = new DonoEstabelecimento("Fulano","214.521.845-52", "fulano@fulano.com", "senhadofulano");
        $dono->setEmail("beltrano@beltrano.com");

        $this->assertEquals("beltrano@beltrano.com", $dono->getEmail());
    }

    /**
    * @expectedException Exception
    * @expectedExceptionMessage O campo EMAIL não pode estar vazio
    */
    public function testSetEmail_SemValor(){
        $dono = new DonoEstabelecimento("Fulano","214.521.845-52", "fulano@fulano.com", "senhadofulano");
        $dono->setEmail("");
    }

    /**
    * @expectedException Exception
    * @expectedExceptionMessage O campo EMAIL não pode estar vazio
    */
    public function testSetEmailNull(){
       $dono = new DonoEstabelecimento("Fulano","214.521.845-52", "fulano@fulano.com", "senhadofulano");
        $dono->setEmail(null);
    }

    public function testSetSenha_Sucesso(){
        $dono = new DonoEstabelecimento("Fulano","214.521.845-52", "fulano@fulano.com", "senhadofulano");
        $dono->setSenha("senhadobeltranho");

        $this->assertEquals("senhadobeltranho", $dono->getSenha());
    }

    /**
    * @expectedException Exception
    * @expectedExceptionMessage O campo SENHA não pode estar vazio
    */
    public function testSetSenha_SemValor(){
        $dono = new DonoEstabelecimento("Fulano","214.521.845-52", "fulano@fulano.com", "senhadofulano");
        $dono->setSenha("");
    }

    /**
    * @expectedException Exception
    * @expectedExceptionMessage O campo SENHA não pode estar vazio
    */
    public function testSetSenhaNull(){
        $dono = new DonoEstabelecimento("Fulano","214.521.845-52", "fulano@fulano.com", "senhadofulano");
        $dono->setSenha(null);
    }


}
?>
