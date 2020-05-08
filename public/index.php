<?php
require ('../vendor/autoload.php');
use App\Controllers\DevedorController;
use App\Helpers\Route;

Route::add('/', function (){
    $controller = new DevedorController();
    $controller->index();
});

Route::add('/save', function (){
    $controller = new DevedorController();
    $controller->createOrUpdate();
});

Route::run('/teste_/public');