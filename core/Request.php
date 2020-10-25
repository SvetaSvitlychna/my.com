<?php

class Request
{
    private $request;

    public function __construct(){
        // $this->request = $_REQUEST;
        $this->request =$this-> cleanInput($_REQUEST);
    }

    public function __get($name){
        // if (isset($this ->request[$name])){
        //     return $this->request['name'];
        // }
        return array_key_exists($name, $this->request)?$this->request[$name]:null;
    }
    private function cleanInput($data){
        if (is_array($data)){
            $cleaned = [];
            foreach ($data as $key => $value){
                $cleaned[$key] = $this->cleanInput($value);
            }
            return $cleaned;
        }
        return trim(htmlspecialchars($data, ENT_QUOTES));
    }
    public function getRequest(){
        return $this ->request;
    }

    public static function uri(){
        return isset ($_SERVER['REQUEST_URI']) ? trim 
        ($_SERVER['REQUEST_URI'], '/') : null;
      }
    
}


