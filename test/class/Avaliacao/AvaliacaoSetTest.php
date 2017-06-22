<?php

use PHPUnit\Framework\TestCase as PHPUnit;

require_once './class/Avaliacao.class.php';

class AvaliacaoSetTest extends PHPUnit{

    public function testSetCpf_Sucesso(){
        $avaliacao = new Avaliacao(3, 1, "000.000.000-00");
        $avaliacao->setCpf("213.456.789-98");

        $this->assertEquals("213.456.789-98", $avaliacao->getCpf());
    }

    /**
    * @expectedException Exception
    * @expectedExceptionMessage O campo CPF não pode estar vazio
    */
    public function testSetCpf_Vazio(){
        $avaliacao = new Avaliacao(3, 1, "000.000.000-00");
        $avaliacao->setCpf("");
    }

    /**
    * @expectedException Exception
    * @expectedExceptionMessage O campo CPF não pode estar vazio
    */
    public function testSetCpf_Null(){
        $avaliacao = new Avaliacao(3, 1, "000.000.000-00");
        $avaliacao->setCpf(null);
    }

    public function testSetIdAvaliacao_Sucesso(){
        $avaliacao = new Avaliacao(3, 1, "000.000.000-00");
        $avaliacao->setIdAvaliacao("339.514.851-45");

        $this->assertEquals("339.514.851-45", $avaliacao->getIdAvaliacao());
    }

    /**
    * @expectedException Exception
    * @expectedExceptionMessage O campo ID AVALIACAO não pode estar vazio
    */
    public function testSetIdAvaliacao_Vazio(){
        $avaliacao = new Avaliacao(3, 1, "000.000.000-00");
        $avaliacao->setIdAvaliacao("");
    }

    /**
    * @expectedException Exception
    * @expectedExceptionMessage O campo ID AVALIACAO não pode estar vazio
    */
    public function testSetIdAvaliacao_Null(){
        $avaliacao = new Avaliacao(3, 1, "000.000.000-00");
        $avaliacao->setIdAvaliacao(null);
    }

    public function testSetNota_Sucesso(){
        $avaliacao = new Avaliacao(3, 1, "000.000.000-00");
        $avaliacao->setNota(5);

        $this->assertEquals(5, $avaliacao->getNota());
    }

    /**
    * @expectedException Exception
    * @expectedExceptionMessage O campo NOTA não pode estar vazio
    */
    public function testSetNota_Vazio(){
        $avaliacao = new Avaliacao(3, 1, "000.000.000-00");
        $avaliacao->setNota("");
    }

    /**
    * @expectedException Exception
    * @expectedExceptionMessage O campo NOTA não pode estar vazio
    */
    public function testSetNota_Null(){
        $avaliacao = new Avaliacao(3, 1, "000.000.000-00");
        $avaliacao->setNota(null);
    }

    public function testSetEstabelecimento_Sucesso(){
        $avaliacao = new Avaliacao(3, 1, "000.000.000-00");
        $avaliacao->setEstabelecimento(2);

        $this->assertEquals(2, $avaliacao->getEstabelecimento());
    }

    /**
    * @expectedException Exception
    * @expectedExceptionMessage O campo ESTABELECIMENTO não pode estar vazio
    */
    public function testSetEstabelecimento_Vazio(){
        $avaliacao = new Avaliacao(3, 1, "000.000.000-00");
        $avaliacao->setEstabelecimento("");
    }

    /**
    * @expectedException Exception
    * @expectedExceptionMessage O campo ESTABELECIMENTO não pode estar vazio
    */
    public function testSetEstabelecimento_Null(){
        $avaliacao = new Avaliacao(3, 1, "000.000.000-00");
        $avaliacao->setEstabelecimento(null);
    }
}
?>
