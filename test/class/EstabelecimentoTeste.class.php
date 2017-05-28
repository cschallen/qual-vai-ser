<?php
   
  use PHPUnit_Framework_TestCase as PHPUnit;
   
  require_once '../../class/Estabelecimento.class.php';
   
  class EstabelecimentoTeste extends PHPUnit{
                  
    public function testType() {
        $estabelecimento = new Estabelecimento(1, "Descricao do estabelecimento", "Rua X", "91450-140", "1948375938", "Estabelecimento Teste", 1, 1);
        $this->assertInternalType('int', $estabelecimento->getIdEstabelecimento());
    }

    public function testDescricao() {
        $estabelecimento = new Estabelecimento(1, "Descricao do estabelecimento", "Rua X", "91450-140", "1948375938", "Estabelecimento Teste", 1, 1);
        $this->assertEquals("Descricao do estabelecimento", $estabelecimento->getDescricao());
    }

    public function testCep() {
        $estabelecimento = new Estabelecimento(1, "Descricao do estabelecimento", "Rua X", "91450-140", "1948375938", "Estabelecimento Teste", 1, 1);
        $this->assertEquals("91450-140", $estabelecimento->getCep());
    }
    
    public function testCNPJ() {
        $estabelecimento = new Estabelecimento(1, "Descricao do estabelecimento", "Rua X", "91450-140", "1948375938", "Estabelecimento Teste", 1, 1);
        $this->assertEquals("1948375938", $estabelecimento->getCnpj());
    }
    
    public function testNome() {
        $estabelecimento = new Estabelecimento(1, "Descricao do estabelecimento", "Rua X", "91450-140", "1948375938", "Estabelecimento Teste", 1, 1);
        $this->assertEquals("Estabelecimento Teste", $estabelecimento->getNome());
    }
    
     public function testIdDono() {
        $estabelecimento = new Estabelecimento(1, "Descricao do estabelecimento", "Rua X", "91450-140", "1948375938", "Estabelecimento Teste", 1, 1);
        $this->assertEquals(1, $estabelecimento->getId_dono());
    }
    
     public function testCardapio() {
        $estabelecimento = new Estabelecimento(1, "Descricao do estabelecimento", "Rua X", "91450-140", "1948375938", "Estabelecimento Teste", 1, 1);
        $this->assertEquals(1, $estabelecimento->getCardapio());
    }
    
    public function testeQtdEstabelecimento(){       
        $estabelecimento = new Estabelecimento(1, "Descricao do estabelecimento", "Rua X", "91450-140", "1948375938", "Estabelecimento Teste", 1, 1);
        $this->assertEquals(1, count($estabelecimento));	
    }
 
  }
  ?> 