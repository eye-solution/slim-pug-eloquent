<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
require('../models/user.php');

class UserController extends Controller {

  public function fetch(Request $request, Response $response) {
  	$users = User::all();
    echo $users->toJson();
    return $response;
  }

}

?>