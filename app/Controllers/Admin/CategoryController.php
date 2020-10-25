<?php
require_once CORE.'/Controller.php';
require_once CORE.'/Request.php';
require_once MODELS.'/Category.php';


class CategoryController extends Controller
{
    public function index (){
       $title ='Categories Managment';
       $categories = (new Category())->all();
       $this->view-> render('admin/categories/index', compact ('title', 'categories'), 'admin');
    }  
    public function create (){
        $title ='Add New Category';
        $this->view-> render('admin/categories/create', compact ('title'), 'admin');
     }   
    public function store (){
        $request = new Request();
        // var_dump($request->getRequest());
        $status = $request->status ? 1:0;

        (new Category())->save(["name"=>$request->name, 
        "status"=>$status]);
            header ('Location: /admin/categories');
      
   }   
    public function show($vars){
        extract ($vars);
        $category = (new Category())->getById($id);
        var_dump($category);
   }
    public function edit($vars){
      extract ($vars);

      $category = (new Category())->getById($id);
      $title ='Edit Category';
      $this->view-> render('admin/categories/edit', 
      compact ('title', 'category'), 'admin');
   }
   public function patch(){
      $request = new Request();
      // var_dump($request->getRequest());
      $status = $request->status ? 1:0;
      (new Category())->update($request->id,["name"=>$request->name, 
      "status"=>$status]);
      header ('Location: /admin/categories');     
   }   
   public function delete($vars){
      extract ($vars);
    
      if (isset($_POST['submit'])){
      (new Category())->destroy($id);
      header ('Location: /admin/categories');
      }elseif(isset($_POST['reset'])){
         header ('Location: /admin/categories');
      }
      $title ='Delete Category';
      $category = (new Category())->getById($id);
      $this->view-> render('admin/categories/delete', compact ('title', 
      'category'), 'admin');
   
   }

}
