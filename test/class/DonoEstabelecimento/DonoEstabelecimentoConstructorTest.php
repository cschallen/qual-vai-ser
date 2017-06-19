<?php

use PHPUnit\Framework\TestCase as PHPUnit;

require_once './class/DonoEstabelecimento.class.php';

class DonoEstabelecimentoConstructorTest extends PHPUnit{

     /**
    * @expectedException Exception
    * @expectedExceptionMessage O campo NOME não pode estar vazio
    */
    public function testConstrutorNome_Null(){
        new DonoEstabelecimento(null, "214.521.845-52", "fulano@fulano.com", "senhadofulano");
    }

     /**
    * @expectedException Exception
    * @expectedExceptionMessage O campo NOME não pode estar vazio
    */
    public function testConstrutorNome_Vazio(){
        new DonoEstabelecimento("", "214.521.845-52", "fulano@fulano.com", "senhadofulano");
    }

    /**
    * @expectedException Exception
    * @expectedExceptionMessage O campo CPF não pode estar vazio
    */
    public function testConstrutorCPF_Null(){
        new DonoEstabelecimento("Fulano", null, "fulano@fulano.com", "senhadofulano");
    }

     /**
    * @expectedException Exception
    * @expectedExceptionMessage O campo CPF não pode estar vazio
    */
    public function testConstrutorCPF_Vazio(){
        new DonoEstabelecimento("Fulano", "", "fulano@fulano.com", "senhadofulano");
    }

     /**
    * @expectedException Exception
    * @expectedExceptionMessage O campo EMAIL não pode estar vazio
    */
    public function testConstrutorEmail_Null(){
        new DonoEstabelecimento("Fulano", "214.521.845-52", null, "senhadofulano");
    }

     /**
    * @expectedException Exception
    * @expectedExceptionMessage O campo EMAIL não pode estar vazio
    */
    public function testConstrutorEmail_Vazio(){
        new DonoEstabelecimento("Fulano", "214.521.845-52", "", "senhadofulano");
    }

     /**
    * @expectedException Exception
    * @expectedExceptionMessage O campo SENHA não pode estar vazio
    */
    public function testConstrutorSenha_Null(){
        new DonoEstabelecimento("Fulano", "214.521.845-52", "fulano@fulano.com", null);
    }

     /**
    * @expectedException Exception
    * @expectedExceptionMessage O campo SENHA não pode estar vazio
    */
    public function testConstrutorSenha_Vazio(){
        new DonoEstabelecimento("Fulano", "214.521.845-52", "fulano@fulano.com", "");
    }
}

?>
