<?php
require ('../vendor/autoload.php');
require_once ('../app/configs/configs.php');

use App\Controllers\DevedorController;
use App\Helpers\Route;


Route::add('/', function (){
    $controller = new DevedorController();
    $controller->index();
});

Route::add('/new', function (){
    $controller = new DevedorController();
    $controller->new();
});

Route::add('/save', function (){
    $controller = new DevedorController();
    $controller->createOrUpdate();
},'post');

Route::add('/view/([0-9]*)/devedor',function($id){
    $controller = new DevedorController();
    $controller->view($id);
});

Route::add('/edit/([0-9]*)/devedor',function($id){
    $controller = new DevedorController();
    $controller->edit($id);
});

Route::add('/delete/([0-9]*)/devedor',function($id){
    $controller = new DevedorController();
    $controller->delete($id);
});

Route::run(PATH);