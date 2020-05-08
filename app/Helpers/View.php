<?php


namespace App\Helpers;


class View
{

    private $page;
    public function __construct($page)
    {
      $this->page = $page;
    }

    public function render(Array $data = null){
        if(file_exists(dirname(__FILE__)."/../../public/pages/".$this->page.".php")) {


            ob_start();
            if ($data != null) {
                extract($data);
            }
            include(dirname(__FILE__) . "/../../public/pages/" . $this->page . ".php");
        } else{
            include(dirname(__FILE__) .'/404.php');
        }
    }

    public function __destruct()
    {
        // TODO: Implement __destruct() method.
    }
}