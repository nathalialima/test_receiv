<?php


namespace App\Controllers;


use App\Helpers\View;
use App\Models\Devedor;

class DevedorController
{

    public function index(){
        $view = new View('devedores/inicio');
        $view->render();
    }

    public function createOrUpdate(){
        $devedor = new Devedor();

        $devedor = $devedor->findById(1);
        $devedor->nome = "teste";
        $devedor->save();
    }
}