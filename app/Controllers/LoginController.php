<?php
require_once CORE.'/Controller.php';
require_once CORE.'/Request.php';
require_once MODELS.'/User.php';



class LoginController extends Controller{

   private $costs =[
       'cost' => 12
   ];
   public function signInForm()
   {
      $this->view->render('login/index', ['title'=> 'Login'], 'app');
   } 
  
   public function create (){
        $title ='Add New User';
        $roles = Role::all();
        $this->view->render('admin/users/create', compact 
        ('title', 'roles'), 'admin');   
   }   
   
   public function store (){
      $request = new Request();
      $status = $request->status ? 1:0;
      $hash = password_hash($request->password,
       PASSWORD_BCRYPT, $this->costs);
      (new User())::save([     
      "first_name"=>$request->first_name,  
      "last_name"=>$request->last_name,
      "email"=>$request->email,
      "password"=>$hash,
      "email"=>$request->email,
      "role_id"=>$request->role_id,"status"=>$status]);
       header ('Location: /admin/users');
   }   
   public function show($vars){
      extract ($vars);
      $user = (new User())->getById($id);
      var_dump($user);
      
        
   }
   public function edit($vars){
      extract ($vars);
      $user = (new User())->getById($id);
      $roles = Role::all();
      $title ='Edit User';
      $this->view-> render('admin/users/edit', 
      compact ('title', 'user', 'roles'), 'admin');
   }
   
   public function patch($vars){
      extract ($vars);
      $request = new Request();
      // var_dump($request->getRequest());
      $status = $request->status ? 1:0;
      (new User())->update($id,["first_name"=>$request->first_name,  
      "last_name"=>$request->last_name,
      "email"=>$request->email,
      "password"=>$hash,
      "email"=>$request->email,
      "role_id"=>$request->role_id,"status"=>$status]);
      header ('Location: /admin/users');     
   }   
   public function delete($vars)
   {
      extract($vars);
      $title = 'Delete User ';
      $user = (new User())->getById($id);
      $this->view->render('admin/users/delete', compact('title',
      'user'), 'admin');
   }
   public function destroy(){
      $request = new Request();
      if (isset($_POST['submit'])) {
         (new User())::destroy($request->id);
         header('Location: /admin/users');
      } else {
            header('Location: /admin/users');
        }
   }

}

