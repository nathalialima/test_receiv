<?php
namespace App\Helpers;




class DbConnection extends \PDO
{
    protected $db;

    public function __construct() {

        try {
            parent::__construct("mysql:host=mysql;dbname=teste_", "root","toor");
            $this->setAttribute( \PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            $this->setAttribute(\PDO::ATTR_EMULATE_PREPARES, false);
        } catch (\Exception $e) {
            var_dump($e->getMessage());
            throw new \Exception('Error creating a database connection ');
        }
    }
    

}