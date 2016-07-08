<?php
use Slim\Container as ContainerInterface;
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

date_default_timezone_set('Asia/Ho_Chi_Minh');

require_once '../vendor/autoload.php';
require_once '../framework/database.php';


$app = new \Slim\App();
$container = $app->getContainer();

$container['logger'] = function($c) {
    $logger = new \Monolog\Logger('my_logger');
    $file_handler = new \Monolog\Handler\StreamHandler("../logs/app.log");
    $logger->pushHandler($file_handler);
    return $logger;
};

$files = glob('../routes/*.php');
foreach ($files as $file) {
    require_once($file);  
} 

$app->run();
 