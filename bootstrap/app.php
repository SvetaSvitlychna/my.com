<?php



require_once realpath (__DIR__.'/../config/app.php');
 //var_dump(realpath(APP));
 

//var_dump(date_default_timezone_get());
//  date_default_timezone_set('Europe/Kiev');

//var_dump(ini_get('display_errors'));
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
//error_log('hello logs');


// echo getURI();

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

function render($template, $data=null){
    if ($data){
        extract($data);
    }
    $template .='.php';
    include_once VIEWS.'/layouts/app.php';
}

require_once CORE.'/Router.php';


// switch (getURI()) {
//     case '':
//     require_once CONTROLLERS.'/HomeController.php';
//     break;
//     case 'about':
//     require_once CONTROLLERS.'/AboutController.php';
//     break;
//     case 'contact':
//     require_once CONTROLLERS.'/ContactController.php';
//     break;
//     case 'config':
//     require_once CONTROLLERS.'/ConfigController.php';
//     break;
//     default:
//     require_once CONTROLLERS.'/ErrorController.php';
//         break;
//   }
//error_log('Hello logs');

// var_dump(error_reporting());

// var_dump(realpath(__DIR__.'/../bootstrap/app.php'));
// if ($_SERVER['REQUEST_URI']=='/'){
//    include "./home.php";
// } elseif ($_SERVER['REQUEST_URI']=='/about')
// { include "./about.php";}
// elseif ($_SERVER['REQUEST_URI']=='/contact')
// { include "./contact.php";}
// else { include "./404.php";}
