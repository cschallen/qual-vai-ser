<?php

use PHPUnit\Framework\TestCase as PHPUnit;

require_once './class/Avaliacao.class.php';
require_once './class/Estabelecimento.class.php';
require_once './class/DonoEstabelecimento.class.php';

class EstabelecimentoGetTest extends PHPUnit{

    public function testObterNotaMedia() {
        $estabelecimento = new Estabelecimento("Estabelecimento Teste", "Descricao do estabelecimento", "Rua X", "91450-140", '40.71727401', '-74.00898606', "99.999.999/9999-99", 1);
        $avaliacao1 = new Avaliacao(5, 1);
        $avaliacao2 = new Avaliacao(3, 1);

        $this->assertEquals(4, $estabelecimento->ObterNotaMedia(1));
    }

    public function testGetRuaTest() {
        $estabelecimento = new Estabelecimento("Estabelecimento Teste", "Descricao do estabelecimento", "Rua X", "91450-140", '40.71727401', '-74.00898606', "99.999.999/9999-99", 1);
        $this->assertEquals('Rua X', $estabelecimento->getRua());
    }

    public function testGetDescricao() {
        $estabelecimento = new Estabelecimento("Estabelecimento Teste", "Descricao do estabelecimento", "Rua X", "91450-140", '40.71727401', '-74.00898606', "99.999.999/9999-99", 1);
        $this->assertEquals("Descricao do estabelecimento", $estabelecimento->getDescricao());
    }

    public function testGetCep() {
        $estabelecimento = new Estabelecimento("Estabelecimento Teste", "Descricao do estabelecimento", "Rua X", "91450-140", '40.71727401', '-74.00898606', "99.999.999/9999-99", 1);
        $this->assertEquals("91450-140", $estabelecimento->getCep());
    }

    public function testGetCNPJ() {
        $estabelecimento = new Estabelecimento("Estabelecimento Teste", "Descricao do estabelecimento", "Rua X", "91450-140", '40.71727401', '-74.00898606', "99.999.999/9999-99", 1);
        $this->assertEquals("99.999.999/9999-99", $estabelecimento->getCnpj());
    }

    public function testGetNome() {
        $estabelecimento = new Estabelecimento("Estabelecimento Teste", "Descricao do estabelecimento", "Rua X", "91450-140", '40.71727401', '-74.00898606', "99.999.999/9999-99", 1);
        $this->assertEquals("Estabelecimento Teste", $estabelecimento->getNome());
    }
}
?>
