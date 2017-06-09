<?php

use PHPUnit\Framework\TestCase as PHPUnit;

require_once './class/DonoEstabelecimento.class.php';

class DonoEstabelecimentoTeste extends PHPUnit{

    //construtor

    // --------------- Nome ---------------
    
     /**
    * @expectedException Exception
    * @expectedExceptionMessage Nome não pode ser nulo.
    */
    public function construtorNome_Null(){
        new DonoEstabelecimento(null, "Rua X", "91541-150", "214.521.845-52", "fulano@fulano.com", "fulaninho", "senhadofulano");
    }

     /**
    * @expectedException Exception
    * @expectedExceptionMessage Nome não pode ser vazio.
    */
    public function construtorNome_Vazio(){
        new DonoEstabelecimento("", "Rua X", "91541-150", "214.521.845-52", "fulano@fulano.com", "fulaninho", "senhadofulano");
    }

     /**
    * @expectedException Exception
    * @expectedExceptionMessage Nome não pode ser em branco.
    */
    public function construtorNome_ApenasEspacoEmBranco(){
        new DonoEstabelecimento("   ", "Rua X", "91541-150", "214.521.845-52", "fulano@fulano.com", "fulaninho", "senhadofulano");
    }

    // --------------------- Endereco ----------------------

     /**
    * @expectedException Exception
    * @expectedExceptionMessage Endereco não pode ser nulo.
    */
    public function construtorEndereco_Null(){
        new DonoEstabelecimento("Fulano", null, "91541-150", "214.521.845-52", "fulano@fulano.com", "fulaninho", "senhadofulano");
    }

     /**
    * @expectedException Exception
    * @expectedExceptionMessage Endereco não pode ser vazio.
    */
    public function construtorEndereco_Vazio(){
        new DonoEstabelecimento("Fulano", "", "91541-150", "214.521.845-52", "fulano@fulano.com", "fulaninho", "senhadofulano");
    }

     /**
    * @expectedException Exception
    * @expectedExceptionMessage Endereco não pode ser em branco.
    */
    public function construtorEnderecoe_ApenasEspacoEmBranco(){
        new DonoEstabelecimento("Fulano", "   ", "91541-150", "214.521.845-52", "fulano@fulano.com", "fulaninho", "senhadofulano");
    }

    // --------------------- CEP ----------------------

     /**
    * @expectedException Exception
    * @expectedExceptionMessage Cep não pode ser nulo.
    */
    public function construtorCEP_Null(){
        new DonoEstabelecimento("Fulano", "Rua X", null, "214.521.845-52", "fulano@fulano.com", "fulaninho", "senhadofulano");
    }

     /**
    * @expectedException Exception
    * @expectedExceptionMessage Cep não pode ser vazio.
    */    
    public function construtorCEP_Vazio(){
        new DonoEstabelecimento("Fulano", "Rua X", "", "214.521.845-52", "fulano@fulano.com", "fulaninho", "senhadofulano");
    }

     /**
    * @expectedException Exception
    * @expectedExceptionMessage Cep não pode ser em branco.
    */
    public function construtorCEP_ApenasEspacoEmBranco(){
        new DonoEstabelecimento("Fulano", "Rua X", "   ", "214.521.845-52", "fulano@fulano.com", "fulaninho", "senhadofulano");
    }

     // --------------------- CPF ----------------------

     /**
    * @expectedException Exception
    * @expectedExceptionMessage CPF não pode ser nulo.
    */
    public function construtorCPF_Null(){
        new DonoEstabelecimento("Fulano", "Rua X", "91541-150", null, "fulano@fulano.com", "fulaninho", "senhadofulano");
    }

     /**
    * @expectedException Exception
    * @expectedExceptionMessage CPF não pode ser vazio.
    */
    public function construtorCPF_Vazio(){
        new DonoEstabelecimento("Fulano", "Rua X", "91541-150", "", "fulano@fulano.com", "fulaninho", "senhadofulano");
    }

     /**
    * @expectedException Exception
    * @expectedExceptionMessage CPF não pode ser em branco.
    */
    public function construtorCPF_ApenasEspacoEmBranco(){
        new DonoEstabelecimento("Fulano", "Rua X", "91541-150", "    ", "fulano@fulano.com", "fulaninho", "senhadofulano");
    }

     // --------------------- Email ----------------------

     /**
    * @expectedException Exception
    * @expectedExceptionMessage Email não pode ser nulo.
    */
    public function construtorEmail_Null(){
        new DonoEstabelecimento("Fulano", "Rua X", "91541-150", null, "fulano@fulano.com", "fulaninho", "senhadofulano");
    }

     /**
    * @expectedException Exception
    * @expectedExceptionMessage Email não pode ser vazio.
    */
    public function construtorEmail_Vazio(){
        new DonoEstabelecimento("Fulano", "Rua X", "91541-150", "", "fulano@fulano.com", "fulaninho", "senhadofulano");
    }

     /**
    * @expectedException Exception
    * @expectedExceptionMessage Email não pode ser em branco.
    */
    public function construtorEmail_ApenasEspacoEmBranco(){
        new DonoEstabelecimento("Fulano", "Rua X", "91541-150", "    ", "fulano@fulano.com", "fulaninho", "senhadofulano");
    }

     // --------------------- Login ----------------------

     /**
    * @expectedException Exception
    * @expectedExceptionMessage Login não pode ser nulo.
    */
    public function construtorLogin_Null(){
        new DonoEstabelecimento("Fulano", "Rua X", "91541-150", null, "fulano@fulano.com", "fulaninho", "senhadofulano");
    }

     /**
    * @expectedException Exception
    * @expectedExceptionMessage Login não pode ser vazio.
    */
    public function construtorLogin_Vazio(){
        new DonoEstabelecimento("Fulano", "Rua X", "91541-150", "", "fulano@fulano.com", "fulaninho", "senhadofulano");
    }

     /**
    * @expectedException Exception
    * @expectedExceptionMessage Login não pode ser em branco.
    */
    public function construtorLogin_ApenasEspacoEmBranco(){
        new DonoEstabelecimento("Fulano", "Rua X", "91541-150", "   ", "fulano@fulano.com", "fulaninho", "senhadofulano");
    }

     // --------------------- Senha ----------------------

     /**
    * @expectedException Exception
    * @expectedExceptionMessage Senha não pode ser nula.
    */    
    public function construtorSenha_Null(){
        new DonoEstabelecimento("Fulano", "Rua X", "91541-150", null, "fulano@fulano.com", "fulaninho", "senhadofulano");
    }

     /**
    * @expectedException Exception
    * @expectedExceptionMessage Senha não pode ser vazia.
    */
    public function construtorSenha_Vazio(){
        new DonoEstabelecimento("Fulano", "Rua X", "91541-150", "", "fulano@fulano.com", "fulaninho", "senhadofulano");
    }

     /**
    * @expectedException Exception
    * @expectedExceptionMessage Senha não pode ser em branco.
    */
    public function construtorSenha_ApenasEspacoEmBranco(){
        new DonoEstabelecimento("Fulano", "Rua X", "91541-150", "    ", "fulano@fulano.com", "fulaninho", "senhadofulano");
    }

    //getters

    public function getNomeTest(){
        $dono = new DonoEstabelecimento("Fulano", "Rua X", "91541-150", "214.521.845-52", "fulano@fulano.com", "fulaninho", "senhadofulano");
        $this->assertEquals("Fulano", $dono.getNome());
    }

    public function getEnderecoTest(){
        $dono = new DonoEstabelecimento("Fulano", "Rua X", "91541-150", "214.521.845-52", "fulano@fulano.com", "fulaninho", "senhadofulano");
        $this->assertEquals("Rua X", $dono.getEndereco());
    }

    public function getCepTest(){
        $dono = new DonoEstabelecimento("Fulano", "Rua X", "91541-150", "214.521.845-52", "fulano@fulano.com", "fulaninho", "senhadofulano");
        $this->assertEquals("91541-150", $dono.Cep());
    }

    public function getCpfTest(){
        $dono = new DonoEstabelecimento("Fulano", "Rua X", "91541-150", "214.521.845-52", "fulano@fulano.com", "fulaninho", "senhadofulano");
        $this->assertEquals("214.521.845-52", $dono.getCpf());
    }

    public function getEmailTest(){
        $dono = new DonoEstabelecimento("Fulano", "Rua X", "91541-150", "214.521.845-52", "fulano@fulano.com", "fulaninho", "senhadofulano");
        $this->assertEquals("fulano@fulano.com", $dono.getEmail());
    }

    public function getLoginTest(){
        $dono = new DonoEstabelecimento("Fulano", "Rua X", "91541-150", "214.521.845-52", "fulano@fulano.com", "fulaninho", "senhadofulano");
        $this->assertEquals("fulaninho", $dono.getLogin());
    }

    public function getSenhaTest(){
        $dono = new DonoEstabelecimento("Fulano", "Rua X", "91541-150", "214.521.845-52", "fulano@fulano.com", "fulaninho", "senhadofulano");
        $this->assertEquals("senhadofulano", $dono.getSenha());
    }

    //setters

    //----------------- Nome -------------------

    public function setNome_Sucesso(){
        $dono = new DonoEstabelecimento("Fulano", "Rua X", "91541-150", "214.521.845-52", "fulano@fulano.com", "fulaninho", "senhadofulano");
        $dono.setNome("Beltrano");

        assertEquals("Beltrano", $dono.getNome());
    }

     /**
    * @expectedException Exception
    * @expectedExceptionMessage Nome não pode ser vazio.
    */  
    public function setNome_SemValor(){
        $dono = new DonoEstabelecimento("Fulano", "Rua X", "91541-150", "214.521.845-52", "fulano@fulano.com", "fulaninho", "senhadofulano");
        $dono.setNome("");
    }

     /**
    * @expectedException Exception
    * @expectedExceptionMessage Nome não pode ser em branco.
    */  
    public function setNome_ApenasEspacoEmBranco(){
        $dono = new DonoEstabelecimento("Fulano", "Rua X", "91541-150", "214.521.845-52", "fulano@fulano.com", "fulaninho", "senhadofulano");
        $dono.setNome(" ");
    }

     /**
    * @expectedException Exception
    * @expectedExceptionMessage Nome não pode ser nulo.
    */  
    public function setNome_Null(){
        $dono = new DonoEstabelecimento("Fulano", "Rua X", "91541-150", "214.521.845-52", "fulano@fulano.com", "fulaninho", "senhadofulano");
        $dono.setNome(null);
    }

     //----------------- Endereco -------------------

    public function setEndereco_Sucesso(){
        $dono = new DonoEstabelecimento("Fulano", "Rua X", "91541-150", "214.521.845-52", "fulano@fulano.com", "fulaninho", "senhadofulano");
        $dono.setEndereco("Rua Z");

        assertEquals("Rua Z", $dono.getEndereco());
    }

    /**
    * @expectedException Exception
    * @expectedExceptionMessage Endereco não pode ser vazio.
    */  
    public function setEndereco_SemValor(){
        $dono = new DonoEstabelecimento("Fulano", "Rua X", "91541-150", "214.521.845-52", "fulano@fulano.com", "fulaninho", "senhadofulano");
        $dono.setEndereco("");
    }

    /**
    * @expectedException Exception
    * @expectedExceptionMessage Endereco não pode ser em branco.
    */  
    public function setEndereco_ApenasEspacoEmBranco(){
        $dono = new DonoEstabelecimento("Fulano", "Rua X", "91541-150", "214.521.845-52", "fulano@fulano.com", "fulaninho", "senhadofulano");
        $dono.setEndereco(" ");
    }

    /**
    * @expectedException Exception
    * @expectedExceptionMessage Endereco não pode ser nulo.
    */  
    public function setEndereco_Null(){
        $dono = new DonoEstabelecimento("Fulano", "Rua X", "91541-150", "214.521.845-52", "fulano@fulano.com", "fulaninho", "senhadofulano");
        $dono.setEndereco(null);
    }

    // -------------------- CEP --------------------

    public function setCEP_Sucesso(){
        $dono = new DonoEstabelecimento("Fulano", "Rua X", "91541-150", "214.521.845-52", "fulano@fulano.com", "fulaninho", "senhadofulano");
        $dono.setCEP("99999-888");

        assertEquals("99999-888", $dono.getCEP());
    }

    /**
    * @expectedException Exception
    * @expectedExceptionMessage CEP não pode ser vazio.
    */  
    public function setCEP_SemValor(){
        $dono = new DonoEstabelecimento("Fulano", "Rua X", "91541-150", "214.521.845-52", "fulano@fulano.com", "fulaninho", "senhadofulano");
        $dono.setCEP("");
    }

    /**
    * @expectedException Exception
    * @expectedExceptionMessage CEP não pode ser em branco.
    */  
    public function setCEP_ApenasEspacoEmBranco(){
        $dono = new DonoEstabelecimento("Fulano", "Rua X", "91541-150", "214.521.845-52", "fulano@fulano.com", "fulaninho", "senhadofulano");
        $dono.setCEP(" ");
    }

    /**
    * @expectedException Exception
    * @expectedExceptionMessage CEP não pode ser nulo.
    */  
    public function setCEP_Null(){
        $dono = new DonoEstabelecimento("Fulano", "Rua X", "91541-150", "214.521.845-52", "fulano@fulano.com", "fulaninho", "senhadofulano");
        $dono.setCEP(null);
    }

    // --------------------- CPF --------------------- 

    public function setCPF_Sucesso(){
        $dono = new DonoEstabelecimento("Fulano", "Rua X", "91541-150", "214.521.845-52", "fulano@fulano.com", "fulaninho", "senhadofulano");
        $dono.setCPF("339.514.851-45");

        assertEquals("339.514.851-45", $dono.getCPF());
    }

    /**
    * @expectedException Exception
    * @expectedExceptionMessage CPF não pode ser vazio.
    */  
    public function setCPF_SemValor(){
        $dono = new DonoEstabelecimento("Fulano", "Rua X", "91541-150", "214.521.845-52", "fulano@fulano.com", "fulaninho", "senhadofulano");
        $dono.setCPF("");
    }

    /**
    * @expectedException Exception
    * @expectedExceptionMessage CPF não pode ser em branco.
    */  
    public function setCPF_ApenasEspacoEmBranco(){
        $dono = new DonoEstabelecimento("Fulano", "Rua X", "91541-150", "214.521.845-52", "fulano@fulano.com", "fulaninho", "senhadofulano");
        $dono.setCPF(" ");
    }

    /**
    * @expectedException Exception
    * @expectedExceptionMessage CPF não pode ser nulo.
    */  
    public function setCPFNull(){
        $dono = new DonoEstabelecimento("Fulano", "Rua X", "91541-150", "214.521.845-52", "fulano@fulano.com", "fulaninho", "senhadofulano");
        $dono.setCPF(null);
    }

    //----------------- Email ---------------------------

    public function setEmail_Sucesso(){
        $dono = new DonoEstabelecimento("Fulano", "Rua X", "91541-150", "214.521.845-52", "fulano@fulano.com", "fulaninho", "senhadofulano");
        $dono.setEmail("beltrano@beltrano.com");

        assertEquals("beltrano@beltrano.com", $dono.getEmail());
    }

    /**
    * @expectedException Exception
    * @expectedExceptionMessage Email não pode ser vazio.
    */  
    public function setEmail_SemValor(){
        $dono = new DonoEstabelecimento("Fulano", "Rua X", "91541-150", "214.521.845-52", "fulano@fulano.com", "fulaninho", "senhadofulano");
        $dono.setEmail("");
    }

    /**
    * @expectedException Exception
    * @expectedExceptionMessage Email não pode ser em branco.
    */  
    public function setEmail_ApenasEspacoEmBranco(){
        $dono = new DonoEstabelecimento("Fulano", "Rua X", "91541-150", "214.521.845-52", "fulano@fulano.com", "fulaninho", "senhadofulano");
        $dono.setEmail(" ");
    }

    /**
    * @expectedException Exception
    * @expectedExceptionMessage Email não pode ser nulo.
    */  
    public function setEmailNull(){
        $dono = new DonoEstabelecimento("Fulano", "Rua X", "91541-150", "214.521.845-52", "fulano@fulano.com", "fulaninho", "senhadofulano");
        $dono.setEmail(null);
    }

    //----------------- Login ------------------------------

    public function setLogin_Sucesso(){
        $dono = new DonoEstabelecimento("Fulano", "Rua X", "91541-150", "214.521.845-52", "fulano@fulano.com", "fulaninho", "senhadofulano");
        $dono.setLogin("beltraninho");

        assertEquals("beltraninho", $dono.getLogin());
    }

    /**
    * @expectedException Exception
    * @expectedExceptionMessage Login não pode ser vazio.
    */  
    public function setLogin_SemValor(){
        $dono = new DonoEstabelecimento("Fulano", "Rua X", "91541-150", "214.521.845-52", "fulano@fulano.com", "fulaninho", "senhadofulano");
        $dono.setLogin("");
    }

    /**
    * @expectedException Exception
    * @expectedExceptionMessage Login não pode ser em branco.
    */  
    public function setEmail_ApenasEspacoEmBranco(){
        $dono = new DonoEstabelecimento("Fulano", "Rua X", "91541-150", "214.521.845-52", "fulano@fulano.com", "fulaninho", "senhadofulano");
        $dono.setLogin(" ");
    }

    /**
    * @expectedException Exception
    * @expectedExceptionMessage Login não pode ser nulo.
    */  
    public function setLoginNull(){
        $dono = new DonoEstabelecimento("Fulano", "Rua X", "91541-150", "214.521.845-52", "fulano@fulano.com", "fulaninho", "senhadofulano");
        $dono.setLogin(null);
    }

    // ------------------- Senha -----------------------

    public function setSenha_Sucesso(){
        $dono = new DonoEstabelecimento("Fulano", "Rua X", "91541-150", "214.521.845-52", "fulano@fulano.com", "fulaninho", "senhadofulano");
        $dono.setSenha("senhadobeltranho");

        assertEquals("senhadobeltranho", $dono.getSenha());
    }

    /**
    * @expectedException Exception
    * @expectedExceptionMessage Senha não pode ser vazia.
    */  
    public function setSenha_SemValor(){
        $dono = new DonoEstabelecimento("Fulano", "Rua X", "91541-150", "214.521.845-52", "fulano@fulano.com", "fulaninho", "senhadofulano");
        $dono.setSenha("");
    }

    /**
    * @expectedException Exception
    * @expectedExceptionMessage Senha não pode ser em branco.
    */  
    public function setEmail_ApenasEspacoEmBranco(){
        $dono = new DonoEstabelecimento("Fulano", "Rua X", "91541-150", "214.521.845-52", "fulano@fulano.com", "fulaninho", "senhadofulano");
        $dono.setSenha(" ");
    }

    /**
    * @expectedException Exception
    * @expectedExceptionMessage Senha não pode ser nula.
    */  
    public function setSenhaNull(){
        $dono = new DonoEstabelecimento("Fulano", "Rua X", "91541-150", "214.521.845-52", "fulano@fulano.com", "fulaninho", "senhadofulano");
        $dono.setSenha(null);
    }


}

?>