<?php

use PHPUnit\Framework\TestCase as PHPUnit;

require_once './class/Estabelecimento.class.php';
require_once './class/DonoEstabelecimento.class.php';

class EstabelecimentoTeste extends PHPUnit{

    //construtor

    // --------------- Nome ---------------
    
     /**
    * @expectedException Exception
    * @expectedExceptionMessage Nome não pode ser nulo.
    */
    public function construtorNome_Null(){
        new Estabelecimento(null, "Descricao do Estab", "Rua Z", "91451-852", '40.71727401', '-74.00898606', "99.999.999/9999-99", 1);
    }

       /**
    * @expectedException Exception
    * @expectedExceptionMessage Nome não pode ser vazio.
    */
    public function construtorNome_Vazio(){
        new Estabelecimento("", "Descricao do Estab", "Rua Z", '40.71727401', '-74.00898606', "99.999.999/9999-99", 1);
    }

       /**
    * @expectedException Exception
    * @expectedExceptionMessage Nome não pode ser em branco.
    */
    public function construtorNome_EmBranco(){
        new Estabelecimento("  ", "Descricao do Estab", "Rua Z", "91451-852", '40.71727401', '-74.00898606', "99.999.999/9999-99", 1);
    }
    
      // --------------- Descricao ---------------
    
     /**
    * @expectedException Exception
    * @expectedExceptionMessage Descricao não pode ser nula.
    */
    public function construtorDescricao_Null(){
        new Estabelecimento("Xis Do X", null, "Rua Z", "91451-852", '40.71727401', '-74.00898606', "99.999.999/9999-99", 1);
    }

       /**
    * @expectedException Exception
    * @expectedExceptionMessage Descricao não pode vazia.
    */
    public function construtorDescricao_Vazia(){
        new Estabelecimento("Xis Do X", "", "Rua Z", "91451-852", '40.71727401', '-74.00898606', "99.999.999/9999-99", 1);
    }

       /**
    * @expectedException Descricao
    * @expectedExceptionMessage Descricao não pode ser em branco.
    */
    public function construtorDescricao_EmBranco(){
        new Estabelecimento("Xis Do X", "  ", "Rua Z", "91451-852", '40.71727401', '-74.00898606', "99.999.999/9999-99", 1);

     // --------------- Rua ---------------
    
     /**
    * @expectedException Exception
    * @expectedExceptionMessage Rua não pode ser nula.
    */
    public function construtorRua_Null(){
        new Estabelecimento("Xis Do X", "Descricao do Estab", null, "91451-852", '40.71727401', '-74.00898606', "99.999.999/9999-99", 1);
    }

       /**
    * @expectedException Exception
    * @expectedExceptionMessage Rua não pode ser nulo.
    */
    public function construtorRua_Vazia(){
        new Estabelecimento("Xis Do X", "Descricao do Estab", "", "91451-852", '40.71727401', '-74.00898606', "99.999.999/9999-99", 1);
    }

       /**
    * @expectedException Exception
    * @expectedExceptionMessage Rua não pode ser em branco.
    */
    public function construtorRua_EmBranco(){
        new Estabelecimento("Xis Do X", "Descricao do Estab", "   ", "91451-852", '40.71727401', '-74.00898606', "99.999.999/9999-99", 1);


   // --------------- CEP ---------------
    
     /**
    * @expectedException Exception
    * @expectedExceptionMessage CEP não pode ser nulo.
    */
    public function construtorCEP_Null(){
        new Estabelecimento("Xis Do X", "Descricao do Estab", "Rua Z", null, '40.71727401', '-74.00898606', "99.999.999/9999-99", 1);
    }

       /**
    * @expectedException Exception
    * @expectedExceptionMessage CEP não pode ser vazio.
    */
    public function construtorCEP_Vazio(){
        new Estabelecimento("Xis Do X", "Descricao do Estab", "Rua Z", "", '40.71727401', '-74.00898606', "99.999.999/9999-99", 1);
    }

       /**
    * @expectedException Exception
    * @expectedExceptionMessage CEP não pode ser em branco.
    */
    public function construtorCEP_EmBranco(){
        new Estabelecimento("Xis Do X", "Descricao do Estab", "Rua Z", "   ", '40.71727401', '-74.00898606', "99.999.999/9999-99", 1);



     // --------------- CNPJ ---------------
    
     /**
    * @expectedException Exception
    * @expectedExceptionMessage CNPJ não pode ser nulo.
    */
    public function construtorCNPJ_Null(){
        new Estabelecimento("Xis Do X", "Descricao do Estab", "Rua Z", "91451-852", '40.71727401', '-74.00898606', null, 1);
    }

       /**
    * @expectedException Exception
    * @expectedExceptionMessage CNPJ não pode ser vazio.
    */
    public function construtorCNPJ_Vazio(){
        new Estabelecimento("Xis Do X", "Descricao do Estab", "Rua Z", "91451-852", '40.71727401', '-74.00898606', "", 1);
    }

       /**
    * @expectedException Exception
    * @expectedExceptionMessage CNPJ não pode ser em branco.
    */
    public function construtorCNPJ_EmBranco(){
        new Estabelecimento("Xis Do X", "Descricao do Estab", "Rua Z", "91451-852", '40.71727401', '-74.00898606', "  ", 1);



     // --------------- Dono ---------------
    

    /**
    * @expectedException Exception
    * @expectedExceptionMessage Dono não pode ser vazio.
    */
    public function construtor_SemDono(){
        new Estabelecimento("Xis Do X", "Descricao do Estab", "Rua Z", "91451-852", '40.71727401', '-74.00898606', "99.999.999/9999-99");
    }


    //getters

    public function getRuaTest() {
        $estabelecimento = new Estabelecimento("Estabelecimento Teste", "Descricao do estabelecimento", "Rua X", "91450-140", '40.71727401', '-74.00898606', "99.999.999/9999-99", 1);
        $this->assertEquals('Rua X', $estabelecimento->getRua());
    }

    public function getDescricaoTest() {
        $estabelecimento = new Estabelecimento("Estabelecimento Teste", "Descricao do estabelecimento", "Rua X", "91450-140", '40.71727401', '-74.00898606', "99.999.999/9999-99", 1);
        $this->assertEquals("Descricao do estabelecimento", $estabelecimento->getDescricao());
    }

    public function getCepTest() { 
        $estabelecimento = new Estabelecimento("Estabelecimento Teste", "Descricao do estabelecimento", "Rua X", "91450-140", '40.71727401', '-74.00898606', "99.999.999/9999-99", 1);
        $this->assertEquals("91450-140", $estabelecimento->getCep());
    }

    public function getCNPJTest() {
        $estabelecimento = new Estabelecimento("Estabelecimento Teste", "Descricao do estabelecimento", "Rua X", "91450-140", '40.71727401', '-74.00898606', "99.999.999/9999-99", 1);
        $this->assertEquals("99.999.999/9999-99", $estabelecimento->getCnpj());
    }

    public function getNomeTest() {
        $estabelecimento = new Estabelecimento("Estabelecimento Teste", "Descricao do estabelecimento", "Rua X", "91450-140", '40.71727401', '-74.00898606', "99.999.999/9999-99", 1);
        $this->assertEquals("Estabelecimento Teste", $estabelecimento->getNome());
    }

    //setters

    //-------------------- Nome ------------------

    public function setNome_Sucesso(){
         $estabelecimento = new Estabelecimento("Estabelecimento Teste", "Descricao do estabelecimento", "Rua X", "91450-140", '40.71727401', '-74.00898606', "99.999.999/9999-99", 1);
        $estabelecimento.setNome("Novo estabelecimento");

        assertEquals("Novo estabelecimento", $estabelecimento.getNome());
    }

     /**
    * @expectedException Exception
    * @expectedExceptionMessage Nome não pode ser vazio.
    */  
    public function setNome_SemValor(){
        $estabelecimento = new Estabelecimento("Estabelecimento Teste", "Descricao do estabelecimento", "Rua X", "91450-140", '40.71727401', '-74.00898606', "99.999.999/9999-99", 1);
        $estabelecimento.setNome("");
    }

    /**
    * @expectedException Exception
    * @expectedExceptionMessage Nome não pode ser em branco.
    */  
    public function setNome_EspacoEmBranco(){
        $estabelecimento = new Estabelecimento("Estabelecimento Teste", "Descricao do estabelecimento", "Rua X", "91450-140", '40.71727401', '-74.00898606', "99.999.999/9999-99", 1);
        $estabelecimento.setNome("  ");
    }

    /**
    * @expectedException Exception
    * @expectedExceptionMessage Nome não pode ser nulo.
    */  
    public function setNome_Null(){
        $estabelecimento = new Estabelecimento("Estabelecimento Teste", "Descricao do estabelecimento", "Rua X", "91450-140", '40.71727401', '-74.00898606', "99.999.999/9999-99", 1);
        $estabelecimento.setNome(null);
    }

        //-------------------- Descricao ------------------

    public function setDescricao_Sucesso(){
        $estabelecimento = new Estabelecimento("Estabelecimento Teste", "Descricao do estabelecimento", "Rua X", "91450-140", '40.71727401', '-74.00898606', "99.999.999/9999-99", 1);
        $estabelecimento.setDescricao("Nova descricao");

        assertEquals("Nova descricao", $estabelecimento.getDescricao());
    }

     /**
    * @expectedException Exception
    * @expectedExceptionMessage Descricao não pode ser vazio.
    */  
    public function setDescricao_SemValor(){
        $estabelecimento = new Estabelecimento("Estabelecimento Teste", "Descricao do estabelecimento", "Rua X", "91450-140", '40.71727401', '-74.00898606', "99.999.999/9999-99", 1);
        $estabelecimento.setDescricao("");
    }

    /**
    * @expectedException Exception
    * @expectedExceptionMessage Descricao não pode ser em branco.
    */  
    public function setDescricao_EspacoEmBranco(){
        $estabelecimento = new Estabelecimento("Estabelecimento Teste", "Descricao do estabelecimento", "Rua X", "91450-140", '40.71727401', '-74.00898606', "99.999.999/9999-99", 1);
        $estabelecimento.setDescricao("  ");
    }

    /**
    * @expectedException Exception
    * @expectedExceptionMessage Descricao não pode ser nulo.
    */  
    public function setDescricao_Null(){
        $estabelecimento = new Estabelecimento("Estabelecimento Teste", "Descricao do estabelecimento", "Rua X", "91450-140", '40.71727401', '-74.00898606', "99.999.999/9999-99", 1);
        $estabelecimento.setDescricao(null);
    }

        //-------------------- Rua ------------------

    public function setRua_Sucesso(){
        $estabelecimento = new Estabelecimento("Estabelecimento Teste", "Descricao do estabelecimento", "Rua X", "91450-140", '40.71727401', '-74.00898606', "99.999.999/9999-99", 1);
        $estabelecimento.setRua("Rua Nova");

        assertEquals("Rua Nova", $estabelecimento.getRua());
    }

     /**
    * @expectedException Exception
    * @expectedExceptionMessage Rua não pode ser vazio.
    */  
    public function setRua_SemValor(){
        $estabelecimento = new Estabelecimento("Estabelecimento Teste", "Descricao do estabelecimento", "Rua X", "91450-140", '40.71727401', '-74.00898606', "99.999.999/9999-99", 1);
        $estabelecimento.setRua("");
    }

    /**
    * @expectedException Exception
    * @expectedExceptionMessage Rua não pode ser em branco.
    */  
    public function setRua_EspacoEmBranco(){
        $estabelecimento = new Estabelecimento("Estabelecimento Teste", "Descricao do estabelecimento", "Rua X", "91450-140", '40.71727401', '-74.00898606', "99.999.999/9999-99", 1);
        $estabelecimento.setRua("  ");
    }

    /**
    * @expectedException Exception
    * @expectedExceptionMessage Rua não pode ser nulo.
    */  
    public function setRua_Null(){
        $estabelecimento = new Estabelecimento("Estabelecimento Teste", "Descricao do estabelecimento", "Rua X", "91450-140", '40.71727401', '-74.00898606', "99.999.999/9999-99", 1);
        $estabelecimento.setRua(null);
    }

        //-------------------- CEP ------------------

    public function setCEP_Sucesso(){
        $estabelecimento = new Estabelecimento("Estabelecimento Teste", "Descricao do estabelecimento", "Rua X", "91450-140", '40.71727401', '-74.00898606', "99.999.999/9999-99", 1);
        $estabelecimento.setCEP("11111-111");

        assertEquals("11111-111", $estabelecimento.getCEP());
    }

     /**
    * @expectedException Exception
    * @expectedExceptionMessage CEP não pode ser vazio.
    */  
    public function setCEP_SemValor(){
        $estabelecimento = new Estabelecimento("Estabelecimento Teste", "Descricao do estabelecimento", "Rua X", "91450-140", '40.71727401', '-74.00898606', "99.999.999/9999-99", 1);
        $estabelecimento.setCEP("");
    }

    /**
    * @expectedException Exception
    * @expectedExceptionMessage CEP não pode ser em branco.
    */  
    public function setCEP_EspacoEmBranco(){
        $estabelecimento = new Estabelecimento("Estabelecimento Teste", "Descricao do estabelecimento", "Rua X", "91450-140", '40.71727401', '-74.00898606', "99.999.999/9999-99", 1);
        $estabelecimento.setCEP("  ");
    }

    /**
    * @expectedException Exception
    * @expectedExceptionMessage CEP não pode ser nulo.
    */  
    public function setCEP_Null(){
        $estabelecimento = new Estabelecimento("Estabelecimento Teste", "Descricao do estabelecimento", "Rua X", "91450-140", '40.71727401', '-74.00898606', "99.999.999/9999-99", 1);
        $estabelecimento.setCEP(null);
    }

        //-------------------- CNPJ ------------------

    public function setCNPJ_Sucesso(){
        $estabelecimento = new Estabelecimento("Estabelecimento Teste", "Descricao do estabelecimento", "Rua X", "91450-140", '40.71727401', '-74.00898606', "99.999.999/9999-99", 1);
        $estabelecimento.setCNPJ("88.888.888/8888-88");

        assertEquals("88.888.888/8888-88", $estabelecimento.getCNPJ());
    }

     /**
    * @expectedException Exception
    * @expectedExceptionMessage CNPJ não pode ser vazio.
    */  
    public function setCNPJ_SemValor(){
        $estabelecimento = new Estabelecimento("Estabelecimento Teste", "Descricao do estabelecimento", "Rua X", "91450-140", '40.71727401', '-74.00898606', "99.999.999/9999-99", 1);
        $estabelecimento.setCNPJ("");
    }

    /**
    * @expectedException Exception
    * @expectedExceptionMessage CNPJ não pode ser em branco.
    */  
    public function setCNPJ_EspacoEmBranco(){
        $estabelecimento = new Estabelecimento("Estabelecimento Teste", "Descricao do estabelecimento", "Rua X", "91450-140", '40.71727401', '-74.00898606', "99.999.999/9999-99", 1);
        $estabelecimento.setCNPJ("  ");
    }

    /**
    * @expectedException Exception
    * @expectedExceptionMessage CNPJ não pode ser nulo.
    */  
    public function setCNPJ_Null(){
        $estabelecimento = new Estabelecimento("Estabelecimento Teste", "Descricao do estabelecimento", "Rua X", "91450-140", '40.71727401', '-74.00898606', "99.999.999/9999-99", 1);
        $estabelecimento.setCNPJ(null);
    }

        //-------------------- Dono ------------------

    public function setDono_Sucesso(){
        $estabelecimento = new Estabelecimento("Estabelecimento Teste", "Descricao do estabelecimento", "Rua X", "91450-140", '40.71727401', '-74.00898606', "99.999.999/9999-99", 1);
        $estabelecimento.setidDono(2);

        assertEquals(2, $estabelecimento.getidDono());
    }


}
?>
