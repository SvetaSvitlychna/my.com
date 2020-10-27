<?php
// ShopController.php
require_once CORE.'/Controller.php';
require_once MODELS.'/Category.php';

class CatalogController extends Controller
{
    public function index()
    {
      $title = 'Catalog Page';
      $categories = (new Category())->getCategories();
      $this->view->render('catalog/index', compact('title', 'categories'));
    }

}
