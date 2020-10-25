<?php
require_once CORE.'/View.php';

class Controller {
    protected $view;
       public function __construct(){
        $this->view = new View();
    }
}