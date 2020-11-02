<?php
require_once CORE.'/Controller.php';
require_once CORE.'/Request.php';
require_once MODELS.'/Category.php';
require_once MODELS.'/Picture.php';

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
   private function check_file_array($file){
      return isset($file['error']) 
      && !empty($file["name"])
      && !empty($file["type"])
      && !empty($file["tmp_name"])
      && !empty($file["size"]);
   }
   public function store (){
      $request = new Request();
        // var_dump($request->getRequest());
      $status = $request->status ? 1:0;

      (new Category())->save(["name"=>$request->name,"status"=>$status]);

      if(!empty($_FILES['image'])) {
         $file = $_FILES['image'];
         $uploadDir = $_SERVER['DOCUMENT_ROOT'].
         '/assets/images/products/categories';
            if($this->check_file_array($file)){
               if (is_uploaded_file($file["tmp_name"])){
                  $filename = sha1(mt_rand(1,9999).$file["name"].uniqid()).time();
                  $uploaded =$uploadDir .'/'. $filename;
                  move_uploaded_file($file["tmp_name"],$uploaded);
                  (new Picture())::save(["filename"=>$filename, 
                  "resource_id"=>(int)Category::lastId(),
                  "resource"=>Category::getResource()]);
               } else {
                  throw new Exception("Upload: Can\'t be upload file");
               }
            }else {
               throw new Exception("Upload: Can\'t be upload file");
            }
      }
            header ('Location: /admin/categories');
   }   
   public function show($vars){
      extract ($vars);
      $title ='Show Category';
      $category = (new Category())->getById($id);
      $picture = (new Picture())->getById($id);
      $this->view->render('admin/categories/show', compact ('title', 'category', 'picture'), 'admin');
   }
   public function edit($vars){
      extract ($vars);

      $category = (new Category())->getById($id);
      $title ='Edit Category';
      $this->view-> render('admin/categories/edit', 
      compact ('title', 'category'), 'admin');
   }
   public function patch($vars){
      extract ($vars);
      $request = new Request();
      // var_dump($request->getRequest());
      $status = $request->status ? 1:0;
      (new Category())->update($id,["name"=>$request->name, 
      "status"=>$status]);
      header ('Location: /admin/categories');     
   }   
   // public function delete($vars){
   //    extract ($vars);
    
   //    if (isset($_POST['submit'])){
   //    (new Category())->destroy($id);
   //    header ('Location: /admin/categories');
   //    }elseif(isset($_POST['reset'])){
   //       header ('Location: /admin/categories');
   //    }
   //    $title ='Delete Category';
   //    $category = (new Category())->getById($id);
   //    $this->view-> render('admin/categories/delete', compact ('title', 
   //    'category'), 'admin');
   // }

   public function delete($vars)
   {
       extract($vars);
       $title = 'Delete Category ';
       $category = (new Category())->getById($id);
       $this->view->render('admin/categories/delete', compact
       ('title', 'category'), 'admin');
   }
   public function destroy($vars)
   {
       extract($vars);
       $request = new Request();
       if (isset($_POST['submit'])) {
           Category::destroy($request->id);
           header('Location: /admin/categories');
       } else {
           header('Location: /admin/categories');
       }
   }    
}
