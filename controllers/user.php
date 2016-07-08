<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
require('../framework/controller.php');

require('../models/user.php');

class UserController {
  protected $ci;

  public function __construct(ContainerInterface $ci) {
      $this->ci = $ci;
  }

  public function fetch(Request $request, Response $response) {
  	$users = User::all();
    echo $users->toJson();
    return $response;
  }

}

?>