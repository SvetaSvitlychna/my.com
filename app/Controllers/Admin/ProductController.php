<?php
require_once CORE.'/Controller.php';
require_once CORE.'/Request.php';
require_once MODELS.'/Category.php';
require_once MODELS.'/Product.php';
require_once MODELS.'/Brand.php';
require_once MODELS.'/Picture.php';

class ProductController extends Controller{
   public function index (){
       $title ='Products Managment';
       $products = Product::all();
       $this->view-> render('admin/products/index', 
       compact ('title', 'products'), 'admin');
   }  
   public function create (){
        $title ='Add New Product';
        $categories = Category::all();
       $brands = Brand::all();
        $this->view->render('admin/products/create', compact ('title', 
        'categories','brands'), 'admin');
   }   

   private function check_file_array($file){
        return isset($file['error']) && !empty($file["name"])
        && !empty($file["type"])
        && !empty($file["tmp_name"])
        && !empty($file["size"]);
   }
   public function store (){
      $request = new Request();
      $status = $request->status ? 1:0;
      (new Product())::save(["name"=>$request->name,
      "status"=>$status,"category_id"=>$request->category_id,
      "price"=>$request->price, "description"=>$request->description,
      "brand_id"=>$request->brand_id]);
         
      if(!empty($_FILES['images'])){
         $files = $_FILES['images'];
         $uploadDir = $_SERVER['DOCUMENT_ROOT'].'/assets/images/products';
         for ($i=0; $i<count($files["name"]); $i++){
            $file["name"] =$files["name"][$i];
            $file["tmp_name"] =$files["tmp_name"][$i];
            $file["size"] =$files["size"][$i];
            $file["type"] =$files["type"][$i];
            $file["error"] =$files["error"][$i];
               
            if($this->check_file_array($file)){
               if (is_uploaded_file($file["tmp_name"])){
                  $filename = sha1(mt_rand(1,9999).$file["name"].uniqid()).time();
                  $uploaded =$uploadDir.'/'.$filename;
                  move_uploaded_file($file['tmp_name'],$uploaded);
                  (new Picture())::save(["filename"=>$filename, "resource_id"=>(int)Product::lastId(),
                  "resource"=>Product::getResource()]);
               } else {
                     throw new Exception("Upload: Can\'t be upload file");
               }
            }else {
                  throw new Exception("Upload: Can\'t be upload file");
            }
         }
      }
          header ('Location: /admin/products');
   }   
   public function show($vars){
      extract ($vars);
      $product = (new Product())->getById($id);
      var_dump($product);
     
   }
   public function edit($vars){
      extract ($vars);
      $product = (new Product())->getById($id);
      $categories = Category::all();
      $brands = Brand::all();
      $title ='Edit Product';
      $this->view-> render('admin/products/edit', 
      compact ('title', 'product', 'categories', 'brands'), 'admin');
   }
   
   public function patch($vars){
      extract ($vars);
      $request = new Request();
      // var_dump($request->getRequest());
      $status = $request->status ? 1:0;
      (new Product())->update($id,["name"=>$request->name, 
      "status"=>$status,
      "category_id"=>$request->category_id,
      "price"=>$request->price,
      "description"=>$request->description, 
      "brand_id"=>$request->brand_id ]);
      header ('Location: /admin/products');     
   }   
   public function delete($vars)
   {
      extract($vars);
      $title = 'Delete Product ';
      $product = (new Product())->getById($id);
      $this->view->render('admin/products/delete', compact('title',
      'product'), 'admin');
   }
   public function destroy()
   {
      $request = new Request();
      if (isset($_POST['submit'])) {
         (new Product())::destroy($request->id);
         header('Location: /admin/products');
      } else {
            header('Location: /admin/products');
        }
   }

}

