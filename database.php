<?php
require 'vendor/autoload.php';
require 'config.php';  
 
use Illuminate\Database\Capsule\Manager as Capsule;  
 
$capsule = new Capsule; 
$capsule->addConnection($config['db']);
$capsule->bootEloquent();