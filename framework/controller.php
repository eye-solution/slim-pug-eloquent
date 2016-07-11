<?php
use Slim\Container as ContainerInterface;
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require_once('view.php');

class Controller {
  protected $ci;

  public function __construct(ContainerInterface $ci) {
      $this->ci = $ci;
      $this->view = new View(array(
      	'path' => '../views/'
      ));
  }

}

?>