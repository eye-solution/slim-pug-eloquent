<?php
use Slim\Container as ContainerInterface;
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require('../controllers/user.php');
$app->get('/user', '\UserController:fetch');

$app->get('/user/test', function(Request $req, Response $res) {
	// $app->test();
	echo 'done';
	return $res;
});
