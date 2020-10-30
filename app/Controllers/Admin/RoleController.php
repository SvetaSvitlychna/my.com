<?php
require_once CORE.'/Controller.php';
require_once CORE.'/Request.php';
require_once MODELS.'/Role.php';


class RoleController extends Controller{
   public function index (){
       $title ='Roles Managment';
       $roles = Role::all();
       $this->view-> render('admin/roles/index', compact ('title', 'roles'), 'admin');
   }  
   public function create (){
        $title ='Add New Role';
        $roles = Role::all();
        $this->view->render('admin/roles/create', compact ('title'), 'admin');
   }   

      public function store (){
      $request = new Request();
      $status = $request->status ? 1:0;
      (new Role())::save(["name"=>$request->name,]);     
          header ('Location: /admin/roles');
   }   
   public function show($vars){
      extract ($vars);
      $role = (new Role())->getById($id);
      var_dump($role);
     
   }
   public function edit($vars){
      extract ($vars);
      $role = (new Role())->getById($id);
      $title ='Edit Role';
      $this->view-> render('admin/roles/edit', 
      compact ('title', 'role'), 'admin');
   }
   
   public function patch($vars){
      extract ($vars);
      $request = new Request();
      // var_dump($request->getRequest());
      $status = $request->status ? 1:0;
      (new Role())->update($id,["name"=>$request->name]);
      header ('Location: /admin/roles');     
   }   
   public function delete($vars)
   {
      extract($vars);
      $title = 'Delete Role ';
      $role = (new Role())->getById($id);
      $this->view->render('admin/roles/delete', compact('title',
      'role'), 'admin');
   }
   public function destroy()
   {
      $request = new Request();
      if (isset($_POST['submit'])) {
         (new Role())::destroy($request->id);
         header('Location: /admin/roles');
      } else {
            header('Location: /admin/roles');
        }
   }

}

