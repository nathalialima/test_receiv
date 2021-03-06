<?php


namespace App\tests;


use App\Helpers\Response;
use App\Models\Devedor;
use PHPUnit\Framework\TestCase;

class DevedorTest extends TestCase
{


    protected function setUp()
    {
        parent::setUp(); // TODO: Change the autogenerated stub
    }

    public function test_create_devedor()
    {
       $devedor = new Devedor();
        $devedor->nome = "teste";
        $devedor->cpf_cnpj = "03213213210";
        $devedor->data_nascimento = '2020-03-03';
        $devedor->endereco = "TESTE";
        $devedor->descricao_titulo = "teste";
        $devedor->valor = 3.00;
        $devedor->data_vencimento ='2020-03-03';
        $devedor->updated = '2020-03-03 12:00:00';
        $result = $devedor->save();
        $this->assertEquals(true, $result);
    }

    public function test_create_error_data_nascimento_devedor()
    {
        $devedor = new Devedor();
        $devedor->nome = "teste";
        $devedor->cpf_cnpj = "03213213210";
        $devedor->data_nascimento = '2020-03-110';
        $devedor->endereco = "TESTE";
        $devedor->descricao_titulo = "teste";
        $devedor->valor = 3.00;
        $devedor->data_vencimento ='2020-03-03';
        $devedor->updated = '2020-03-03 12:00:00';
        $result = $devedor->save();
        $this->assertEquals(false, $result);
    }

    public function test_create_error_data_vencimento_devedor()
    {
        $devedor = new Devedor();
        $devedor->nome = "teste";
        $devedor->cpf_cnpj = "03213213210";
        $devedor->data_nascimento = '2020-03-03';
        $devedor->endereco = "TESTE";
        $devedor->descricao_titulo = "teste";
        $devedor->valor = 3.00;
        $devedor->data_vencimento ='2020-13';
        $devedor->updated = '2020-03-03 12:00:00';
        $result = $devedor->save();
        $this->assertEquals(false, $result);
    }


    public function test_create_error_valor_devedor()
    {
        $devedor = new Devedor();
        $devedor->nome = "teste";
        $devedor->cpf_cnpj = "03213213210";
        $devedor->data_nascimento = '2020-03-03';
        $devedor->endereco = "TESTE";
        $devedor->descricao_titulo = "teste";
        $devedor->valor = 'a';
        $devedor->data_vencimento ='2020-03-03';
        $devedor->updated = '2020-03-03 12:00:00';
        $result = $devedor->save();
        $this->assertEquals(false, $result);
    }
}