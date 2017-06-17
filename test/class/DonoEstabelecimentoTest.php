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
        new DonoEstabelecimento(null, "214.521.845-52", "fulano@fulano.com", "senhadofulano");
    }

     /**
    * @expectedException Exception
    * @expectedExceptionMessage Nome não pode ser vazio.
    */
    public function construtorNome_Vazio(){
        new DonoEstabelecimento("", "214.521.845-52", "fulano@fulano.com", "senhadofulano");
    }

     /**
    * @expectedException Exception
    * @expectedExceptionMessage Nome não pode ser em branco.
    */
    public function construtorNome_ApenasEspacoEmBranco(){
        new DonoEstabelecimento("   ", "214.521.845-52", "fulano@fulano.com", "senhadofulano");
    }

     // --------------------- CPF ----------------------

     /**
    * @expectedException Exception
    * @expectedExceptionMessage CPF não pode ser nulo.
    */
    public function construtorCPF_Null(){
        new DonoEstabelecimento("Fulano", null, "fulano@fulano.com", "senhadofulano");
    }

     /**
    * @expectedException Exception
    * @expectedExceptionMessage CPF não pode ser vazio.
    */
    public function construtorCPF_Vazio(){
        new DonoEstabelecimento("Fulano", "", "fulano@fulano.com", "senhadofulano");
    }

     /**
    * @expectedException Exception
    * @expectedExceptionMessage CPF não pode ser em branco.
    */
    public function construtorCPF_ApenasEspacoEmBranco(){
        new DonoEstabelecimento("Fulano", "    ", "fulano@fulano.com", "senhadofulano");
    }

     // --------------------- Email ----------------------

     /**
    * @expectedException Exception
    * @expectedExceptionMessage Email não pode ser nulo.
    */
    public function construtorEmail_Null(){
        new DonoEstabelecimento("Fulano", "214.521.845-52", null, "senhadofulano");
    }

     /**
    * @expectedException Exception
    * @expectedExceptionMessage Email não pode ser vazio.
    */
    public function construtorEmail_Vazio(){
        new DonoEstabelecimento("Fulano", "", "fulano@fulano.com", "senhadofulano");
    }

     /**
    * @expectedException Exception
    * @expectedExceptionMessage Email não pode ser em branco.
    */
    public function construtorEmail_ApenasEspacoEmBranco(){
        new DonoEstabelecimento("Fulano", "    ", "fulano@fulano.com", "senhadofulano");
    }


     // --------------------- Senha ----------------------

     /**
    * @expectedException Exception
    * @expectedExceptionMessage Senha não pode ser nula.
    */    
    public function construtorSenha_Null(){
        new DonoEstabelecimento("Fulano", "214.521.845-52", "fulano@fulano.com", null);
    }

     /**
    * @expectedException Exception
    * @expectedExceptionMessage Senha não pode ser vazia.
    */
    public function construtorSenha_Vazio(){
        new DonoEstabelecimento("Fulano", "214.521.845-52", "fulano@fulano.com", "");
    }

     /**
    * @expectedException Exception
    * @expectedExceptionMessage Senha não pode ser em branco.
    */
    public function construtorSenha_ApenasEspacoEmBranco(){
        new DonoEstabelecimento("Fulano", "214.521.845-52", "fulano@fulano.com", "   ");
    }

    //getters

    public function getNomeTest(){
        $dono = new DonoEstabelecimento("Fulano", "Rua X", "91541-150", "214.521.845-52", "fulano@fulano.com", "fulaninho", "senhadofulano");
        $this->assertEquals("Fulano", $dono.getNome());
    }


    public function getCpfTest(){
        $dono = new DonoEstabelecimento("Fulano", "Rua X", "91541-150", "214.521.845-52", "fulano@fulano.com", "fulaninho", "senhadofulano");
        $this->assertEquals("214.521.845-52", $dono.getCpf());
    }

    public function getEmailTest(){
        $dono = new DonoEstabelecimento("Fulano", "Rua X", "91541-150", "214.521.845-52", "fulano@fulano.com", "fulaninho", "senhadofulano");
        $this->assertEquals("fulano@fulano.com", $dono.getEmail());
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



    // --------------------- CPF --------------------- 

    public function setCPF_Sucesso(){
        $dono = new DonoEstabelecimento("Fulano","214.521.845-52", "fulano@fulano.com", "senhadofulano");
        $dono.setCPF("339.514.851-45");

        assertEquals("339.514.851-45", $dono.getCPF());
    }

    /**
    * @expectedException Exception
    * @expectedExceptionMessage CPF não pode ser vazio.
    */  
    public function setCPF_SemValor(){
        $dono = new DonoEstabelecimento("Fulano","214.521.845-52", "fulano@fulano.com", "senhadofulano");
        $dono.setCPF("");
    }

    /**
    * @expectedException Exception
    * @expectedExceptionMessage CPF não pode ser em branco.
    */  
    public function setCPF_ApenasEspacoEmBranco(){
        $dono = new DonoEstabelecimento("Fulano","214.521.845-52", "fulano@fulano.com", "senhadofulano");
        $dono.setCPF(" ");
    }

    /**
    * @expectedException Exception
    * @expectedExceptionMessage CPF não pode ser nulo.
    */  
    public function setCPFNull(){
       $dono = new DonoEstabelecimento("Fulano","214.521.845-52", "fulano@fulano.com", "senhadofulano");
        $dono.setCPF(null);
    }

    //----------------- Email ---------------------------

    public function setEmail_Sucesso(){
        $dono = new DonoEstabelecimento("Fulano","214.521.845-52", "fulano@fulano.com", "senhadofulano");
        $dono.setEmail("beltrano@beltrano.com");

        assertEquals("beltrano@beltrano.com", $dono.getEmail());
    }

    /**
    * @expectedException Exception
    * @expectedExceptionMessage Email não pode ser vazio.
    */  
    public function setEmail_SemValor(){
        $dono = new DonoEstabelecimento("Fulano","214.521.845-52", "fulano@fulano.com", "senhadofulano");
        $dono.setEmail("");
    }

    /**
    * @expectedException Exception
    * @expectedExceptionMessage Email não pode ser em branco.
    */  
    public function setEmail_ApenasEspacoEmBranco(){
        $dono = new DonoEstabelecimento("Fulano","214.521.845-52", "fulano@fulano.com", "senhadofulano");
        $dono.setEmail(" ");
    }

    /**
    * @expectedException Exception
    * @expectedExceptionMessage Email não pode ser nulo.
    */  
    public function setEmailNull(){
       $dono = new DonoEstabelecimento("Fulano","214.521.845-52", "fulano@fulano.com", "senhadofulano");
        $dono.setEmail(null);
    }

    // ------------------- Senha -----------------------

    public function setSenha_Sucesso(){
        $dono = new DonoEstabelecimento("Fulano","214.521.845-52", "fulano@fulano.com", "senhadofulano");
        $dono.setSenha("senhadobeltranho");

        assertEquals("senhadobeltranho", $dono.getSenha());
    }

    /**
    * @expectedException Exception
    * @expectedExceptionMessage Senha não pode ser vazia.
    */  
    public function setSenha_SemValor(){
        $dono = new DonoEstabelecimento("Fulano","214.521.845-52", "fulano@fulano.com", "senhadofulano");
        $dono.setSenha("");
    }

    /**
    * @expectedException Exception
    * @expectedExceptionMessage Senha não pode ser em branco.
    */  
    public function setSenha_ApenasEspacoEmBranco(){
        $dono = new DonoEstabelecimento("Fulano","214.521.845-52", "fulano@fulano.com", "senhadofulano");
        $dono.setSenha(" ");
    }

    /**
    * @expectedException Exception
    * @expectedExceptionMessage Senha não pode ser nula.
    */  
    public function setSenhaNull(){
        $dono = new DonoEstabelecimento("Fulano","214.521.845-52", "fulano@fulano.com", "senhadofulano");
        $dono.setSenha(null);
    }


}

?>