<?php


namespace App\Controllers;


use App\Helpers\DateHelper;
use App\Helpers\Messages;
use App\Helpers\Response;
use App\Helpers\Validations;
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
        $array_consulta = [];
        if (array_key_exists('nome', $_GET)){
            if(!empty($_GET['nome'])) {
                $array_consulta['nome'] = $_GET['nome'];
            }
        }
        if (array_key_exists('cpf_cnpj', $_GET)){
            if(!empty($_GET['cpf_cnpj'])) {
                $array_consulta['cpf_cnpj'] = $_GET['cpf_cnpj'];
            }
        }
        $devedores = new Devedor();
        $devedores = $devedores->find($array_consulta);
        $view = new View('devedores/inicio');
        $view->render(compact('devedores'));
    }

    public function new(){
        $view = new View('devedores/novo');
        $view->render();
    }

    public function createOrUpdate(){
        $now = new \DateTime('now');
        $validation = new Validations();
        $validation = $validation->validateCreateDevedor($_POST);
        if ($validation['valido'] == false){
            $this->message->messageError(" ".$validation['mensagem']);
            if(array_key_exists('id', $_POST)){
                $this->response->redirect($this->response->url("/edit/".$_POST['id']."/devedor"));
            }else{
                $this->response->redirect($this->response->url("/new"));
            }
        }
        $helper = new DateHelper();
        $devedor = new Devedor();
        if(array_key_exists('id', $_POST)){
            $devedor->id = $_POST['id'];
        }
        $devedor->nome = $_POST['nome'];
        $devedor->cpf_cnpj = $_POST['cpf_cnpj'];
        $devedor->data_nascimento = $helper->formatDateToDB($_POST['data_nascimento']);
        $devedor->endereco = $_POST['endereco'];
        $devedor->descricao_titulo = $_POST['descricao_titulo'];
        $devedor->valor = $_POST['valor'];
        $devedor->data_vencimento =$helper->formatDateToDB($_POST['data_vencimento']);
        $devedor->updated = $now->format('Y-m-d H:i:m');
        if($devedor->save()){
            $this->message->new("Cadastro incluido com sucesso");
            $this->response->redirect("./");
        }else{
            $this->message->messageError("Erro ao realizar o cadastro");
            $this->response->redirect("./");
        }

    }

    public function delete($id){
        $devedor = new Devedor();
        $devedor->delete($id);
        $this->message->messageError("Cadastro removido com sucesso");
        $this->response->redirect("../../");
    }

    public function edit($id){
        $helper = new DateHelper();
        $devedor = new Devedor();
        $devedor = $devedor->findById($id);
        $devedor->data_vencimento = $helper->formatDateFromDB($devedor->data_vencimento);
        $devedor->data_nascimento = $helper->formatDateFromDB($devedor->data_nascimento);
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