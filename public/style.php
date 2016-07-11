<?php
require_once "../vendor/leafo/scssphp/scss.inc.php";

use Leafo\ScssPhp\Server;

$directory = "../sass/";

Server::serveFrom($directory);

// $scss = new scssc();
// $scss->setFormatter("scss_formatter_compressed");

// $server = new scss_server("../sass/", null, $scss);
// $server->serve();
