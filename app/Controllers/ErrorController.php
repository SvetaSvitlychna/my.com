<?php

require_once CORE.'/Controller.php';

class ErrorController extends Controller {
    public function notFound (){
        $this->view->render('errors/index', ['title'=> '404 Not found!']);
    }   
}