<?php

namespace Project\DB;

class Sql {

    public $conn;

    public function __construct()
    {

        $this->conn = new \PDO("mysql:dbname=imeo;host=127.0.0.1", "Eduardo", "lMqmox9p");

    }

    public function select($rawQuery, $params = array())
    {

        $stmt = $this->conn->prepare($rawQuery);

        foreach($params as $key => $value) {

            $stmt->bindValue($key, $value);

        }

        $stmt->execute();

        return $results = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        
    }
    
    public function selectOne($rawQuery, $params = array())
    {
        
        $stmt = $this->conn->prepare($rawQuery);
        
        foreach($params as $key => $value) {
            
            $stmt->bindValue($key, $value);
            
        }
        
        $stmt->execute();
        
        return $results = $stmt->fetch(\PDO::FETCH_ASSOC);
        
    }
    
    public function selectPair($rawQuery, $params = array())
    {
        
        $stmt = $this->conn->prepare($rawQuery);
        
        foreach($params as $key => $value) {
            
            $stmt->bindValue($key, $value);
            
        }
        
        $stmt->execute();
        
        return $results = $stmt->fetchAll(\PDO::FETCH_KEY_PAIR);
        
    }
    

    public function query($rawQuery, $params = array())
    {

        $stmt = $this->conn->prepare($rawQuery);

        foreach($params as $key => $value) {

            $stmt->bindValue($key, $value);

        }

        if ($stmt->execute()) {
            return true;
        }
               
    }


}


?>