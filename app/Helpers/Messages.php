<?php


namespace App\Helpers;


class Messages
{
    public function __construct()
    {
        session_start();
    }

    public function new($message){
        $_SESSION['message'] = $message;
    }

    public function get(){
        $message =  $_SESSION['message'];
        unset( $_SESSION['message']);
        return $message;
    }

    public function has($type){
        return array_key_exists($type,$_SESSION);
    }

    public function messageError($messageError){
        $_SESSION['messageError'] = $messageError;
    }

    public function getMessageError(){
        $messageError =  $_SESSION['messageError'];
        unset( $_SESSION['messageError']);
        return $messageError;
    }

}