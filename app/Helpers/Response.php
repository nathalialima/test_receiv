<?php
namespace App\Helpers;


class Response
{
    public function redirect($location){
        return header("Location: ".$location."");
    }
}