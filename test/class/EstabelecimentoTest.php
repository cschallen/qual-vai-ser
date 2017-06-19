<?php

use PHPUnit\Framework\TestCase as PHPUnit;

require_once './class/Estabelecimento.class.php';
require_once './class/DonoEstabelecimento.class.php';

class EstabelecimentoTest extends PHPUnit{

    /**
    * @expectedException Exception
    * @expectedExceptionMessage O campo NOME não pode estar vazio
    */
    public function testConstrutorNome_Null(){
        new Estabelecimento(null, "Descricao do Estab", "Rua Z", "91451-852", '40.71727401', '-74.00898606', "99.999.999/9999-99", 1);
    }

    /**
    * @expectedException Exception
    * @expectedExceptionMessage O campo NOME não pode estar vazio
    */
    public function testConstrutorNome_Vazio(){
        new Estabelecimento("", "Descricao do Estab", "Rua Z", "91451-852", '40.71727401', '-74.00898606', "99.999.999/9999-99", 1);
    }

    /**
    * @expectedException Exception
    * @expectedExceptionMessage O campo DESCRICAO não pode estar vazio
    */
    public function testConstrutorDescricao_Null(){
        new Estabelecimento("Xis Do X", null, "Rua Z", "91451-852", '40.71727401', '-74.00898606', "99.999.999/9999-99", 1);
    }

    /**
    * @expectedException Exception
    * @expectedExceptionMessage O campo DESCRICAO não pode estar vazio
    */
    public function testConstrutorDescricao_Vazia(){
        new Estabelecimento("Xis Do X", "", "Rua Z", "91451-852", '40.71727401', '-74.00898606', "99.999.999/9999-99", 1);
    }

    /**
    * @expectedException Exception
    * @expectedExceptionMessage O campo RUA não pode estar vazio
    */
    public function testConstrutorRua_Null(){
        new Estabelecimento("Xis Do X", "Descricao do Estab", null, "91451-852", '40.71727401', '-74.00898606', "99.999.999/9999-99", 1);
    }

    /**
    * @expectedException Exception
    * @expectedExceptionMessage O campo RUA não pode estar vazio
    */
    public function testConstrutorRua_Vazia(){
        new Estabelecimento("Xis Do X", "Descricao do Estab", "", "91451-852", '40.71727401', '-74.00898606', "99.999.999/9999-99", 1);
    }


    /**
    * @expectedException Exception
    * @expectedExceptionMessage O campo CEP não pode estar vazio
    */
    public function testConstrutorCEP_Null(){
        new Estabelecimento("Xis Do X", "Descricao do Estab", "Rua Z", null, '40.71727401', '-74.00898606', "99.999.999/9999-99", 1);
    }

    /**
    * @expectedException Exception
    * @expectedExceptionMessage O campo CEP não pode estar vazio
    */
    public function testConstrutorCEP_Vazio(){
        new Estabelecimento("Xis Do X", "Descricao do Estab", "Rua Z", "", '40.71727401', '-74.00898606', "99.999.999/9999-99", 1);
    }

    /**
    * @expectedException Exception
    * @expectedExceptionMessage O campo CNPJ não pode estar vazio
    */
    public function testConstrutorCNPJ_Null(){
        new Estabelecimento("Xis Do X", "Descricao do Estab", "Rua Z", "91451-852", '40.71727401', '-74.00898606', null, 1);
    }

    /**
    * @expectedException Exception
    * @expectedExceptionMessage O campo CNPJ não pode estar vazio
    */
    public function testConstrutorCNPJ_Vazio(){
        new Estabelecimento("Xis Do X", "Descricao do Estab", "Rua Z", "91451-852", '40.71727401', '-74.00898606', "", 1);
    }

    /**
    * @expectedException Exception
    * @expectedExceptionMessage O campo ID DONO não pode estar vazio
    */
    public function testConstrutor_SemDono(){
        new Estabelecimento("Xis Do X", "Descricao do Estab", "Rua Z", "91451-852", '40.71727401', '-74.00898606', "99.999.999/9999-99", NULL);
    }


    //getters

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

    // setters

    public function testSetNome_Sucesso(){
        $estabelecimento = new Estabelecimento("Estabelecimento Teste", "Descricao do estabelecimento", "Rua X", "91450-140", '40.71727401', '-74.00898606', "99.999.999/9999-99", 1);
        $estabelecimento->setNome("Novo estabelecimento");

        $this->assertEquals("Novo estabelecimento", $estabelecimento->getNome());
    }

    /**
    * @expectedException Exception
    * @expectedExceptionMessage O campo NOME não pode estar vazio
    */
    public function testSetNome_SemValor(){
        $estabelecimento = new Estabelecimento("Estabelecimento Teste", "Descricao do estabelecimento", "Rua X", "91450-140", '40.71727401', '-74.00898606', "99.999.999/9999-99", 1);
        $estabelecimento->setNome("");
    }

    /**
    * @expectedException Exception
    * @expectedExceptionMessage O campo NOME não pode estar vazio
    */
    public function testSetNome_Null(){
        $estabelecimento = new Estabelecimento("Estabelecimento Teste", "Descricao do estabelecimento", "Rua X", "91450-140", '40.71727401', '-74.00898606', "99.999.999/9999-99", 1);
        $estabelecimento->setNome(null);
    }

    public function testSetDescricao_Sucesso(){
        $estabelecimento = new Estabelecimento("Estabelecimento Teste", "Descricao do estabelecimento", "Rua X", "91450-140", '40.71727401', '-74.00898606', "99.999.999/9999-99", 1);
        $estabelecimento->setDescricao("Nova descricao");

        $this->assertEquals("Nova descricao", $estabelecimento->getDescricao());
    }

    /**
    * @expectedException Exception
    * @expectedExceptionMessage O campo DESCRICAO não pode estar vazio
    */
    public function testSetDescricao_SemValor(){
        $estabelecimento = new Estabelecimento("Estabelecimento Teste", "Descricao do estabelecimento", "Rua X", "91450-140", '40.71727401', '-74.00898606', "99.999.999/9999-99", 1);
        $estabelecimento->setDescricao("");
    }

    /**
    * @expectedException Exception
    * @expectedExceptionMessage O campo DESCRICAO não pode estar vazio
    */
    public function testSetDescricao_Null(){
        $estabelecimento = new Estabelecimento("Estabelecimento Teste", "Descricao do estabelecimento", "Rua X", "91450-140", '40.71727401', '-74.00898606', "99.999.999/9999-99", 1);
        $estabelecimento->setDescricao(null);
    }

    public function testSetRua_Sucesso(){
        $estabelecimento = new Estabelecimento("Estabelecimento Teste", "Descricao do estabelecimento", "Rua X", "91450-140", '40.71727401', '-74.00898606', "99.999.999/9999-99", 1);
        $estabelecimento->setRua("Rua Nova");

        $this->assertEquals("Rua Nova", $estabelecimento->getRua());
    }

    /**
    * @expectedException Exception
    * @expectedExceptionMessage O campo RUA não pode estar vazio
    */
    public function testSetRua_SemValor(){
        $estabelecimento = new Estabelecimento("Estabelecimento Teste", "Descricao do estabelecimento", "Rua X", "91450-140", '40.71727401', '-74.00898606', "99.999.999/9999-99", 1);
        $estabelecimento->setRua("");
    }

    /**
    * @expectedException Exception
    * @expectedExceptionMessage O campo RUA não pode estar vazio
    */
    public function testSetRua_Null(){
        $estabelecimento = new Estabelecimento("Estabelecimento Teste", "Descricao do estabelecimento", "Rua X", "91450-140", '40.71727401', '-74.00898606', "99.999.999/9999-99", 1);
        $estabelecimento->setRua(null);
    }

    public function testSetCEP_Sucesso(){
        $estabelecimento = new Estabelecimento("Estabelecimento Teste", "Descricao do estabelecimento", "Rua X", "91450-140", '40.71727401', '-74.00898606', "99.999.999/9999-99", 1);
        $estabelecimento->setCEP("11111-111");

        $this->assertEquals("11111-111", $estabelecimento->getCEP());
    }

    /**
    * @expectedException Exception
    * @expectedExceptionMessage O campo CEP não pode estar vazio
    */
    public function testSetCEP_SemValor(){
        $estabelecimento = new Estabelecimento("Estabelecimento Teste", "Descricao do estabelecimento", "Rua X", "91450-140", '40.71727401', '-74.00898606', "99.999.999/9999-99", 1);
        $estabelecimento->setCEP("");
    }

    /**
    * @expectedException Exception
    * @expectedExceptionMessage O campo CEP não pode estar vazio
    */
    public function testSetCEP_Null(){
        $estabelecimento = new Estabelecimento("Estabelecimento Teste", "Descricao do estabelecimento", "Rua X", "91450-140", '40.71727401', '-74.00898606', "99.999.999/9999-99", 1);
        $estabelecimento->setCEP(null);
    }

    public function testSetCNPJ_Sucesso(){
        $estabelecimento = new Estabelecimento("Estabelecimento Teste", "Descricao do estabelecimento", "Rua X", "91450-140", '40.71727401', '-74.00898606', "99.999.999/9999-99", 1);
        $estabelecimento->setCNPJ("88.888.888/8888-88");

        $this->assertEquals("88.888.888/8888-88", $estabelecimento->getCNPJ());
    }

    /**
    * @expectedException Exception
    * @expectedExceptionMessage O campo CNPJ não pode estar vazio
    */
    public function testSetCNPJ_SemValor(){
        $estabelecimento = new Estabelecimento("Estabelecimento Teste", "Descricao do estabelecimento", "Rua X", "91450-140", '40.71727401', '-74.00898606', "99.999.999/9999-99", 1);
        $estabelecimento->setCNPJ("");
    }

    /**
    * @expectedException Exception
    * @expectedExceptionMessage O campo CNPJ não pode estar vazio
    */
    public function testSetCNPJ_Null(){
        $estabelecimento = new Estabelecimento("Estabelecimento Teste", "Descricao do estabelecimento", "Rua X", "91450-140", '40.71727401', '-74.00898606', "99.999.999/9999-99", 1);
        $estabelecimento->setCNPJ(null);
    }

    public function testSetDono_Sucesso(){
        $estabelecimento = new Estabelecimento("Estabelecimento Teste", "Descricao do estabelecimento", "Rua X", "91450-140", '40.71727401', '-74.00898606', "99.999.999/9999-99", 1);
        $estabelecimento->setidDonoEstabelecimento(2);

        $this->assertEquals(2, $estabelecimento->getidDonoEstabelecimento());
    }


}
?>
