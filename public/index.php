<?php
session_start();

error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once __DIR__ . '/../vendor/autoload.php';

use PTF\FrontController;

$frontController = new FrontController;
$frontController->run();

/*use PTF\Producto;

$producto = new Producto('Producto 1');

var_dump($producto);*/