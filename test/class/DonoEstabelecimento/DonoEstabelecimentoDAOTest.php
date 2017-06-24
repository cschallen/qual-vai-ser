<?php

use PHPUnit\Framework\TestCase as PHPUnit;

require_once './class/Conexao.class.php';
require_once './class/DonoEstabelecimento.class.php';
require_once './class/DonoEstabelecimentoDAO.class.php';

class DonoEstabelecimentoDAOTest extends PHPUnit{

    //NESSE METODO ELE BUSCA OS DADOS REAIS DO BANCO
    // public function testObterTodos(){
    //     $donoEstabelecimentoDAO = new DonoEstabelecimentoDAO();
    //     $donoEstabelecimento = new DonoEstabelecimento('Jose', '124.521.693-25', 'jose@jose.com', 'senhadojose');
    //     $donoEstabelecimento->setIdDonoEstabelecimento(2);
    //     $donos = $donoEstabelecimentoDAO->obterTodos();
    //     $this->assertEquals($donoEstabelecimento, $donos[1]);
    // }
    //
    // public function testSalvar(){
    //     $donoEstabelecimentoDAO = new DonoEstabelecimentoDAO();
    //     $donoEstabelecimento = new DonoEstabelecimento('Jose', '124.521.693-25', 'jose@jose.com', 'senhadojose');
    //     $this->assertEquals(false, $donoEstabelecimentoDAO->salvar($donoEstabelecimento));
    //
    // }



    // public function testSalvar(){
    //     $comando = "INSERT INTO donoestabelecimento(nome, cpf, email, senha)
    //     VALUES ('nome', 'cpf', 'email', 'senha')";
    //     $stub = $this->getMockBuilder('Conexao')->getMock();
    //     $stub->method('exec')->with($comando)->will($this->returnValue(1));
    //
    //     $donoDAO = new DonoEstabelecimentoDAO();
    //     $dono = new DonoEstabelecimento("Fulano", "214.521.845-52", "fulano@fulano.com", "senhadofulano");
    //     $this->assertEquals(1, $donoDAO->salvar($dono));
    // }



    // public function testStub() {
    //     // Cria um esboço para a classe SomeClass.
    //     $stub = $this->getMockBuilder('DonoEstabelecimentoDAO')
    //     ->getMock();
    //
    //     // Configura o esboço.
    //     $stub->method('excluir')
    //     ->willReturn('foo');
    //
    //     // Chamar $stub->doSomething() agora vai retornar
    //     // 'foo'.
    //     $this->assertEquals('foo', $stub->doSomething());
    // }


}
?>
