<?php


require_once CORE.'/Controller.php';
require_once MODELS.'/Category.php';
require_once MODELS.'/Product.php';

class HomeController extends Controller{
    public function index (){
       
        $this ->view->render('home/index', ['title'=> 'Home page']);
    }

    public function getCategories(){
        $categories = Category::getCategories();
        echo json_encode($categories);
    }
    public static function getProducts(){
        $products= Product::getProducts();
        echo json_encode($products);
    }
}


