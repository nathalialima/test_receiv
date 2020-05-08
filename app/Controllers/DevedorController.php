<?php


namespace App\Controllers;


use App\Helpers\Messages;
use App\Helpers\Response;
use App\Helpers\View;
use App\Models\Devedor;

class DevedorController
{
    private $message;
    private $response;

    public function __construct()
    {
        $this->message = new Messages();
        $this->response = new Response();
    }

    public function index(){
        $devedores = new Devedor();
        $devedores = $devedores->findAll();
        $view = new View('devedores/inicio');
        $view->render(compact('devedores'));
    }

    public function new(){
        $view = new View('devedores/novo');
        $view->render();
    }

    public function createOrUpdate(){
        $now = new \DateTime('now');

        $devedor = new Devedor();
        if(array_key_exists('id', $_POST)){
            $devedor->id = $_POST['id'];
        }
        $devedor->nome = $_POST['nome'];
        $devedor->cpf_cnpj = $_POST['cpf_cnpj'];
        $devedor->data_nascimento = $_POST['data_nascimento'];
        $devedor->endereco = $_POST['endereco'];
        $devedor->descricao_titulo = $_POST['descricao_titulo'];
        $devedor->valor = $_POST['valor'];
        $devedor->data_vencimento = $_POST['data_vencimento'];
        $devedor->updated = $now->format('Y-m-d H:i:m');
        $devedor->save();
        $this->index();
    }

    public function delete($id){
        $devedor = new Devedor();
        $devedor->delete($id);
        $this->message->messageError("Cadastro removido com sucesso");
        $this->response->redirect("../../");
    }

    public function edit($id){
        $devedor = new Devedor();
        $devedor = $devedor->findById($id);
        $view = new View('devedores/editar');
        $view->render(compact('devedor'));
    }

    public function view($id){
        $devedor = new Devedor();
        $devedor = $devedor->findById($id);
        $view = new View('devedores/visualizacao');
        $view->render(compact('devedor'));
    }
}