<?php
require_once realpath(__DIR__ . '/../config/app.php');

function config($mix)
{
    $url = CONFIG . "/" . $mix . ".json";
    $jsonFile = file_get_contents($url);
    return json_decode($jsonFile, true);
}

// для шаблона render site и admin для передачи ассоциативного масива

function render($template, $data = [], $layout = 'site'){
    if ($data) {
        // var_dump($data);
        extract($data);
    }
    $template .= '.php';
    include_once VIEWS . "/layouts/${layout}.php";
}

require_once CORE . '/App.php';
$app = new App();
$app->run();

// lesson 5-6

// функция для временной зоны

// function init()
// {
//     date_default_timezone_set('Europe/Kiev');
//     setlocale(LC_ALL, 'uk_UA');
// }

// функция отслеживания ошибок

// function setErrorLogging()
// {

//     if (APP_ENV == 'dev') {
//         ini_set('display_startup_errors', "1");
//         error_reporting(E_ALL | E_WARNING | E_PARSE | E_NOTICE | E_DEPRECATED);
//         ini_set('display_errors', "1");
//     } else {
//         error_reporting(E_ALL);
//         ini_set('display_errors', "0");
//     }

//     ini_set('log_errors', "1");
//     ini_set('error_log', LOGS . '/error.log');
// }

// init();
// setErrorLogging();
// error_log("Hello Error");

// require_once CORE . '/Router.php';


// lesson 1-4

// function getURI(){
//     if(isset($_SERVER ['REQUEST_URI']) && !empty($_SERVER ['REQUEST_URI'])){
//         return trim($_SERVER ['REQUEST_URI'], '/');
//     }
// }

// switch (getURI()) {
//     case '':
//         include_once CONTROLLERS.'/HomeController.php';
//         break;
//     case 'bookstore':
//         require CONTROLLERS.'/BookstoreController.php';
//         break;
//     case 'reviews':
//         require_once CONTROLLERS.'/ReviewsController.php';
//         break;
//     case 'contacts':
//         include CONTROLLERS.'/ContactsController.php';
//         break;
//     case 'test' :
//         require_once CONTROLLERS. '/TestController.php';       
//         break;
//     case 'config' :
//         require_once CONTROLLERS.'/ConfigController.php';
//         break;     
//     default:
//         require_once VIEWS. '/errors/index.php'; 
//         break;    
// }