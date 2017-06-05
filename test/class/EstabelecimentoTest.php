<?php

use PHPUnit\Framework\TestCase as PHPUnit;

require_once './class/Estabelecimento.class.php';

class EstabelecimentoTeste extends PHPUnit{

    public function testRua() {
        $estabelecimento = new Estabelecimento("Descricao do estabelecimento", "Rua X", "91450-140", "1948375938", "Estabelecimento Teste", "Cardapio do estabeleicmento");
        $this->assertEquals('Rua X', $estabelecimento->getRua());
    }

    public function testDescricao() {
        $estabelecimento = new Estabelecimento("Descricao do estabelecimento", "Rua X", "91450-140", "1948375938", "Estabelecimento Teste", "Cardapio do estabeleicmento");
        $this->assertEquals("Descricao do estabelecimento", $estabelecimento->getDescricao());
    }

    public function testCep() {
        $estabelecimento = new Estabelecimento("Descricao do estabelecimento", "Rua X", "91450-140", "1948375938", "Estabelecimento Teste", "Cardapio do estabeleicmento");
        $this->assertEquals("91450-140", $estabelecimento->getCep());
    }

    public function testCNPJ() {
        $estabelecimento = new Estabelecimento("Descricao do estabelecimento", "Rua X", "91450-140", "1948375938", "Estabelecimento Teste", "Cardapio do estabeleicmento");
        $this->assertEquals("1948375938", $estabelecimento->getCnpj());
    }

    public function testNome() {
        $estabelecimento = new Estabelecimento("Descricao do estabelecimento", "Rua X", "91450-140", "1948375938", "Estabelecimento Teste", "Cardapio do estabeleicmento");
        $this->assertEquals("Estabelecimento Teste", $estabelecimento->getNome());
    }

    public function testCardapio() {
        $estabelecimento = new Estabelecimento("Descricao do estabelecimento", "Rua X", "91450-140", "1948375938", "Estabelecimento Teste", "Cardapio do estabeleicmento");
        $this->assertEquals("Cardapio do estabeleicmento", $estabelecimento->getCardapio());
    }

    public function testeQtdEstabelecimento(){
        $estabelecimento = new Estabelecimento("Descricao do estabelecimento", "Rua X", "91450-140", "1948375938", "Estabelecimento Teste", "Cardapio do estabeleicmento");
        $this->assertEquals(1, count($estabelecimento));
    }

}
?>
