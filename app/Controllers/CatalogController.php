<?php
require_once CORE.'/Controller.php';
require_once MODELS.'/Category.php';
require_once MODELS.'/Product.php';

class CatalogController extends Controller
{
    public function index()
    {
      $title = 'Catalog Page';
      $categories = (new Category())->getCategories();
      $products=(new Product())->getProducts();
      $this->view->render('catalog/index', compact('title', 'categories', 'products'));
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
