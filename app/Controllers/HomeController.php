<?php


require_once CORE.'/Controller.php';

class HomeController extends Controller{
    public function index (){
       
        $this ->view->render('home/index', ['title'=> 'Home page']);
    }
    
}


