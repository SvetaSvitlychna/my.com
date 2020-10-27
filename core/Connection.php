<?php

class Connection extends PDO
{

 private static $instance;
 private static $config = [];

    public function __construct($dsn, $dbname, $dbpass, $options){
     parent::__construct($dsn, $dbname, $dbpass, $options);
    }
    public static function connect(){
       self::$config = require_once DB_CONFIG_FILE;
       if(!self::$instance){
           $dsn = self::makeDsn(self::$config['db']);
           self::$instance = new Connection(
               $dsn,
               self::$config['user'],
               self::$config['password'],
               self::$config['options']
           );
        }return self::$instance;
    }
    
    public  function preparedStmt($query){
        return $this->prepare($query);
        
    }
    private static function makeDsn($config){
        $dsn = $config['driver'].':';
        unset($config['driver']);
        foreach($config as $key =>$value){
            $dsn .= $key.'='.$value.';';
        }
            return substr($dsn,0, -1);
    }
}