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
        $donoEstab = new DonoEstabelecimento(1, "Fulano", "Rua do fulano", "91541-521", "124.521.985-94", "dono@estab.com", "dono", "donoDoEstab"); 
        new Estabelecimento(null, "Descricao do Estab", "Rua Z", "91451-852", "99.999.999/9999-99", $donoEstab.idDono);
    }

       /**
    * @expectedException Exception
    * @expectedExceptionMessage Nome não pode ser vazio.
    */
    public function construtorNome_Vazio(){
        $donoEstab = new DonoEstabelecimento(1, "Fulano", "Rua do fulano", "91541-521", "124.521.985-94", "dono@estab.com", "dono", "donoDoEstab"); 
        new Estabelecimento("", "Descricao do Estab", "Rua Z", "91451-852", "99.999.999/9999-99", $donoEstab.idDono);
    }

       /**
    * @expectedException Exception
    * @expectedExceptionMessage Nome não pode ser em branco.
    */
    public function construtorNome_EmBranco(){
        $donoEstab = new DonoEstabelecimento(1, "Fulano", "Rua do fulano", "91541-521", "124.521.985-94", "dono@estab.com", "dono", "donoDoEstab"); 
        new Estabelecimento("  ", "Descricao do Estab", "Rua Z", "91451-852", "99.999.999/9999-99", $donoEstab.idDono);
    }
    
      // --------------- Descricao ---------------
    
     /**
    * @expectedException Exception
    * @expectedExceptionMessage Descricao não pode ser nula.
    */
    public function construtorDescricao_Null(){
        $donoEstab = new DonoEstabelecimento(1, "Fulano", "Rua do fulano", "91541-521", "124.521.985-94", "dono@estab.com", "dono", "donoDoEstab"); 
        new Estabelecimento("Xis Do X", null, "Rua Z", "91451-852", "99.999.999/9999-99", $donoEstab.idDono);
    }

       /**
    * @expectedException Exception
    * @expectedExceptionMessage Descricao não pode vazia.
    */
    public function construtorDescricao_Vazia(){
        $donoEstab = new DonoEstabelecimento(1, "Fulano", "Rua do fulano", "91541-521", "124.521.985-94", "dono@estab.com", "dono", "donoDoEstab"); 
        new Estabelecimento("Xis Do X", "", "Rua Z", "91451-852", "99.999.999/9999-99", $donoEstab.idDono);
    }

       /**
    * @expectedException Descricao
    * @expectedExceptionMessage Descricao não pode ser em branco.
    */
    public function construtorDescricao_EmBranco(){
        $donoEstab = new DonoEstabelecimento(1, "Fulano", "Rua do fulano", "91541-521", "124.521.985-94", "dono@estab.com", "dono", "donoDoEstab"); 
        new Estabelecimento("Xis Do X", "  ", "Rua Z", "91451-852", "99.999.999/9999-99", $donoEstab.idDono);

     // --------------- Rua ---------------
    
     /**
    * @expectedException Exception
    * @expectedExceptionMessage Rua não pode ser nula.
    */
    public function construtorRua_Null(){
        $donoEstab = new DonoEstabelecimento(1, "Fulano", "Rua do fulano", "91541-521", "124.521.985-94", "dono@estab.com", "dono", "donoDoEstab"); 
        new Estabelecimento("Xis Do X", "Descricao do Estab", null, "91451-852", "99.999.999/9999-99", $donoEstab.idDono);
    }

       /**
    * @expectedException Exception
    * @expectedExceptionMessage Rua não pode ser nulo.
    */
    public function construtorRua_Vazia(){
        $donoEstab = new DonoEstabelecimento(1, "Fulano", "Rua do fulano", "91541-521", "124.521.985-94", "dono@estab.com", "dono", "donoDoEstab"); 
        new Estabelecimento("Xis Do X", "Descricao do Estab", "", "91451-852", "99.999.999/9999-99", $donoEstab.idDono);
    }

       /**
    * @expectedException Exception
    * @expectedExceptionMessage Rua não pode ser em branco.
    */
    public function construtorRua_EmBranco(){
        $donoEstab = new DonoEstabelecimento(1, "Fulano", "Rua do fulano", "91541-521", "124.521.985-94", "dono@estab.com", "dono", "donoDoEstab"); 
        new Estabelecimento("Xis Do X", "Descricao do Estab", "   ", "91451-852", "99.999.999/9999-99", $donoEstab.idDono);


   // --------------- CEP ---------------
    
     /**
    * @expectedException Exception
    * @expectedExceptionMessage CEP não pode ser nulo.
    */
    public function construtorCEP_Null(){
        $donoEstab = new DonoEstabelecimento(1, "Fulano", "Rua do fulano", "91541-521", "124.521.985-94", "dono@estab.com", "dono", "donoDoEstab"); 
        new Estabelecimento("Xis Do X", "Descricao do Estab", "Rua Z", null, "99.999.999/9999-99", $donoEstab.idDono);
    }

       /**
    * @expectedException Exception
    * @expectedExceptionMessage CEP não pode ser vazio.
    */
    public function construtorNCEP_Vazio(){
        $donoEstab = new DonoEstabelecimento(1, "Fulano", "Rua do fulano", "91541-521", "124.521.985-94", "dono@estab.com", "dono", "donoDoEstab"); 
        new Estabelecimento("Xis Do X", "Descricao do Estab", "Rua Z", "", "99.999.999/9999-99", $donoEstab.idDono);
    }

       /**
    * @expectedException Exception
    * @expectedExceptionMessage CEP não pode ser em branco.
    */
    public function construtorCEP_EmBranco(){
        $donoEstab = new DonoEstabelecimento(1, "Fulano", "Rua do fulano", "91541-521", "124.521.985-94", "dono@estab.com", "dono", "donoDoEstab"); 
        new Estabelecimento("Xis Do X", "Descricao do Estab", "Rua Z", "   ", "99.999.999/9999-99", $donoEstab.idDono);



     // --------------- CNPJ ---------------
    
     /**
    * @expectedException Exception
    * @expectedExceptionMessage CNPJ não pode ser nulo.
    */
    public function construtorCNPJ_Null(){
        $donoEstab = new DonoEstabelecimento(1, "Fulano", "Rua do fulano", "91541-521", "124.521.985-94", "dono@estab.com", "dono", "donoDoEstab"); 
        new Estabelecimento("Xis Do X", "Descricao do Estab", "Rua Z", "91451-852", null, $donoEstab.idDono);
    }

       /**
    * @expectedException Exception
    * @expectedExceptionMessage CNPJ não pode ser vazio.
    */
    public function construtorCNPJ_Vazio(){
        $donoEstab = new DonoEstabelecimento(1, "Fulano", "Rua do fulano", "91541-521", "124.521.985-94", "dono@estab.com", "dono", "donoDoEstab"); 
        new Estabelecimento("Xis Do X", "Descricao do Estab", "Rua Z", "91451-852", "", $donoEstab.idDono);
    }

       /**
    * @expectedException Exception
    * @expectedExceptionMessage CNPJ não pode ser em branco.
    */
    public function construtorCNPJ_EmBranco(){
        $donoEstab = new DonoEstabelecimento(1, "Fulano", "Rua do fulano", "91541-521", "124.521.985-94", "dono@estab.com", "dono", "donoDoEstab"); 
        new Estabelecimento("Xis Do X", "Descricao do Estab", "Rua Z", "91451-852", "  ", $donoEstab.idDono);



     // --------------- Dono ---------------
    

    /**
    * @expectedException Exception
    * @expectedExceptionMessage Dono não pode ser vazio.
    */
    public function construtor_SemDono(){
        new Estabelecimento("Xis Do X", "Descricao do Estab", "Rua Z", "91451-852", "99.999.999/9999-99");
    }


    //getters

    public function getRuaTest() {
        $donoEstab = new DonoEstabelecimento(1, "Fulano", "Rua do fulano", "91541-521", "124.521.985-94", "dono@estab.com", "dono", "donoDoEstab"); 
        $estabelecimento = new Estabelecimento("Estabelecimento Teste", "Descricao do estabelecimento", "Rua X", "91450-140", "99.999.999/9999-99", $donoEstab.idDono);
        $this->assertEquals('Rua X', $estabelecimento->getRua());
    }

    public function getDescricaoTest() {
        $donoEstab = new DonoEstabelecimento(1, "Fulano", "Rua do fulano", "91541-521", "124.521.985-94", "dono@estab.com", "dono", "donoDoEstab"); 
        $estabelecimento = new Estabelecimento("Estabelecimento Teste", "Descricao do estabelecimento", "Rua X", "91450-140", "99.999.999/9999-99", $donoEstab.idDono);

        $this->assertEquals("Descricao do estabelecimento", $estabelecimento->getDescricao());
    }

    public function getCepTest() {
        $donoEstab = new DonoEstabelecimento(1, "Fulano", "Rua do fulano", "91541-521", "124.521.985-94", "dono@estab.com", "dono", "donoDoEstab"); 
        $estabelecimento = new Estabelecimento("Estabelecimento Teste", "Descricao do estabelecimento", "Rua X", "91450-140", "99.999.999/9999-99", $donoEstab.idDono);

        $this->assertEquals("91450-140", $estabelecimento->getCep());
    }

    public function getCNPJTest() {
        $donoEstab = new DonoEstabelecimento(1, "Fulano", "Rua do fulano", "91541-521", "124.521.985-94", "dono@estab.com", "dono", "donoDoEstab"); 
        $estabelecimento = new Estabelecimento("Estabelecimento Teste", "Descricao do estabelecimento", "Rua X", "91450-140", "99.999.999/9999-99", $donoEstab.idDono);

        $this->assertEquals("1948375938", $estabelecimento->getCnpj());
    }

    public function getNomeTest() {
        $donoEstab = new DonoEstabelecimento(1, "Fulano", "Rua do fulano", "91541-521", "124.521.985-94", "dono@estab.com", "dono", "donoDoEstab"); 
        $estabelecimento = new Estabelecimento("Estabelecimento Teste", "Descricao do estabelecimento", "Rua X", "91450-140", "99.999.999/9999-99", $donoEstab.idDono);

        $this->assertEquals("Estabelecimento Teste", $estabelecimento->getNome());
    }

    //setters

    //-------------------- Nome ------------------

    public function setNome_Sucesso(){
        $donoEstab = new DonoEstabelecimento(1, "Fulano", "Rua do fulano", "91541-521", "124.521.985-94", "dono@estab.com", "dono", "donoDoEstab"); 
        $estabelecimento = new Estabelecimento("Estabelecimento Teste", "Descricao do estabelecimento", "Rua X", "91450-140", "99.999.999/9999-99", $donoEstab.idDono);
        $estabelecimento.setNome("Novo estabelecimento");

        assertEquals("Novo estabelecimento", $estabelecimento.getNome());
    }

     /**
    * @expectedException Exception
    * @expectedExceptionMessage Nome não pode ser vazio.
    */  
    public function setNome_SemValor(){
        $donoEstab = new DonoEstabelecimento(1, "Fulano", "Rua do fulano", "91541-521", "124.521.985-94", "dono@estab.com", "dono", "donoDoEstab"); 
        $estabelecimento = new Estabelecimento("Estabelecimento Teste", "Descricao do estabelecimento", "Rua X", "91450-140", "99.999.999/9999-99", $donoEstab.idDono);
        $estabelecimento.setNome("");
    }

    /**
    * @expectedException Exception
    * @expectedExceptionMessage Nome não pode ser em branco.
    */  
    public function setNome_EspacoEmBranco(){
        $donoEstab = new DonoEstabelecimento(1, "Fulano", "Rua do fulano", "91541-521", "124.521.985-94", "dono@estab.com", "dono", "donoDoEstab"); 
        $estabelecimento = new Estabelecimento("Estabelecimento Teste", "Descricao do estabelecimento", "Rua X", "91450-140", "99.999.999/9999-99", $donoEstab.idDono);
        $estabelecimento.setNome("  ");
    }

    /**
    * @expectedException Exception
    * @expectedExceptionMessage Nome não pode ser nulo.
    */  
    public function setNome_Null(){
        $donoEstab = new DonoEstabelecimento(1, "Fulano", "Rua do fulano", "91541-521", "124.521.985-94", "dono@estab.com", "dono", "donoDoEstab"); 
        $estabelecimento = new Estabelecimento("Estabelecimento Teste", "Descricao do estabelecimento", "Rua X", "91450-140", "99.999.999/9999-99", $donoEstab.idDono);
        $estabelecimento.setNome(null);
    }

        //-------------------- Descricao ------------------

    public function setDescricao_Sucesso(){
        $donoEstab = new DonoEstabelecimento(1, "Fulano", "Rua do fulano", "91541-521", "124.521.985-94", "dono@estab.com", "dono", "donoDoEstab"); 
        $estabelecimento = new Estabelecimento("Estabelecimento Teste", "Descricao do estabelecimento", "Rua X", "91450-140", "99.999.999/9999-99", $donoEstab.idDono);
        $estabelecimento.setDescricao("Nova descricao");

        assertEquals("Nova descricao", $estabelecimento.getDescricao());
    }

     /**
    * @expectedException Exception
    * @expectedExceptionMessage Descricao não pode ser vazio.
    */  
    public function setDescricao_SemValor(){
        $donoEstab = new DonoEstabelecimento(1, "Fulano", "Rua do fulano", "91541-521", "124.521.985-94", "dono@estab.com", "dono", "donoDoEstab"); 
        $estabelecimento = new Estabelecimento("Estabelecimento Teste", "Descricao do estabelecimento", "Rua X", "91450-140", "99.999.999/9999-99", $donoEstab.idDono);
        $estabelecimento.setDescricao("");
    }

    /**
    * @expectedException Exception
    * @expectedExceptionMessage Descricao não pode ser em branco.
    */  
    public function setDescricao_EspacoEmBranco(){
        $donoEstab = new DonoEstabelecimento(1, "Fulano", "Rua do fulano", "91541-521", "124.521.985-94", "dono@estab.com", "dono", "donoDoEstab"); 
        $estabelecimento = new Estabelecimento("Estabelecimento Teste", "Descricao do estabelecimento", "Rua X", "91450-140", "99.999.999/9999-99", $donoEstab.idDono);
        $estabelecimento.setDescricao("  ");
    }

    /**
    * @expectedException Exception
    * @expectedExceptionMessage Descricao não pode ser nulo.
    */  
    public function setDescricao_Null(){
        $donoEstab = new DonoEstabelecimento(1, "Fulano", "Rua do fulano", "91541-521", "124.521.985-94", "dono@estab.com", "dono", "donoDoEstab"); 
        $estabelecimento = new Estabelecimento("Estabelecimento Teste", "Descricao do estabelecimento", "Rua X", "91450-140", "99.999.999/9999-99", $donoEstab.idDono);
        $estabelecimento.setDescricao(null);
    }

        //-------------------- Rua ------------------

    public function setRua_Sucesso(){
        $donoEstab = new DonoEstabelecimento(1, "Fulano", "Rua do fulano", "91541-521", "124.521.985-94", "dono@estab.com", "dono", "donoDoEstab"); 
        $estabelecimento = new Estabelecimento("Estabelecimento Teste", "Descricao do estabelecimento", "Rua X", "91450-140", "99.999.999/9999-99", $donoEstab.idDono);
        $estabelecimento.setRua("Rua Nova");

        assertEquals("Rua Nova", $estabelecimento.getRua());
    }

     /**
    * @expectedException Exception
    * @expectedExceptionMessage Rua não pode ser vazio.
    */  
    public function setRua_SemValor(){
        $donoEstab = new DonoEstabelecimento(1, "Fulano", "Rua do fulano", "91541-521", "124.521.985-94", "dono@estab.com", "dono", "donoDoEstab"); 
        $estabelecimento = new Estabelecimento("Estabelecimento Teste", "Descricao do estabelecimento", "Rua X", "91450-140", "99.999.999/9999-99", $donoEstab.idDono);
        $estabelecimento.setRua("");
    }

    /**
    * @expectedException Exception
    * @expectedExceptionMessage Rua não pode ser em branco.
    */  
    public function setRua_EspacoEmBranco(){
        $donoEstab = new DonoEstabelecimento(1, "Fulano", "Rua do fulano", "91541-521", "124.521.985-94", "dono@estab.com", "dono", "donoDoEstab"); 
        $estabelecimento = new Estabelecimento("Estabelecimento Teste", "Descricao do estabelecimento", "Rua X", "91450-140", "99.999.999/9999-99", $donoEstab.idDono);
        $estabelecimento.setRua("  ");
    }

    /**
    * @expectedException Exception
    * @expectedExceptionMessage Rua não pode ser nulo.
    */  
    public function setRua_Null(){
        $donoEstab = new DonoEstabelecimento(1, "Fulano", "Rua do fulano", "91541-521", "124.521.985-94", "dono@estab.com", "dono", "donoDoEstab"); 
        $estabelecimento = new Estabelecimento("Estabelecimento Teste", "Descricao do estabelecimento", "Rua X", "91450-140", "99.999.999/9999-99", $donoEstab.idDono);
        $estabelecimento.setRua(null);
    }

        //-------------------- CEP ------------------

    public function setCEP_Sucesso(){
        $donoEstab = new DonoEstabelecimento(1, "Fulano", "Rua do fulano", "91541-521", "124.521.985-94", "dono@estab.com", "dono", "donoDoEstab"); 
        $estabelecimento = new Estabelecimento("Estabelecimento Teste", "Descricao do estabelecimento", "Rua X", "91450-140", "99.999.999/9999-99", $donoEstab.idDono);
        $estabelecimento.setCEP("11111-111");

        assertEquals("11111-111", $estabelecimento.getCEP());
    }

     /**
    * @expectedException Exception
    * @expectedExceptionMessage CEP não pode ser vazio.
    */  
    public function setCEP_SemValor(){
        $donoEstab = new DonoEstabelecimento(1, "Fulano", "Rua do fulano", "91541-521", "124.521.985-94", "dono@estab.com", "dono", "donoDoEstab"); 
        $estabelecimento = new Estabelecimento("Estabelecimento Teste", "Descricao do estabelecimento", "Rua X", "91450-140", "99.999.999/9999-99", $donoEstab.idDono);
        $estabelecimento.setCEP("");
    }

    /**
    * @expectedException Exception
    * @expectedExceptionMessage CEP não pode ser em branco.
    */  
    public function setCEP_EspacoEmBranco(){
        $donoEstab = new DonoEstabelecimento(1, "Fulano", "Rua do fulano", "91541-521", "124.521.985-94", "dono@estab.com", "dono", "donoDoEstab"); 
        $estabelecimento = new Estabelecimento("Estabelecimento Teste", "Descricao do estabelecimento", "Rua X", "91450-140", "99.999.999/9999-99", $donoEstab.idDono);
        $estabelecimento.setCEP("  ");
    }

    /**
    * @expectedException Exception
    * @expectedExceptionMessage CEP não pode ser nulo.
    */  
    public function setCEP_Null(){
        $donoEstab = new DonoEstabelecimento(1, "Fulano", "Rua do fulano", "91541-521", "124.521.985-94", "dono@estab.com", "dono", "donoDoEstab"); 
        $estabelecimento = new Estabelecimento("Estabelecimento Teste", "Descricao do estabelecimento", "Rua X", "91450-140", "99.999.999/9999-99", $donoEstab.idDono);
        $estabelecimento.setCEP(null);
    }

        //-------------------- CNPJ ------------------

    public function setCNPJ_Sucesso(){
        $donoEstab = new DonoEstabelecimento(1, "Fulano", "Rua do fulano", "91541-521", "124.521.985-94", "dono@estab.com", "dono", "donoDoEstab"); 
        $estabelecimento = new Estabelecimento("Estabelecimento Teste", "Descricao do estabelecimento", "Rua X", "91450-140", "99.999.999/9999-99", $donoEstab.idDono);
        $estabelecimento.setCNPJ("88.888.888/8888-88");

        assertEquals("88.888.888/8888-88", $estabelecimento.getCNPJ());
    }

     /**
    * @expectedException Exception
    * @expectedExceptionMessage CNPJ não pode ser vazio.
    */  
    public function setCNPJ_SemValor(){
        $donoEstab = new DonoEstabelecimento(1, "Fulano", "Rua do fulano", "91541-521", "124.521.985-94", "dono@estab.com", "dono", "donoDoEstab"); 
        $estabelecimento = new Estabelecimento("Estabelecimento Teste", "Descricao do estabelecimento", "Rua X", "91450-140", "99.999.999/9999-99", $donoEstab.idDono);
        $estabelecimento.setCNPJ("");
    }

    /**
    * @expectedException Exception
    * @expectedExceptionMessage CNPJ não pode ser em branco.
    */  
    public function setCNPJ_EspacoEmBranco(){
        $donoEstab = new DonoEstabelecimento(1, "Fulano", "Rua do fulano", "91541-521", "124.521.985-94", "dono@estab.com", "dono", "donoDoEstab"); 
        $estabelecimento = new Estabelecimento("Estabelecimento Teste", "Descricao do estabelecimento", "Rua X", "91450-140", "99.999.999/9999-99", $donoEstab.idDono);
        $estabelecimento.setCNPJ("  ");
    }

    /**
    * @expectedException Exception
    * @expectedExceptionMessage CNPJ não pode ser nulo.
    */  
    public function setCNPJ_Null(){
        $donoEstab = new DonoEstabelecimento(1, "Fulano", "Rua do fulano", "91541-521", "124.521.985-94", "dono@estab.com", "dono", "donoDoEstab"); 
        $estabelecimento = new Estabelecimento("Estabelecimento Teste", "Descricao do estabelecimento", "Rua X", "91450-140", "99.999.999/9999-99", $donoEstab.idDono);
        $estabelecimento.setCNPJ(null);
    }

        //-------------------- Dono ------------------

    public function setDono_Sucesso(){
        $donoEstab = new DonoEstabelecimento(1, "Fulano", "Rua do fulano", "91541-521", "124.521.985-94", "dono@estab.com", "dono", "donoDoEstab"); 
        $estabelecimento = new Estabelecimento("Estabelecimento Teste", "Descricao do estabelecimento", "Rua X", "91450-140", "99.999.999/9999-99", $donoEstab.idDono);
        $estabelecimento.setidDono(2);

        assertEquals(2, $estabelecimento.getidDono());
    }


}
?>
