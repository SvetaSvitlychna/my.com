<?php
require_once CORE.'/Controller.php';
require_once CORE.'/Request.php';
require_once MODELS.'/Brand.php';

class BrandController extends Controller
{
    public function index (){
       $title ='Brands Managment';
       $brands = (new Brand())->all();
       $this->view-> render('admin/brands/index', compact ('title', 'brands'), 'admin');
    }  
    public function create (){
        $title ='Add New Brand';
        $this->view-> render('admin/brands/create', compact ('title'), 
        'admin');
     }   
    public function store (){
        $request = new Request();
        // var_dump($request->getRequest());
        $status = $request->status ? 1:0;

        (new Brand())->save(["name"=>$request->name, 
        "status"=>$status, "description"=>$request->description]);
            header ('Location: /admin/brands');
      
   }   
    public function show($vars){
        extract ($vars);
        $brand = (new Brand())->getById($id);
        var_dump($brand);
   }
    public function edit($vars){
      extract ($vars);

      $brand = (new Brand())->getById($id);
      $title ='Edit Brand';
      $this->view-> render('admin/brands/edit', 
      compact ('title', 'brand'), 'admin');
   }
   public function patch($vars){
      extract ($vars);
      $request = new Request();
      // var_dump($request->getRequest());
      $status = $request->status ? 1:0;
      (new Brand())->update($id,["name"=>$request->name, 
      "status"=>$status, "description"=>$request->description]);
      header ('Location: /admin/brands');     
   }   
   // public function delete($vars){
   //    extract ($vars);
    
   //    if (isset($_POST['submit'])){
   //    (new Brand())->destroy($id);
   //    header ('Location: /admin/brands');
   //    }elseif(isset($_POST['reset'])){
   //       header ('Location: /admin/brands');
   //    }
   //    $title ='Delete Brand';
   //    $brand = (new Brand())->getById($id);
   //    $this->view-> render('admin/brands/delete', compact ('title', 
   //    'brand'), 'admin');
   
   // }
    public function delete($vars)
   {
       extract($vars);
       $title = 'Delete Brand ';
       $brand = (new Brand())->getById($id);
       $this->view->render('admin/brands/delete', compact
       ('title', 'brand'), 'admin');
   }
   public function destroy($vars)
   {
       extract($vars);
       $request = new Request();
       if (isset($_POST['submit'])) {
           Brand::destroy($request->id);
           header('Location: /admin/brands');
       } else {
           header('Location: /admin/brands');
       }
   }    

}
