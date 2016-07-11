<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;


class IndexController extends Controller {
  public function index(Request $request, Response $response) {
  	$this->view->render('index.jade', array(
  		'title' => 'Hello',
  		'content' => 'Le Minh Truyen'
   	));
    return $response;
  }
}

?>