<?php
use Slim\Container as ContainerInterface;
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app->get('/', function(Request $req, Response $res) {
	// $output = $this->view->render('index.jade', array(
 //    	'title' => 'Hello World'
	// ));
	$this->view->render('index.jade', array(
    	'title' => 'Hello World'
	));
	

	return $res;
});
