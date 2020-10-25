<?php
  
  class Router
{
    protected $routes = ROUTES;

    public function run($uri){
      if (array_key_exists($uri, $this->routes)){
        return $this->init(...$this->getController($this->routes[$uri]));
      }else {
        foreach($this->routes as $key => $value){
          $pattern = "@^".preg_replace("/{([a-zA-Z]+)}/", "(?<$1>[0-9]+)",
           $key)."$@";
          preg_match($pattern, $uri, $matches);
          array_shift($matches);
          if ($matches){
            $arr= $this->getController($value);
            $arr[] = $matches;
            return $this->init(...$arr);
          }
        }
        include_once CONTROLLERS.'/ErrorController.php';
        (new ErrorController())->notFound();
      }
    }

   private function getController($path){
      $segments =explode('\\', $path);
      list($controller, $action) = explode('@', array_pop($segments));
      $controllerPath = DIRECTORY_SEPARATOR;
      foreach($segments as $segment){
        $controllerPath.=$segment.DIRECTORY_SEPARATOR;
      }
      return[$controllerPath, $controller, $action];
      // var_dump($controller, $action);
      // var_dump($segments);
    }
   private function init($controllerPath, $controller, $action, $vars=[]){
      $controllerPath = CONTROLLERS.$controllerPath.$controller.'.php';
      try{
        include_once $controllerPath; 
        $controller = new $controller();
      }catch(Exception $e){
        error_log($e->getMessage());
      }
     return  $controller->$action($vars);
    }
  }
  