<?php


namespace App\Helpers;



class Model
{
    protected  $table;
    protected  $pk;


    public function __construct()
    {


    }

    public function save(){
        $propsToImplode = [];
        $class = new \ReflectionClass($this);

        foreach ($class->getProperties(\ReflectionProperty::IS_PUBLIC) as $property) {
            $propertyName = $property->getName();
            $propsToImplode[] = '`'.$propertyName.'` = "'.$this->{$propertyName}.'"';
        }

        $setClause = implode(',',$propsToImplode);
        $sqlQuery = '';

        if (array_key_exists($this->pk, $this)) {
            $sqlQuery = 'UPDATE `'.$this->table.'` SET '.$setClause.' WHERE '.$this->pk.' = '.$this->{$this->pk};
        } else {
            $sqlQuery = 'INSERT INTO `'.$this->table.'` SET '.$setClause;
        }


        $db=   new DbConnection();
        $stmt = $db->prepare($sqlQuery);
        return $stmt->execute();
    }

    public function find($fields = []){
        $db=   new DbConnection();



        $query = 'select * from '.$this->table;

        $whereClause = '';
        $whereConditions = [];

        if (!empty($fields)) {

            foreach ($fields as $key => $value) {
                $whereConditions[] = '`'.$key.'` = "'.$value.'"';
            }
            $whereClause = " where ".implode(' AND ',$whereConditions);
        }

        $resultQuery = $query.$whereClause;
        echo $resultQuery;
        $stmt = $db->prepare($resultQuery);
        $stmt->execute();
        $result = $stmt->fetchAll(\PDO::FETCH_OBJ);

        return $this->childrenArrayObject($result);

    }

    public  function delete($id){
        $db=   new DbConnection();
        try {
            $stmt = $db->prepare("delete from ".$this->table." where ".$this->pk." = :id ");
            $stmt->execute(['id'=>$id]);
            return true;
        }catch (\Exception $e){
            return false;
        }
    }

    public  function findById($id){

    $db=   new DbConnection();
    $stmt = $db->prepare("select * from ".$this->table." where ".$this->pk." = :id limit 1");
    $stmt->execute(['id'=>$id]);
    $result = $stmt->fetchObject();
    return $this->childrenObject($result);
}


    public function findAll(){
        $db= new DbConnection();
        $stmt = $db->prepare("select * from ".$this->table);
        $stmt->execute();
        $result = $stmt->fetchAll(\PDO::FETCH_OBJ);
        return $this->childrenArrayObject($result);
    }

    private function childrenObject($fields){
        $class2 = new \ReflectionClass($this);
        $object = $class2->newInstanceArgs([]);
        foreach ($fields as $field => $value){
            $object->$field = $value;
        }
        return $object;
    }



    private function childrenArrayObject($objects){
        $result_array = [];
        foreach ($objects as $object){
            array_push($result_array,$this->childrenObject($object));
        }
        return $result_array;
    }

}