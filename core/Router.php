<?php
function getURI(){
    if (isset($_SERVER['REQUEST_URI']) and !empty($_SERVER['REQUEST_URI'])){
        return trim ($_SERVER['REQUEST_URI'], '/');
    }
  }
  
  $result = null;
  $filename = CONFIG.'/routes.php';

  if (file_exists($filename)){
      $routes = include_once $filename;
  }
  foreach($routes as $route => $path){
      if ($route == getURI()){
          $controller = $path;
          $controllerFile = CONTROLLERS.'/'.$controller.'.php';
          if (file_exists($controllerFile)){
            include_once $controllerFile;
            $result = true;
          break;
        }
      }
  }

  if (!$result){
      include_once CONTROLLERS.'/ErrorController.php';
  }
