<?php

use PHPUnit\Framework\TestCase as PHPUnit;

require_once './class/Estabelecimento.class.php';
require_once './class/DonoEstabelecimento.class.php';

class EstabelecimentoConstructorTest extends PHPUnit{

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



    // setters




}
?>
