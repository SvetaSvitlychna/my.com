<?php

require_once realpath (__DIR__.'/../config/app.php');
 
function setLogging(){
    if (APP_ENV =='local'){
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL|E_WARNING|E_NOTICE|E_DEPRECATED);
    ini_set('display_errors',1);}
    else{error_reporting(E_ALL);
    ini_set('display_errors',0);
  }
    ini_set('log_errors',1);
     ini_set('error_log',LOGS.'/error_log.log');
   }

function initApp(){
    date_default_timezone_set('Europe/Kiev');
    setlocale(LC_ALL, 'uk_UA');
  }
initApp();
setLogging();



function conf ($mix){
    $url = CONFIG."/".$mix.".json";
    try{
        $jf = file_get_contents($url);
        if ($jf === false){
            throw new Exeption('Could not open json file');
        }
        return json_decode($jf, true);
    } catch (Exeption $ex){
        var_dump($ex);
        return false;
    }
}


require_once CORE.'/Request.php';
require_once CORE.'/Router.php';
require_once CORE.'/Helper.php';
$router = Router::load(ROUTES);
$router->run(Request::uri(), Request::method());


